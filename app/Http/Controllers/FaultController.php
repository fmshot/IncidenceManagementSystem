<?php

namespace App\Http\Controllers;

use App\Model\Fault;
use Crystoline\LaraRestApi\RestApiTrait;
use Illuminate\Http\Request;

class FaultController extends Controller
{
    use RestApiTrait;

    public static function getModel() : string  {
        return Fault::class;
    }
}
