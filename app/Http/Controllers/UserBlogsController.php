<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserBlogsController extends Controller
{
    public function show()
    {
        $user = Auth::user()->id;
        $blog_show = Blog::select('*')->where('user_id', $user)->get();

        return view('UserViwes.Blogs.show', ['blog_show' => $blog_show]);
    }
    public function create()
    {
        $user = Auth::user()->id;

        return view('UserViwes.Blogs.create', ['user_id' => $user]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'required',
            'image' => 'nullable|image',
            'price' => 'required|integer',
        ]);
        $data = $request->all();
        if (isset($request->image)) {
            $image = $request->file('image')->store('blogs');
            $data['image'] = $image;
        }
        $blogs = Blog::create($data);
        return (redirect(route('show.user.blogs'))->with('success', 'Blog Inserted With Id : ' . $blogs->id));
    }
    public function edit($id){
        $blog_edits = Blog::findOrfail($id);
        return view('UserViwes.Blogs.edit', ['blog_edits' => $blog_edits]);
    }
    public function update(Request $request , $id){
        $blog_up = Blog::findOrfail($id);
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'required',
            'image' => 'nullable|image',
            'price' => 'required',
        ]);

        $data = $request->all();
        if (isset($request->image)) {
            Storage::delete($blog_up->image);
            $image = $request->file('image')->store('blogs');
            $data['image'] = $image;
        }
        $blog_up->update($data);
        return redirect(route('show.user.blogs'))->with('success','Ad With id : ' . $blog_up->id . " " . 'Updated');
    }
    public function destroy($id)
    {
        $delet = Blog::findOrfail($id);
        $delet->destroy($id);
        return (redirect(route('show.user.blogs'))->with('success', 'Blog With ID : ' . $delet->id . 'deleted'));
    }

}
