<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use F9Web\ApiResponseHelpers;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    use ApiResponseHelpers;	

    public function index(): JsonResponse
    {
        $users = User::whereNotNull('email_verified_at')->get();

        return $this->apiResponse(['success' => 'true', 'data' => $users->toArray()], 200);
    }
}
