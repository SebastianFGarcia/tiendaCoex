<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contract;

class TypeContract extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function contracts()
    {
        return $this->hasMany(Contract::class);
    }
}
