<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Sale;

class SaleController extends Controller
{

    public function index(){
        return view('sale.index');
    }


    public function showList(){
        $data = [];
        $data["title"] = "Sales";
        $data["sale"] = Sale::all();
        return view('sale.show_list')->with("data",$data);
    }

    public function show($id){
        $data = [];
        $sale = sale::findOrFail($id);
        $data["unit_value"] = $sale->UniteValue();
        $data["date"] = $sale->getDate();
        $data["invoice"] = $sale->getInvoice();
        $data["quantity"] = $sale-> getQuantity();
        $data["customer_id"] = $sale->getCustomerIde();
        $data["car_id"] = $sale->getCarId();
        $data["sale"] = $sale;
        return view('sale.show')->with("data",$data);
    }


    public function create(){
        $data = [];
        $data["title"] = "New Sale";
        $data["sale"] = sale::all();
        return view('sale.create')->with("data",$data);
    }


    public function save(Request $request){
        $request->validate([
            "unit_value" => "required",
            "date" => "required",
            "invoice" => "required",
            "quantity" => "required",
            "customer_id" => "required",
            "car_id" => "required",
        ]);

        Sale::create($request->only(["unit_value","date","invoice","quantity","customer_id","car_id"]));
        return back()->with('success','Item created successfully!');
    }


    public function destroy($id){
        $supplier = Sale::find($id);
        $supplier->delete();
        return redirect('sale/showlist');
    }
}

