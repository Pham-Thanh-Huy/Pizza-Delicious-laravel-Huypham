<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;

    protected $table = "tbl_product";

    protected $fillable = [
        'category_product_id',
        'product_name',
        'price',
        'product_description',
        'product_thumb',
        'user_id',
        'created_at',
        'updated_at'
    ];

   public function user_upload(){
        return $this -> belongsTo(User::class, 'user_id');
    }
}
