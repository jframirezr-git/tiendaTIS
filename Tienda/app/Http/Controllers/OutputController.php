<?php

namespace App\Http\Controllers;
use App\Output;

class OutputController extends Controller
{
    public function index()
    {
     return view('output.index');
    }

    public function showOutputs(){
        $data = [];

        $data["title"] = "Salidas registradas";
        $data["all_output"] = Output::all();

        return view('output.showOutputs')->with("data",$data);
    }

    public function show($id)
    {
        $data = [];

        $data_output = Output::findOrFail($id);

        $data["value"] = $data_output->getValue();
        $data["date"] = $data_output->getDate();
        $data["quantity"] = $data_output->getQuantity();
        $data["item_id"] = $data_output->getItemId();
        $data["outputs"] = $data_output;

        return view('output.show')->with("data",$data);
    }

    public function create()
    {
        $data = [];
        $data["title"] = "Crear salida";
        $data["all_output"] = Output::all();

        return view('output.create')->with("data",$data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "value" => "required",
            "date" => "required",
            "quantity" => "required",
            "item_id" => "required",
        ]);
        Output::create($request->only(["value","date","quantity","item_id"]));

        return back()->with('Éxito','Elemento creado satisfactoriamente');
    }

    public function deleteoutput($id)
    {
        $data_output = Output::find($id);                
        $data_output->delete();

        return redirect('output/show');
    }

}
