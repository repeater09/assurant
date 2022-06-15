<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceNetwork extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'company',
        'industry',
        'email',
        'phone',
        'city',
        'zip_code',
        'state',
        'coverage_area',
        'message'
    ];
}
