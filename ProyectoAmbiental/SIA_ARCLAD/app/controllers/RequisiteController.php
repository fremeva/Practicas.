<?php

class RequisiteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            //
            $requisites = Requisite::all();
            return View::make('module2.requisites.listRequisites')->with('requisites',$requisites);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            $aspects = Aspect::all();
            return View::make('module2.requisites.create')->with('aspects',$aspects);
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            $requisite = new Requisite();
            $requisite->year=Input::get('year');
            $requisite->month=Input::get('month');
            $requisite->norm=Input::get('norm');
            $requisite->norm_number=Input::get('norm_number');
            $requisite->aspect_id=Input::get('aspect_id');
            $requisite->article=Input::get('article');
            $requisite->modifications=Input::get('modifications');
            $requisite->repeals=Input::get('repeals');
            $requisite->state=Input::get('state');
            $requisite->save();
            
            Session::flash('message','Requisito creado con Exito');
            return Redirect::to('requisites');
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            $requisite = Requisite::find($id);
            return View::make('module2.requisites.show')->with('requisite',$requisite);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $requisite = Requisite::find($id);
            $aspects = Aspect::all();
            return View::make('module2.requisites.edit')
                    ->with(array('aspects' => $aspects,'requisite' => $requisite));
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
            
            $requisite = Requisite::find($id);
            $requisite->year=Input::get('year');
            $requisite->month=Input::get('month');
            $requisite->norm=Input::get('norm');
            $requisite->norm_number=Input::get('norm_number');
            $requisite->aspect_id=Input::get('aspect_id');
            $requisite->article=Input::get('article');
            $requisite->modifications=Input::get('modifications');
            $requisite->repeals=Input::get('repeals');
            $requisite->state=Input::get('state');
            $requisite->save();
            
            Session::flash('message','Requisito Actualizado con Exito');
            return Redirect::to('requisites/'.$id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            $requisite = Requisite::find($id);
            //$requisite->evaluation()->planning()-delete();
            //$requisite->evaluation()->delete();
            $requisite->delete();
            
            Session::flash('message','La Eliminacion ha sido un Exito');
            return Redirect::to('requisites');
	}


}
