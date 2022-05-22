<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;


class TicketController extends Controller
{

    public function index()
    {
        /*$tickets = Ticket::latest()->paginate(5);
        //dd($tickets->get()->toArray());

        return view('tickets.index', compact('tickets'))
            ->with('i', (request()->input('page', 1) - 1) * 5);*/

        $tickets = Ticket::all();

        return view('tickets.index', compact('tickets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tickets.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name'   => 'required|max:15',
            'phone' => 'required',
            'deparment' => 'required',
            'gender' => 'required',
            'email' => 'required',
            'date' => 'required',
        ]);

        Ticket::create($request->all());

        return redirect()->route('products.index')
                         ->with('success', 'Product was added successfully');

    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function show(Ticket $ticket)
    {
        return view('tickets.show', compact('ticket'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function edit(Ticket $ticket)
    {
        return view('tickets.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ticket $ticket)
    {
        $request->validate([
            'name'      => 'required|max:15',
            'phone'     => 'required',
            'deparment' => 'required',
            'gender'    => 'required',
            'email'     => 'required',
            'date'      => 'required',
        ]);

        $ticket->update($request->all());

        return redirect()->route('tickets.index')
                         ->with('success', 'The appoinment was successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ticket  $ticket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ticket $ticket)
    {
        $ticket->delete();
        return redirect()->route('tickets.index')
                         ->with('success', 'Appointment successfully deleted');
    }
}
