<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        //1.Akun admin utama
        \App\Models\User::create([
            'name' => 'Admin Amikom',
            'email' => 'admin@amikom.ac.id',
            'password' => bcrypt('password'),
            'role' => 'admin',
        ]);

        //2.insert kategori event
        $category = \App\Models\Category::create([
            'name' => 'Seminar IT',
            'slug' => 'seminar-it',
        ]);

        $category2 = \App\Models\Category::firstOrCreate([
            'name' => 'Entertaiment',
            'slug' => 'entertaiment',
        ]);

        $category3 = \App\Models\Category::firstOrCreate([
            'name' => 'Workshop',
            'slug' => 'workshop',
        ]);

        $category4 = \App\Models\Category::firstOrCreate([
            'name' => 'Pelatihan',
            'slug' => 'pelatihan',
        ]);

        $category5 = \App\Models\Category::firstOrCreate([
            'name' => 'Career Fair',
            'slug' => 'career-fair',
        ]);

        // 3. Insert Sampel Events
        \App\Models\Event::create([
            'category_id' => $category2->id,
            'title' => 'Jazz Night 2025',
            'description' => 'Nikmati malam yang indah dengan alunan musik.',
            'date' => '2026-08-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category2->id,
            'title' => 'Music Festival Night',
            'description' => 'Festival musik dengan berbagai penampilan artis lokal.',
            'date' => '2026-09-15 19:00:00',
            'location' => 'Lapangan Amikom',
            'price' => 60000,
            'stock' => 250,
            'poster_path' => 'posters/event-2.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category2->id,
            'title' => 'Campus Talent Show',
            'description' => 'Ajang penampilan bakat mahasiswa Amikom.',
            'date' => '2026-10-02 18:30:00',
            'location' => 'Auditorium Kampus',
            'price' => 30000,
            'stock' => 180,
            'poster_path' => 'posters/event-3.png',
        ]);

    

        \App\Models\Event::create([
            'category_id' => $category5->id,
            'title' => 'Tech Career Expo 2026',
            'description' => 'Pameran karir dan peluang kerja bidang teknologi.',
            'date' => '2026-09-28 08:00:00',
            'location' => 'Gedung Innovation Center',
            'price' => 25000,
            'stock' => 400,
            'poster_path' => 'posters/event-4.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category->id,
            'title' => 'AI Summit & Expo 2026',
            'description' => 'Jelajahi tren terkini dalam bidang Artificial Intelligence',
            'date' => '2026-09-01 13:00:00',
            'location' => 'Ruang Cinema',
            'price' => 45000,
            'stock' => 150,
            'poster_path' => 'posters/event-5.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category->id,
            'title' => 'Perkembangan Teknologi Informasi',
            'description' => 'Jelajahi tren terkini dalam bidang Artificial Intelligence',
            'date' => '2026-09-01 13:00:00',
            'location' => 'Ruang Cinema',
            'price' => 40000,
            'stock' => 150,
            'poster_path' => 'posters/event-6.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category->id,
            'title' => 'Nasional Software Engineering',
            'description' => 'pengembangan software modern dan tren industri teknologi',
            'date' => '2026-09-01 13:00:00',
            'location' => 'Ruang Cinema',
            'price' => 45000,
            'stock' => 100,
            'poster_path' => 'posters/event-7.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'Web Mobile Development',
            'description' => 'Membuat website menggunakan laravel, HTML, dan Tailwind CSS',
            'date' => '2026-08-17 08:00:00',
            'location' => 'Ruang LAB 2.4.2',
            'price' => 50000,
            'stock' => 115,
            'poster_path' => 'posters/event-8.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'UI/UX Design',
            'description' => 'Belajar desain aplikasi',
            'date' => '2026-10-26 08:00:00',
            'location' => 'Ruang LAB 7.3.2',
            'price' => 40000,
            'stock' => 100,
            'poster_path' => 'posters/event-9.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'Photography Workshop',
            'description' => 'belajar fotografi dan editing',
            'date' => '2026-7-25 09:00:00',
            'location' => 'Ruang studio amikom',
            'price' => 35000,
            'stock' => 100,
            'poster_path' => 'posters/event-10.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category4->id,
            'title' => 'Cyber Security',
            'description' => 'Pelatihan keamanan sistem dan jaringan komputer',
            'date' => '2026-09-20 10:00:00',
            'location' => 'Ruang LAB 2.4.1',
            'price' => 40000,
            'stock' => 150,
            'poster_path' => 'posters/event-11.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category4->id,
            'title' => 'Laravel Training Class',
            'description' => 'Pelatihan membuat website menggunakan laravel',
            'date' => '2026-11-28 13:00:00',
            'location' => 'Ruang LAB 2.4.3',
            'price' => 30000,
            'stock' => 120,
            'poster_path' => 'posters/event-12.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category4->id,
            'title' => 'Network Administrator Training',
            'description' => 'Pelatihan dasar administrasi jaringan komputer.',
            'date' => '2026-10-10 09:00:00',
            'location' => 'LAB Networking',
            'price' => 35000,
            'stock' => 120,
            'poster_path' => 'posters/event-13.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category5->id,
            'title' => 'Amikom Job Fair 2026',
            'description' => 'Temukan peluang kerja dari berbagai perusahaan',
            'date' => '2026-08-24 08:00:00',
            'location' => 'Ruang citra 2',
            'price' => 50000,
            'stock' => 300,
            'poster_path' => 'posters/event-14.png',
        ]);



        \App\Models\Event::create([
            'category_id' => $category5->id,
            'title' => 'Job Fair & Internship 2026',
            'description' => 'kesempatan mendapatkan kerja dan magang dari perusahaan',
            'date' => '2026-08-23 09:00:00',
            'location' => 'Ruang citra 2',
            'price' => 45000,
            'stock' => 500,
            'poster_path' => 'posters/event-15.png',
        ]);
    }
}
