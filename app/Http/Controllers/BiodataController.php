<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreBiodataRequest;
use App\Http\Requests\UpdateBiodataRequest;
use App\Models\Biodata;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $biodatas = DB::table('biodatas')
            ->when($request->input('NAMA_ASAL_SEKOLAH'), function($query, $NAMA_ASAL_SEKOLAH)
        { return $query->where('NAMA_ASAL_SEKOLAH', 'like', '%' . $NAMA_ASAL_SEKOLAH . '%' );
        })
            ->select('id', 'NAMA_ASAL_SEKOLAH', 'JENIS_SEKOLAH', 'JURUSAN_SEKOLAH', 'KOTA_SEKOLAH', 'JUMLAH_NILAI_UAN_SEKOLAH_RAPORT_TERAKHIR_SMT_SEBELUMNYA')
            ->orderBy('NAMA_ASAL_SEKOLAH')
            ->paginate(10);
        return view('pages.biodata.index', compact('biodatas'));
    }

    public function create()
    {
        return view('pages.biodata.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Biodata::create(['NAMA_ASAL_SEKOLAH'=> $request['NAMA_ASAL_SEKOLAH'],
        'JENIS_SEKOLAH' => $request['JENIS_SEKOLAH'],
        'JURUSAN_SEKOLAH'=> $request['JURUSAN_SEKOLAH'],
        'KOTA_SEKOLAH'=> $request['KOTA_SEKOLAH'],
        'JUMLAH_NILAI_UAN_SEKOLAH_RAPORT_TERAKHIR_SMT_SEBELUMNYA'=> $request['JUMLAH_NILAI_UAN_SEKOLAH_RAPORT_TERAKHIR_SMT_SEBELUMNYA'],
        ]);
        return redirect()->route('biodata.index')->with('success','Data Berhasil');
    }

    
     public function edit($biodata)
    {
        $biodata =  Biodata::findOrFail($biodata);
        return view('pages.biodata.edit', compact('biodata'));
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    
    public function update(Request $request, $id)
{
    // Validasi data dari formulir
    $data = $request->validate([
        'NAMA_ASAL_SEKOLAH' => 'required',
        'JENIS_SEKOLAH' => 'required',
        'JURUSAN_SEKOLAH' => 'required',
        'KOTA_SEKOLAH' => 'required',
        'JUMLAH_NILAI_UAN_SEKOLAH_RAPORT_TERAKHIR_SMT_SEBELUMNYA' => 'required',
    ]);

    // Temukan objek Biodata berdasarkan ID
    $biodata = Biodata::find($id);

    // Update atribut pada objek Biodata
    $biodata->update($data);
    return redirect()->route('biodata.index')->with('success','Data Berhasil Terubah');
    
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $biodata = Biodata::find($id);
        $biodata->delete();
        return redirect()->route('biodata.index')->with('success', 'Delete Subject successfully');
    }
    
        
    }
