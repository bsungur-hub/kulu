<?php

namespace App\Http\Controllers;

use App\Mail\ContactReceived;
use App\Models\Contact;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validationData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'phone' => 'nullable|string|max:255',

            // Çoklu dosya dizisini doğruluyoruz (maksimum 5 dosya)
            'attachments' => 'nullable|array|max:5',

            // Dizinin içindeki HER BİR dosyanın kuralı (mimes ile izin verilen uzantılar, max ile boyut sınırı - 10MB = 10240 KB)
            'attachments.*' => 'file|mimes:jpg,jpeg,png,pdf,doc,docx,xls,xlsx,dwg,dxf|max:10240',


            // reCAPTCHA Doğrulama Kuralı
            'g-recaptcha-response' => [
                'required',
                function (string $attribute, mixed $value, Closure $fail) {
                    // Google'ın sunucusuna elimizdeki secret key ve kullanıcının cevabını yolluyoruz
                    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                        'secret' => env('RECAPTCHA_SECRET_KEY'),
                        'response' => $value,
                    ]);

                    // Eğer Google "success" (başarılı) demezse, hata fırlatıyoruz
                    if (! $response->json('success')) {
                        $fail('Google reCAPTCHA verification failed. Please try again.');
                    }
                },
            ],
        ], [
            // Kullanıcı kutucuğu hiç işaretlemezse verilecek özel mesaj
            'g-recaptcha-response.required' => 'Please verify that you are not a robot.',
        ]);

        // 1. Google'ın g-recaptcha verisini DB'ye kaydetmemek için diziden çıkarıyoruz
        unset($validationData['g-recaptcha-response']);

        // 2. Register the information to DB
        $contact = Contact::create($validationData);

        // 3. Dosyaları Yakalama
        $files = [];
        if ($request->hasFile('attachments')) {
            $files = $request->file('attachments');
        }

        //to send an mail to customer
        Mail::to($validationData['email'])->send(new ContactReceived($validationData));

        //to send an email to Admin
        Mail::to('info@kuluwindows.com')->send(new ContactReceived($validationData, $files));

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully! Our team will evaluate your request and get back to you as soon as possible');
    }
}
