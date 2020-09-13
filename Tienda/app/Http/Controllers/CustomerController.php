<?php

namespace App\Http\Controllers;
namespace App\Sale;
namespace App\Car;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class CustomerController extends Controller
{
    public function index()
    {
     return view('customer.index');
    }

    public function showCustomers(){
        $data = [];

        $data["title"] = "Clientes registrados";
        $data["all_customer"] = Customer::all();

        return view('customer.show_customers')->with("data",$data);
    }

    public function show($id)
    {
        $data = [];

        $data_customer = Customer::findOrFail($id);

        $data["name"] = $data_customer->getName();
        $data["document"] = $data_customer->getDocument();
        $data["mail"] = $data_customer->getMail();
        $data["phone"] = $data_customer->getPhone();
        $data["address"] = $data_customer->getAddress();
        $data["customers"] = $data_customer;

        return view('customer.show')->with("data",$data);
    }

    public function create()
    {
        $data = [];
        $data["title"] = "Crear cliente";
        $data["all_customer"] = Customer::all();

        return view('customer.create')->with("data",$data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "name" => "required",
            "document" => "required",
            "mail" => "required",
            "phone" => "required",
            "address" => "required"
        ]);
        Customer::create($request->only(["name","document","mail","phone","address"]));

        return back()->with('Éxito','Elemento creado satisfactoriamente');
    }

    public function deletecustomer($id)
    {
        $data_customer = Customer::find($id);                
        $data_customer->delete();

        return redirect('customer/show');
    }

    //Relacion uno a uno con Ventas y Carro de compras
    public function sale()
    {
        return $this->hasMany('App\Sale');
    }

    public function car()
    {
        return $this->hasMany('App\Car');
    }
}
