<?php

namespace App\Http\Controllers;

use App\Model\branch;
use Crystoline\LaraRestApi\RestApiTrait;
use Illuminate\Http\Request;
use Crystoline\LaraRestApi\IRestApiAble;

class BranchController extends Controller
{
    use RestApiTrait;

    public static function getModel() : string  {
        return Branch::class;
    }
}
