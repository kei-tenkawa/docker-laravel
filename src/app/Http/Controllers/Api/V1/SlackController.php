<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SlackController extends Controller
{
    //
    public function index(Request $request)
    {
        return response()->json([
            'status' => true,
            'message'=> 'Hello World!',
        ]);
    }
}
