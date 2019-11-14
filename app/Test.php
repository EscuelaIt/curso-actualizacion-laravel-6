<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $fillable = [
        'test',
    ];

    public static function test()
    {
        return 'hello';
    }
}
