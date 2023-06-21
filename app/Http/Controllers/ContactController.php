<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactController extends Controller
{
    //
    // function show(){
    //     return view('contact');
    // }
    function show(){
        $data['kontaks'] = Contact::all();
        return view('contact',$data);
    }
    function add(){
        $data = [
            'action'=>url('contact/create'),
            'tombol'=>'simpan',
            'contact'=>(object)[
                'nama'=>'',
                'email'=>'',
                'pesan'=>'',
                'No_telp'=>''
            ]
        ];
        return view ('formcontact', $data);

    }
    function create (Request $req){
        Contact::create([
            'nama'=>$req->nama,
            'email'=>$req->email,
            'pesan'=>$req->pesan,
            'No_telp'=>$req->No_telp
        ]);
        return redirect('contact');
    }
    function hapus($id){
        $contact = Contact::where('id',$id)->first();
        $contact->delete();
        // Storage::delete($portofolio->foto);
        return redirect('contact');
    }
    // function edit ($id){
    //     $data['contact']=Contact::find($id);
    //     $data['action']=url('contact/update').'/'.$data['contact']->id;
    //     $data['tombol']='update';
    //     return view('formcontact',$data);
    // }
    function update(Request $req){
        Contact::where('id',$req->id)->update([
            'nama'=>$req->nama,
            'email'=>$req->email,
            'pesan'=>$req->pesan,
            'No_telp'=>$req->No_telp
        ]);
        return redirect('contact');
    }
}
