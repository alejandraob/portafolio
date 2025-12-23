<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function index()
    {
        return Inertia::render('Contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Enviar email
        try {
            Mail::to(config('mail.from.address'))->send(new ContactFormMail($validated));
        } catch (\Exception $e) {
            Log::error('Error al enviar email de contacto: ' . $e->getMessage());
            return back()->withErrors(['email' => 'Hubo un error al enviar el mensaje. Por favor intenta nuevamente.']);
        }

        return back()->with('success', 'Mensaje enviado correctamente');
    }
}
