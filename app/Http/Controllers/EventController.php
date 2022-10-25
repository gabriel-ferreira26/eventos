<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        return view('events.listAll.index',['events'=>$events]);
    }

    public function create()
    {
        return view('events.create.index');
    }

    public function store(Request $request)
    {
        $data = $request->only('title', 'city', 'description', 'private');
        Event::create($data);
        // $event = new Event;

        // $event->title       = $request->title;
        // $event->city        = $request->city;
        // $event->description = $request->description;
        // $event->private     = $request->private;

        // $event->save();

        return redirect("/");
    }
}