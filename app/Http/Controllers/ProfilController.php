<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Models\Profil;
use App\Models\Portofolio;


class ProfilController extends Controller
{
    //
    function show(){
        $data['profil']=Profil::all();
        return view('profil');
    }
    function add(){
        $data = [
            'action'=>url('profil/create'),
            'tombol'=>'simpan',
            'profil'=>(object)[
                'nis'=>'',
                'nama'=>'',
                'no_telp'=>'',
                'email'=>'',
                'JK'=>'',
                'deskripsi'=>'',
                'alamat'=>'',
                'foto'=>''
            ],
        ];
        return view ('profil', $data);

    }
    function create (Request $req){
        Profil::create([
            'nis'=>$req->nis,
            'nama'=>$req->nama,
            'no_telp'=>$req->no_telp,
            'email'=>$req->email,
            'JK'=>$req->JK,
            'deskripsi'=>$req->deskripsi,
            'alamat'=>$req->alamat,
            // 'foto'=>$foto
            'foto' => $req->file('foto')->store('foto')
            // 'foto'=>$req->foto
        ]);
        return redirect('profil');
    }
    function hapus($id){
        $profil = Profil::where('nis',$id) -> first();
        $profil->delete();
        Storage::delete($profil->foto);
        return redirect('profil');
    }
    function edit ($id) {
        $data['profil']=Profil::find($id);
        $data['action']=url('profil/update').'/'.$data['profil']->nis;
        $data['tombol']='update';
        return view('profil',$data);
    }
    function update(Request $req){
        Profil::where('nis',$req->nis)->update([
            'nis'=>$req->nis,
            'nama'=>$req->nama,
            'no_telp'=>$req->no_telp,
            'email'=>$req->email,
            'JK'=>$req->jk,
            'deskripsi'=>$req->deskripsi,
            'alamat'=>$req->alamat,
            'foto'=>$foto
        ]);
        return redirect('profil');
    }
}
