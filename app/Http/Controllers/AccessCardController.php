<?php

namespace App\Http\Controllers;

use App\Models\AccessCard;
use Illuminate\Http\Request;

class AccessCardController extends Controller
{
    public function search(Request $request)
    {
        // Ideally this would be validated, and an appropriate message returned.
        $cardNumber = $request->get('cn');
        $accessCard = AccessCard::where('card_number', $cardNumber)->first();

        // return "empty" if the card number provided is invalid
        if ($accessCard === null) {
            return response()->json([
                'full_name' => '',
                'department' => [],
            ]);
        }

        $employee = $accessCard->employee;
        $departments = $employee->departments->pluck('name')->toArray();

        return response()->json([
            'full_name' => $employee->full_name,
            'department' => $departments,
        ]);
    }
}
