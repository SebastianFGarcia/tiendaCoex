<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Area;
use App\Models\Contract;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'document',
        'birth_date',
        'age',
        'phone',
        'address',
        'job',
        'area_id',
        'contract_id',
    ];

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function contract()
    {
        return $this->belongsTo(Contract::class);
    }
}
