<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\BaseResponse;
use App\Models\FormSchemas;
use Dentro\Yalr\Attributes\Get;
use Dentro\Yalr\Attributes\Middleware;
use Dentro\Yalr\Attributes\Name;
use Dentro\Yalr\Attributes\Post;
use Dentro\Yalr\Attributes\Prefix;
use Illuminate\Http\Request;

#[Prefix('admin/form'), Name('admin.form'), Middleware('auth')]
class FormController extends Controller
{
    #[Get('/', '.index')]
    function index()
    {

    }

    #[Post('/submit', '.index')]
    function updateOrCreate(Request $request)
    {
        $request->validate([
            'id' => 'nullable|exists:form_schemas,id',
            'title' => 'required|string',
            'description' => 'nullable|string',
            'start_time' => 'required|date',
            'end_time' => 'required|date|after:start_time',
        ]);

        $data = FormSchemas::query()->updateOrCreate(['id' => $request->get('id')],
            $request->all());

        return new BaseResponse($data);
    }

    #[Post('/submit', '.index')]
    function delete(Request $request)
    {
        $request->validate([
            'id' => 'nullable|exists:form_schemas,id',
        ]);

        $data = FormSchemas::query()->findOrFail($request->get('id'));

        return new BaseResponse($data->delete());
    }
}
