<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class productoController extends Controller
{

/* 
 *
 * @return Response
 */
 public function index()
 {
   $productos = Producto::get();
   return view('productos.index')->with('productos', $productos);
 }
 /*
* @param $IdCurrency 
* @return Response
*/
public function show($idproducto)
{
  // Devuelve la moneda seleccionada por id.
  $idproducto = Producto::find($idproducto);
  return view('productos.show')->with('producto',$idproducto);
}
}
