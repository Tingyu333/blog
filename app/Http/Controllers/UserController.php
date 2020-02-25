<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\UserService;

class UserController extends Controller
{
	protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }
    
    //admin查看使用者清單
    public function index()
    {
        $data = $this->userService->getAllUser();
        return response()->json([
            'success' => true,
            'message' => '會員名單',
            'data' => $data,
        ], 200); 
    }
}
