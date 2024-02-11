<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Pricelist;

class PricelistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtPricelist = Pricelist::paginate(6);
        return view('pricelist.pricelist',compact('dtPricelist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pricelist.create-pricelist');
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
            'nama_pricelist' => 'required|string',
            'harga' => 'required|numeric',
            'bonus_pricelist' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Sesuaikan dengan tipe file gambar yang diterima dan batasan ukuran
        ]);
    
        $imagePath = $request->file('image')->store('pricelist_images', 'public');
    
        Pricelist::create([
            'nama_pricelist' => $request->nama_pricelist,
            'harga' => $request->harga,
            'bonus_pricelist' => $request->bonus_pricelist,
            'image' => $imagePath,
        ]);
    
        return redirect('pricelist')->withToastSuccess('Data Berhasil Ditambahkan !');
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
        $price = Pricelist::findorfail($id);
        return view('pricelist.edit-pricelist',compact('price'));
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
            'nama_pricelist' => 'required|string',
            'harga' => 'required|numeric',
            'bonus_pricelist' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Optional validation for the image
        ]);

        $price = Pricelist::findorfail($id);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('pricelist_images', 'public');
            $price->image = $imagePath;
        }
        
        $price->update($request->except('image'));

        return redirect('pricelist')->withToastSuccess('Data Berhasil Diupdate !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $price = Pricelist::findorfail($id);
        $price->delete();

        return back()->with('info','Data Berhasil Dihapus !');
    }
}