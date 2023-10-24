<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $barang=array('Mikroskop', 'Meja', 'Kursi');
        $kondisi=array('Bagus', 'Sedikit Rusak', 'Sangat Rusak');
        return [
              // $table->id();
    //         $table->timestamps();
    //         $table->string("jenisBarang");
    //         $table->string("kondisiBarang");
    //         $table->string("keteranganBarang");
    //         $table->integer("jumlahBarang");
    //         $table->string("fotoBarang"); 
            

            "jenisBarang" => array_rand($barang,1),
            "kondisiBarang" => array_rand($kondisi,1),
            "keteranganBarang" => fake()->realText(),
            "jumlahBarang" => random_int(1,100),
            "fotoBarang" => fake()->image(0,0),

        ];
    }
}
