<?php

namespace Modules\Edu\Http\Controllers\Front;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Edu\Transformers\CommentResource;

class CommentController extends Controller
{

    public function index()
    {
        $comments = $this->model()->comments()->orderBy('id','asc')->get();
        return response()->json(['comments' => CommentResource::collection($comments)]);
    }


    public function store(Request $request, $model, $id)
    {


        $comment = $this->model()->comments()->create(
            $request->input() + [
                'site_id' => site()['id'],
                'user_id' => user('id'),
            ]
        );

        return response()->json(['message' => '发表评论成功', 'comment' => new CommentResource($comment)]);
    }

    protected function model()
    {
        $class = 'Modules\Edu\Entities\\'.request()->model;

        return app($class)->find(request()->id);
    }

}
