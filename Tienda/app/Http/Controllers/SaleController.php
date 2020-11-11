<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sale;

class SaleController extends Controller
{

    public function showList(){
        $data = [];
        $data["title"] = "Sales";
        $data["sale"] = Sale::all();
        return view('sale.show_list')->with("data",$data);
    }

    public function show($id){
        $data = [];
        $sale = sale::findOrFail($id);
        $data["unit_value"] = $sale->getUniteValue();
        $data["date"] = $sale->getDate();
        $data["invoice"] = $sale->getInvoice();
        $data["quantity"] = $sale-> getQuantity();
        $data["customer_id"] = $sale->getCustomerId();
        $data["item_id"] = $sale->getItemId();
        $data["sale"] = $sale;
        return view('sale.show')->with("data",$data);
    }

    public function save(Request $request){
        $request->validate([
            "unit_value" => "required",
            "date" => "required",
            "invoice" => "required",
            "quantity" => "required",
            "customer_id" => "required",
            "item_id" => "required"
        ]);

        Sale::create($request->only(["unit_value","date","invoice","quantity","customer_id", "item_id"]));
        return redirect('sale');
    }


    public function destroy($id){
        $supplier = Sale::find($id);
        $supplier->delete();
        return redirect('sale');
    }

}

