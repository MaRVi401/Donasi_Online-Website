<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelolaDonasi;

class DonationController extends Controller
{
    public function index()
    {
        $donations = KelolaDonasi::with('uangDonasis')->get();
        return view('home', compact('donations'));
    }
}


