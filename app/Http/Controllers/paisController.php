<?php

namespace App\Http\Controllers;

use App\Pais;
use Illuminate\Http\Request;

class paisController extends Controller
{
   
 /*
 * @return Response
 */
 public function index()
 {
   $idpais = Pais::get();
   return view('paises.index')->with('paises', $idpais);
 }
 
/* Muestra la moneda seleccionada por id.
* @param $IdCurrency 
* @return Response
*/
public function show($idpais)
{
  // Devuelve la moneda seleccionada por id.
  $idpais = Pais::find($idpais);
  return view('paises.show')->with('pais',$idpais);
}
}