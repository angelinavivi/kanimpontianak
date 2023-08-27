<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Paspor;
use App\Models\Pemohon;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use Mockery\Generator\StringManipulation\Pass\Pass;

class StafController extends Controller
{
    public function index(){
        $userCount = Karyawan::count();
        $pasporCount = Paspor::count();
        return view('staf.dashboard', compact('userCount', 'pasporCount'));

    }

    public function detailprofil(){
        $staf = Auth::id();
        $detail = Karyawan::where('id_users', $staf)->get()->first();
        return view('staf.detailstaf', ['detail' => $detail]);
    }

    //untuk edit profil staf
    public function edit($id){
        $detail = Karyawan::find($id);
        return view('staf.editstaf', ['staf' => $detail]);
    }

    public function updatestaf(Request $request, $id){
        $request->validate([
            'Nama'=>'required',
            'NIP'=>'required',
            'Jabatan'=>'required',
            'Tempat_Lahir'=>'required',
            'Tanggal_Lahir'=>'required',
            'Agama'=>'required',
            'Jenis_Kelamin'=>'required',
            'Alamat'=>'required',
            'No_HP'=>'required',
            'email'=>'required',
            'role'=>'required',
        ]);

        // dd($request->all());

        if($request->profil)
        {
            $request->validate([
                'profil'=>'mimes::jpeg,jpg,png,gif',
            ]);
        }

        $detail = Karyawan::find($id);
        $detail->Nama = $request->Nama;
        $detail->NIP = $request->NIP;
        $detail->Jabatan = $request->Jabatan;
        $detail->Tempat_Lahir = $request->Tempat_Lahir;
        $detail->Tanggal_Lahir = $request->Tanggal_Lahir;
        $detail->Agama = $request->Agama;
        $detail->Jenis_Kelamin = $request->Jenis_Kelamin;
        $detail->Alamat = $request->Alamat;
        $detail->No_HP = $request->No_HP;
        $detail->email = $request->email;
        $detail->role = $request->role;
        
       if($request->profil)
       {
        Storage::delete('public/storage/profil/' . $detail->profil);

        $newProfil = $request->profil;
        $newProfilExtension = $newProfil->extension();
        $originalNewProfil = Str::random(10). '-'.time().'.'. $newProfilExtension;
        $newProfil->storeAs('public/profil', $originalNewProfil);

        $detail->profil = $originalNewProfil;
       }

       $detail->save();
        //$request->session()->flash('pesan',"Penambahan data {$validateData['nama']} berhasil");
        Alert::success('Success', 'Data Berhasil DIedit');

        return redirect()->route('staf.detailprofil');
    }

    //logout
    public function logoutstaf()
    {
        return view('login');
    }
    

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
            'no_paspor'=>'required',
            'foto_paspor'=>'required|mimes:jpeg,jpg,png,gif',
            'foto_ktp'=>'required|mimes:jpeg,jpg,png,gif',
            'foto_kk'=>'required|mimes:jpeg,jpg,png,gif',
            'foto_akte'=>'required|mimes:jpeg,jpg,png,gif',

        ]);


        // Mengambil nama file dari request (form)
        $FotoPaspor = $request->foto_paspor;
        $FotoKtp = $request->foto_ktp;
        $FotoKk = $request->foto_kk;
        $FotoAkte = $request->foto_akte;

        //mengambil nam aasli dari file yang diupload
        $originalFotoPaspor = Str::random(10). $FotoPaspor->getClientOriginalName();
        $originalFotoKtp = Str::random(10). $FotoKtp->getClientOriginalName();
        $originalFotoKk = Str::random(10). $FotoKk->getClientOriginalName();
        $originalFotoAkte = Str::random(10). $FotoAkte->getClientOriginalName();

        //measukkan foto ke storage/penyimpanan yang diambil dari variabel
        $FotoPaspor->storeAs('public/fotopaspor', $originalFotoPaspor);
        $FotoKtp->storeAs('public/fotoktp', $originalFotoKtp);
        $FotoKk->storeAs('public/fotokk', $originalFotoKk);
        $FotoAkte->storeAs('public/fotoakte', $originalFotoAkte);

        //inject data dari sebelumnya 
        //dd($originalFotoPaspor);
        
        // $foto_file = $request->file('foto_paspor');
        // $foto_ekstensi = $foto_file->extension();
        // $foto_nama = date('ymdhis').".". $foto_ekstensi;
        // $foto_file->move(public_path('foto_paspor'), $foto_nama);
        
        $pemohon = $request->only(['nama', 'NIK', 'tempat_lahir', 'tanggal_lahir', 'Agama', 'Jenis_Kelamin', 'Alamat']);
        $idpemohon=Pemohon::create($pemohon);
        $paspor = $request->except(['nama', 'NIK', 'tempat_lahir', 'tanggal_lahir', 'Agama', 'Jenis_Kelamin', 'Alamat']);
        $paspor['foto_paspor'] = $originalFotoPaspor;
        $paspor['foto_ktp'] = $originalFotoKtp;
        $paspor['foto_kk'] = $originalFotoKk;
        $paspor['foto_akte'] = $originalFotoAkte;
        $paspor['id_pemohons']=$idpemohon->id;
        Paspor::create($paspor);
        Alert::success('Success', 'Data Berhasil Ditambahkan');

        //$request->session()->flash('pesan',"Penambahan data {$validateData['nama']} berhasil");
        return redirect()->route('staf.tabelpaspor');
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

        $get_paspors = Paspor::where('id_pemohons', $id)->get();
        foreach ($get_paspors as $get_paspor) {
            $paspor = Paspor::find($get_paspor->id);

            Storage::delete('public/storage/fotopaspor/' . $paspor->foto_paspor);
            Storage::delete('public/storage/fotoktp/' . $paspor->foto_ktp);
            Storage::delete('public/storage/fotokk/' . $paspor->foto_kk);
            Storage::delete('public/storage/fotoakte/' . $paspor->foto_akte);

            $paspor->delete();
        }

        $pemohon->delete();
        Alert::success('Success', 'Data Berhasil Dihapus');

         return redirect()->route('staf.tabelpaspor')->with('success', 'Data berhasil dihapus!');
    }


    public function editpemohon($id){
        $pemohon = Pemohon::find($id);
        return view('staf.editpemohon', ['pemohon' => $pemohon]);
    }

    public function updatepemohon(Request $request, $id){
        $validateData = $request->validate([
            
            'nama'=>'required',
            'NIK'=>'required',
            'tempat_lahir'=>'required',
            'tanggal_lahir'=>'required',
            'Agama'=>'required',
            'Jenis_Kelamin'=>'required',
            'Alamat'=>'required',

        ]);
        $pemohon = Pemohon::find($id);
        $pemohon->update($validateData);
        Alert::success('Success', 'Data Berhasil DIedit');

        //$request->session()->flash('pesan',"Penambahan data {$validateData['nama']} berhasil");
        return redirect()->route('staf.tabelpaspor');
    }


    public function editpaspor($id){
        $paspor = Paspor::find($id);
        return view('staf.editpaspor', ['paspor' => $paspor]);
    }

    public function updatePaspor(Request $request, $id)
    {
        $request->validate([
            'tgl_pembuatan' => 'required',
            'tgl_habis' => 'required',
            'no_arsip' => 'required',
            'no_paspor' => 'required'
        ]);

        if($request->foto_paspor)
        {
            $request->validate([
                'foto_paspor' => 'mimes:jpeg,jpg,png,gif'
            ]);
        }


        $paspor = Paspor::find($id);
        $paspor->tgl_pembuatan = $request->tgl_pembuatan;
        $paspor->tgl_habis = $request->tgl_habis;
        $paspor->no_paspor = $request->no_paspor;
        $paspor->no_arsip = $request->no_arsip;

        if($request->foto_paspor)
        {
            Storage::delete('public/storage/fotopaspor/' . $paspor->foto_paspor);

            $newFotoPaspor = $request->foto_paspor;
            $newFotoPasporExtension = $newFotoPaspor->extension();
            $originalNewFotoPaspor = Str::random(10).'-'.time().'.'. $newFotoPasporExtension;
            $newFotoPaspor->storeAs('public/fotopaspor', $originalNewFotoPaspor);
            
            $paspor->foto_paspor = $originalNewFotoPaspor;
        }
    
        if($request->foto_ktp)
        {
            Storage::delete('public/storage/fotoktp/' . $paspor->foto_ktp);

            $newFotoKtp = $request->foto_ktp;
            $newFotoKtpExtension = $newFotoKtp->extension();
            $originalNewFotoKtp = Str::random(10).'-'.time().'.'. $newFotoKtpExtension;
            $newFotoKtp->storeAs('public/fotoktp', $originalNewFotoKtp);

            $paspor->foto_ktp = $originalNewFotoKtp;
        }

        if($request->foto_kk)
        {
            Storage::delete('public/storage/fotokk/' . $paspor->foto_kk);

            $newFotoKk = $request->foto_kk;
            $newFotoKkExtension = $newFotoKk->extension();
            $originalNewFotoKk = Str::random(10).'-'.time().'.'. $newFotoKkExtension;
            $newFotoKk->storeAs('public/fotokk', $originalNewFotoKk);

            $paspor->foto_kk = $originalNewFotoKk;
        }

        if($request->foto_akte)
        {
            Storage::delete('public/storage/fotoakte/' . $paspor->foto_akte);

            $newFotoAkte = $request->foto_akte;
            $newFotoAkteExtension = $newFotoAkte->extension();
            $originalNewFotoAkte = Str::random(10).'-'.time().'.'. $newFotoAkteExtension;
            $newFotoAkte->storeAs('public/fotoakte', $originalNewFotoAkte);

            $paspor->foto_akte = $originalNewFotoAkte;
        }

        $paspor->save();
        Alert::success('Success', 'Data Berhasil Diedit');

        return redirect()->route('staf.tabelpaspor');
    }
    
    
    
    
}
