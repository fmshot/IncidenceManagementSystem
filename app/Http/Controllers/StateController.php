<?php

namespace App\Http\Controllers;

use App\Model\State;
use Crystoline\LaraRestApi\RestApiTrait;
use Crystoline\LaraRestApi\IRestApiAble;
use Illuminate\Http\Request;

class StateController extends Controller
{
    use RestApiTrait;

    public static function getModel() : string  {
        return State::class;
    }
}
