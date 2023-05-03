<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        
        VerifyEmail::toMailUsing(function (object $notifiable, string $url) {
            return (new MailMessage)
                ->subject('Confirmation de votre adresse e-mail')
                ->greeting('Bonjour,')
                ->line('Pour finaliser la vérification de votre adresse e-mail, veuillez cliquer sur le bouton ci-dessous. Ce dernier vous redirigera vers une page de confirmation.')
                ->action('Confirmer mon adresse e-mail', $url)
                ->line('Si vous n\'avez pas créé de compte ou si vous n\'avez pas effectué de demande de vérification d\'adresse e-mail, vous pouvez ignorer cet e-mail en toute sécurité.')
                ->salutation('Cordialement, ');
        });

    }
}
