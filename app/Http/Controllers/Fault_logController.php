<?php

namespace App\Http\Controllers;

use App\Model\Fault_log;
use Crystoline\LaraRestApi\RestApiTrait;
use Crystoline\LaraRestApi\IRestApiAble;
use Illuminate\Http\Request;

class Fault_logController extends Controller
{
    use RestApiTrait;

    public static function getModel() : string  {
        return Fault_log::class;
    }
}
