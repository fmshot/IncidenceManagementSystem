<?php

namespace App\Http\Controllers;

use App\Model\Asset;
use Illuminate\Http\Request;
use Crystoline\LaraRestApi\RestApiTrait;
use Crystoline\LaraRestApi\IRestApiAble;


class AssetController extends Controller
{
    use RestApiTrait;




    public static function getModel() : string  {
        return Asset::class;
    }


}
