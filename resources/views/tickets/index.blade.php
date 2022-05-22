@extends('layouts.app')

@section('content_ticket')
<div class="container">
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Appoinment</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tickets.create') }}"> Make an appointment</a>
                
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>name</th>
            <th>phone</th>
            <th>deparment</th>
            <th>gender</th>
            <th>email</th>
            <th>date</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($tickets as $ticket)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $ticket->name }}</td>
            <td>{{ $ticket->phone }}</td>
            <td>{{ $ticket->deparment }}</td>
            <td>{{ $ticket->gender }}</td>
            <td>{{ $ticket->email }}</td>
            <td>{{ $ticket->date }}</td>
            <td>
                
                <form action="{{ route('tickets.destroy',$ticket->id) }}" method="POST">

                    <a class="btn btn-info" href="{{ route('tickets.show',$ticket->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('tickets.edit',$ticket->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>

            </td>
        </tr>
        @endforeach
    </table>

    {!! $tickets->links() !!}
</div>
@endsection
