<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Reservasi;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ReservasiExport;
use App\Imports\ReservasiImport;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtReservasi = Reservasi::paginate(8);
        return view('reservasi.reservasi',compact('dtReservasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function konfirmasi()
    {
        return view('reservasi.konfirmasi-reservasi');
    }

    public function detail($id)
    {
        $reservasi = Reservasi::findOrFail($id);
        return view('reservasi.detail-reservasi', compact('reservasi'));
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
    
    
            return redirect('/')->withSuccess('Reservasi berhasil disimpan!');
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
        $reservasi = Reservasi::findorfail($id);
        $reservasi->delete();

        return back()->with('info','Data Berhasil Dihapus !');
    }

    public function export() 
    {
        return Excel::download(new ReservasiExport, 'reservasi.xlsx');
    }

    public function import(Request $request) 
    {
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        Excel::import(new ReservasiImport, $request->file('file'));

        return redirect()->back()->with('success', 'Data berhasil diimpor.');
    }
}