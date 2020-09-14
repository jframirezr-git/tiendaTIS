<?php

namespace App\Http\Controllers;
use App\Input;

class InputController extends Controller
{
    public function index()
    {
     return view('input.index');
    }

    public function showInputs(){
        $data = [];

        $data["title"] = "Entradas registradas";
        $data["all_input"] = Input::all();

        return view('input.showInputs')->with("data",$data);
    }

    public function show($id)
    {
        $data = [];

        $data_input = Input::findOrFail($id);

        $data["value"] = $data_input->getValue();
        $data["date"] = $data_input->getDate();
        $data["bill"] = $data_input->getBill();
        $data["quantity"] = $data_input->getQuantity();
        $data["inputs"] = $data_input;

        return view('input.show')->with("data",$data);
    }

    public function create()
    {
        $data = [];
        $data["title"] = "Crear entrada";
        $data["all_input"] = Input::all();

        return view('input.create')->with("data",$data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "value" => "required",
            "date" => "required",
            "bill" => "required",
            "quantity" => "required",
        ]);
        Input::create($request->only(["value","date","bill","quantity"]));

        return back()->with('Éxito','Elemento creado satisfactoriamente');
    }

    public function deleteinput($id)
    {
        $data_input = Input::find($id);                
        $data_input->delete();

        return redirect('input/show');
    }

}
