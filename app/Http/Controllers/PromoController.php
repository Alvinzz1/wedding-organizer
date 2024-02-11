<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Promo;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPromo = Promo::paginate(1);
        return view('promo.promo',compact('dtPromo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promo.create-promo');
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
            'nama_promo' => 'required|string',
            'harga_awal' => 'required|numeric',
            'harga' => 'required|numeric',
            'bonus_promo' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan tipe file gambar yang diterima dan batasan ukuran
        ]);
    
        $imagePath = $request->file('image')->store('pricelist_images', 'public');
    
        Promo::create([
            'nama_promo' => $request->nama_promo,
            'harga_awal' => $request->harga_awal,
            'harga' => $request->harga,
            'bonus_promo' => $request->bonus_promo,
            'image' => $imagePath,
        ]);
    
        return redirect('promo')->withToastSuccess('Data Berhasil Ditambahkan !');
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
        $promo = Promo::findorfail($id);
        return view('promo.edit-promo',compact('promo'));
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
            'nama_promo' => 'required|string',
            'harga_awal' => 'required|numeric',
            'harga' => 'required|numeric',
            'bonus_promo' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Optional validation for the image
        ]);

        $promo = Promo::findorfail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('pricelist_images', 'public');
            $promo->image = $imagePath;
        }
        
        $promo->update($request->except('image'));

        return redirect('promo')->withToastSuccess('Data Berhasil Diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $promo = Promo::findorfail($id);
        $promo->delete();

        return back()->with('info','Data Berhasil Dihapus !');
    }
}