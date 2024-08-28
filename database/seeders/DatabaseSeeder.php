<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Demo User',
            'email' => 'test@demo.com',
        ]);

        //page
        $content = [
            'judul',
            'subjudul',

            'about_judul',
            'about_subjudul',
            'about_card1_judul',
            'about_card1_subjudul',
            'about_card2_judul',
            'about_card2_subjudul',
            'about_card3_judul',
            'about_card3_subjudul',
            'about_gambar1',
            'about_gambar2',
            'about_gambar3',

            'product1_nama',
            'product1_gambar',
            'product2_nama',
            'product2_gambar',
            'product3_nama',
            'product3_gambar',

            'googlemaps',
            'alamat',
            'telp',
            'waktu_buka',
            'waktu_tutup',
            'jadwal_buka',

            'social_facebook',
            'social_instagram',
            'social_twitter',

            'cta_whatsapp',
        ];

        foreach ($content as $value)
            \App\Models\Page::create(['name' => $value]);
    }
}
