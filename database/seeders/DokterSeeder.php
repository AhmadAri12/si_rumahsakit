<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 20; $i++) {
            DB::table('tb_dokter')->insert([
                'id_dokter' => $faker->unique()->bothify('DK00'. $i),
                'nama_dokter' => $faker->name,
                'spesialis_dokter' => $faker->jobTitle,
                'jadwal_kerja' => $faker->dayOfWeek,
                'jam_mulai' => $faker->time('H:i:s'),
                'jam_selesai' => $faker->time('H:i:s'),
                'kontrak_kerja' => $faker->randomElement(['Full-time', 'Part-time'])
            ]);
        }
    }
}
