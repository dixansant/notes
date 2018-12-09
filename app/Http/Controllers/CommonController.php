<?php

namespace App\Http\Controllers;

use App\Notif;
use App\User;
use App\Contactu;
use Illuminate\Http\Request;
use App\Util\Mailto;
use App\Util\Notifs;
use Illuminate\Support\Facades\Auth;



class CommonController extends Controller
{

    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
    }

    /*Aqui viene cuando el login es correcto*/
    function homeAction(Request $request)
    {

        return view(
            'home.partials', [

            ]
        );
    }





}