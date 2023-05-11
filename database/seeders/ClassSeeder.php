<?php

namespace Database\Seeders;

use App\Models\ClassGol;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        ClassGol::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            ['name' => 'ESELON III'],
            ['name' => 'ESELON IV'],
            ['name' => 'PELAKSANA']
        ];

        foreach ($data as $value) {
            ClassGol::insert([
                'name' => $value['name'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }


    }
}
