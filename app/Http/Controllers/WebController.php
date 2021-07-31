<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Validator;


class WebController extends Controller
{
    public function home()
    {
        $layanan = DB::table('v_lay_image')->get();
    	return view('welcome',['layanan' => $layanan]);
    }
    public function listBlanko(){
        return view('listBlanko');
    }
    public function detail($id){
        $layanan = DB::table('layanan')->where('id_layanan',$id)->get();
        $syarat = DB::table('v_layanan_syar')->where('id_layanan',$id)->get();
    	return view('detail',['syarat' => $syarat,'layanan'=> $layanan]);
        
    }
    public function tambahSyarat(){
        $layanan = DB::table('layanan')->get();
        $syarat = DB::table('syarat')->orderBy('create_at','desc')->limit('5')->get();
        return view('tambahSyarat',['layanan' => $layanan,'syarat' => $syarat]);
    }
    public function simpanSyarat(Request $request){
        
	DB::table('syarat')->insert([
		'id_layanan' => $request->id_layanan,
		'syarat' => $request->syarat
	]);
    return redirect('/tambahSyarat');
    }
    public function tambahGambar(){
        $layanan = DB::table('layanan')->get();
        return view('uploadFile',['layanan' => $layanan]);
    }
    public function simpanGambar(Request $request){
        
	DB::table('layanan_image')->insert([
		'id_layanan' => $request->id_layanan,
		'nama_file' => $request->nama_file
	]);
    return redirect('/tambahGambar');
    }
    public function tambahFile(){
        $layanan = DB::table('layanan')->get();
        return view('uploadFile',['layanan' => $layanan]);
    }
    public function simpanFile(Request $request){
        
	DB::table('file_layanan')->insert([
		'id_layanan' => $request->id_layanan,
		'nama_file' => $request->nama_file,
	]);

    return redirect('/tambahFile');
    }
    public function ktp()
    {
    	return view('ktp');
    }
    public function syarat()
    {
        return view('syarat');
    }

    public function syaratkk()
    {
        return view('syaratkk');
    }
    
    public function syarataktakematian()
    {
        return view('syarataktakematian');
    }
    
    public function syaratnikah()
    {
        return view('syaratnikah');
    }
    
    public function syaratPerubahanData()
    {
        return view('syaratPerubahanData');
    }
    
    public function syaratAhliWaris()
    {
        return view('syaratAhliWaris');
    }
    
    public function syaratUsaha()
    {
        return view('syaratUsaha');
    }
    
    public function syaratAktaKelahiran()
    {
        return view('syaratAktaKelahiran');
    }
    
    public function syaratTidakMampu()
    {
        return view('syaratTidakMampu');
    }
    
    public function syaratDomisiliKantor()
    {
        return view('syaratDomisiliKantor');
    }
    
    public function syaratDomisiliTempatTinggal()
    {
        return view('syaratDomisiliTempatTinggal');
    }
    
    public function syaratTanah()
    {
        return view('syaratTanah');
    }
    
    public function syaratPindah()
    {
        return view('syaratPindah');
    }
    
    public function syaratPindahWilayah()
    {
        return view('syaratPindahWilayah');
    }
    

    public function contact()
    {
    	return view('contact');
    }
}
