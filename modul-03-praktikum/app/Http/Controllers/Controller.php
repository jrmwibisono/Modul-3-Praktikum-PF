<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function index() {
        return "This is from Controller";
        }
    public function profile($profileId) {
        return "This is Profile from Controller, profile id: ".$profileId;
        }

    use AuthorizesRequests, ValidatesRequests;
}

