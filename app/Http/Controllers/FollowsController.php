<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Routing\Controller;

class FollowsController extends Controller
{

    public function store(User $user)
    {
        auth()
            ->user()
            ->toglleFollow($user);
        return back();
    }
}
