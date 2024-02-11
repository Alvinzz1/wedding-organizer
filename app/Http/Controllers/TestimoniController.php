<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Testimoni;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtTestimoni = Testimoni::paginate(5);
        return view('testimoni.testimoni',compact('dtTestimoni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('testimoni.create-testimoni');
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
            'tanggal_events' => 'required|date',
            'nama_pasangan' => 'required|string',
            'lokasi' => 'required|string',
            'video' => 'required|mimes:mp4,mov,avi|max:20480', // Sesuaikan dengan tipe file video yang diterima dan batasan ukuran
        ]);

        $videoPath = $request->file('video')->store('video_files', 'public'); // Menyimpan file video ke dalam direktori 'storage/app/public/video_files'

        Testimoni::create([
            'tanggal_events' => $request->tanggal_events,
            'nama_pasangan' => $request->nama_pasangan,
            'lokasi' => $request->lokasi,
            'video' => $videoPath, // Mengubah variabel yang disimpan sesuai dengan kolom 'video'
        ]);

        return redirect('testimoni')->withToastSuccess('Data Berhasil Ditambahkan !');
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
        $testi = Testimoni::findorfail($id);
        return view('testimoni.edit-testimoni',compact('testi'));
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
            'video' => 'mimes:mp4,mov,avi|max:20480', // Validasi untuk tipe file video yang diunggah
        ]);
    
        $testi = Testimoni::findorfail($id);
    
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('video_files', 'public');
            $testi->video = $videoPath;
        }
    
        $testi->tanggal_events = $request->tanggal_events;
        $testi->nama_pasangan = $request->nama_pasangan;
        $testi->lokasi = $request->lokasi;
    
        $testi->save();
    
        return redirect('testimoni')->withToastSuccess('Data Berhasil Diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $testi = Testimoni::findorfail($id);
        $testi->delete();

        return back()->with('info','Data Berhasil Dihapus !');
    }
}
