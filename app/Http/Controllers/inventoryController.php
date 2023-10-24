<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;



class inventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $inventory = Inventory::all();
        return view('Inventory.index')->with('inventory', $inventory);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('inventory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $inventory = new Inventory();
        // $inventory->jenisBarang = $request->JenisBarang;
        // $inventory->kondisiBarang = $request->KondisiBarang;
        // $inventory->keteranganBarang = $request->KeteranganBarang;
        // $inventory->jumlahBarang = $request->JumlahBarang;
        // $inventory->fotoBarang = $request->FotoBarang;
        $input = $request->all();
        inventory::create($input);
        return redirect('inventory')->with('flash_massage','Barang Baru telah didaftarkan!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $inventory = Inventory::find($id);
        return view('inventory.show')->with('inventory', $inventory);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $inventory = Inventory::find($id);
        return view('inventory.edit')->with('inventory', $inventory);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $inventory = Inventory::find($id);
        $input = $request->all();
        $inventory->update($input);
        return redirect('inventory')->with('flash_massage','Barang telah di-Update!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        Inventory::destroy($id);
        return redirect('inventory')->with('flash_message','Barang sudah dihapus!!');
    }
}
