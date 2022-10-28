<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\CourseApplyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use RealRashid\SweetAlert\Facades\Alert;


class FormController extends Controller
{
    public function index(Request $request)
    {

        $data = $request;

        Mail::to('admin@sttimothyadc.co.ke')->send(new ContactMail($data));
        Alert::success('Thank for Contacting Us', ' We are glad hearing from you!');
        return redirect()->back();


    }

    public function apply(Request $request)
    {
        $data = $request;


        Mail::to('admin@sttimothyadc.co.ke')->send(new CourseApplyMail($data));
        Alert::success('We have received your Application', "Thank You! $request->first_name");
        return redirect()->back();


    }
}
