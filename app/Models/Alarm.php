<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alarm extends Model
{
    protected $primaryKey = 'alarm_id';

    protected $fillable = [
        'alarm_name',
        'alarm_type',
        'alarm_status',
    ];

    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'alarm_id');
    }
}
