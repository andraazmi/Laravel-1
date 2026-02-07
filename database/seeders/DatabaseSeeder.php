<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{


    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // User::create([
        //     'name' => 'Sandika Galih',
        //     'email' => 'sandikahalih@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        User::factory(3)->create();

        Category::create([
            'name' => 'web programming',
            'slug' => 'web programming'
        ]);

        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae nulla minus, repellat aspernatur sit quos. Cupiditate, quos ab maxime eaque esse magnam maiores nobis ut ipsum totam quasi labore adipisci ipsam molestiae dolore. Doloremque ipsa eaque perferendis libero porro, officia ipsam ullam debitis nulla voluptatem dignissimos expedita eos maiores rem ea. Voluptatum perspiciatis quos molestias veniam a. Voluptatum dolorem iusto distinctio, corrupti quas facilis atque blanditiis iste veritatis, quis praesentium ex, vitae aspernatur in vero reprehenderit esse temporibus quaerat? Cupiditate adipisci officia explicabo molestiae necessitatibus? Nobis dolores fugit aspernatur natus vitae temporibus dicta, animi vero accusantium hic odio fugiat ullam?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae nulla minus, repellat aspernatur sit quos. Cupiditate, quos ab maxime eaque esse magnam maiores nobis ut ipsum totam quasi labore adipisci ipsam molestiae dolore. Doloremque ipsa eaque perferendis libero porro, officia ipsam ullam debitis nulla voluptatem dignissimos expedita eos maiores rem ea. Voluptatum perspiciatis quos molestias veniam a. Voluptatum dolorem iusto distinctio, corrupti quas facilis atque blanditiis iste veritatis, quis praesentium ex, vitae aspernatur in vero reprehenderit esse temporibus quaerat? Cupiditate adipisci officia explicabo molestiae necessitatibus? Nobis dolores fugit aspernatur natus vitae temporibus dicta, animi vero accusantium hic odio fugiat ullam?',
        //     'category_id => 1',
        //     'user_id => 1'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae nulla minus, repellat aspernatur sit quos. Cupiditate, quos ab maxime eaque esse magnam maiores nobis ut ipsum totam quasi labore adipisci ipsam molestiae dolore. Doloremque ipsa eaque perferendis libero porro, officia ipsam ullam debitis nulla voluptatem dignissimos expedita eos maiores rem ea. Voluptatum perspiciatis quos molestias veniam a. Voluptatum dolorem iusto distinctio, corrupti quas facilis atque blanditiis iste veritatis, quis praesentium ex, vitae aspernatur in vero reprehenderit esse temporibus quaerat? Cupiditate adipisci officia explicabo molestiae necessitatibus? Nobis dolores fugit aspernatur natus vitae temporibus dicta, animi vero accusantium hic odio fugiat ullam?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae nulla minus, repellat aspernatur sit quos. Cupiditate, quos ab maxime eaque esse magnam maiores nobis ut ipsum totam quasi labore adipisci ipsam molestiae dolore. Doloremque ipsa eaque perferendis libero porro, officia ipsam ullam debitis nulla voluptatem dignissimos expedita eos maiores rem ea. Voluptatum perspiciatis quos molestias veniam a. Voluptatum dolorem iusto distinctio, corrupti quas facilis atque blanditiis iste veritatis, quis praesentium ex, vitae aspernatur in vero reprehenderit esse temporibus quaerat? Cupiditate adipisci officia explicabo molestiae necessitatibus? Nobis dolores fugit aspernatur natus vitae temporibus dicta, animi vero accusantium hic odio fugiat ullam?',
        //     'category_id => 2',
        //     'user_id => 1'
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae nulla minus, repellat aspernatur sit quos. Cupiditate, quos ab maxime eaque esse magnam maiores nobis ut ipsum totam quasi labore adipisci ipsam molestiae dolore. Doloremque ipsa eaque perferendis libero porro, officia ipsam ullam debitis nulla voluptatem dignissimos expedita eos maiores rem ea. Voluptatum perspiciatis quos molestias veniam a. Voluptatum dolorem iusto distinctio, corrupti quas facilis atque blanditiis iste veritatis, quis praesentium ex, vitae aspernatur in vero reprehenderit esse temporibus quaerat? Cupiditate adipisci officia explicabo molestiae necessitatibus? Nobis dolores fugit aspernatur natus vitae temporibus dicta, animi vero accusantium hic odio fugiat ullam?',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae nulla minus, repellat aspernatur sit quos. Cupiditate, quos ab maxime eaque esse magnam maiores nobis ut ipsum totam quasi labore adipisci ipsam molestiae dolore. Doloremque ipsa eaque perferendis libero porro, officia ipsam ullam debitis nulla voluptatem dignissimos expedita eos maiores rem ea. Voluptatum perspiciatis quos molestias veniam a. Voluptatum dolorem iusto distinctio, corrupti quas facilis atque blanditiis iste veritatis, quis praesentium ex, vitae aspernatur in vero reprehenderit esse temporibus quaerat? Cupiditate adipisci officia explicabo molestiae necessitatibus? Nobis dolores fugit aspernatur natus vitae temporibus dicta, animi vero accusantium hic odio fugiat ullam?',
        //     'category_id => 1',
        //     'user_id => 1'
        // ]);

    }


}
