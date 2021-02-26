<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function getNotifications(Request $request) {
        $user = auth()->user();
        $query = Notification::where('user_id', $user->id)
            ->where('seen', '0');

        $notifications = $query->get();
        $query->update(['seen' => 1]);
        return $notifications;
    }
}
