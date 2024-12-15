<?php
namespace App\Http\Controllers;

use App\GoogleCalendarService;
use App\Models\User;
use Illuminate\Http\Request;

class GoogleMeetController extends Controller
{
    protected $googleCalendarService;

    public function __construct(GoogleCalendarService $googleCalendarService)
    {
        $this->googleCalendarService = $googleCalendarService;
    }
    public function index()
    {
        $users = User::all(); // Fetch all users
        return view('schedule-meeting', compact('users'));
    }
    public function scheduleMeeting(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'start_time' => 'required|date|after:now',
            'end_time' => 'required|date|after:start_time',
        ]);

        $eventDetails = [
            'summary' => $request->title,
            'start' => [
                'dateTime' => date('c', strtotime($request->start_time)),
                'timeZone' => 'UTC',
            ],
            'end' => [
                'dateTime' => date('c', strtotime($request->end_time)),
                'timeZone' => 'UTC',
            ],
        ];

        $calendarId = 'primary'; // Default calendar
        $event = $this->googleCalendarService->createEvent($calendarId, $eventDetails);

        return response()->json([
            'message' => 'Meeting scheduled successfully',
            'event' => $event,
        ]);
    }
}
