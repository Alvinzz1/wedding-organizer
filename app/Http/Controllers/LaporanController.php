<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Reservasi;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtReservasi = Reservasi::paginate(8);
        return view('laporan.laporan',compact('dtReservasi'));
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
            'name' => 'required',
            'telp' => 'required',
            'person' => 'required|numeric',
            'reservation_date' => 'required|date',
            'reservation_time' => 'required',
        ]);
    
        try {
            $reservasi = Reservasi::create([
                'name' => $request->name,
                'telp' => $request->telp,
                'person' => $request->person,
                'reservation_date' => $request->reservation_date,
                'reservation_time' => $request->reservation_time,
                'message' => $request->message,
            ]);
    
            $this->sendConfirmation($reservasi);
    
            return redirect('/')->withToastSuccess('Reservasi berhasil disimpan');
        } catch (\Exception $e) {
            return redirect()->back()->withInput()->withErrors(['error' => 'Terjadi kesalahan. Mohon coba lagi.']);
        }
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
