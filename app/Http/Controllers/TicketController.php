<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\TicketRequest;
use App\Models\Appoinment;


class TicketController extends Controller
{

    public function index (TicketRequest $request)
    {
        //dd($request->all());
            $ticket = new Appoinment();
            $ticket->name      = $request->input('name');
            $ticket->phone     = $request->input('phone');
            $ticket->email     = $request->input('email');
            $ticket->deparment = $request->input('deparment');
            $ticket->doc       = $request->input('doc');
            $ticket->gender    = $request->input('gender');
            $ticket->date      = $request->input('date');
            $ticket->time      = $request->input('time');
            $ticket->comment   = $request->input('comment');

        $ticket->save();

        return redirect()->route('/')->with('success', 'Your online entry has been accepted!');
    }

    public function appData()
    {
        $ticket = new Appoinment();
        return view('layouts.app-messages', ['data' => $ticket->all()]);
    }

    public function detailMessages($id)
    {
        $ticket = new Appoinment;
        return view('layouts.detail-messages', ['data' => $ticket->find($id)]);
    }

    public function updateMessages($id)
    {
        $ticket = new Appoinment;
        return view('layouts.update-messages', ['data' => $ticket->find($id)]);
    }

    public function addUpdateMessages ($id, TicketRequest $request)
    {
        //dd($request->all())
            $ticket = new Appoinment();
            $ticket->find($id);
            $ticket->name      = $request->input('name');
            $ticket->phone     = $request->input('phone');
            $ticket->email     = $request->input('email');
            $ticket->deparment = $request->input('deparment');
            $ticket->doc       = $request->input('doc');
            $ticket->gender    = $request->input('gender');
            $ticket->date      = $request->input('date');
            $ticket->time      = $request->input('time');
            $ticket->comment   = $request->input('comment');

        $ticket->save();

        return redirect()->route('appoinment_data', $id)->with('success', 'Your online application has been updated!');
    }
    public function deleteMessages($id)
    {
        Appoinment::find($id)->delete();

        return redirect()->route('appoinment_data', $id)->with('success', 'Your online application has been delete!');
    }


}
