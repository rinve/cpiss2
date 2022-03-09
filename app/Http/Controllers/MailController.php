<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MessageFromUser;
use App\Models\applicationForPersonalCounseling;
use App\Mail\SendMail;
use App\Models\CounselingQuestion;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function answerEmail($id){
        $contact = MessageFromUser::find($id);
        $details = [
            'title' => 'Answer from CPISS',
            'body' => 'Your Answer: '.$contact->answer
        ];
        Mail::to($contact->email)->send(new SendMail($details));
        return redirect()->route('contact')->with('success', 'Email Sent');

    }
    public function clientApplicationEmail($id){
        $contact = applicationForPersonalCounseling::find($id);
        $details = [
            'title' => 'Answer from CPISS',
            'body' => 'Your Appointment: ' . $contact->answer,
        ];
        Mail::to($contact->email)->send(new SendMail($details));
        return redirect()->route('client.application')->with('success', 'Email Sent');

    }
    public function counselingEmail($id){
        $counseling = CounselingQuestion::find($id);
        $details = [
            'title' => 'Answer from CPISS',
            'body' => 'Your Answer: ' . $counseling->answer,
        ];
        Mail::to($counseling->email)->send(new SendMail($details));
        return redirect()->route('counselings')->with('success', 'Email Sent');

    }
}
