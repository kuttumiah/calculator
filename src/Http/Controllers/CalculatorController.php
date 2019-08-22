<?php

namespace Kuttumiah\Calculator\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function add( $a, $b )
    {
        return view('calculator::add', ['result' => (integer)$a + (integer)$b]);
    }

    public function subtract( $a, $b )
    {
        return view('calculator::add', [ 'result' => (integer)$a - (integer)$b ]);
    }
}
