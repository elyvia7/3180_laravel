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
            'date' => '2026-05-10 19:00:00',
            'location' => 'Amikom Baru',
            'price' => 50000,
            'stock' => 100,
            'poster_path' => 'posters/event-1.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category->id,
            'title' => 'AI Summit & Expo 2026',
            'description' => 'Jelajahi tren terkini dalam bidang Artificial Intelligence',
            'date' => '2026-05-01 13:00:00',
            'location' => 'Ruang Cinema',
            'price' => 45000,
            'stock' => 150,
            'poster_path' => 'posters/event-2.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'Web Mobile Development',
            'description' => 'Membuat website menggunakan laravel, HTML, dan Tailwind CSS',
            'date' => '2026-05-17 08:00:00',
            'location' => 'Ruang LAB 2.4.2',
            'price' => 50000,
            'stock' => 115,
            'poster_path' => 'posters/event-3.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category4->id,
            'title' => 'Cyber Security',
            'description' => 'Pelatihan keamanan sistem dan jaringan komputer',
            'date' => '2026-05-20 10:00:00',
            'location' => 'Ruang LAB 2.4.1',
            'price' => 40000,
            'stock' => 150,
            'poster_path' => 'posters/event-4.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category5->id,
            'title' => 'Amikom Job Fair 2026',
            'description' => 'Temukan peluang kerja dari berbagai perusahaan',
            'date' => '2026-05-24 08:00:00',
            'location' => 'Ruang citra 2',
            'price' => 50000,
            'stock' => 300,
            'poster_path' => 'posters/event-5.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'UI/UX Design',
            'description' => 'Belajar desain aplikasi',
            'date' => '2026-05-26 08:00:00',
            'location' => 'Ruang LAB 7.3.2',
            'price' => 40000,
            'stock' => 100,
            'poster_path' => 'posters/event-6.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category4->id,
            'title' => 'Laravel Training Class',
            'description' => 'Pelatihan membuat website menggunakan laravel',
            'date' => '2026-05-28 13:00:00',
            'location' => 'Ruang LAB 2.4.3',
            'price' => 30000,
            'stock' => 120,
            'poster_path' => 'posters/event-7.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category5->id,
            'title' => 'Job Fair & Internship 2026',
            'description' => 'kesempatan mendapatkan kerja dan magang dari perusahaan',
            'date' => '2026-05-23 09:00:00',
            'location' => 'Ruang citra 2',
            'price' => 45000,
            'stock' => 500,
            'poster_path' => 'posters/event-8.png',
        ]);

        \App\Models\Event::create([
            'category_id' => $category3->id,
            'title' => 'Photography Workshop',
            'description' => 'belajar fotografi dan editing',
            'date' => '2026-05-25 09:00:00',
            'location' => 'Ruang studio amikom',
            'price' => 35000,
            'stock' => 100,
            'poster_path' => 'posters/event-9.png',
        ]);


    }
}
