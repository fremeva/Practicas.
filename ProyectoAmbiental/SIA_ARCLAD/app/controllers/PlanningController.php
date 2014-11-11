<?php

class PlanningController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            /*/*
            $plannings = Planning::all();
            return View::make('module2.plannings.listPlannings')->with('plannings',$plannings);*/
            
            return Redirect::to('requisites');  //Esto es Temporal
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
            return View::make('module2.plannings.create');
	}
        
        public function createPlan($id)
	{
            
            return View::make('module2.plannings.create')->with('id',$id);
	}
        
	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            $plannings = new Planning();
            $plannings->required_activities=Input::get('required_activities');
            $plannings->responsible=Input::get('responsible');
            $plannings->term=Input::get('term');
            $plannings->resources=Input::get('resources');
            $plannings->monitoring=Input::get('monitoring');
            $plannings->plan_status=Input::get('plan_status');
            $plannings->evaluation_id=Input::get('evaluation_id');
            $evaluation = Evaluation::find(Input::get('evaluation_id'));
            $plannings->save();
            
           
            
            Session::flash('message','Planeacion creada con Exito');
            return Redirect::to('requisites/'.$evaluation->requisite_id);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
            $planning = Planning::find($id);
            return View::make('module2.plannings.show')->with('planning',$planning);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
            $planning = Planning::find($id);
            return View::make('module2.plannings.edit')->with('planning',$planning);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
            $plannings = Planning::find($id);
            $plannings->required_activities=Input::get('required_activities');
            $plannings->responsible=Input::get('responsible');
            $plannings->term=Input::get('term');
            $plannings->resources=Input::get('resources');
            $plannings->monitoring=Input::get('monitoring');
            $plannings->plan_status=Input::get('plan_status');
     
            $plannings->save();
            
            Session::flash('message','Planeacion Actualizada con Exito');
            return Redirect::to('plannings/'.$id);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            $planning = Planning::find($id);
            $evaluation = Evaluation::find($planning->evaluation_id);
            
            $planning->delete();
            
            Session::flash('message','La Eliminacion ha sido un Exito');
            return Redirect::to('requisites/'.$evaluation->requisite_id);
	}


}
