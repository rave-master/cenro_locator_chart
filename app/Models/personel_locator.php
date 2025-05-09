<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class personel_locator extends Model
{
    use HasFactory;
    protected $table = 'personel_locator';
    protected $fillable = [
        'id',
        'fullname',
        'monday',
        'tuesday',
        'wednesday',
        'thursday',
        'friday',
      
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
