<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Alfa6661\AutoNumber\AutoNumberTrait;

class Student extends Model
{
     protected $fillable = [
        'no_daftar', 'nama','jk','alamat','agama','asal_smp','jurusan'
    ];
     public function getAutoNumberOptions()
    {
        return [
            'no_daftar' => [
                'format' => 'B?',
                'length' => 4
            ]
        ];
}
}
