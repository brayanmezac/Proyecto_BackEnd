<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Estudiante;

class EstudianteApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estudiantes = Estudiante::all();
        return json_encode(["resultado"=>"OK", "estudiantes"=>$estudiantes]);
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
        $estudiante= Estudiante::where("documento","=", $request->documento)->first();
        if (!$estudiante) {
            $estudiante=Estudiante::create($request->all());
            return json_encode(["resultado"=>"OK", "estudiante"=>$estudiante]);
        } else {
            return json_encode(["resultado"=>"Error", "mensaje"=>"documento ya existente"]);  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $estudiante = Estudiante::find($id);
        return json_encode(["resultado"=>"OK", "estudiante"=>$estudiante]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $estudiante = Estudiante::find($id);
        $estudiante->fill($request->all());
        $estudiante->save();
        return json_encode(["resultado"=>"OK", "estudiante"=>$estudiante]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $estudiante= Estudiante::find($id);
        $estudiante->delete();
        return json_encode(["resultado"=>"OK", "estudiante"=>$estudiante]);
    }
}
