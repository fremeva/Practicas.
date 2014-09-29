<?php

class AspectController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
            //
            $aspects = Aspect::all();
            return View::make('module2.aspects.aspects')->with('aspects',$aspects);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
            $rules = array('name'=>'required');
            $validator = Validator::make(Input::all(),$rules);
            
            if($validator->fails()){
                return Redirect::to('aspects')->withErrors($validator);
            } else {
                $aspect = new Aspect();
                $aspect->name = Input::get('name');
                $aspect->save();
                Session::flash('message','Aspecto Guardado con Exito');
                return Redirect::to('aspects');
            }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            $aspect = Aspect::find($id);
            $aspect->delete();
            
            Session::flash('message','Aspecto ha sido Eliminado Correctamente');
            return Redirect::to('aspects');
	}


}
