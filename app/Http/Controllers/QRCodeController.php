<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QRCodeController extends Controller
{
    public function index()
    {
        return view('qrcode.qrcode');
    }
    public function create(Request $request)
    {
        return view('qrcode.qrcode', ['content' => $request->all()]);
    }
}
