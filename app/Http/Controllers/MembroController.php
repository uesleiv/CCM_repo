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
		$membros = Membro::orderBy('nome')->get();
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
		$page_title = "Inclusão de membro";
		return view('membro.create', compact('page_title'));
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
	 * @param  Membro  $membro //alteraçao realizada na RouteServiceProvider - Ueslei
	 * @return Response
	 */
	public function edit(Membro $membro)
	{
		//$membro = Membro::find($id);
		$page_title = "Membro " . $membro->nome;
		return view('membro.edit',compact('membro','page_title'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  Membro  $membro
	 * @return Response
	 */
	public function update(Membro $membro)
	{
		//$membro = Membro::findorfail($id);

		$membro->nome = Input::get('nome');
		$membro->email = Input::get('email');
		$membro->sexo = Input::get('sexo');
		$membro->save();

		return Redirect::route('membro.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  Membro  $membro
	 * @return Response
	 */
	public function destroy(Membro $membro)
	{
		//
		//$membro = Membro::find($id);
		$membro->delete();

		return Redirect::route('membro.index')->with('mensagem','Membro excluído');
	}

}
