<?php

namespace App\Http\Controllers\General;

use App\Http\Controllers\Controller;
use Dentro\Yalr\Attributes\Get;
use Dentro\Yalr\Attributes\Name;
use Dentro\Yalr\Attributes\Prefix;
use Illuminate\Http\Request;

#[Prefix('answer'),Name('general.answer')]
class AnswerController extends Controller
{
    #[Get('/','.index')]
    function index()
    {

    }
}
