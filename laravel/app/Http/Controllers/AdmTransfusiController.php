<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use App\Models\Transfusi;
use Illuminate\Http\Request;

class AdmTransfusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Transfusi = Transfusi::all();
        return view('AdmTransfusi.index', compact('Transfusi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $penerima = Penerima::all();
        return view('AdmTransfusi.create', compact('penerima'));
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
            'tanggal' => 'required|min:1|max:100',
            'id_penerima' => 'required|min:1|max:255',
            'jumlah' => 'required|min:1|max:255'
            ]);
            Transfusi::create($request->all());
            return redirect()->route('AdmTransfusi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Transfusi = Transfusi::with('Penerima')->findOrFail($id);
        $penerima = Penerima::all();

        return view('AdmTransfusi.edit', compact('Transfusi', 'penerima'));
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
            'tanggal' => 'required|min:1|max:100',
            'id_penerima' => 'required|min:1|max:255',
            'jumlah' => 'required|min:1|max:255'
            ]);
            Transfusi::findOrFail($id)->update([
            'tanggal' => $request->tanggal,
            'id_penerima' => $request->id_penerima,
            'jumlah' => $request->jumlah,
            ]);
            return redirect()->route('AdmTransfusi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Transfusi::findOrFail($id)->delete();
        return redirect()->back();
    }
}
