<?php

namespace App\Http\Controllers;

use App\Models\testimoni_feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Cookie;

class feedbackController extends Controller
{
    public function store(Request $request)
    {
        $data = [
            'id_user' => $request['id_user'],
            'feedback' => $request['feedback'],
            'testimoni' => $request['testimoni'],
        ];

        testimoni_feedback::create($data);

        return redirect(route('feedback.create'));
    }

    public function create()
    {
        return view('layouts.user.testimoni');
    }

    public function view()
    {
        $newView = testimoni_feedback::all();
        return view('layouts.admin.menuTestimoni', [
            'feedback' => $newView
        ]);
    }

    public function editview($id, Request $request)
    {
        // Query untuk mendapatkan data testimoni_feedback berdasarkan $id
        $feedback = testimoni_feedback::find($id);

        // Pastikan data ditemukan sebelum mengakses properti
        if ($feedback) {
            // Lakukan operasi pada $feedback
            $newStatus = $request->input('status') == 0 ? 1 : 0;

            // Update status pada testimoni_feedback
            $feedback->update(['status' => $newStatus]);
            // Store $newStatus in a cookie
            Cookie::queue('newStatus', $newStatus, 60); // The third parameter is the number of minutes the cookie should be valid

            return redirect(route('feedback.view'))->with('success', 'Berhasil mengubah status');
        } else {
            // Handle jika data tidak ditemukan
            return redirect(route('admin'))->with('error', 'Data tidak ditemukan');
        }
    }

    public function hapusTestimoni($id)
    {
        // Temukan testimoni berdasarkan ID
        $feedback = testimoni_feedback::find($id);

        // Periksa apakah testimoni ditemukan
        if (!$feedback) {
            return response()->json(['message' => 'Testimoni tidak ditemukan'], 404);
        }

        // Hapus testimoni
        $feedback->delete();

        return Redirect::back()->with(['message' => 'Testimoni berhasil dihapus']);
    }
}
