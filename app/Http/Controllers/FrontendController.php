<?php

namespace App\Http\Controllers;

use App\Models\Backend\Branch;
use App\Models\Backend\Branchmessage;
use App\Models\Backend\General_info;
use App\Models\Backend\Main_slider;
use App\Models\Backend\Room;
use App\Models\Career;
use App\Models\ContactMessage;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function main()
    {
        $branchs = Branch::all();
        $mainSliders = Main_slider::all();
        $general_infos = General_info::first();
        // dd($branchs);
        return view('frontend.pages.home.main', compact('mainSliders', 'branchs', 'general_infos'));
    }

    public function home()
    {
        $branchs = Branch::all();
        $mainSliders = Main_slider::all();
        $general_infos = General_info::first();
        // dd($branchs);
        return view('frontend.pages.home.main', compact('mainSliders', 'branchs', 'general_infos'));
    }

    public function about()
    {
        $branchs = Branch::all();
        return view('frontend.pages.about.index', compact('branchs'));
    }

    public function gallery()
    {
        $rooms = Room::all();
        return view('frontend.pages.gallery.index', compact('rooms'));
    }

    public function career()
    {
        return view('frontend.pages.career.index');
    }

    public function careerStore(Request $request)
    {
        $validatedData = $request->validate([
            "name" => 'required|max:100',
            "name_bn" => 'required|max:100',
            "father" => 'required',
            "mother" => 'required',
            "psnt_address" => 'required',
            "prmnt_address" => 'required',
            "vacan_posi" => 'required',
            "reference" => 'required',
            "experience_1" => 'required',
            "experience_2" => 'required',
            "experience_3" => 'required',
            "email" => 'required',
            "phone" => 'required',
            "experience_time" =>  'required',
            "message" =>  'required',
            "remote" =>  'required',
            "cv" =>  'required',
        ]);

        $fileName = time() . "_" . $request->cv->getClientOriginalName();
        $request->cv->move(public_path('frontendCVs/'), $fileName);
        $validatedData['cv'] = $fileName;
        Career::create($validatedData);
        return redirect()->back()->with('success', 'Message sent successfully');
    }

    public function contact()
    {
        $branchs = Branch::all();
        return view('frontend.pages.contact.index', compact('branchs'));
    }

    public function hotels()
    {
        $data = Branch::all();
        return view('frontend.pages.ourhotels.index', compact('data'));
    }

    public function tour()
    {
        $branchs = Branch::all();
        return view('frontend.pages.tour.index', compact('branchs'));
    }

    public function contactStore(Request $request)
    {
        $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|max:100',
            'message' => 'required',
        ]);
        Branchmessage::create($request->all());
        return redirect()->back()->with('success', 'Message sent successfully');
    }


    public function news()
    {
        return view('frontend.pages.news.index');
    }
}
