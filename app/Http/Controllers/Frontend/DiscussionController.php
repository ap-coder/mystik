<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Discussion;
use App\Models\User;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class DiscussionController extends Controller
{

    public function index()
    {
        $discussions = Discussion::all();

        return view('frontend.discussions.index', compact('discussions'));
    }

    public function show(Discussion $discussion)
    {

        $discussion->load('user');

        return view('frontend.discussions.show', compact('discussion'));
    }


}
