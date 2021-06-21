<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;
use App\Models\Pendonor;
use App\Models\Waktu;

class AdmDonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Donor = Donor::all();
        return view('AdmDonor.index', compact('Donor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pendonor = Pendonor::all();
        $Waktu = Waktu::all();
        return view('AdmDonor.create', compact('pendonor','Waktu'));
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
            'id_pendonor' => 'required|min:1|max:255',
            'jumlah' => 'required|min:1|max:255',
            'id_waktu' => 'required|min:1|max:255'
            ]);
            Donor::create($request->all());
            return redirect()->route('AdmDonor.index');
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
        $Donor = Donor::with('Pendonor','Waktu')->findOrFail($id);
        $pendonor = Pendonor::all();
        $Waktu = Waktu::all();

        return view('AdmDonor.edit', compact('Donor', 'pendonor', 'Waktu'));

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
            'id_pendonor' => 'required|min:1|max:255',
            'jumlah' => 'required|min:1|max:255',
            'id_waktu' => 'required|min:1|max:255'
            ]);
            Donor::findOrFail($id)->update([
            'tanggal' => $request->tanggal,
            'id_pendonor' => $request->id_pendonor,
            'jumlah' => $request->jumlah,
            'id_waktu' => $request->id_waktu,
            ]);
            return redirect()->route('AdmDonor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Donor::findOrFail($id)->delete();
        return redirect()->back();
    }
}
