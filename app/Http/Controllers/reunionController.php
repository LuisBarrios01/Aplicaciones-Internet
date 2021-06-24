<?php

namespace App\Http\Controllers;

use App\Reunion;
use Illuminate\Http\Request;

class reunionController extends Controller
{

 /*
 * @return Response
 */
 public function index()
 {
   $reuniones = Reunion::get();
   return view('reuniones.index')->with('reuniones', $reuniones);
 }
 /* Muestra la moneda seleccionada por id.
* @param $IdCurrency 
* @return Response
*/
public function show($idreunion)
{
  // Devuelve la moneda seleccionada por id.
  $idreunion = Reunion::find($idreunion);
  return view('reuniones.show')->with('reunion',$idreunion);
}
}