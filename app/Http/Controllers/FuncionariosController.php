<?php

namespace App\Http\Controllers;

use App\funcionarios;
use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('funcionarios.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('funcionarios.create');
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
     * @param  \App\funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function show(funcionarios $funcionarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function edit(funcionarios $funcionarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, funcionarios $funcionarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\funcionarios  $funcionarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(funcionarios $funcionarios)
    {
        //
    }
}
