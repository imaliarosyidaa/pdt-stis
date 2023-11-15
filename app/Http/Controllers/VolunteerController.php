<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Volunteer;

class VolunteerController extends Controller
{
    public function index(){
        $volunteers = Volunteer::select('*')->get();
        return view('volunteer.index',['volunteers'=>$volunteers]);
    }
    public function add(){
        return view('volunteer.add');
    }
    public function simpan(Request $request){
        $volunteers = Volunteer::create([
            'user_id' => $request->user_id,
            'nim' => $request->nim,
            'devisi' => $request->devisi,
            'no_wa' => $request->no_wa,
            'link' => $request->link,
            'status_pendaftaran' => $request->status_pendaftaran,
            'created_at' => $request->created_at,
            'update_at' => $request->update_at,
        ]);

        return redirect()->route('index');
    }
}
