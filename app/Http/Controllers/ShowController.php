<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewTicket;
use App\Models\Doctor;

class ShowController extends Controller
{
    public function show_t_Data()
    {
        $newticket = new NewTicket;
        //dd($newticket->all());
        return view('pages.show_t', ['data' => $newticket->find(1)]);
    }

    public function show_x_Data()
    {
        $newticket = new NewTicket;
        return view('pages.show_x', ['data' => $newticket->find(2)]);
    }

    public function show_o_Data()
    {                               
        $newticket = new NewTicket;
        return view('pages.show_o', ['data' => $newticket->find(3)]);
    }

    public function show_d_Data()
    {
        $newticket = new NewTicket;
        return view('pages.show_d', ['data' => $newticket->find(4)]);
    }

    public function showtDoctorData()
    {
        $doctor = new Doctor;
        return view('pages.show_doctor_t', ['data' => $doctor->find([1,2,3])]);
    }

    public function showxDoctorData()
    {
        $doctor = new Doctor;
        return view('pages.show_doctor_x', ['data' => $doctor->find([4,5,6])]);
        
    }

    public function showoDoctorData()
    {
        $doctor = new Doctor;
        return view('pages.show_doctor_o', ['data' => $doctor->find([7,8,9])]);
        
    }

    public function showdDoctorData()
    {
        $doctor = new Doctor;
        return view('pages.show_doctor_d', ['data' => $doctor->find([2,5,4])]);
    }

    
}
