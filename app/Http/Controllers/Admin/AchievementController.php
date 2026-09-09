<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Stichoza\GoogleTranslate\GoogleTranslate;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::latest()->get();
        return view('admin.achievements.index', compact('achievements'));
    }

    public function create()
    {
        return view('admin.achievements.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'year' => 'nullable',
            'image' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();
        
        try {
            $tr = new GoogleTranslate('ja', 'id');
            $data['title_ja'] = $tr->translate($request->title);
            if ($request->description) {
                $data['description_ja'] = $tr->translate($request->description);
            }
        } catch (\Exception $e) {
            $data['title_ja'] = $request->title;
            $data['description_ja'] = $request->description;
        }

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('achievements', 'public');
        }

        Achievement::create($data);

        return redirect()->route('admin.achievements.index')->with('success', 'Achievement berhasil ditambahkan.');
    }

    public function edit(Achievement $achievement)
    {
        return view('admin.achievements.edit', compact('achievement'));
    }

    public function update(Request $request, Achievement $achievement)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'year' => 'nullable',
            'image' => 'nullable|image|max:2048'
        ]);

        $data = $request->all();
        
        try {
            $tr = new GoogleTranslate('ja', 'id');
            if ($request->title !== $achievement->title) {
                $data['title_ja'] = $tr->translate($request->title);
            }
            if ($request->description !== $achievement->description) {
                $data['description_ja'] = $request->description ? $tr->translate($request->description) : null;
            }
        } catch (\Exception $e) {
            // fallback
            $data['title_ja'] = $request->title;
            $data['description_ja'] = $request->description;
        }

        if ($request->hasFile('image')) {
            if ($achievement->image_path) {
                Storage::disk('public')->delete($achievement->image_path);
            }
            $data['image_path'] = $request->file('image')->store('achievements', 'public');
        }

        $achievement->update($data);

        return redirect()->route('admin.achievements.index')->with('success', 'Achievement berhasil diperbarui.');
    }

    public function destroy(Achievement $achievement)
    {
        if ($achievement->image_path) {
            Storage::disk('public')->delete($achievement->image_path);
        }
        $achievement->delete();
        return redirect()->route('admin.achievements.index')->with('success', 'Achievement berhasil dihapus.');
    }
}
