<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;

class EventController extends Controller
{
    public function index()
    {
        $search = request('search');

        if( $search ){
            $events = Event::where([
                ['title','like','%'.$search.'%']
            ])->get();
        } else {
            $events = Event::all();
        }
        return view('events.listAll.index',['events'=>$events, 'search'=>$search]);
    }

    public function create()
    {
        return view('events.create.index');
    }

    public function store(Request $request)
    {
        // Usando o create, o fillable deve ser adicionado no model
        // $data = $request->only('title', 'city', 'description', 'private');
        // Event::create($data);

        // Usando o save, a classe model deve ser instanciada
        $event = new Event;
        $event->title       = $request->title;
        $event->date        = $request->date;
        $event->city        = $request->city;
        $event->description = $request->description;
        $event->private     = $request->private;
        $event->items       = $request->items;

        $user = auth()->user();
        $event->user_id     = $user->id;

        // Image Upload
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")).".".$extension;

            $requestImage->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }
        $event->save();

        return redirect("/")->with("msg","Evento criado com sucesso!");
    }

    public function show($id)
    {
        $event = Event::findOrFail($id);

        $eventOwner = User::where('id', $event->user_id)->first()->toArray();

        return view('events.show', ['event' => $event, 'eventOwner' => $eventOwner]);
    }
}
