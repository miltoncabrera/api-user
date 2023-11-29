<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamentos;

class DepartamentosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Departamentos::all();
        return $users;
    }

}
