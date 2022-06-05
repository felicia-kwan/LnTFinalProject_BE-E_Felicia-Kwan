<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategoris')->insert([
            'name' => 'Elektronik',
        ]);

        DB::table('kategoris')->insert([
            'name' => 'Kosmetik',
        ]);

        DB::table('kategoris')->insert([
            'name' => 'Pakaian',
        ]);

        DB::table('kategoris')->insert([
            'name' => 'Olahraga',
        ]);

        DB::table('kategoris')->insert([
            'name' => 'Sekolah',
        ]);
    }
}
