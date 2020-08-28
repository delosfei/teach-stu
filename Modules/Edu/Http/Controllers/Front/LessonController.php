<?php

namespace Modules\Edu\Http\Controllers\Front;

use App\Models\Traits\Site;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Edu\Entities\Lesson;
use Modules\Edu\Entities\Tag;

class LessonController extends Controller
{
    use Site;

    public function index(Request $request)
    {
        $tags=Tag::site()->get();
        $lessons=Lesson::site()->search($request->w)->latest()->search($request->query('tag'))->paginate();
        return view('edu::lesson_front.index',compact('lessons','tags'));
    }



    public function show(Lesson $lesson)
    {
        $videos=$lesson->videos;
        return view('edu::lesson_front.show',compact('lesson','videos'));
    }



}
