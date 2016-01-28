<?php namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Membro;
use Input, Redirect;

use Illuminate\Http\Request;



class MembroController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$membros = Membro::orderBy('id')->get();
		$page_title = "Controle de Membros!!!";
		return view('membro.index',compact('membros','page_title'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('membro.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$membro = Membro::create(Input::all());
		return Redirect::route('membro.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$membro = Membro::find($id);
		$page_title = "Membro " . $membro->nome;
		return view('membro.edit',compact('membro','page_title'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
