<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;


use  App\Events\CourseCompleted;
use App\Listeners\SendCourseCompletionEmail;

use  App\Events\NewRegistration;
use App\Listeners\RegistrationEmailSent;

use  App\Events\PaymentMade;
use App\Listeners\InvoiceEmailSent;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],

        // CourseCompleted::class => [
        //     SendCourseCompletionEmail ::class,
        // ],

        NewRegistration::class => [
            RegistrationEmailSent ::class,
        ],

        PaymentMade::class => [
            InvoiceEmailSent ::class,
        ],
    ];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
