<?php

namespace App\Models;

use App\Traits\CanGetTableNameStatically;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customer extends Model
{
    use CanGetTableNameStatically;
    use HasUuids;
    use SoftDeletes;
    use HasFactory;

    protected $table = 'customer';
    protected $fillable = [
        'name',
        'img'
    ];


}
