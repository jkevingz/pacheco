<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Create slug for the article.
     *
     * @param string $title
     * @param int $id
     *
     * @return string
     */
    protected function getSlug(string $title, int $id = 0): string
    {
        $slug = $tmp = Str::slug($title);
        $counter = 1;
        while (Article::where('slug', $slug)->where('id', '<>', $id)->exists()) {
            $slug = $tmp . '-' . $counter;
            $counter++;
        }

        return $slug;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.articles.index')
            ->with(['articles' => Article::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'string|required',
            'body' => 'string|required',
            'image' => 'nullable|image',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->image->store('articles', 'public');
        }

        Article::create($validated + ['slug' => $this->getSlug($validated['title'])]);

        return redirect(route('article.index'))
            ->with('status', __('Article stored successfully.'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('admin.articles.edit')
            ->with(['article' => $article]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title' => 'string|required',
            'body' => 'string|required',
            'image' => 'nullable|image',
        ]);

        if ($article->image) {
            if ($request->hasFile('image') && $request->input('image_flag')) {
                $validated['image'] = $request->image->store('articles', 'public');
            } else if (!$request->input('image_flag')) {
                $validated['image'] = $article->image;
            }
        } else if ($request->hasFile('image')) {
            $validated['image'] = $request->image->store('articles', 'public');
        }

        $article->update($validated + ['slug' => $this->getSlug($validated['title'], $article->id)]);

        return redirect(route('article.index'))
            ->with('status', __('Article updated successfully.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect(route('article.index'))
            ->with('status', __('Article deleted successfully'));
    }
}
