<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;

class KontakController extends Controller
{
    public function kirim(Request $request)
    {
        $data = $request->validate([
            'nama' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255'],
            'subjek' => ['required', 'string', 'max:150'],
            'pesan' => ['required', 'string', 'max:5000'],
        ]);

        Mail::to(env('MAIL_TO_ADDRESS'))
            ->send(new FeedbackMail($data));

        return back()->with(
            'success',
            'Feedback berhasil dikirim. Terima kasih telah menyampaikan masukan kepada tim DigiWise.'
        );
    }
}