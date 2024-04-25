<?php

namespace App\Http\Controllers;

use App\Models\Backend\Branch;
use App\Models\Backend\Branchmessage;
use App\Models\Backend\Branchslider;
use App\Models\Backend\Facilitie;
use App\Models\Backend\Offer;
use App\Models\Backend\Room;
use Illuminate\Http\Request;

class BranchFrontendController extends Controller
{
    public function main(string $id)
    {
        $branches = Branch::findOrFail($id);
        $room_data = Room::where('branch_id', $id)->get();
        $branchsliders = Branchslider::where('branch_id', $id)->get();
        $facility = Facilitie::where('branch_id', $id)->get();
        $offers = Offer::where('branch_id', $id)->get();
        $recreations = Room::where('type', 'recreation')->get();
        // dd($recreations);
        return view('frontend.pages.resort.pages.home.home', compact('branches', 'room_data', 'branchsliders', 'facility', 'offers', 'recreations'));
    }

    public function home(string $id)
    {
        $branches = Branch::findOrFail($id);
        $room_data = Room::where('branch_id', $id)->get();
        $branchsliders = Branchslider::where('branch_id', $id)->get();
        $facility = Facilitie::where('branch_id', $id)->get();
        $offers = Offer::where('branch_id', $id)->get();
        $recreations = Room::where('type', 'recreation')->get();
        // dd($recreations);
        return view('frontend.pages.resort.pages.home.home', compact('branches', 'room_data', 'branchsliders', 'facility', 'offers', 'recreations'));
    }
    public function about(string $id)
    {
        $datas = Branch::findOrFail($id);
        return view('frontend.pages.resort.pages.about.index', compact('datas'));
    }
    public function roomsSuites(string $id, $roomid = null)
    {
        if (!$roomid) {
            $data = Room::where('type', 'accommodation')->get();
            // dd($data);
            return view('frontend.pages.resort.pages.rooms-suites.index', compact('data'));
        }
        $data = Room::find($roomid);
        // dd($data);
        return view('frontend.pages.resort.pages.rooms-suites.room1', compact('data'));
    }

    // public function coupleroom(string $id)
    // {
    //     $data = Branch::findOrFail($id);
    //     return view('frontend.pages.resort.pages.rooms-suites.room1');
    // }
    // public function twinroom(string $id)
    // {
    //     $data = Branch::findOrFail($id);
    //     return view('frontend.pages.resort.pages.rooms-suites.room2');
    // }
    // public function tripleroom(string $id)
    // {
    //     $data = Branch::findOrFail($id);
    //     return view('frontend.pages.resort.pages.rooms-suites.room3');
    // }
    // public function honeymoonroom(string $id)
    // {
    //     $data = Branch::findOrFail($id);
    //     return view('frontend.pages.resort.pages.rooms-suites.room4');
    // }
    // public function executiveroom(string $id)
    // {
    //     $data = Branch::findOrFail($id);
    //     return view('frontend.pages.resort.pages.rooms-suites.room5');
    // }
    // public function presidentialroom(string $id)
    // {
    //     $data = Branch::findOrFail($id);
    //     return view('frontend.pages.resort.pages.rooms-suites.room6');
    // }

    public function restaurant(string $id, $roomid = null)
    {
        // dd($id);
        // dd($roomid);
        $room_data = Branch::find($id);
        if (!$roomid) {
            $data = Room::where('type', 'restaurant')->get();            
            // dd($room_data);
            return view('frontend.pages.resort.pages.restaurant.index', compact('data','room_data'));
        }
        $room = Room::find($roomid);
        $url=strtolower(str_replace([' ', '+', '&', '\''], '-', 'Yamini & Tabassum  + Tahi'));
        // dd($room); urlencode($value)        
        // dd($url);
        return view('frontend.pages.resort.pages.restaurant.index1', compact('room','room_data'));
    }
    public function contact(string $id)
    {
        $branches = Branch::findOrFail($id);
        // dd($branches);
        return view('frontend.pages.resort.pages.contact.index', compact('branches'));
    }
    public function contactStore(Request $request, string $id)
    {
        $data = $request->validate([
            'name' => 'required|max:100',
            'email' => 'required|max:100',
            'message' => 'required',
            'phone' => 'required',
            'subject' => 'required',

        ]);
        $data['branch_id'] = $id;
        Branchmessage::create($data);
        return redirect()->back()->with('success', 'Message sent successfully');
    }

    public function news(string $id)
    {
        $data = Branch::findOrFail($id);
        return view('frontend.pages.resort.pages.news.index');
    }
    public function gallery(string $id)
    {
        $galleries = Room::where('branch_id', $id)->get();
        return view('frontend.pages.resort.pages.gallery.index', compact('galleries'));
    }
    public function recreation(string $id, $roomid = null)
    {
        if (!$roomid) {
            $data = Room::where('type', 'recreation')->get();
            return view('frontend.pages.resort.pages.recreation.index', compact('data'));
        }
        $data = Room::find($roomid);
        // dd($data);
        return view('frontend.pages.resort.pages.recreation.index1', compact('data'));
    }
    public function meeting(string $id, $roomid = null)
    {        
        if (!$roomid) {
            $data = Room::where('type', 'meeting')->get();
            return view('frontend.pages.resort.pages.meeting.index', compact('data'));
        }
        $data = Room::find($roomid);
        return view('frontend.pages.resort.pages.meeting.index1', compact('data'));
    }
    public function special(string $id)
    {
        $data = Branch::findOrFail($id);
        return view('frontend.pages.resort.pages.special.index');
    }
    public function getResort(Request $request, string $id)
    {
        $data = Branch::findOrFail($id);
        return view('frontend.pages.resort.pages.home.home');
    }

    public function hotels(string $id, $roomid = null)
    {
        $branchs = Branch::find($id);
        return view('frontend.pages.resort.pages.ourhotels.index', compact('branchs'));
    }

    public function tour(string $id, $roomid = null)
    {
        $branchs = Branch::find($id);
        return view('frontend.pages.resort.pages.tour.index', compact('branchs'));
    }
}
