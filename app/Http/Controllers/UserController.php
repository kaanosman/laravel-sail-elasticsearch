<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserCollection;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param Request $request
     * @return UserCollection
     */
    public function search(Request $request)
    {
        $users = User::search($request->input('query'))
            ->paginate($request->input('pagination', 20));

        return new UserCollection($users);
    }
}
