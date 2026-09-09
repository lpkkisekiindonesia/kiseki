<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Stichoza\GoogleTranslate\GoogleTranslate;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();
        return view('admin.articles.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->only(['title', 'content']);
        $data['slug'] = Str::slug($request->title) . '-' . time();

        try {
            $tr = new GoogleTranslate('ja', 'id');
            $data['title_ja'] = $tr->translate($request->title);
            $data['content_ja'] = $tr->translate($request->content);
        } catch (\Exception $e) {
            // Fallback if translation fails
            $data['title_ja'] = $request->title;
            $data['content_ja'] = $request->content;
        }

        if ($request->hasFile('image')) {
            $data['image_path'] = $request->file('image')->store('articles', 'public');
        }

        Article::create($data);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function edit(Article $article)
    {
        return view('admin.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $data = $request->only(['title', 'content']);
        
        if ($request->title !== $article->title) {
            $data['slug'] = Str::slug($request->title) . '-' . time();
        }

        try {
            $tr = new GoogleTranslate('ja', 'id');
            $data['title_ja'] = $tr->translate($request->title);
            $data['content_ja'] = $tr->translate($request->content);
        } catch (\Exception $e) {
            // Fallback if translation fails
            $data['title_ja'] = $request->title;
            $data['content_ja'] = $request->content;
        }

        if ($request->hasFile('image')) {
            if ($article->image_path) {
                Storage::disk('public')->delete($article->image_path);
            }
            $data['image_path'] = $request->file('image')->store('articles', 'public');
        }

        $article->update($data);

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Article $article)
    {
        if ($article->image_path) {
            Storage::disk('public')->delete($article->image_path);
        }
        $article->delete();

        return redirect()->route('admin.articles.index')->with('success', 'Artikel berhasil dihapus.');
    }
}
