<?php

namespace App\Http\Controllers;

use App\Model\Asset_detail;

use Illuminate\Http\Request;
use Crystoline\LaraRestApi\RestApiTrait;
use Crystoline\LaraRestApi\IRestApiAble;

class Asset_detailController extends Controller
{
    use RestApiTrait;




    public static function getModel() : string  {
        return Asset_detail::class;
    }


}
