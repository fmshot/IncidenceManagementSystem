<?php

namespace App\Http\Controllers;

use App\Model\Asset_group;
use Crystoline\LaraRestApi\RestApiTrait;
use Crystoline\LaraRestApi\IRestApiAble;
use Illuminate\Http\Request;

class Asset_groupController extends Controller
{use RestApiTrait;

    public static function getModel() : string  {
        return Asset_group::class;
    }
}
