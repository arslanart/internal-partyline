<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $primaryKey = 'group_id';

    protected $fillable = [
        'group_name',
        'port',
        'multicast_address',
    ];

    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'group_id');
    }
}

