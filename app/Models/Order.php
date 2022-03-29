<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'is_cancelled',
        'is_completed',
        'machine_id'
    ];

    public function Machine(){
        return $this->belongsTo(Machine::class);
    }

    public function OrderItems(){
        return $this->hasMany(OrderedItem::class);
    }
}
