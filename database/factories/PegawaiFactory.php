<?php

namespace Database\Factories;

use Faker\Factory as faker;
use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = faker::create();
        return [
            'name' => $faker->name(),
            'nip' => mt_rand(000000001, 999999999),
            'gender' => Arr::random(['Laki-Laki', 'Perempuan']),
            'class_id' => Arr::random([1, 2, 3]),
        ];
    }
}
