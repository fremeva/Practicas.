<?php

class EquipoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$equipos = Equipo::all();
                
                return View::make('layouts.listar',array('equipos'=>$equipos));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
        

        
	public function create()
	{
		return View::make('layouts.crear');
                // return View::make('layouts.master');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
	$equipos = new Equipo;
        
        
       
                
                $equipos->name = Input::get('name');
                $equipos->referencia = Input::get('referencia');
               //equipos = var_dump(Input::get('sede'));      
               // muestra var_dump
                //equipos =var_dump(serialize(Input::get('sede')));
                
                $equipos->sede = implode(",", Input::get('sede'));
                $sedes=Input::get('sede');
                /*$equipos->save();
                
                
                
                return var_dump($equipos->sede);
                
                
        //Session::flash('message', 'Successfully created nerd!');
                //return Redirect::to('equipos');
                */
        
         $equipos->save();
         Session::flash('message', 'Successfully created nerd!');
               //return Redirect::to('equipos');
         $lastIndex = $equipos->id;
         foreach ($sedes as $sede){
            $prueba = new Prueba();
            $prueba->sede = (int)$sede;
            $prueba->equipo= $lastIndex;
            $prueba->save();
         }
         
         return Redirect::to('equipos');
         
         
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return "Estas en show".$id;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return "Estas en edit".$id;
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return "Estas en update".$id;
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
            $equipos = Equipo::find($id);
		$equipos->delete();

		// redirect
		Session::flash('message', 'Successfully deleted the Equipo!');
		return Redirect::to('equipos');
	
	}


}
