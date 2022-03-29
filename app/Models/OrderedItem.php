<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderedItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_id',
        'order_id'
    ];

    public function Item(){
        return $this->hasOne(Item::class);
    }

    public function Order(){
        return $this->belongsTo(Order::class);
    }
}
