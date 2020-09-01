<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Ventas;
    
    class VentasController extends Controller
    {
        //Mostramos el dashboard de ventas
        public function index(){
            return view('ventas.index');
        }

        //Mostramos la lista de ventas realizadas
        public function showlist(){

            $data = []; //to be sent to the view
            $data["title"] = "Crear venta";
            $data["sales"] = Ventas::all();
            return view('ventas.showlist')->with("data",$data);
        }

        //mostramos la información de cada producto
        public function show($id)
    {
        $data = []; //to be sent to the view

        $venta = Ventas::findOrFail($id);
    

        $data["numero_factura"] = $venta->getFactura();
        $data["valor_unidad"] = $venta->getValor_unidad();
        $data["fecha"] = $venta->getFecha();
        $data["cantidad"] = $venta->getCantidad();
        $data["documento"] = $venta->getDocumento();
        $data["id_articulo"] = $venta->getId_articulo();
        $data["id_cliente"] = $venta->getId_cliente();
        $data["sales"] = $venta;
        return view('ventas.show')->with("data",$data);

    } 

        //Metodo para crear una nueva venta
        public function create()
        {
            $data = []; //to be sent to the view
            $data["title"] = "Crear venta";
            $data["sales"] = Ventas::all();
            return view('ventas.create')->with("data",$data);
        }

        //Metodo para guardar la nueva venta 
        public function save(Request $request)
        {
            $request->validate([
                "valor_unidad" => "required",
                "fecha" => "required",
                "factura" => "required",
                "cantidad" => "required",
                "documento" => "required",
                //Estas son las claves foraneas de unas clases las cuales luego se implementaran
                "id_articulo" => "required",
                "id_cliente" => "required"
            ]);

            Ventas::create($request->only(["valor_unidad","fecha","factura","cantidad","documento","id_articulo","id_cliente"]));
            return back()->with('success','Item created successfully!');
        } 
        
        //Metodo para eliminar
            public function destroy($id)
            {
                $venta = Ventas::find($id);
                
                $venta->delete();
        
                return redirect('ventas/showlist');
            }
    }
