<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ArsipController extends Controller
{
    public function index(Request $request)
    {
        $query = Arsip::orderBy('waktu_pengarsipan', 'desc');
        
        if ($request->has('search') && $request->search) {
            $query->where('judul', 'like', '%' . $request->search . '%');
        }
        
        $arsipList = $query->get();
        
        return view('arsip.index', compact('arsipList'));
    }

    public function create()
    {
        $categories = Category::orderBy('nama_kategori')->get();
        return view('arsip.create', compact('categories'));
    }

    public function store(Request $request)
    {
        // Ambil semua nama kategori yang valid dari database
        $validCategories = Category::pluck('nama_kategori')->toArray();
        
        $request->validate([
            'nomor_surat' => 'required|unique:arsip,nomor_surat',
            'kategori' => 'required|in:' . implode(',', $validCategories),
            'judul' => 'required',
            'file' => 'required|mimes:pdf|max:10240' // 10MB max
        ]);

        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $filePath = $file->storeAs('arsip', $fileName, 'public');

        Arsip::create([
            'nomor_surat' => $request->nomor_surat,
            'kategori' => $request->kategori,
            'judul' => $request->judul,
            'file_path' => $filePath,
            'waktu_pengarsipan' => Carbon::now()
        ]);

        return redirect()->route('arsip.index')->with('success', 'Data berhasil disimpan');
    }

    public function show($id)
    {
        $arsip = Arsip::findOrFail($id);
        return view('arsip.show', compact('arsip'));
    }

    public function edit($id)
    {
        $arsip = Arsip::findOrFail($id);
        $categories = Category::orderBy('nama_kategori')->get();
        return view('arsip.edit', compact('arsip', 'categories'));
    }

    public function update(Request $request, $id)
    {
        $arsip = Arsip::findOrFail($id);
        
        // Ambil semua nama kategori yang valid dari database
        $validCategories = Category::pluck('nama_kategori')->toArray();
        
        $request->validate([
            'nomor_surat' => 'required|unique:arsip,nomor_surat,' . $id,
            'kategori' => 'required|in:' . implode(',', $validCategories),
            'judul' => 'required',
            'file' => 'nullable|mimes:pdf|max:10240' // File optional untuk update
        ]);

        $updateData = [
            'nomor_surat' => $request->nomor_surat,
            'kategori' => $request->kategori,
            'judul' => $request->judul,
        ];

        // Jika ada file baru diupload
        if ($request->hasFile('file')) {
            // Hapus file lama
            if (Storage::disk('public')->exists($arsip->file_path)) {
                Storage::disk('public')->delete($arsip->file_path);
            }
            
            // Upload file baru
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('arsip', $fileName, 'public');
            $updateData['file_path'] = $filePath;
        }

        $arsip->update($updateData);

        return redirect()->route('arsip.index')->with('success', 'Data arsip berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $arsip = Arsip::findOrFail($id);
        
        // Hapus file dari storage
        if (Storage::disk('public')->exists($arsip->file_path)) {
            Storage::disk('public')->delete($arsip->file_path);
        }
        
        $arsip->delete();
        
        return redirect()->route('arsip.index')->with('success', 'Surat berhasil dihapus!');
    }

    public function download($id)
    {
        $arsip = Arsip::findOrFail($id);
        $filePath = storage_path('app/public/' . $arsip->file_path);
        
        if (file_exists($filePath)) {
            return response()->download($filePath, $arsip->nomor_surat . '.pdf');
        }
        
        return redirect()->back()->with('error', 'File tidak ditemukan!');
    }

    public function about()
    {
        return view('arsip.about');
    }
}
