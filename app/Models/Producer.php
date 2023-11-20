<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
    use HasFactory;

    protected $table = "producer";

    protected $fillable = ([
        "id",
        "name",
        "address"
    ]);

    public $timestamps = false;
}
