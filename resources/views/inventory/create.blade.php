@extends('inventory.layout')
@section('content')

<div class="card">
    <div class="card-header">Inventory Page</div>
    <div class="card-body">
        <form action="{{ url('inventory')}}" method="post">
            {!! csrf_field() !!}
             <!-- $table->id();
             $table->timestamps();
             $table->string("jenisBarang");
             $table->string("kondisiBarang");
             $table->string("keteranganBarang");
             $table->integer("jumlahBarang");
             $table->string("fotoBarang");  -->

            <label>Jenis Barang</label> <br>
            <input type="dropdown" name="jenisBarang" id="jenisBarang" class="form-control">
            <label>Kondisi Barang</label> <br>
            <label>Keterangan</label> <br>
            <label>Jumlah Barang</label> <br>
            <label>Foto</label> <br>
           
        </form>
    </div>
</div>
