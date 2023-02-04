<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class UserEditController extends Controller
{

    public function __invoke(Request $request, string $id): View
    {
        $user = User::query()
            ->where('id', $id)
            ->firstOrFail();

        return view('user.edit',
            ['user' => $user]
        );
    }
}
