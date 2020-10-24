<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UpdateProfileRequest;
use Gate;
use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProfileController extends Controller
{
    public function index(User $user)
    {
        $user = auth()->user();

        return view('frontend.profile');
    }


    public function myaccount(User $user)
    {
        $user = auth()->user();

        return view('frontend.myaccount');
    }


}
