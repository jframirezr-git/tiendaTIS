<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function show()
    {
        $data = [];
        $data["title"] = "Productos";
        $data["all_items"] = Item::all();
     return view('item.show')->with("data",$data);
    }

    public function create()
    {
        $data = [];
        $data["title"] = "Crear producto";
        $data["all_item"] = Item::all();

        return view('item.create')->with("data",$data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "brand" => "required",
            "reference" => "required",
            "stock" => "required",
            "value" => "required",
            "supplier_id" => "required"
        ]);
        Item::create($request->only(["name","brand","reference","stock", "value","supplier_id"]));

        return redirect('/items');
    }

    public function showItem($id)
    {
        $data = [];

        $data_item = Item::findOrFail($id);

        $data["name"] = $data_item->getName();
        $data["brand"] = $data_item->getBrand();
        $data["reference"] = $data_item->getReference();
        $data["stock"] = $data_item->getStock();
        $data["value"] = $data_item->getValue();
        $data["items"] = $data_item;

        return view('item.show_item')->with("data",$data);
    }

    public function deleteItem($id)
    {
        $data_customer = Item::find($id);
        $data_customer->delete();

        return redirect('/items');
    }

}
