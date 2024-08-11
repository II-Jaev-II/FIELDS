<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserTypeController extends Controller
{
    public function index()
    {
        if (Auth::id()) {
            $userType = Auth()->user()->userType;

            if ($userType === 'FCA') {
                return view('dashboard');
            } elseif ($userType === 'APCOLAUNION') {
                return view('apco.home');
            } elseif ($userType === 'APCOPANGASINAN') {
                return view('apco.home');
            } elseif ($userType === 'APCOILOCOSSUR') {
                return view('apco.home');
            } elseif ($userType === 'APCOILOCOSNORTE') {
                return view('apco.home');
            } elseif ($userType === 'BUYER') {
                return view('buyer.home');
            } elseif ($userType === 'ADMIN') {
                return view('admin.home');
            } else {
                return redirect()->back();
            }
        }
    }
}
