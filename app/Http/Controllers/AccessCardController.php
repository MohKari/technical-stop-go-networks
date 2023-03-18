<?php

namespace App\Http\Controllers;

use App\Models\AccessCard;
use Illuminate\Http\Request;

class AccessCardController extends Controller
{
    public function search()
    {
        $data = [
            'full_name' => '',
            'department' => [],
        ];

        return response()->json($data);
    }
}
