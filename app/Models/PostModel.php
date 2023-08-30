<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;

    protected $table = "tbl_post";

    protected $fillable = [
        'category_post_id',
        'post_name',
        'post_detail',
        'post_thumb',
        'user_id',
        'created_at',
        'updated_at'
    ];
}
