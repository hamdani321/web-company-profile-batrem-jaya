<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Blog;
use App\Services\BlogServices;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function __construct(private BlogServices $blogServices)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = $this->blogServices->getBlog();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBlogRequest $request)
    {
        $dataValid = $request->validated();
        $blog = $this->blogServices->createBlog($dataValid);
        if($blog) {
            return redirect('/data-blogs')->with('success', "Berhasil simpan data blog!");
        }
        return back()->with("error", "Gagal simpan data blog!");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlogRequest $request, string $id)
    {
        $dataValid = $request->validated();
        $result = $this->blogServices->updateBlog($dataValid, $id);
        if($result > 0) {
            return redirect('/data-blogs')->with('success', "Berhasil update data!");
        }
        return back()->with('error', "Gagal update data!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $result = $this->blogServices->deleteBlog($id);
        if($result) {
            return response([
                'message' => "Berhasil hapus data!"
            ], 200);
        }
        return response([
                'message' => "Gagal hapus data!"
            ], 404);
    }
}
