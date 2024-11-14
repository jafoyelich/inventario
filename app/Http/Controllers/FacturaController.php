<?php
namespace App\Http\Controllers;

use App\Models\Factura;
use App\Models\Cliente;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        $facturas = Factura::with('cliente')->get();
        return view('facturas.index', compact('facturas'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        return view('facturas.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'fecha' => 'required|date',
            'total' => 'required|numeric',
        ]);

        Factura::create($request->all());
        return redirect()->route('facturas.index')->with('success', 'Factura creada exitosamente.');
    }
}
