<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $table = 'category';

    protected $fillable = [
        'name',
        'description',
        'file_path',
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
