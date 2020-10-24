<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\ContentCategory;
use App\Models\ContentTag;
use App\Models\FaqQuestion;
use App\Models\Post;
use App\Models\Product;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        $posts = Post::all();

        return view('frontend.posts.index', compact('posts'));
    }

    public function show(Post $post)
    {

        $post->load('categories', 'tags', 'products', 'faqs');

        return view('frontend.posts.show', compact('post'));
    }
}
