<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Regis;
use App\Models\bidang;
use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Regis::create([
            'name' => 'Andreas',
            'gender' => 'Laki-laki',
            'tmptlahir' => 'Pontianak',
            'tgllahir' => '01/02/2001',
            'agama' => 'Katolik',
            'almtasal' => 'Jl. Setia Budi No. 24a',
            'asalsklh' => 'SMP Petrus',
            'noijazah' => 'DN-03_DI_1961322',
            'almtasalsklh' => 'Jl. Gajah Mada',
            'nmayah' => 'Sutanto',
            'pkrjayah' => 'Akuntan',
            'nmibu' => 'Sutanti',
            'pkrjibu' => 'Ibu Rumah Tangga',
            'almtortu' => 'Jl. Setia Budi No. 24a',
            'bidang' => 'Perhotelan'
        ]);
        Regis::create([
            'name' => 'Andre',
            'gender' => 'Laki-laki',
            'tmptlahir' => 'Pontianak',
            'tgllahir' => '03/03/2003',
            'agama' => 'Hindu',
            'almtasal' => 'Jl. Luhur Budi No. 2a',
            'asalsklh' => 'SMP Gembala Baik',
            'noijazah' => 'DN-03_DI_1567632',
            'almtasalsklh' => 'Jl. Madagascar',
            'nmayah' => 'Suhanto',
            'pkrjayah' => 'Wiraswata',
            'nmibu' => 'Suhanti',
            'pkrjibu' => 'Ibu Rumah Tangga',
            'almtortu' => 'Jl. Luhur Budi No. 2a',
            'bidang' => 'Tataboga'
        ]);
        Regis::create([
            'name' => 'Andi',
            'gender' => 'Laki-laki',
            'tmptlahir' => 'Pontianak',
            'tgllahir' => '22/12/2001',
            'agama' => 'Islam',
            'almtasal' => 'Jl. Gajahmada No. 27',
            'asalsklh' => 'SMP Petrus',
            'noijazah' => 'DN-03_DI_1911562',
            'almtasalsklh' => 'Jl. Gajah Kembar',
            'nmayah' => 'Sutadi',
            'pkrjayah' => 'Wirausaha',
            'nmibu' => 'Suhasmi',
            'pkrjibu' => 'Ibu Rumah Tangga',
            'almtortu' => 'Jl. Gajahmada No. 27',
            'bidang' => 'Pariwisata'
        ]);
        Regis::create([
            'name' => 'Anika',
            'gender' => 'Perempuan',
            'tmptlahir' => 'Pontianak',
            'tgllahir' => '02/08/2001',
            'agama' => 'Katolik',
            'almtasal' => 'Jl. Budi Karya No. 7a',
            'asalsklh' => 'SMP Petrus',
            'noijazah' => 'DN-03_DI_1524522',
            'almtasalsklh' => 'Jl. Gajah Mada',
            'nmayah' => 'Farid',
            'pkrjayah' => 'Konsultan Pajak',
            'nmibu' => 'Lusi',
            'pkrjibu' => 'Ibu Rumah Tangga',
            'almtortu' => 'Jl. Budi Karya No. 7a',
            'bidang' => 'Daring Bisnis'
        ]);
        Regis::create([
            'name' => 'Jesika',
            'gender' => 'Perempuan',
            'tmptlahir' => 'Ketapang',
            'tgllahir' => '12/09/2001',
            'agama' => 'Buddha',
            'almtasal' => 'Jl. Parit Karya No. 5b',
            'asalsklh' => 'SMP Petrus',
            'noijazah' => 'DN-03_DI_1242352',
            'almtasalsklh' => 'Jl. Gajah Mada',
            'nmayah' => 'Susanto',
            'pkrjayah' => 'Artsitek',
            'nmibu' => 'Susanto',
            'pkrjibu' => 'Ibu Rumah Tangga',
            'almtortu' => 'Jl. Parit Karya No. 5b',
            'bidang' => 'Daring Bisnis'
        ]);
        Regis::create([
            'name' => 'Debbie',
            'gender' => 'Perempuan',
            'tmptlahir' => 'Sintang',
            'tgllahir' => '07/05/2001',
            'agama' => 'Islam',
            'almtasal' => 'Jl. Karya Baru No. 12c',
            'asalsklh' => 'SMP Negeri 05',
            'noijazah' => 'DN-03_DI_156752',
            'almtasalsklh' => 'Jl. Hutan Rimba',
            'nmayah' => 'Arief',
            'pkrjayah' => 'Pekerja Kantoran',
            'nmibu' => 'Fatma',
            'pkrjibu' => 'Ibu Rumah Tangga',
            'almtortu' => 'Jl. Karya Baru No. 12c',
            'bidang' => 'Tataboga'
        ]);

    }
}
