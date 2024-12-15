<?php
namespace App;

use GuzzleHttp\Client;

class GoogleCalendarService
{
    protected $client;
    protected $apiKey;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'https://www.googleapis.com/calendar/v3/']);
        $this->apiKey = config('services.google.api_key'); // Get the API key from config
    }

    public function createEvent($calendarId, $eventDetails)
    {
        $response = $this->client->post("calendars/{$calendarId}/events", [
            'query' => ['key' => $this->apiKey],
            'json' => $eventDetails,
        ]);

        return json_decode($response->getBody()->getContents(), true);
    }
}

