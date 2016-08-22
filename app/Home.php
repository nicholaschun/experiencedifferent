<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $table ='home';

    protected $fillable = [
        'slide_number',
        'file_path'
    ];
}
