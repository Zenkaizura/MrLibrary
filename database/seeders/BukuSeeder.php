<?php

namespace Database\Seeders;

use App\Models\BukuModel;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('table_buku')->truncate();

        BukuModel::factory()
        ->count(10)
        ->create()
        ;
    }
}
