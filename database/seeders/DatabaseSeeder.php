<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use App\Models\User;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(4)->create();

        // menambahkan ke dalam user
        // User::create([
        //     'name'=>'Bjorka Cabang Karawang',
        //     'email'=> 'cuy@gmail.com',
        //     'password'=>bcrypt('1234')
        // ]);

        // User::create([
        //     'name'=>'Ian Iskandar',
        //     'email'=> 'ian@gmail.com',
        //     'password'=>bcrypt('1234')
        // ]);

        // menambahkan ke dalam category
        Category::create([
            'name'=>'Programing',
            'slug'=>'programing'
        ]);

        Category::create([
            'name'=>'Network',
            'slug'=>'network'
        ]);

        Category::create([
            'name'=>'Design',
            'slug'=>'design'
        ]);

        // menambahkan ke dalam blog
            Blog::factory(20)->create();
        // Blog::create([
        //     'title'=>'Artikel Pertama Cuy',
        //     'slug'=>'artikel-pertama-cuy',
        //     'bagian'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi labore dolores quo hic nisi quisquam, impedit perferendis quas recusandae molestiae.',
        //     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam similique incidunt itaque voluptatum eaque repellat animi quos soluta recusandae dicta accusamus quaerat eius aliquam doloremque laudantium unde odio ipsum adipisci eos cupiditate voluptates, hic qui.Neque, quisquam ex sit repudiandae sequi rerum similique et amet illum vero animi, vitae excepturi nulla? Soluta repellendus eum distinctio amet modi ipsum quisquam maxime.Facere consequuntur rem ullam totam qui atque ea repellat veniam asperiores vel! Dolores, saepe assumenda. Minus repellat ducimus eaque neque unde ex repellendus dolorem ad. Quod adipisci ab corrupti, aperiam numquam vel est praesentium voluptates quae commodi, quibusdam, minima quis?',
        //     'user_id'=>1,
        //     'category_id'=>1
        // ]);

        // Blog::create([
        //     'title'=>'Artikel Kedua Cuy',
        //     'slug'=>'artikel-kedua-cuy',
        //     'bagian'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi labore dolores quo hic nisi quisquam, impedit perferendis quas recusandae molestiae.',
        //     'body'=>'<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam similique incidunt itaque voluptatum eaque repellat animi quos soluta recusandae dicta accusamus quaerat eius aliquam doloremque laudantium unde odio ipsum adipisci eos cupiditate voluptates, hic qui .</p><p> Neque, quisquam ex sit repudiandae sequi rerum similique et amet illum vero animi, vitae excepturi nulla? Soluta repellendus eum distinctio amet modi ipsum quisquam maxime.</p> Facere consequuntur rem ullam totam qui atque ea repellat veniam asperiores vel! Dolores, saepe assumenda. Minus repellat ducimus eaque neque unde ex repellendus dolorem ad. Quod adipisci ab corrupti, aperiam numquam vel est praesentium voluptates quae commodi, quibusdam, minima quis?',
        //     'user_id'=>1,
        //     'category_id'=>2
        // ]);

        // Blog::create([
        //     'title'=>'Artikel Ketiga Cuy',
        //     'slug'=>'artikel-ketiga-cuy',
        //     'bagian'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi labore dolores quo hic nisi quisquam, impedit perferendis quas recusandae molestiae.',
        //     'body'=>'<p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam similique incidunt itaque voluptatum eaque repellat animi quos soluta recusandae dicta accusamus quaerat eius aliquam doloremque laudantium unde odio ipsum adipisci eos cupiditate voluptates, hic qui .</p><p> Neque, quisquam ex sit repudiandae sequi rerum similique et amet illum vero animi, vitae excepturi nulla? Soluta repellendus eum distinctio amet modi ipsum quisquam maxime.</p> Facere consequuntur rem ullam totam qui atque ea repellat veniam asperiores vel! Dolores, saepe assumenda. Minus repellat ducimus eaque neque unde ex repellendus dolorem ad. Quod adipisci ab corrupti, aperiam numquam vel est praesentium voluptates quae commodi, quibusdam, minima quis?',
        //     'user_id'=>2,
        //     'category_id'=>3
        // ]);
    }
}