<?php

namespace App\Http\Controllers;

use App\Models\KartuKeluarga;
use App\Models\Berkas;
use Illuminate\Http\Request;
use Carbon\Carbon;

class KartuKeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kartukeluargas.create');
    }

    public function tambahberkas()
    {
        $files = Berkas::where('identifikasi',$no_kk)->where('doc','Kartu Keluarga')->get();
        return view('kartukeluargas.tambahberkas',compact('files'));
    }

    public function uploadberkas()
    {
        $files = Berkas::where('identifikasi',$no_kk)->where('doc','Kartu Keluarga')->get();
        return view('kartukeluargas.uploadberkas',compact('files'));
    }

    public function carikk(Request $request)
    {
        $request->validate([
            'no_kk' => 'required'
        ]);
        $no_kk = $request->get('no_kk');

        $cari = KartuKeluarga::where('no_kk',$no_kk)->count();
        $files = Berkas::where('identifikasi',$no_kk)->where('doc','Kartu Keluarga')->get();
        if ($cari>0) {
            return view('kartukeluargas.uploadberkas',compact('files'))->with('no_kk',$no_kk);
        } else {
            return view('kartukeluargas.tambahberkas',compact('files'))->with('no_kk',$no_kk);
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'no_kk' => 'required',
            'doc' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg|max:200',
        ]);

        if($request->hasfile('file'))
        {
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('file');
            $dok = $request->get('doc');
            $nokk = $request->get('no_kk');
            $tgl = Carbon::now()->format('dmYHi');
            $nm = $dok.'-'.pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);;
            $nama_file = $tgl."_".$nm.'.jpg';
            $simpan = $request->file->storeAs('public/'.$nokk.'/', $nama_file);
            $path = $nokk.'/'.$nama_file;
            //Storage::put('public/dok/'.time().'_'.$nama_file);
        }

        $no_kk = $request->get('no_kk');
        $cari = KartuKeluarga::where('no_kk',$no_kk)->count();
        if ($cari>0) {
            //
        } else {
            $data = KartuKeluarga::create([
                'no_kk' => $request->no_kk,
            ]);
        }

        $berkas = Berkas::create([
            'doc' => 'Kartu Keluarga',
            'identifikasi' => $no_kk,
            'path' => $path
        ]);
        $files = Berkas::where('identifikasi',$no_kk)->where('doc','Kartu Keluarga')->get();
        $i=0;
        return view('kartukeluargas.uploadberkas',compact('no_kk','files','i'))->with('success','Berkas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\KartuKeluarga  $kartuKeluarga
     * @return \Illuminate\Http\Response
     */
    public function show(KartuKeluarga $kartuKeluarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\KartuKeluarga  $kartuKeluarga
     * @return \Illuminate\Http\Response
     */
    public function edit(KartuKeluarga $kartuKeluarga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\KartuKeluarga  $kartuKeluarga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, KartuKeluarga $kartuKeluarga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\KartuKeluarga  $kartuKeluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(KartuKeluarga $kartuKeluarga)
    {
        //
    }
}
