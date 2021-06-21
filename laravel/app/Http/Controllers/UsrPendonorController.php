<?php

namespace App\Http\Controllers;

use App\Models\Pendonor;
use App\Models\Darah;
use Illuminate\Http\Request;

class UsrPendonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Darah = Darah::all();
        return view('UsrPendonor.index', compact('Darah'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Darah = Darah::all();
        return view('UsrPendonor.index', compact('Darah'));
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
            'nama_pendonor' => 'required|min:1|max:100',
            'alamat' => 'required|min:1|max:500',
            'id_darah' => 'required|min:1|max:255',
            'telpon' => 'required|min:1|max:255'
            ]);
            Pendonor::create($request->all());
            return redirect()->route('welcome.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
