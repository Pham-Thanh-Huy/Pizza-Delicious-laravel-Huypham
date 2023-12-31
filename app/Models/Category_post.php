<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category_post extends Model
{
    use HasFactory;
    protected $table = "category_post";

    protected $fillable = [
        'name',
        'parent_id',
        'created_at'
    ];
}
