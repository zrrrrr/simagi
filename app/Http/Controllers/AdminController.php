<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peralatan_GI;
use App\Subdata\Kategori_Peralatan;
use App\Subdata\Nama_GI;
use App\Subdata\Merk_Peralatan;
use App\Subdata\Tagnama_Alat;
use App\User;

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
    $merk_list = Merk_Peralatan::all();
    $tagnama_alat_list = Tagnama_Alat::all();  
    $user_list = User::all();

    
    return view('admin.content.peralatan', compact('peralatan_gi_list', 'kategori_alat_list', 'nama_gi_list', 'merk_list', 'tagnama_alat_list', 'user_list', ));
    }

    // method untuk edit data pegawai
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin.content.peralatan', compact('user'));
    }

    public function update($id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());

        $telepon = $siswa->telepon;
        $telepon->no_telepon = $request->input('no_telepon');
        $siswa->telepon()->save($telepon);

        if(!is_null($request->input('hobi'))) {
            $siswa->hobi()->sync($request->input('hobi'));
        }

        return redirect('siswa');
    }

    public function store_data_peralatan(Request $request){
        Peralatan_GI::create($request->all());
        return redirect ('admin');
    }

    public function store_data_tagnama_alat(Request $request){
        Tagnama_Alat::create($request->all());
        return redirect ('admin');
    }

    public function store_data_nama_gardu(Request $request){
        Nama_GI::create($request->all());
        return redirect ('admin');
    }

    public function store_data_kategori_peralatan(Request $request){
        Kategori_Peralatan::create($request->all());
        return redirect ('admin');
    }

    public function store_data_merk_alat(Request $request){
        Merk_Peralatan::create($request->all());
        return redirect ('admin');
    }

    public function store_daftar_admin(Request $request){
        User::create($request->all());
        return redirect ('admin');
    }
}
