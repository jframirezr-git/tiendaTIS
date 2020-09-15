<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Refund;

class RefundController extends Controller
{

    public function showList(){
        $data = [];
        $data["title"] = "Refund";
        $data["refund"] = Refund::all();
        return view('refund.show_list')->with("data",$data);
    }

    public function save(Request $request)
    {
        $request->validate([
            "unit_value" => "required",
            "date" => "required",
            "quantity" => "required",
            "item_id" => "required"
        ]);
        Refund::create($request->only(["unit_value", "date", "quantity", "item_id"]));
        return redirect('refund');
    }
}

