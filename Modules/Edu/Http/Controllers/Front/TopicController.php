<?php

namespace Modules\Edu\Http\Controllers\Front;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Edu\Entities\Tag;

class TopicController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index()
    {
        return view('edu::index');
    }

    public function create()
    {
        $tags=Tag::all();
        return view('edu::topic.create',compact('tags'));
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        return view('edu::show');
    }


    public function edit($id)
    {
        return view('edu::edit');
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
