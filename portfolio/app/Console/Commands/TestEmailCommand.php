<?php

namespace App\Console\Commands;

use App\Mail\ContactFormMail;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class TestEmailCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Envía un email de prueba para verificar la configuración';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Enviando email de prueba...');

        $data = [
            'name' => 'Prueba del Sistema',
            'email' => 'test@example.com',
            'subject' => 'Email de prueba desde Laravel',
            'message' => 'Este es un mensaje de prueba para verificar que el sistema de emails está funcionando correctamente.',
        ];

        try {
            Mail::to(config('mail.from.address'))->send(new ContactFormMail($data));
            $this->info('✅ Email enviado exitosamente a: ' . config('mail.from.address'));
            $this->info('Revisa tu bandeja de entrada (y spam si no lo ves).');
        } catch (\Exception $e) {
            $this->error('❌ Error al enviar el email: ' . $e->getMessage());
            return 1;
        }

        return 0;
    }
}
