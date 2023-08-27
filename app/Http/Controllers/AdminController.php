<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use App\Models\Paspor;
use App\Models\Pemohon;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class AdminController extends Controller
{
    public function index(){

        $userCount = Karyawan::count();
        $pasporCount = Paspor::count();
        return view('admin.dashboard', compact('userCount', 'pasporCount'));

        
       

        // $jumlahStaf = Karyawan:count();
        // return view('admin.dashboard', compact('jumlahStaf'));
    }

    

    public function destroy ($id){
        $karyawan = Karyawan::find($id);
        $user = User::find($karyawan->id_users);

        if(auth()->user()->id == $user->id)
        {
            Alert::error('Gagal', 'Tidak dapat menghapus akun yang digunakan');
            return redirect()->route('admin.tabelstaff');
        }

        Storage::delete('public/storage/profil/' . $karyawan->profil);


        $karyawan->delete();

        $user->delete();
        


        //Karyawan::find($id)->delete();
        Alert::success('Success', 'Data berhasil dihapus');

        return redirect()->route('admin.tabelstaff')->with('pesan',"Hapus Data Berhasil");
    }

    public function tambahstaf()
    {
        return view('admin.tambahstaf');
    }

    public function storestaf(Request $request){
        $validateData = $request->validate([
            'username'=>'required|unique:users',
            'password'=>'required',
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
            'profil'=>'required|mimes::jpeg,jpg,png,gif',
            'role'=>'required',
           

        ]);

        $Profil = $request->profil;

        $originalProfil = Str::random(10). $Profil->getClientOriginalName();

        $Profil->storeAs('public/profil', $originalProfil);
        
        $user = $request->only(['username', 'password']);
        $iduser=User::create($user);
        $karyawan = $request->except(['username', 'password']);
        $karyawan['profil'] = $originalProfil;
        $karyawan['id_users']=$iduser->id;
        Karyawan::create($karyawan);
        //$request->session()->flash('pesan',"Penambahan data {$validateData['nama']} berhasil");
        Alert::success('Success', 'Data Berhasil Ditambahkan');

        return redirect()->route('admin.tabelstaff');
    }

    public function editstaf($id){
        $staff = Karyawan::find($id);
        return view('admin.editstaf', ['staf' => $staff]);
    }

    public function update(Request $request, $id){
        // dd($request->all());
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

        if($request->profil)
        {
            $request->validate([
                'profil'=>'mimes::jpeg,jpg,png,gif',
            ]);
        }

        $staf = Karyawan::find($id);
        $staf->Nama = $request->Nama;
        $staf->NIP = $request->NIP;
        $staf->Jabatan = $request->Jabatan;
        $staf->Tempat_Lahir = $request->Tempat_Lahir;
        $staf->Tanggal_Lahir = $request->Tanggal_Lahir;
        $staf->Agama = $request->Agama;
        $staf->Jenis_Kelamin = $request->Jenis_Kelamin;
        $staf->Alamat = $request->Alamat;
        $staf->No_HP = $request->No_HP;
        $staf->email = $request->email;
        $staf->role = $request->role;
        
       if($request->profil)
       {
        Storage::delete('public/storage/profil/' . $staf->profil);

        $newProfil = $request->profil;
        $newProfilExtension = $newProfil->extension();
        $originalNewProfil = Str::random(10). '-'.time().'.'. $newProfilExtension;
        $newProfil->storeAs('public/profil', $originalNewProfil);

        $staf->profil = $originalNewProfil;
       }

       $staf->save();
       Alert::success('Success', 'Data Berhasil Diedit');

        return redirect()->route('admin.tabelstaff');
    }


    public function editakun($id){
        $user= User::find($id);
        //dd('$id');
        return view('admin.editakun', ['user' => $user]);
    }

    public function updateakun(Request $request, $id){
        $validateData = $request->validate([
            'username'=>'required',
            'password'=>'required',
            

        ]);
        $user = User::find($id);
        
        $user->update($validateData);
        //$request->session()->flash('pesan',"Penambahan data {$validateData['nama']} berhasil");
        Alert::success('Success', 'Password Berhasil Diubah');
        return redirect()->route('admin.tabelstaff');
    }

    public function show($id){
        $staf = Karyawan::with('user')->find($id);
        //dd($paspors);
        return view('admin.detailstaf', compact('staf'));

    }

   

    public function tabelstaf(){
        $staffs = Karyawan::with('user')->get();
        return view('admin.tabelstaf', compact('staffs'));



        //Mengambil peran (role) pengguna yang saat ini terautentikasi
        //$role = auth()->user()->role;

        //dd($role);

        // Jika peran pengguna adalah 'staf', tampilkan tabel
        // if ($role == 'staff') {
        //     $staffs = Karyawan::where('role', 'staff')->get(); // Gantikan dengan cara mengambil data yang sesuai
        //     return view('admin.tabelstaf', ['staffs' => $staffs]);
        // } else {
        //     return abort(403, 'Unauthorized'); // Jika peran bukan 'staf', tampilkan pesan Unauthorized
        // }
    }

    //tabel paspor
    public function tabelpaspor(){
        // $pemohons = Pemohon::all();
        // return view('admin.tabelpaspor')->with('pemohons', $pemohons);

        $paspors = Paspor::with('pemohon')->get();
        
        // $pemohons = Pemohon::all();
        return view('admin.tabelpaspor', compact('paspors'));
    }

    //detail paspor
    public function showpaspor($id){
        $paspors = Paspor::with('pemohon')->find($id);
        //dd($paspors);
        return view('admin.detailpaspor', compact('paspors'));

    }

    // //regis
    // public function tambahadmin()
    // {
    //     return view('regis');
    // }

    //logout
    public function logoutadmin()
    {
        
        return view('login');
    }

    

    //untuk menampilkan detail profile
    public function showprofile(){
        $user = Auth::id();
        $profil = Karyawan::where('id_users', $user)->get()->first();
        return view('admin.detailadmin', ['profil' => $profil]);
    }

    //untuk edit profil admin
    public function editadmin($id){
        $profil = Karyawan::find($id);
        return view('admin.editadmin', ['admin' => $profil]);
    }

    // public function updateadmin(Request $request, $id){
    //     $validateData = $request->validate([
    //         'Nama'=>'required',
    //         'NIP'=>'required',
    //         'Jabatan'=>'required',
    //         'Tempat_Lahir'=>'required',
    //         'Tanggal_Lahir'=>'required',
    //         'Agama'=>'required',
    //         'Jenis_Kelamin'=>'required',
    //         'Alamat'=>'required',
    //         'No_HP'=>'required',
    //         'email'=>'required',
    //         'profil'=>'required',
    //         'role'=>'required',

    //     ]);
        
    //     $profil = Karyawan::find($id);
    //     $profil->update($validateData);
    //     //$request->session()->flash('pesan',"Penambahan data {$validateData['nama']} berhasil");
    //     return redirect()->route('admin.dashboard');
    // }

    public function updateadmin(Request $request, $id){
        // dd($request->all());
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

        if($request->profil)
        {
            $request->validate([
                'profil'=>'mimes::jpeg,jpg,png,gif',
            ]);
        }

        $profil = Karyawan::find($id);
        $profil->Nama = $request->Nama;
        $profil->NIP = $request->NIP;
        $profil->Jabatan = $request->Jabatan;
        $profil->Tempat_Lahir = $request->Tempat_Lahir;
        $profil->Tanggal_Lahir = $request->Tanggal_Lahir;
        $profil->Agama = $request->Agama;
        $profil->Jenis_Kelamin = $request->Jenis_Kelamin;
        $profil->Alamat = $request->Alamat;
        $profil->No_HP = $request->No_HP;
        $profil->email = $request->email;
        $profil->role = $request->role;
        
       if($request->profil)
       {
        Storage::delete('public/storage/profil/' . $profil->profil);

        $newProfil = $request->profil;
        $newProfilExtension = $newProfil->extension();
        $originalNewProfil = Str::random(10). '-'.time().'.'. $newProfilExtension;
        $newProfil->storeAs('public/profil', $originalNewProfil);

        $profil->profil = $originalNewProfil;
       }

       $profil->save();
       Alert::success('Success', 'Data Berhasil Diedit');

        return redirect()->route('admin.tabelstaff');
    }

    

    

    
}
