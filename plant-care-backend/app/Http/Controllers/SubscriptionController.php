<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $user = $request->user();
        $user->newSubscription('main', $request->plan_id)->create($request->payment_method);
        return response()->json(['message' => 'Subscription successful']);
    }

    public function cancel(Request $request)
    {
        $user = $request->user();
        $user->subscription('main')->cancel();
        return response()->json(['message' => 'Subscription canceled']);
    }
}
