<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Services\UsersServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function __construct(private UsersServices $userServices)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->userServices->getUsers();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("admin.users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        $dataValid = $request->validated();
        $dataValid['password'] = Hash::make($dataValid['password']);
        $user = $this->userServices->createUsers($dataValid);
        if($user) {
            return redirect('/users')->with('success', "Berhasil simpan users!");
        }
        return back()->with('error', "Gagal simpan users");
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
