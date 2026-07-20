<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
    // Menampilkan halaman upload
    public function showUploadForm()
    {
        return view('upload');
    }

    // Upload file
    public function storeFile(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $file = $request->file('file');

        $filename = time() . '_' . $file->getClientOriginalName();

        $file->storeAs('public/uploads', $filename);

        return redirect()->back()->with('success', 'File berhasil diupload.');
    }

    // Menampilkan daftar file
    public function listFiles()
    {
        $files = Storage::files('public/uploads');

        return view('file_list', compact('files'));
    }

    public function deleteFile($filename)
{
    Storage::delete('public/uploads/' . $filename);

    return redirect()->back()->with('success', 'File berhasil dihapus.');
}
}