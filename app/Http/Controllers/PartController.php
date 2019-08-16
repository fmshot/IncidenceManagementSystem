<?php

namespace App\Http\Controllers;

use App\Model\Part;
use Crystoline\LaraRestApi\RestApiTrait;
use Crystoline\LaraRestApi\IRestApiAble;
use Illuminate\Http\Request;

class PartController extends Controller
{
    use RestApiTrait;

    public static function getModel() : string  {
        return Part::class;
    }
}
