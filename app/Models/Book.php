<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;


    protected $table = 'books';
    protected $fillable = ['name', 'book_description', 'book_author', 'book_image'];
    protected $hidden = [];

    // public $id;
    // public $name;
    // public $desc;
    // public $img;

    // public function __construct($id, $name, $desc, $image)
    // {
    //     $this->id = $id;
    //     $this->name = $name;
    //     $this->desc = $desc;
    //     $this->img = $image;
    // }
}