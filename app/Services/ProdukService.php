<?php

namespace App\Services;

use App\Models\Produk;
use Illuminate\Support\Facades\Storage;

class ProdukService {

    public function getAllProduk(){
        return Produk::paginate(10);
    }

    public function createProduk(array $produk) {
        return Produk::create([
            "nama" => $produk['nama'],
            "kode" => $produk['kode'],
            "deskripsi" => $produk['deskripsi'],
            "harga" => $produk['harga'],
            "stok" => $produk['stok'], 
            "foto" => $produk['foto']->store('foto'),
        ]);
    }

    public function findProduk(string $id)  {
        return Produk::find($id);
    }
    public function updateProduk(array $produk, string $id) {
        $dataProduk['nama'] = $produk['nama'];
        $dataProduk['kode'] = $produk['kode'];
        $dataProduk['deskripsi'] = $produk['deskripsi'];
        $dataProduk['harga'] = $produk['harga'];
        $dataProduk['stok'] = $produk['stok'];
        if(isset($produk['foto'])) {
            $dataProduk['foto'] = $produk['foto']->store('foto');
        }
        return Produk::where('id', $id)->update($dataProduk);
    }

    public function deleteProduk(string $id) {
        return Produk::find($id)->delete();
    }
}