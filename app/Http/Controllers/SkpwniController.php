<?php

namespace App\Http\Controllers;

use App\Models\skpwni;
use App\Models\Berkas;
use Illuminate\Http\Request;
use Carbon\Carbon;

class SkpwniController extends Controller
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
        return view('skpwnis.create');
    }

    public function cariskpwni(Request $request)
    {
        $request->validate([
            'no_skpwni' => 'required'
        ]);
        $no_skpwni = $request->get('no_skpwni');

        $cari = Skpwni::where('no_skpwni',$no_skpwni)->count();
        $files = Berkas::where('identifikasi',$no_skpwni)->where('doc','SKPWNI')->get();
        if ($cari>0) {
            return view('skpwnis.uploadberkas',compact('files'))->with('no_skpwni',$no_skpwni);
        } else {
            return view('skpwnis.tambahberkas',compact('files'))->with('no_skpwni',$no_skpwni);
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
            'no_skpwni' => 'required',
            'doc' => 'required',
            'file' => 'required|image|mimes:jpeg,png,jpg|max:200',
        ]);

        if($request->hasfile('file'))
        {
            // menyimpan data file yang diupload ke variabel $file
            $file = $request->file('file');
            $dok = $request->get('doc');
            $noskpwni = $request->get('no_skpwni');
            $tgl = Carbon::now()->format('dmYHi');
            $nm = $dok.'-'.pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);;
            $nama_file = $tgl."_".$nm.'.jpg';
            $simpan = $request->file->storeAs('public/skpwni/'.$noskpwni.'/', $nama_file);
            $path = 'skpwni/'.$noskpwni.'/'.$nama_file;
            //Storage::put('public/dok/'.time().'_'.$nama_file);
        }

        $no_skpwni = $request->get('no_skpwni');
        $cari = Skpwni::where('no_skpwni',$no_skpwni)->count();
        if ($cari>0) {
            //
        } else {
            $data = Skpwni::create([
                'no_skpwni' => $request->no_skpwni,
            ]);
        }

        $berkas = Berkas::create([
            'doc' => 'SKPWNI',
            'jenis' => $request->get('doc'),
            'identifikasi' => $no_skpwni,
            'path' => $path
        ]);
        $files = Berkas::where('identifikasi',$no_skpwni)->where('doc','SKPWNI')->get();
        return view('skpwnis.uploadberkas',compact('no_skpwni','files'))->with('success','Berkas berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\skpwni  $skpwni
     * @return \Illuminate\Http\Response
     */
    public function show(skpwni $skpwni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\skpwni  $skpwni
     * @return \Illuminate\Http\Response
     */
    public function edit(skpwni $skpwni)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\skpwni  $skpwni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, skpwni $skpwni)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\skpwni  $skpwni
     * @return \Illuminate\Http\Response
     */
    public function destroy(skpwni $skpwni)
    {
        //
    }
}
