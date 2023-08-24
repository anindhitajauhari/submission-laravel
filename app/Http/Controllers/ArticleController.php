<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Storage;


class ArticleController extends Controller
{
    public function index()
    {
        return view('posts', [
        "title" => "All Posts",
        "posts" => Article::latest()->paginate(7) // get the latest post
    ]);
    }

    public function show(Article $post)
    {
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }

    public function showmine(Article $post)
    {
        return view('mypost', [
            "title" => "mypost",
            "posts" => Article::where('user_id', auth()->user()->id)->get()
        ]);
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'articleTitle' => 'required|max:100',
            'slug' => 'required|max:100|unique:articles',
            'category_id' => 'required',
            'tags' => 'required|array', // Make sure tags are submitted as an array
            'articlePict' => 'image|file',
            'articleBody' => 'required'
        ]);

        if($request->file('articlePict')){
            $validatedData['articlePict'] = $request->file('articlePict')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit($request->articleBody, 200, '...');

        $article = Article::create($validatedData);
        $article->tags()->attach($validatedData['tags']);

        return redirect('/mypost')->with('success','Upload New Success!!');
    }

    public function edit(Article $post)
    {   
        return view('edit', [
            "posts" => $post,
            'categories' => Category::all(),
            'tags' => Tag::all(),
            'title' => 'edit'
        ]);
    }
    public function update(Request $request, Article $post)
    {
        $validatedData = $request->validate([
            'articleTitle' => 'required|max:100',
            'category_id' => 'required',
            'tags' => 'required|array', // Make sure tags are submitted as an array
            'articlePict' => 'image|file',
            'articleBody' => 'required'
        ]);

        if($request->file('articlePict')){
            $validatedData['articlePict'] = $request->file('articlePict')->store('post-images');
        }

        $validatedData['user_id'] = auth()->user()->id;
        $validatedData['excerpt'] = Str::limit($request->articleBody, 200, '...');
      
        $article = Article::find($post->id); // Fetch the article instance
        $article->update($validatedData); // Update the article details

        $article->tags()->sync($validatedData['tags']); // Sync the tags NOT USE THE ATTACH ONES

        // NOTE : By separating the article update and tag synchronization, you avoid trying to update the nonexistent tags column in the articles table and correctly update the tags' relationship using the pivot table.

        
        return redirect('/mypost')->with('success','Edit Success!!');
    }


   public function destroy($id)
   {
    
        // dd($post->id);
        
        Article::destroy($id);  // i tried with post->id bt it doesnt work idk, so the argument is $id
        // $post = Article::findOrFail($post->id);
        // $post->delete();
        return redirect('/mypost')->with('success','Post has been deleted');
   }


}
