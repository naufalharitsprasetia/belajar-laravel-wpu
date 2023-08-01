<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // User::create([
        //     'name' => 'Sandhika Galih',
        //     'email' => 'sandhika@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Doddy Ferdiansyah',
        //     'email' => 'doddy@gmail.com',
        //     'password' => bcrypt('11111')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem Ipsum Kesatu',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse illo beatae consectetur, quibusdam sit voluptates enim odio quo. Aspernatur, fuga quas! Optio officia nisi nostrum, dicta fugit maiores autem et nam totam amet vel veritatis, mollitia molestias tenetur. Consequuntur, quibusdam! Velit exercitationem enim voluptatum, sequi incidunt ipsam eum molestiae. Illo adipisci magni quae nesciunt aliquam fugiat, temporibus commodi quos sit eos voluptatem, qui aperiam maiores beatae alias odio assumenda earum eligendi dignissimos voluptatum, cupiditate quaerat. Assumenda nisi praesentium omnis modi corporis corrupti ab obcaecati. Ratione labore temporibus obcaecati, provident non perferendis, earum reprehenderit, alias atque blanditiis vitae eaque. Architecto, animi?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem Ipsum Kedua',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse illo beatae consectetur, quibusdam sit voluptates enim odio quo. Aspernatur, fuga quas! Optio officia nisi nostrum, dicta fugit maiores autem et nam totam amet vel veritatis, mollitia molestias tenetur. Consequuntur, quibusdam! Velit exercitationem enim voluptatum, sequi incidunt ipsam eum molestiae. Illo adipisci magni quae nesciunt aliquam fugiat, temporibus commodi quos sit eos voluptatem, qui aperiam maiores beatae alias odio assumenda earum eligendi dignissimos voluptatum, cupiditate quaerat. Assumenda nisi praesentium omnis modi corporis corrupti ab obcaecati. Ratione labore temporibus obcaecati, provident non perferendis, earum reprehenderit, alias atque blanditiis vitae eaque. Architecto, animi?',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem Ipsum Ketiga',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse illo beatae consectetur, quibusdam sit voluptates enim odio quo. Aspernatur, fuga quas! Optio officia nisi nostrum, dicta fugit maiores autem et nam totam amet vel veritatis, mollitia molestias tenetur. Consequuntur, quibusdam! Velit exercitationem enim voluptatum, sequi incidunt ipsam eum molestiae. Illo adipisci magni quae nesciunt aliquam fugiat, temporibus commodi quos sit eos voluptatem, qui aperiam maiores beatae alias odio assumenda earum eligendi dignissimos voluptatum, cupiditate quaerat. Assumenda nisi praesentium omnis modi corporis corrupti ab obcaecati. Ratione labore temporibus obcaecati, provident non perferendis, earum reprehenderit, alias atque blanditiis vitae eaque. Architecto, animi?',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem Ipsum Ketiga',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Esse illo beatae consectetur, quibusdam sit voluptates enim odio quo. Aspernatur, fuga quas! Optio officia nisi nostrum, dicta fugit maiores autem et nam totam amet vel veritatis, mollitia molestias tenetur. Consequuntur, quibusdam! Velit exercitationem enim voluptatum, sequi incidunt ipsam eum molestiae. Illo adipisci magni quae nesciunt aliquam fugiat, temporibus commodi quos sit eos voluptatem, qui aperiam maiores beatae alias odio assumenda earum eligendi dignissimos voluptatum, cupiditate quaerat. Assumenda nisi praesentium omnis modi corporis corrupti ab obcaecati. Ratione labore temporibus obcaecati, provident non perferendis, earum reprehenderit, alias atque blanditiis vitae eaque. Architecto, animi?',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}