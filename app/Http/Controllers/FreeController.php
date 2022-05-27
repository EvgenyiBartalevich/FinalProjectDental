<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FreeRequest;
use App\Models\Free;


class FreeController extends Controller
{
    public function free(FreeRequest $request)
    {
        //dd($request->all());
       $free = new Free();
       $free->name = $request->input('name');
       $free->phone = $request->input('phone');

       $free->save();
       return redirect()->route('/')->with('success', 'Your data has been successfully sent!');
    }

    public function allData()
    {
        $free = new Free;
        //dd($free->all());
        return view('layouts.messages', ['data' => $free->all()]);
    }

    public function showMessages($id)
    {
        $free = new Free;
        return view('layouts.show', ['data' => $free->find($id)]);
    }
        public function deleteMessages($id)
    {
        Free::find($id)->delete();
        return redirect()->route('ticket')->with('success', 'Entry deleted!');
    }


}

