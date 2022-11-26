<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Farmacia;

class microntrolador extends Controller
{
    public function vista1()
    {
        return view ('vista1');
    }

    public function vista2()
    {
        return view ('vista2');
    }
    
    public function registramedicina()
    {
        return view('registramedicina');
    }
    public function guardarmedicina(Request $request)
    {
        $farmacia = new Farmacia;
        $farmacia->Cantidad=$request->input('Cantidad');
        $farmacia->Nombre=$request->input('Nombre');
        $farmacia->Marca=$request->input('Marca');
        $farmacia->Precio=$request->input('Precio');
        $farmacia->save();

        return redirect()->route('registramedicina');
    }

        public function consultamedicina(){
        $farmacia = Farmacia::all();
        return view('consulta', compact('farmacia'));
    }

    public function eliminarmedicina($id){
        $farmacia=Farmacia::find($id);
        $farmacia->delete();
        return redirect()->route('consultamedicina');
    }

    public function muestramedicina($id){
        $farmacia=Farmacia::find($id);
        return view('muestramedicina', compact('farmacia'));
    }

    public function editamedicina(Request $request, $id){
        $farmacia=Farmacia::find($id);

        $farmacia->Cantidad=$request->input('Cantidad');
        $farmacia->Nombre=$request->input('Nombre');
        $farmacia->Marca=$request->input('Marca');
        $farmacia->Precio=$request->input('Precio');
        $farmacia->save();
        return redirect()->route('consultamedicina');
    }


}