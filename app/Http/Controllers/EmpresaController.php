<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Empresa;
use App\Area;

use App\User;
use Auth;




class EmpresaController extends Controller
{
    public function index()
    {
        
        $user = Auth::User();     
        $id = $user->id; 
        //$empresas = Empresa::latest()->paginate(10);
        $empresas = Empresa::where('user_id', $id)
        ->latest()
        ->paginate(10);

        return view('empresas.index',compact('empresas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empresas.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        Empresa::create($request->all());
        return redirect()->route('empresas.index')
                        ->with('success','Empresa cadastrada com sucesso');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(Empresa $empresa)
    {
        $areas = Area::where('empresa_id', 3)
        ->latest()
        ->paginate(10);
        return view('empresas.show',compact('empresa', 'areas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        //return view('empresas.show',compact('empresa'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {

        $areas = Area::where('empresa_id', 17)
        ->latest()
        ->paginate(10);
        
        return view('empresas.edit',compact('empresa', 'areas'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Empresa $empresa)
    {
        request()->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $empresa->update($request->all());
        return redirect()->route('empresas.index')
                        ->with('success','Empresa updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empresa::destroy($id);
        return redirect()->route('empresas.index')
                        ->with('success','Empresa deleted successfully');
    }
}