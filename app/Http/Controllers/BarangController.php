<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Barang::all();
        return view('Barang',['blog'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Barang::paginate(5);
        return view('Barang', ['blog'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Barang::find($id_barang);
        return view('Barang.edit',['blog'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { 
        $request->validate([
            'id_barang' => 'required',
            'kode_barang' => 'required',
            'nama_barang' => 'required',
            'kategori_barang' => 'required',
            'harga' => 'required',
            'qty' => 'required',
            ]);

            Barang::find($id_barang)->update($request->all());
            return redirect()->route('Barang')->with('success', 'Barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Barang::find($id_barang)->delete();
        return redirect()->route('Barang')
        -> with('success', 'Barang Berhasil Dihapus');
    }
    public function search(Request $request)
    {
        $data = Barang::where([
            ['kode_barang', '!=', null, 'OR', 'nama_barang', '!=', null, 'OR', 'kategori_barang', '!=', null],
            [function ($query) use ($request){
                if (($keyword = $request->keyword)) {
                    $query  ->orWhere('kode_barang', 'like', "%{$keyword}%")
                            ->orWhere('nama_barang', 'like', "%{$keyword}%")
                            ->orWhere('kategori_barang', 'like', "%{$keyword}%");
                }
            }]
        ])
        ->orderBy('id_barang')
        ->paginate(5);
    
        return view('Barang', ['blog'=>$data])
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
