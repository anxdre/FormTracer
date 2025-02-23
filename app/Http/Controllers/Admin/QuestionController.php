<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\BaseResponse;
use App\Models\FormMultiQuestions;
use App\Models\FormQuestions;
use Dentro\Yalr\Attributes\Get;
use Dentro\Yalr\Attributes\Middleware;
use Dentro\Yalr\Attributes\Name;
use Dentro\Yalr\Attributes\Post;
use Dentro\Yalr\Attributes\Prefix;
use Illuminate\Http\Request;

#[Prefix('admin/question'), Name('admin.question'), Middleware('auth')]
class QuestionController extends Controller
{
    #[Get('/', '.index')]
    function index()
    {

    }

    #[Post('/submit', '.submit')]
    function updateOrCreate(Request $request)
    {
        $request->validate([
            'id' => 'nullable|exists:form_questions,id',
            'form_id' => 'required|exists:form_schemas,id',
            'question' => 'nullable|string',
            'type' => 'required|string',
            'required' => 'required|boolean',
            'multiple.*' => 'nullable|string',
        ]);

        $data = FormQuestions::query()->updateOrCreate(['id' => $request->get('id')],
            $request->all());

        if ($request->get('type') == 'checkbox' || $request->get('type') == 'radio' || $request->get('type') == 'select' || $request->get('type') == 'checkbox') {
            foreach ($request->get('multiple') as $item) {
                FormMultiQuestions::query()->insert([
                    'question' => $item,
                    'question_id' => $data->id,
                ]);
            }
        }

        return new BaseResponse($data->withExists('multiQuestions'));
    }

    #[Post('/delete', '.delete')]
    function delete(Request $request)
    {
        $request->validate([
            'id' => 'nullable|exists:form_questions,id',
        ]);

        $data = FormQuestions::query()->findOrFail($request->get('id'));

        return new BaseResponse($data->delete());
    }
}
