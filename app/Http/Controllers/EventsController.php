<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Events;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtEvents = Events::paginate(3);
        return view('events.events',compact('dtEvents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('events.create-events');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'tanggal_events' => 'required|date',
            'nama_pasangan' => 'required|string',
            'lokasi' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan tipe file gambar yang diterima dan batasan ukuran
        ]);
    
        $imagePath = $request->file('image')->store('pricelist_images', 'public');
    
        Events::create([
            'tanggal_events' => $request->tanggal_events,
            'nama_pasangan' => $request->nama_pasangan,
            'lokasi' => $request->lokasi,
            'image' => $imagePath,
        ]);
    
        return redirect('events')->withToastSuccess('Data Berhasil Ditambahkan !');
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
        $events = Events::findorfail($id);
        return view('events.edit-events',compact('events'));
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
            'tanggal_events' => 'required|date',
            'nama_pasangan' => 'required|string',
            'lokasi' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Optional validation for the image
        ]);

        $events = Events::findorfail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('pricelist_images', 'public');
            $events->image = $imagePath;
        }
        
        $events->update($request->except('image'));

        return redirect('events')->withToastSuccess('Data Berhasil Diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Events::findorfail($id);
        $events->delete();

        return back()->with('info','Data Berhasil Dihapus !');
    }
}


