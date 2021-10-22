<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\categorias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');  //para ver si esta logueada por favor
    }
    public function index()
    {
        $tienda=Auth::user()->id;
        return view('cuenta.index',['tienda'=>$tienda,'cates'=>categorias::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usersM = user::find($id);
        return view('cuenta.edit',['usersM'=>$usersM,'cates'=>categorias::all()]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $modificar=user::find($id);
        $modificar->name = $request->get('cajaNombre');
        $modificar->telefono = $request->get('cajaTelefono');
        $modificar->save();
        return redirect('/cuenta');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $borrarR=user::find($id);
        $borrarR->delete();
        return redirect('/home');
    }
    public function confirmBorrarCuenta($id){
        $eliminarD=user::find($id);
        return view('cuenta.confirmEli',['eliminarD'=>$eliminarD,'cates'=>categorias::all()]);
    }
}
 