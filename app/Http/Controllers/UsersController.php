<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;


class UsersController extends Controller
{
 
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Users::all();
        return $users;
    }

    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'usuario' => 'required',
            'primerNombre' => 'required',
            'segundoNombre' => 'required']);

        $user = Users::create($request->all());
        return response()->json($user, 200);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user=Users::find($id);//encontrar usuario
        $user->update($request->all());//actualizar data
        return response()->json($user, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = Users::destroy($id);
        return response()->json($user, 200);
    }
}
