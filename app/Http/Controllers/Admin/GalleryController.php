<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Stichoza\GoogleTranslate\GoogleTranslate;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'nullable|date'
        ]);

        $imagePath = $request->file('image')->store('galleries', 'public');

        $title_ja = null;
        if ($request->title) {
            try {
                $tr = new GoogleTranslate('ja', 'id');
                $title_ja = $tr->translate($request->title);
            } catch (\Exception $e) {
                $title_ja = $request->title;
            }
        }

        Gallery::create([
            'title' => $request->title,
            'title_ja' => $title_ja,
            'image_path' => $imagePath,
            'date' => $request->date,
        ]);

        return redirect()->route('admin.gallery.index')->with('success', 'Foto berhasil ditambahkan.');
    }

    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'nullable|date'
        ]);

        $title_ja = $gallery->title_ja;
        if ($request->title && $request->title !== $gallery->title) {
            try {
                $tr = new GoogleTranslate('ja', 'id');
                $title_ja = $tr->translate($request->title);
            } catch (\Exception $e) {
                $title_ja = $request->title;
            }
        }

        $data = [
            'title' => $request->title,
            'title_ja' => $title_ja,
            'date' => $request->date,
        ];

        if ($request->hasFile('image')) {
            // Delete old image
            if ($gallery->image_path) {
                Storage::disk('public')->delete($gallery->image_path);
            }
            $imagePath = $request->file('image')->store('galleries', 'public');
            $data['image_path'] = $imagePath;
        }

        $gallery->update($data);

        return redirect()->route('admin.gallery.index')->with('success', 'Foto berhasil diperbarui.');
    }

    public function destroy(Gallery $gallery)
    {
        if ($gallery->image_path) {
            Storage::disk('public')->delete($gallery->image_path);
        }
        $gallery->delete();
        return redirect()->route('admin.gallery.index')->with('success', 'Foto berhasil dihapus.');
    }
}
