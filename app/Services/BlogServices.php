<?php

namespace App\Services;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogServices {

    public function getBlog() {
        return Blog::with(['users'])->paginate(3);
    }

    public function createBlog(array $dataBlog) {
        
        return Blog::create([
            "users_id" => Auth::user()->id,
            "judul" => $dataBlog['judul'],
            "slug" => str_replace(' ', '-', strtolower($dataBlog['judul'])),
            'kategori' => $dataBlog['kategori'],
            'ringkasan' => $dataBlog['ringkasan'],
            'deskripsi' => $dataBlog['deskripsi'],
            'foto' => $dataBlog['foto']->store('foto'),
            'status' => $dataBlog['status'],
            'tanggal_publikasi' => $dataBlog['tanggal_publikasi']
        ]);
    }

    public function deleteBlog(string $id) {
        return Blog::find($id)->delete();
    }

    public function updateBlog(array $dataBlog, string $id) {
        $dataUpdate['judul'] = $dataBlog['judul'];
        $dataUpdate['slug'] = str_replace(" ", "-", strtolower($dataBlog['judul']));
        $dataUpdate['kategori'] = $dataBlog['kategori'];
        $dataUpdate['ringkasan'] = $dataBlog['ringkasan'];
        $dataUpdate['deskripsi'] = $dataBlog['deskripsi'];
        $dataUpdate['status'] = $dataBlog['status'];
        if(isset($dataBlog['foto'])) {
            $dataUpdate['foto'] = $dataBlog['foto']->store('foto');
        }
        return Blog::where('id', $id)->update($dataUpdate);
    }
}