<?php

namespace App\Http\Controllers;

use App\Decision;
use Illuminate\Http\Request;

class decisionController extends Controller
{
/* 
 *
 * @return Response
 */
 public function index()
 {
   $decisiones = Decision::get();
   return view('decisiones.index')->with('decisiones', $decisiones);
 }
/* 
* @param $IdCurrency 
* @return Response
*/
public function show($iddecision)
{
  // Devuelve la moneda seleccionada por id.
  $decision = Decision::find($iddecision);
  return view('decisiones.show')->with('decision',$decision);
}
}