<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Footer::create([
            'platform' => 'facebook',
            'nama_halaman' => 'Nama Halaman Facebook',
            'link_url' => 'https://www.facebook.com/example',
        ]);

        Footer::create([
            'platform' => 'twitter',
            'nama_halaman' => 'Nama Halaman Twitter',
            'link_url' => 'https://twitter.com/example',
        ]);

        Footer::create([
            'platform' => 'instagram',
            'nama_halaman' => 'Nama Halaman Instagram',
            'link_url' => 'https://instagram.com/example',
        ]);

        Footer::create([
            'platform' => 'whatsapp',
            'nama_halaman' => 'Nama Whatsapp',
            'link_url' => 'https://wa.me/example',
        ]);

        Footer::create([
            'platform' => 'email',
            'nama_halaman' => 'email@mail.com',
            'link_url' => 'https://mailto.com/example',
        ]);

        Footer::create([
            'platform' => 'phone',
            'nama_halaman' => 'phone',
            'link_url' => 'https://phone.com/example',
        ]);

        Footer::create([
            'platform' => 'address',
            'nama_halaman' => 'address',
            'link_url' => 'https://maps.com/example',
        ]);

        Footer::create([
            'platform' => 'faqs',
            'nama_halaman' => 'faqs',
            'link_url' => 'https://faqs.com/example',
        ]);

        Footer::create([
            'platform' => 'privacy',
            'nama_halaman' => 'privacy',
            'link_url' => 'https://privacy.com/example',
        ]);
    }
}
