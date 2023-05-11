<?php

namespace Database\Seeders;

use App\Models\Pegawai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Carbon\Carbon;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * 
     * @return void
     */
    public function run()
    {
//         Schema::disableForeignKeyConstraints();
//         Pegawai::truncate();
//         Schema::enableForeignKeyConstraints();

//         $data =[
//             ['name' => 'Sechan Adyatma', 'nip' => '230920002', 'gender' => 'Laki-Laki', 'class_id' => '1'],
//             ['name' => 'Doni Pratama', 'nip' => '230920003', 'gender' => 'Laki-Laki', 'class_id' => '1'],
//             ['name' => 'Salma', 'nip' => '150920002', 'gender' => 'Perempuan', 'class_id' => '3'],
//             ['name' => 'Shinta', 'nip' => '120420002', 'gender' => 'Perempuan', 'class_id' => '2'],
//         ];

//         foreach ($data as $value) {
//             Pegawai::insert([
//                 'name' => $value['name'],
//                 'nip' => $value['nip'],
//                 'gender' => $value['gender'],
//                 'class_id' => $value['class_id'],
//                 'created_at' => Carbon::now(),
//                 'updated_at' => Carbon::now()
//             ]);
//     }

    Pegawai::factory()->count(20)->create();
}
}