<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Supplier;

class SupplierController extends Controller
{

    public function index(){
        return view('supplier.index');
    }


    public function showList(){
        $data = [];
        $data["title"] = "New Supplier";
        $data["supplier"] = Supplier::all();
        return view('supplier.show_list')->with("data",$data);
    }

    public function show($id){
        $data = [];
        $supplier = supplier::findOrFail($id);
        $data["name"] = $supplier->getName();
        $data["contact"] = $supplier->getContact();
        $data["document"] = $supplier->getDocument();
        $data["mail"] = $supplier->getMail();
        $data["direction"] = $supplier->getDirection();
        $data["phone"] = $supplier->getPhone();
        $data["supplier"] = $supplier;
        return view('supplier.show')->with("data",$data);
    }


    public function create(){
        $data = [];
        $data["title"] = "New Supplier";
        $data["supplier"] = supplier::all();
        return view('supplier.create')->with("data",$data);
    }


    public function save(Request $request){
        $request->validate([
        "name" => "required",
        "contact" => "required",
        "document" => "required",
        "mail" => "required",
        "direction" => "required",
        "phone" => "required",
         ]);

        Supplier::create($request->only(["name","contact","document","mail","direction","phone"]));
        return back()->with('success','Proveedor agregado');
    }


    public function destroy($id){
        $supplier = Supplier::find($id);
        $supplier->delete();
        return redirect('supplier/show');
    }
}

