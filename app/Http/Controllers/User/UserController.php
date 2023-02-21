<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $users = User::all();
        return view("users.index",compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view("users.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request): RedirectResponse
    {
        $user = User::create($request->validated());
        toastr()->success("User successfully created.");
        return redirect()->to("users.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user): View
    {
        return view("users.show",compact("user"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user): View
    {
        return view("users.edit",compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, User $user): RedirectResponse
    {
        $user->update($request->safe(["email","name"]));

        if($request->password){
            $user->update(["password"=>Hash::make($request->password)]);
        }
        toastr()->success("User has been updated.");
        return redirect()->to(route("users.show",$user->id));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        toastr()->success("User has been deleted.");
        return redirect()->to(route("users.index"));
    }
}
