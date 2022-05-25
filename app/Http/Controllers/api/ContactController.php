<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\SiteContato;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getContacts()
    {
        return response(SiteContato::all()->toJson());
    }
}
