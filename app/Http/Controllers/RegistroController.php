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


       $res = Registros::create($request->all());

        Toastr::success('Registrado Exitosamente.', '!', ['progressBar' => true]);

		return redirect()->action('RegistroController@index', ["created" => true, "res" => Registros::all()]);
	}  

    public function editView($id){
      $p = Centros::find($id);
      return view('archivos.centros.edit', ["name" => $p->name, "direccion" => $p->direccion, "referencia" => $p->referencia, "id" => $p->id,]);
      
    }   

      public function edit(Request $request){
      $p = Centros::find($request->id);
      $p->name = $request->name;
      $p->direccion = $request->direccion;
      $p->referencia = $request->referencia;
      $res = $p->save();
      return redirect()->action('Archivos\CentrosController@index', ["edited" => $res]);
    }

  public function delete($id){
    $centros = Centros::find($id);
    $centros->estatus = 0;
    $centros->save();
    return redirect()->action('Archivos\CentrosController@index', ["deleted" => true, "users" => Centros::all()]);
  }

  public function createView() {
    return view('registros.create');
  }



}
