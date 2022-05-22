<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FreeRequest;
use App\Models\Free;


class FreeController extends Controller{
    public function free(FreeRequest $request)
    {
        //dd($request->all());
       $free = new Free();
       $free->name = $request->input('name');
       $free->phone = $request->input('phone');

       $free->save();
       return redirect()->route('/')->with('success', 'Your data has been successfully sent!');
    }
}

