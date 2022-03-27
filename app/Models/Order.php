<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Order extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
        'order_tag',
        'order',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
