<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use App\Models\MSME;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $user = session()->get('user');
        $msme = MSME::where('userID', $user->userID)->first();
        if($msme === null) {
            $applicant = Applicant::where('userID', $user->userID)->first();
            return view('profile/applicant', compact('user', 'applicant'));
        }
        else {
            return view('profile/msme', compact('user', 'msme'));
        }
    }
}
