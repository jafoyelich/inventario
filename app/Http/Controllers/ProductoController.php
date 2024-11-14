<?php
namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
public function index()
{
$productos = Producto::all();
return view('productos.index', compact('productos'));
}

public function create()
{
return view('productos.create');
}

public function store(Request $request)
{
$request->validate([
'nombre' => 'required',
'codigo' => 'required|unique:productos',
'precio_compra' => 'required|numeric',
'precio_venta' => 'required|numeric',
'stock' => 'required|integer',
'stock_minimo' => 'required|integer',
]);

Producto::create($request->all());
return redirect()->route('productos.index')->with('success', 'Producto creado exitosamente.');
}

public function edit(Producto $producto)
{
return view('productos.edit', compact('producto'));
}

public function update(Request $request, Producto $producto)
{
$request->validate([
'nombre' => 'required',
'codigo' => 'required|unique:productos,codigo,' . $producto->id,
'precio_compra' => 'required|numeric',
'precio_venta' => 'required|numeric',
'stock' => 'required|integer',
'stock_minimo' => 'required|integer',
]);

$producto->update($request->all());
return redirect()->route('productos.index')->with('success', 'Producto actualizado exitosamente.');
}

public function destroy(Producto $producto)
{
$producto->delete();
return redirect()->route('productos.index')->with('success', 'Producto eliminado exitosamente.');
}
}
