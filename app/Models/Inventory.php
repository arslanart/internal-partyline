<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $primaryKey = 'inventory_id';

    protected $fillable = [
        'inventory_name',
        'region',
        'connection_type',
        'port_info',
        'city_location',
        'building_name',
        'floor',
        'room_name',
        'installation_date',
        'asset_code',
        'contractor_company',
        'contractor_number',
        'warranty_expiration_date',
        'ip_address',
        'mac_address',
        'gataway',
        'subnetmask',
        'hardware_serial_number',
        'software_version',
        'device_status',
        'user_id',
        'alarm_id',
        'group_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function alarm()
    {
        return $this->belongsTo(Alarm::class, 'alarm_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }
}

