<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peralatan_GI;
use App\Subdata\Kategori_Peralatan;
use App\Subdata\Nama_GI;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
    $peralatan_gi_list = Peralatan_GI::all();
    $kategori_alat_list = Kategori_Peralatan::all();
    $nama_gi_list = Nama_GI::all(); 
    
    return view('admin.content.peralatan', compact('peralatan_gi_list', 'kategori_alat_list', 'nama_gi_list'));
    }

    public function store(Request $request){
        Peralatan_GI::create($request->all());
        return redirect ('admin');
    }
}
