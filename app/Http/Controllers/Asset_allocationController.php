<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Asset_allocation;
use Crystoline\LaraRestApi\RestApiTrait;
use Crystoline\LaraRestApi\IRestApiAble;

class Asset_allocationController extends Controller
{
    use RestApiTrait;

    public static function getModel() : string  {
        return Asset_allocation::class;
    }

//    public static function getValidationRules(): array
//    {
//        return [
//            "trans_no" => "required"
//        ];
//    }
}

