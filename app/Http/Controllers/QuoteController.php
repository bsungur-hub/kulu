<?php

namespace App\Http\Controllers;

use App\Mail\QuoteReceived;
use App\Models\Quote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    public function index()
    {
        return view('quote');
    }

    public function store(Request $request)
    {

        // gelen verileri doğrulama
        $validatedData = $request->validate([
            'property_type' => 'required|string|max:255',
            'area_size' => 'required|string|max:255',
            'unit_size' => 'required|string|max:255',
            'budget' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // 2. Db' ye kaydetme
        $quota = Quote::create($validatedData);

        // 3. Müşteriye email gönderme
        //Mail::to($validatedData['email'])->send(new QuoteReceived($validatedData));

        // 4. Admin' e bir eposta gönderme
        //Mail::to('sungur99@gmail.com')->send(new QuoteReceived($validatedData));

        // 5. Başarılı mesajıyla sayfaya geri dön
        return redirect()->route('quote')->with('success', 'Quote sent successfully! Our technical team will evaluate your request and get back to you as soon as possible. Thank you for choosing us.');


    }
}
