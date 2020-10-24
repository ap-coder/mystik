<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use App\Models\FaqCategory;
use App\Models\FaqQuestion;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class FaqController extends Controller
{


    public function index()
    {
        $faqQuestions = FaqQuestion::all();

        return view('frontend.faqQuestions.index', compact('faqQuestions'));
    }

    public function show(FaqQuestion $faqQuestion)
    {
        $faqQuestion->load('category');

        return view('frontend.faqQuestions.show', compact('faqQuestion'));
    }
}
