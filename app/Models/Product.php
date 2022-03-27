<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $fillable = [
        'name',
        'category_id',
        'description',
        'price',
        'availability',
        'image_path',
        'file_path',
        'audio',
        'audio_status',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
