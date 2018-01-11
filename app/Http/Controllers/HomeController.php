<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Departamento;
use App\User;
use Auth;
use DB; 



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::User();     
        $id = $user->id;
        $countEmpresas = DB::table('empresas')->where('user_id', '=', $id)->count();
        $countDepartamentos = DB::table('areas')->count();
        $countUsuarios = DB::table('users')->count();

        return view('home',compact('empresas', 'countEmpresas', 'countDepartamentos','countUsuarios'));
    }
}
