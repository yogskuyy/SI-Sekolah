<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Kelas;
use App\Models\Siswa;
use App\Models\walimurid;
use Illuminate\Http\Request;

class walimuridController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $walimurid = Walimurid::with(['siswa'])->get();
        return view('walimurid.index', compact('walimurid'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $siswa = Siswa::all();
        return view('walimurid.create', compact('siswa'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request -> validate([
            'id_walimurid'=>'required',
            'id_siswa'=>'required',
            'nama_walimurid'=>'required|min:3',
            'alamat'=>'required|min:3',
            'no_hp'=>'required|min:3',
            'keterangan'=>'required|min:3',
        ]);

        $wm = new Walimurid();
        $wm->id_walimurid = $request->id_walimurid;
        $wm->id_siswa = $request->id_siswa;
        $wm->nama_walimurid = $request->nama_walimurid;
        $wm->alamat = $request->alamat;
        $wm->no_hp = $request->no_hp;
        $wm->keterangan = $request->keterangan;
        $wm->save();

        return redirect()-> route('walimurid.index')->with('success','Data Berhasil di tambah.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_walimurid)
    {
        $walimurid= Walimurid::find($id_walimurid);
        $siswa= Siswa::all();

        return view('walimurid.edit', compact('walimurid','siswa'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_walimurid)
    {
        $validated = $request -> validate([
            'id_siswa'=>'required',
            'nama_walimurid'=>'required|min:3',
            'alamat'=>'required|min:3',
            'no_hp'=>'required|min:3',
            'keterangan'=>'required|min:3',
        ]);

        $wm =  Walimurid::find($id_walimurid);
        $wm->id_siswa = $request->id_siswa;
        $wm->nama_walimurid = $request->nama_walimurid;
        $wm->alamat = $request->alamat;
        $wm->no_hp = $request->no_hp;
        $wm->keterangan = $request->keterangan;
        $wm->save();

        return redirect()-> route('walimurid.index')->with('success','Data Berhasil di tambah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_walimurid)
    {
        $walimurid = Walimurid::find($id_walimurid);
        $walimurid->delete();

        return back()->with('success','data berhasil di hapus');
    }
    public function walidownloadPdf(){
        $walimurid = Walimurid::all();
        $pdf = PDF::loadView('walimurid.laporan',['walimurid'=>$walimurid])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan-walimurid.pdf');
    }
}
