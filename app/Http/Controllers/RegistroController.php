<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Registros;
use Toastr;
use DB;
use Auth;

class RegistroController extends Controller
{

	

   public function index(){

	   $registros = DB::table('registros')
        ->select('nombres','apellidos','cedula','carrera','edad','telefono','email','id')
        ->get();  

		
      return view('registros.index',compact('registros'));     
    }

 
    public function create(Request $request){


    	$validator = \Validator::make($request->all(), [
    		'cedula' => 'required|unique:registros'
    		
    	]);
    	if($validator->fails()) {
    		Toastr::error('Error Registrando.', 'Estudiante ya esta Registrado!', ['progressBar' => true]);
    		return redirect()->action('RegistroController@createView', ['errors' => $validator->errors()]);
    	} else {
    		$res = Registros::create($request->all());

 
    	//]);
       }


     Toastr::success('Registro Exitoso.', 'Estudiante!', ['progressBar' => true]);
     return redirect()->action('RegistroController@index', ["created" => true, "res" => Registros::all()]);
}  

    public function editView($id){
      $p = Registros::where('id','=',$id)->first();
      return view('registros.edit',compact('p'));
      
    }   

      public function edit(Request $request){

          $r = Registros::find($request->id);
          $r->update($request->all());

         Toastr::success('Modificado Exitosamente.', 'Estudiante!', ['progressBar' => true]);
      return redirect()->action('RegistroController@index', ["edited" => $r]);
    }

  public function delete($id){
    $r = Registros::find($id);
    $r->delete();

    return redirect()->action('RegistroController@index', ["deleted" => true, "r" => Registros::all()]);
  }

  public function createView() {
    return view('registros.create');
  }



}
