<?php

namespace Database\Factories;

use App\Models\BukuModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BukuModel>
 */
class BukuModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = BukuModel::class;
    public function definition(): array
    {
        return [
            'judul_buku' => fake()->realText(30),
            'jenis_buku' => fake()->realText(10),
            'tenggat_waktu' => fake()->dateTime()
        ];
    }
}
