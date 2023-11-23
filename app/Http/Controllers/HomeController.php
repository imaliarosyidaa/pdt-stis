<?php

namespace App\Http\Controllers;

use App\Models\testimoni_feedback;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'testimoni_feedback' => testimoni_feedback::where('status', 1)->orderBy('created_at', 'desc')->get(),
        ];

        return view('layouts.user.HalamanUtama', $data);
    }


    // public function store(Request $request)
    // {
    //     $data = [
    //         'id_user' => $request['id_user'],
    //         'feedback' => $request['feedback'],
    //         'testimoni' => $request['testimoni'],
    //     ];

    //     testimoni_feedback::create($data);

    //     return redirect(route('feedback.create'));
    // }

    // public function create()
    // {
    //     return view('layouts.user.testimoni');
    // }

    // public function view()
    // {
    //     $newView = testimoni_feedback::all();
    //     return view('layouts.admin.menuTestimoni', [
    //         'feedback' => $newView
    //     ]);
    // }
}
