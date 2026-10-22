<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Produk;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index() {
        return view('landing.home');
    }

    public function about() {
        return view('landing.about');
    }

    public function blog() {
        $blogs = Blog::with(['users'])->paginate(3);
        return view('landing.blog', compact("blogs"));
    }

    public function detail_blog(string $slug)  {
        $blog = Blog::with(['users'])->where(['slug' => $slug])->first();
        $otherBlogs = Blog::limit(3)->get();
        return view('landing.detail-blog', compact('blog', 'otherBlogs'));
    }

    public function product(Request $request) {
        $produk = Produk::get();
        return view('landing.product', compact('produk'));
    }

    public function contact() {
        return view('landing.contact');
    }
}
