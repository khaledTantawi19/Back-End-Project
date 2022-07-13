<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blog = Blog::all();
        return view('admin.Blog.index', ['blog' => $blog]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user()->id;
        return view('admin.Blog.create', ['user_id' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'required',
            'image' => 'nullable|image',
            'user_id' => 'required|integer',
            'price' => 'required|integer',
        ]);
        $data = $request->all();
        if (isset($request->image)) {
            $image = $request->file('image')->store('blogs');
            $data['image'] = $image;
        }
        $blogs = Blog::create($data);
        return (redirect(route('blog.index',))->with('success', 'Blog Inserted With Id : ' . $blogs->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findOrfail($id)->load('user');
        return view('admin.Blog.show', ['blog_show' => $blog]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user()->id;
        $blog = Blog::findOrfail($id);
        return view('admin.Blog.edit', ['blog_edits' => $blog], ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $blog_update = Blog::findOrfail($id);
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'required',
            'image' => 'nullable|image',
            'user_id' => 'required|integer',
            'price' => 'required|integer',
        ]);
        $data = $request->all();
        if (isset($request->image)) {
            Storage::delete($blog_update->image);
            $image = $request->file('image')->store('blogs');
            $data['image'] = $image;
        }
        $blog_update->update($data);

        return (redirect(route('blog.index'))->with('success', 'Blog Updated With Id : ' . $blog_update->id));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delet = Blog::findOrfail($id);
        $delet->destroy($id);
        return (redirect(route('blog.index'))->with('success', 'Blog With ID : ' . $delet->id . 'deleted'));
    }

    // Function to search for a blog
    public function search()
    {
        $search = $_GET['search'];
        $products = Blog::where('title', 'LIKE', '%' . $search . '%')->get();
        return view('search', ['products' => $products]);
    }
}
