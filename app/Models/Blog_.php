<?php

namespace App\Models;


class Blog
{
    private static $blog_post = [
        [
            'title' => 'Artikel Pertama Cuy',
            'slug' => 'Artikel Pertama Cuy',
            'author' => 'Bjorka Cabang Karawang',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio dolor sequi, cum enim saepe quod tempora laboriosam ratione id tempore officiis atque natus nulla sit expedita doloribus dolorum vel commodi. Atque qui ducimus optio quam neque quas accusantium aut mollitia minus. Dolores, iste. Quos animi dolorem repudiandae nesciunt id totam neque dolor iste esse asperiores ut odit sed explicabo dolorum natus minus, tempora impedit ad, consequuntur corrupti nobis nostrum tenetur reprehenderit assumenda. Aliquam suscipit laudantium, voluptatibus eos quasi adipisci facere! Vel architecto autem dolores quidem aliquam fuga cupiditate, nulla repellendus ipsum illo sapiente odit? Doloribus laudantium magni minus! Ab, deleniti.'
        ],

        [
          
            'title' => 'Artikel Kedua Cuy',
            'slug' => 'Artikel Kedua Cuy',
            'author' => 'Sambo',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam ducimus ea vero omnis praesentium cupiditate nisi illum saepe delectus laboriosam laudantium aspernatur sit, unde earum, quos doloremque explicabo molestiae fuga.'  
        ],

        [
          
            'title' => 'Artikel Ketiga Cuy',
            'slug' => 'Artikel Ketiga Cuy',
            'author' => 'Cuy People',
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam ducimus ea vero omnis praesentium cupiditate nisi illum saepe delectus laboriosam laudantium aspernatur sit, unde earum, quos doloremque explicabo molestiae fuga.'  
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_post);
    }

    public static function find($slug){
        $post=static::all();
        return $post ->firstWhere('slug', $slug);
    }
}
