<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExampleModel extends Model
{
    use HasFactory;

    protected $table = 'example';

    public $timestamps = false;

    protected $guarded = [];

}
