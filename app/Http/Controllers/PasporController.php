<?php

namespace App\Http\Controllers;

use App\Models\Paspor;
use App\Models\Pemohon;
use Illuminate\Http\Request;

class PasporController extends Controller
{
    //tabel paspor
    public function tabelpaspor(){
        
        $paspors = Paspor::with('pemohon')->get();
        // $pemohons = Pemohon::all();
        return view('staf.tabelpaspor', compact('paspors'));
    }
     public function tambahpaspor(){
        return view ('staf.tambahpaspor');
    }

    public function storepaspor(Request $request){
        $validateData = $request->validate([
            'nama'=>'required',
            'NIK'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'Agama'=>'required',
            'Jenis_Kelamin'=>'required',
            'Alamat'=>'required',
            'tgl_pembuatan'=>'required',
            'tgl_habis'=>'required',
            'no_arsip'=>'required',
            'foto_paspor'=>'required|mimes:jpeg,jpg,png,gif',
            'foto_ktp'=>'required',
            'foto_kk'=>'required',
            'foto_akte'=>'required',

        ]);

        $foto_file = $request->file('foto_paspor');
        $foto_ekstensi = $foto_file->extension();
        $foto_nama = date('ymdhis').".". $foto_ekstensi;
        $foto_file->move(public_path('fotopaspor'), $foto_nama);
        
        $pemohon = $request->only(['nama', 'NIK', 'tempat_lahir', 'tanggal_lahir', 'Agama', 'Jenis_Kelamin', 'Alamat']);
        $idpemohon=Pemohon::create($pemohon);
        $paspor = $request->except(['nama', 'NIK', 'tempat_lahir', 'tanggal_lahir', 'Agama', 'Jenis_Kelamin', 'Alamat']);
        $paspor['id_pemohons']=$idpemohon->id;
        Paspor::create($paspor);
        //$request->session()->flash('pesan',"Penambahan data {$validateData['nama']} berhasil");
        return redirect()->route('paspor.tabelpaspor');
    }

    public function showpaspor($id){
        $paspors = Paspor::with('pemohon')->find($id);
        //dd($paspors);
        return view('staf.detailpaspor', compact('paspors'));
    }

    public function destroypaspor ($id){
        // Pemohon::find($id)->delete();
        // return redirect()->route('staf.tabelpaspor')->with('pesan',"Hapus Data Berhasil");

        $pemohon = Pemohon::find($id);

        if ($pemohon->paspor) {
            $pemohon->paspor->delete();
        }

        $pemohon->delete();

        return redirect()->route('paspor.tabelpaspor');
    }


    public function editpaspor(Request $request, $id)
    {
        $paspor = Paspor::find($id);
        $pemohon = $paspor->pemohon;
        
        //$paspors = Paspor::with('pemohon')->find($id);
        //dd($paspors);
        return view('staf.editpaspor', ['paspor'=>$paspor, 'pemohon'=>$pemohon]);

    }

    public function updatepaspor(Request $request, Paspor $paspor)
    {
        $validateData = $request->validate([
            'nama'=>'required',
            'NIK'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'Agama'=>'required',
            'Jenis_Kelamin'=>'required',
            'Alamat'=>'required', 
            'tgl_pembuatan'=>'required',
            'tgl_habis'=>'required',
            'no_arsip'=>'required',
            'foto_paspor'=>'required',
            'foto_ktp'=>'required',
            'foto_kk'=>'required',
            'foto_akte'=>'required',


           

        ]);
        
        $paspor->update($validateData);
        //$request->session()->flash('pesan',"Penambahan data {$validateData['nama']} berhasil");
        return redirect()->route('paspor.tabelpaspor');
    }


}
