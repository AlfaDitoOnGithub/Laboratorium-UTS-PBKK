<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory extends Model
{
    use HasFactory;
    protected $table = 'inventory';
    protected $primaryKey = 'id';
    protected $fillable = ['jenisBarang', 'kondisiBarang', 'keteranganBarang', 'jumlahBarang', 'fotoBarang'];
    // $table->id();
    //         $table->timestamps();
    //         $table->string("jenisBarang");
    //         $table->string("kondisiBarang");
    //         $table->string("keteranganBarang");
    //         $table->integer("jumlahBarang");
    //         $table->string("fotoBarang"); 

}
