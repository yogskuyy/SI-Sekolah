<?php

namespace App\Http\Controllers;
use PDF;
use App\Models\Ekstrakurikuler;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $siswa = Siswa::with(['kelas','ekstra'])->get();
        return view('siswa.index',compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kelas = Kelas::all();
        $ekstra = Ekstrakurikuler::all();

        return view('siswa.create', compact('kelas','ekstra'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request -> validate([
            'id_kelas'=>'required',
            'nama'=>'required|min:3',
            'alamat'=>'required|min:3',
            'tanggal_lahir'=>'required|min:3',
            'jenis_kelamin'=>'required|min:3',
            'id_ekstra'=>'required',
        ]);

        $sw = new Siswa;
        $sw->id_kelas = $request->id_kelas;
        $sw->nama_siswa = $request->nama;
        $sw->alamat = $request->alamat;
        $sw->tanggal_lahir = $request->tanggal_lahir;
        $sw->jenis_kelamin = $request->jenis_kelamin;
        $sw->id_ekstrakurikuler = $request->id_ekstra;
        $sw->save();

        return redirect()-> route('siswa.index')->with('success','Data Berhasil di tambah.');
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
    public function edit(string $id_siswa)
    {
        $siswa= Siswa::find($id_siswa);
        $kelas = Kelas::all();
        $ekstra = Ekstrakurikuler::all();

        return view('siswa.edit', compact('siswa','kelas','ekstra'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_siswa)
    {
        $validated = $request -> validate([
            'id_kelas'=>'required',
            'nama'=>'required|min:3',
            'alamat'=>'required|min:3',
            'tanggal_lahir'=>'required|min:3',
            'jenis_kelamin'=>'required|min:3',
            'id_ekstra'=>'required',
        ]);

        $sw = Siswa::find($id_siswa);
        $sw->id_kelas = $request->id_kelas;
        $sw->nama_siswa = $request->nama;
        $sw->alamat = $request->alamat;
        $sw->tanggal_lahir = $request->tanggal_lahir;
        $sw->jenis_kelamin = $request->jenis_kelamin;
        $sw->id_ekstrakurikuler = $request->id_ekstra;
        $sw->save();

        return redirect()-> route('siswa.index')->with('success','Data Berhasil di tambah.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id_siswa)
    {
        $siswa = Siswa::find($id_siswa);
        $siswa->delete();

        return back()->with('success','data berhasil di hapus');
    }
    public function siswadownloadPdf(){
        $siswa = Siswa::all();
        $pdf = PDF::loadView('siswa.laporan',['siswa'=>$siswa])->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('laporan-siswa.pdf');
    }
}
