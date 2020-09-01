<?php

namespace App\Http\Controllers;
use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
     return view('homeCliente.index');
    }

    public function showClients(){
        $data = [];

        $data["title"] = "Clientes registrados";
        $data["clients"] = Cliente::all();

        return view('cliente.showClients')->with("data",$data);
    }

    public function show($id)
    {
        $data = [];

        $clientes = Cliente::findOrFail($id);

        $data["nombre"] = $clientes->getNombre();
        $data["documento"] = $clientes->getDocumento();
        $data["correo"] = $clientes->getCorreo();
        $data["telefono"] = $clientes->getTelefono();
        $data["direccion"] = $clientes->getDireccion();
        $data["clients"] = $clientes;

        return view('cliente.show')->with("data",$data);
    }

    public function create()
    {
        $data = [];
        $data["title"] = "Crear cliente";
        $data["clients"] = Cliente::all();

        return view('cliente.create')->with("data",$data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "nombre" => "required",
            "documento" => "required",
            "correo" => "required",
            "telefono" => "required",
            "direccion" => "required"
        ]);
        Cliente::create($request->only(["nombre","documento","correo","telefono","direccion"]));

        return back()->with('Éxito','Elemento creado satisfactoriamente');
    }

    public function deleteclient($id)
    {
        $clients = Cliente::find($id);                
        $clients->delete();

        return redirect('cliente/show');
    }
}
