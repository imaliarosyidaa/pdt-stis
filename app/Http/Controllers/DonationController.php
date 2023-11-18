<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donations;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\DonationStatusUpdated;

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
            'nominal' => 'required|integer|min:0',
            'file' => 'required|mimes:jpg,png,jpeg|max:2048',
            'message' => 'nullable|string|max:500',
            'name' => 'nullable|string|max:500',
            'payment_method'=>'required'
        ]);

        $file = $request->file('file'); 
        $fileName = time() . '_' . $file->getClientOriginalName();

        $destinationPath = public_path('uploads');
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }
        $file->move($destinationPath, $fileName);
        $filePath = 'uploads/' . $fileName;

        $status = 'belum dikonfimasi';

        Donations::create([
            // 'user_id' => $request->user_id,
            'nominal' => $request->nominal,
            'link' => $filePath,
            'message' => $request->message,
            'name' => $request->name,
            'status' => $status,
            'metode'=>$request->payment_method,
            'email_pembuat'=>'ragus8188@gmail.com'
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

    // public function viewDonasi()
    // {
    //     $donations = Donations::all();
    //     return view('donasi.viewDonasi', compact('donations'));
    // }

    public function viewDonasi(Request $request)
    {
        $sortOptions = [
            'terbaru' => ['created_at', 'desc'],
            'terlama' => ['created_at', 'asc'],
            'terbesar' => ['nominal', 'desc'],
            'terkecil' => ['nominal', 'asc'],
        ];

        $sortBy = $request->query('sort');
        $sort = $sortOptions[$sortBy] ?? null;

        $year = $request->query('year', null);
        $searchYear = $year ? intval($year) : null;

        $donations = Donations::when($sort, function ($query) use ($sort) {
            return $query->orderBy($sort[0], $sort[1]);
        })
        ->when($searchYear, function ($query) use ($searchYear) {
            return $query->whereYear('created_at', $searchYear);
        })
        ->get();

        return view('donasi.viewDonasi', compact('donations', 'year'));
    }



    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'new_status' => 'required|in:belum dikonfirmasi,disetujui,ditolak',
        ]);

        $donation = Donations::findOrFail($id);
        $oldStatus = $donation->status;

        $donation->status = $request->input('new_status');
        $donation->save();

        if ($oldStatus !== $donation->status) {
            // Mail::to($donation->user->email)->send(new DonationStatusUpdated($donation));
            Mail::to($donation->email_pembuat)->send(new DonationStatusUpdated($donation));
        } 

        return redirect()->route('donations.viewDonasi')->with('success', 'Donation status updated successfully.');
    }

    public function approvedDonationSum()
    {
        $approvedSum = DB::table('donations')->where('status', 'disetujui')->sum('nominal');
        return view('donasi.approvedDonationSum', compact('approvedSum'));
    }

    public function totalApprovedDonationPerMonth()
    {
        $totalPerMonth = Donations::where('status', 'disetujui')
            ->whereNotNull('created_at')
            ->groupBy(DB::raw('YEAR(created_at)'), DB::raw('MONTH(created_at)'))
            ->orderBy(DB::raw('YEAR(created_at)'), 'desc')
            ->orderBy(DB::raw('MONTH(created_at)'), 'desc')
            ->select(
                DB::raw('YEAR(created_at) as year'),
                DB::raw('MONTH(created_at) as month'),
                DB::raw('SUM(nominal) as total')
            )
            ->get();

        return view('donasi.totalApprovedDonationPerMonth', compact('totalPerMonth'));
    }

}
