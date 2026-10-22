<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdukRequest;
use App\Http\Requests\UpdateProdukRequest;
use App\Services\ProdukService;
use Illuminate\Http\Request;
class ProdukController extends Controller
{

    public function __construct(private ProdukService $produkService)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produk = $this->produkService->getAllProduk();
        return view('admin.produk.index', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.produk.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProdukRequest $request)
    {
        $dataValid = $request->validated();
        // return response($dataValid);
        $this->produkService->createProduk($dataValid);
        return redirect(route('data-product.index'))->with("success", 'Berhasil tambah data produk!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = $this->produkService->findProduk($id);
        return view('admin.produk.detail', compact('produk'));
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = $this->produkService->findProduk($id);
        return view('admin.produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProdukRequest $request, string $id)
    {
        $this->produkService->updateProduk($request->validated(), $id);
        return redirect(route('data-product.index'))->with("success", 'Berhasil edit produk!');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        
    }
}
