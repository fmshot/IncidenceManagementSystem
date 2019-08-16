<?php

namespace App\Http\Controllers;

use App\Model\Audit_trail;
use Crystoline\LaraRestApi\RestApiTrait;
use Illuminate\Http\Request;

class Audit_trailController extends Controller
{
    use RestApiTrait;

    public static function getModel() : string  {
        return Audit_trail::class;
    }
}
