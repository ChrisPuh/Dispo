<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;

class UserIndexController extends Controller
{
    /**
     * @return View
     */
    public function __invoke(): View
    {
        return view('user.index',
            ['users' => User::all()]
        );
    }
}
