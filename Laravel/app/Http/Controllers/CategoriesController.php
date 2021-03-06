<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriesController extends Controller

{
    public function show()
    {
        $data = array(
            array(
                'id'=> 1,
                'branche'=> 'hotel',
                'unbearbeitet'=>  5,
                'gf'=> 6,
                'nicht'=> 21,
                'wiedervorlage'=> 17,
                'kein'=> 0,
                'zu'=> 0,
                'termine'=> 70,
                'kunden'=> 0,
                'blacklist'=> 15,
            ),
            array(
                'id'=> 2,
                'branche'=> 'gym',
                'unbearbeitet'=>  0,
                'gf'=> 1,
                'nicht'=> 19, 
                'wiedervorlage'=> 107,
                'kein'=> 12,
                'zu'=> 0,
                'termine'=> 10,
                'kunden'=> 0,
                'blacklist'=> 95
            ),
            array(
                'id'=> 3,
                'branche'=> 'restaurant',
                'unbearbeitet'=>  10,
                'gf'=> 0,
                'nicht'=> 0, 
                'wiedervorlage'=> 55,
                'kein'=> 17,
                'zu'=> 0,
                'termine'=> 19,
                'kunden'=> 5,
                'blacklist'=> 100
            )
          );
          return json_encode($data);
    }
}