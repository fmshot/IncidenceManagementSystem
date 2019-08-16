<?php

namespace App\Http\Controllers;
use App\Model\Engineer;
use Crystoline\LaraRestApi\RestApiTrait;
use Crystoline\LaraRestApi\IRestApiAble;

use Illuminate\Http\Request;

class EngineerController extends Controller
{
    use RestApiTrait;

    public static function getModel() : string  {
        return Engineer::class;
    }
}
