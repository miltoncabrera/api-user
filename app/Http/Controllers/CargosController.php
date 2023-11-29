<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargos;

class CargosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $users = Cargos::all();
        return $users;
    }


}
