<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Contracts\Support\Renderable;
use App\Models\testimoni_feedback;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     */
    public function index()
    {
        $data = [
            // 'testimoni_feedback' => testimoni_feedback::where('status', 1)->orderBy('created_at', 'desc')->get(),
            'feedback' => testimoni_feedback::where('status', 1)->get(),
        ];
        return view('welcome', $data);
    }
    // public function index(){
    //     return view("layouts.home");
    // }

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
