<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function blog()
    {
        return $this->hasMany(Blog::class);
    }
}

// Blog::create([
//     'title'=>'Artikel Ketiga Cuy',
//     'category_id'=>3,
//     'slug'=>'artikel-ketiga-cuy',
//     'bagian'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
//     'body'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit.Est, error soluta. Odit, voluptatibus tempora pariatur sint corporis eos atque nemo ut fuga, accusamus qui beatae laboriosam, nisi ab Nihil laudantium qui culpa vitae.'
// ])


