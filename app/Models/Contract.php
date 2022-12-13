<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\TypeContract;

class Contract extends Model
{
    use HasFactory;

    protected $fillable = [
        'salary',
        'start_date',
        'end_date',
        'type_contract_id',
    ];

    public function typeContract()
    {
        return $this->belongsTo(TypeContract::class);
    }

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }
}
