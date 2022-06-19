<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Department;
use App\Models\TakeDoctor;
use App\Models\Doctor;
use App\Models\DepartmentModel;
use App\Models\Patient;

class OrderController extends Controller
{
   public function addDepartmant()
   {

   	$dep = new DepartmentModel;
dd($dep);
        $dep->title = $request->input('title');
   
        $dep->save();

        return redirect()->route('newticketdoc');
   }

}