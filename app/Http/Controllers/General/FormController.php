<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Dentro\Yalr\Attributes\Get;
use Dentro\Yalr\Attributes\Middleware;
use Dentro\Yalr\Attributes\Name;
use Dentro\Yalr\Attributes\Prefix;
use Illuminate\Http\Request;

#[Prefix('form'),Name('general.form')]
class FormController extends Controller
{
    #[Get('/','.index')]
    function index()
    {

    }
}
