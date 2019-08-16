<?php

namespace App\Http\Controllers;

use App\Model\Status;
use Crystoline\LaraRestApi\RestApiTrait;
use Crystoline\LaraRestApi\IRestApiAble;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    use RestApiTrait;

    public static function getModel() : string  {
        return Status::class;
    }
}
