<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\LineasNegocio;
use App\Models\GaleriaBanco;

class MainController extends Controller
{
    //
    public function index(Request $request)
    {
        $data['p_hipotecarios'] = Productos::all()->toArray();
        return view('home', $data);
    }

    public function hipotecario(Request $request)
    {
        $data['productos'] = Productos::where('id_linea_negocio',1)->get()->toArray();
        $data['galeria'] = GaleriaBanco::where('rel_id',1)->get()->toArray();
        return view('hipotecario', $data);
    }


    public function empresarial(Request $request)
    {
        $data['productos'] = Productos::where('id_linea_negocio',2)->get()->toArray();
        $data['galeria'] = GaleriaBanco::where('rel_id',2)->get()->toArray();
        return view('empresarial', $data);
    }


    public function seguros(Request $request)
    {
        $data['productos'] = Productos::where('id_linea_negocio',4)->orWhere('id_linea_negocio',5)->get()->toArray();
        $data['galeria'] = GaleriaBanco::where('rel_id',3)->get()->toArray();
        return view('hipotecario', $data);
    }


    public function auto(Request $request)
    {
        $data['productos'] = Productos::where('id_linea_negocio',6)->get()->toArray();
        $data['galeria'] = GaleriaBanco::where('rel_id',6)->get()->toArray();
        return view('auto', $data);
    }


    public function producto(Request $request)
    {
        $data['product'] = Productos::where('url',$request->product)->first()->toArray();
        $data['linea_negocio'] = LineasNegocio::where('id',$data['product']['id_linea_negocio'])->first()->toArray();
        
        $data['related'] = Productos::where('id_linea_negocio',$data['linea_negocio']['id'])->orWhere('id_linea_negocio',$data['linea_negocio']['parent'])->get()->toArray();
        
        $data['galeria'] = GaleriaBanco::where('rel_id',$data['linea_negocio']['id'])->orWhere('rel_id',$data['linea_negocio']['parent'])->get()->toArray();
        
        return view('producto', $data);
    }

}
