<?php

class ResumenController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            $aspects = Aspect::all();

            //$evaluations = Evaluation::all();
            
           /* foreach ($aspects as $aspect){
                $requisites = Requisite::where('aspect_id','=',$aspects->id)->get();
                
                foreach ($requisites as $requisite){
                  $evaluations = Evaluation::where('requisite_id','=',1)->get();
                }
            }
            //return $evaluations;*/
            return View::make('module2.resumenTable')->with("aspects",$aspects);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
		//
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
