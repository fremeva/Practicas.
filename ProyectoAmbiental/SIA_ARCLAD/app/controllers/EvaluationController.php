<?php

class EvaluationController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            //
            $evaluations = Evaluation::all();
            return View::make('module2.evaluations.listEvaluations')->with('evaluations',$evaluations);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            return View::make('module2.evaluations.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            
            $evaluation = new Evaluation();
            $evaluation->application=Input::get('application');
            $evaluation->specific_application=Input::get('specific_application');
            $evaluation->compliance=Input::get('compliance');
            $evaluation->deadline=Input::get('deadline');
            $evaluation->information_compliance=Input::get('information_compliance');
           
            $evaluation->save();
            
            Session::flash('message','Evaluacion creada con Exito');
            return Redirect::to('evaluations');;
            
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            $evaluation = Evaluation::find($id);
            return View::make('module2.evaluations.show')->with('evaluation',$evaluation);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $evaluation = Evaluation::find($id);
            return View::make('module2.evaluations.edit')->with('evaluation',$evaluation);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
            $evaluation = Evaluation::find($id);
            $evaluation->application=Input::get('application');
            $evaluation->specific_application=Input::get('specific_application');
            $evaluation->compliance=Input::get('compliance');
            $evaluation->deadline=Input::get('deadline');
            $evaluation->information_compliance=Input::get('information_compliance');
           
            $evaluation->save();
            
            Session::flash('message','Evaluacion creada con Exito');
            return Redirect::to('evaluations/'.$id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            $evaluation = Evaluation::find($id);
            $evaluation->delete();
            Session::flash('message','Evaluacion Eliminada con Exito');
            return Redirect::to('evaluations');
	}


}
