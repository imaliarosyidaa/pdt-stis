<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donations;
use Illuminate\Support\Facades\DB;

class DonationController extends Controller
{

    public function create()
    {
        return view('donations.createDonasi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'nullable',
            'nominal' => 'required|integer',
            'file' => 'required|mimes:jpg,png,jpeg|max:2048',
            'message' => 'nullable|string|max:500',
            'name' => 'nullable|string|max:500',
            'payment_method'=>'required'
        ]);

        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('uploads', $fileName);
        $filePath = 'uploads/' . $fileName;

        Donations::create([
            // 'user_id' => $request->user_id,
            'nominal' => $request->nominal,
            'link' => $filePath,
            'message' => $request->message,
            'name' => $request->name,
            'status' => 'pending',
            'metode'=>$request->payment_method
        ]);


        $allowedExtensions = ['jpg', 'jpeg', 'png'];
        $fileExtension = $file->getClientOriginalExtension();

        if (!in_array($fileExtension, $allowedExtensions)) {
            return redirect()->back()->withErrors(['file' => 'Invalid file extension. Only JPG, JPEG, and PNG are allowed.'])->withInput();
        }
        

        return redirect()->route('donations.berhasil')
            ->with('success', 'Donation created successfully.');
    }

    public function berhasilDonasi()
    {
        $donations = Donations::all();
        return view('donasi.berhasil', compact('donations'));
    }

    public function approvedDonationSum()
    {
        $approvedSum = DB::table('donations')->where('status', 'disetujui')->sum('nominal');
        return view('donasi.approvedDonationSum', compact('approvedSum'));
    }

}
