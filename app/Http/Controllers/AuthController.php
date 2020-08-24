<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    public function me() {
        return [
            "nis"=>"3103118026",
            "name"=>"Arya Bhagaskara",
            "gender"=>"Laki-laki",
            "phone"=>"081226805712",
            "class"=>"XII RPL 1",
        ];
    }
}
