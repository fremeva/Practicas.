<?php

class ResumenController extends \BaseController {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {

        $aspects = Aspect::all();
        $applicationMatriz = array();
        $complianceMatriz = array();

        foreach ($aspects as $aspect) {
            
            //Arreglo de contadores para las Aplicaciones
            $applicationArray = array(
                "Si" => 0,
                "No" => 0,
                "A Terceros" => 0,
                "Autoridades Ambientales" => 0,
                "Gestores Ambientales" => 0,
                "Solo Informativa" => 0,
                "Proveedores" => 0
            );
            
            //Arreglo de contadores para los Cumplimientos
            $complianceArray = array(
                "Si" => 0,
                "No" => 0,
                "A Requerirse"=>0,
                "En Implementacion"=>0,
                "No Aplica"=>0,
                "Parcialmente"=>0
            );
            
            $requisites = $aspect->requisites;
            
            foreach ($requisites as $requisite) {
                $evaluation = $requisite->evaluation;
                switch ($evaluation->application) {
                    case "Si":
                        $applicationArray["Si"]=$applicationArray["Si"]+1;
                        break;
                    case "No":
                        $applicationArray["No"]=$applicationArray["No"]+1;
                        break;
                    case "A Terceros":
                        $applicationArray["A Terceros"]=$applicationArray["A Terceros"]+1;
                        break;
                    case "Autoridades Ambientales":
                        $applicationArray["Autoridades Ambientales"]=$applicationArray["Autoridades Ambientales"]+1;
                        break;
                    case "Gestores Ambientales":
                        $applicationArray["Gestores Ambientales"]=$applicationArray["Gestores Ambientales"]+1;
                        break;
                    case "Solo Informativa":
                        $applicationArray["Solo Informativa"]=$applicationArray["Solo Informativa"]+1;
                        break;
                    case "Proveedores":
                        $applicationArray["Proveedores"]=$applicationArray["Proveedores"]+1;
                        break;
                }
                switch($evaluation->compliance){
                    case "Si":
                        $complianceArray["Si"]=$complianceArray["Si"]+1;
                        break;
                    case "No":
                        $complianceArray["No"]=$complianceArray["No"]+1;
                        break;
                    case  "A Requerirse":
                        $complianceArray["A Requerirse"]=$complianceArray["A Requerirse"]+1;
                        break;
                    case "En Implementacion":
                        $complianceArray["En Implementacion"]=$complianceArray["En Implementacion"]+1;
                        break;
                    case "No Aplica":
                        $complianceArray["No Aplica"]=$complianceArray["No Aplica"]+1;
                        break;
                    case "Parcialmente":
                        $complianceArray["Parcialmente"]=$complianceArray["Parcialmente"]+1;
                        break;
                }
                
            }
            
            array_push($applicationMatriz, $applicationArray);
            array_push($complianceMatriz, $complianceArray);
        }
        
        return View::make('module2.resumen.resumenTable')->with(array('aspects' => $aspects,'applicationMatriz' => $applicationMatriz, 'complianceMatriz' => $complianceMatriz));
    }

   
    public function applicationTable() {
        $aspects = Aspect::all();
        $applicationMatriz = array();

        foreach ($aspects as $aspect) {
            //Arreglo de contadores para las Aplicaciones
            $applicationArray = array(
                "Si" => 0,
                "No" => 0,
                "A Terceros" => 0,
                "Autoridades Ambientales" => 0,
                "Gestores Ambientales" => 0,
                "Solo Informativa" => 0,
                "Proveedores" => 0
            );   
            
            $requisites = $aspect->requisites;
            
            foreach ($requisites as $requisite) {
                $evaluation = $requisite->evaluation;
                switch ($evaluation->application) {
                    case "Si":
                        $applicationArray["Si"]=$applicationArray["Si"]+1;
                        break;
                    case "No":
                        $applicationArray["No"]=$applicationArray["No"]+1;
                        break;
                    case "A Terceros":
                        $applicationArray["A Terceros"]=$applicationArray["A Terceros"]+1;
                        break;
                    case "Autoridades Ambientales":
                        $applicationArray["Autoridades Ambientales"]=$applicationArray["Autoridades Ambientales"]+1;
                        break;
                    case "Gestores Ambientales":
                        $applicationArray["Gestores Ambientales"]=$applicationArray["Gestores Ambientales"]+1;
                        break;
                    case "Solo Informativa":
                        $applicationArray["Solo Informativa"]=$applicationArray["Solo Informativa"]+1;
                        break;
                    case "Proveedores":
                        $applicationArray["Proveedores"]=$applicationArray["Proveedores"]+1;
                        break;
                }
            }
            array_push($applicationMatriz, $applicationArray);
        }
        return View::make('module2.resumen.resumenxaplicacion')->with(array('aspects' => $aspects,'applicationMatriz' => $applicationMatriz));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function complianceTable() {
         $aspects = Aspect::all();
         $complianceMatriz = array();
         
        foreach ($aspects as $aspect) {            
            //Arreglo de contadores para los Cumplimientos
            $complianceArray = array(
                "Si" => 0,
                "No" => 0,
                "A Requerirse"=>0,
                "En Implementacion"=>0,
                "No Aplica"=>0,
                "Parcialmente"=>0
            );
            
            $requisites = $aspect->requisites;
            
            foreach ($requisites as $requisite) {
                $evaluation = $requisite->evaluation;
                switch($evaluation->compliance){
                    case "Si":
                        $complianceArray["Si"]=$complianceArray["Si"]+1;
                        break;
                    case "No":
                        $complianceArray["No"]=$complianceArray["No"]+1;
                        break;
                    case  "A Requerirse":
                        $complianceArray["A Requerirse"]=$complianceArray["A Requerirse"]+1;
                        break;
                    case "En Implementacion":
                        $complianceArray["En Implementacion"]=$complianceArray["En Implementacion"]+1;
                        break;
                    case "No Aplica":
                        $complianceArray["No Aplica"]=$complianceArray["No Aplica"]+1;
                        break;
                    case "Parcialmente":
                        $complianceArray["Parcialmente"]=$complianceArray["Parcialmente"]+1;
                        break;
                }   
            }
            array_push($complianceMatriz, $complianceArray);
        }
        
        return View::make('module2.resumen.resumenxcumplimiento')->with(array('aspects' => $aspects,'complianceMatriz' => $complianceMatriz));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
