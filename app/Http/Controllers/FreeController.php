<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FreeRequest;
//use App\Models\Free;
use App\Models\Consultation;
use App\Models\User;


class FreeController extends Controller
{
    public function free(FreeRequest $request)
    {
        //dd($request->all());
       $free = new Consultation();
       $free->name = $request->input('name');
       $free->phone = $request->input('phone');

       $free->save();
       return redirect()->route('/')->with('success', 'Ваши данные успешно отправлены!');
    }

    public function allData()
    {
        $consultation = new Consultation;
        //dd($consultation->all());
        return view('layouts.messages', ['data' => $consultation->all()]);
    }

    public function showMessages($id)
    {
        $consultation = new Consultation;
        return view('layouts.show', ['data' => $consultation->find($id)]);
    }
        public function deleteMessages($id)
    {
        Consultation::find($id)->delete();
        return redirect()->route('ticket')->with('success', 'Запись удалена!');
    }

    public function index ()
    {
        $users = Consultation::find(2)->users;
    }

}

