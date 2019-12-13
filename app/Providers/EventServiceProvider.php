<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
=======
use App\Model\InterfaceTable;
use App\Observers\InterfaceTableObserver;
>>>>>>> myxy99/master
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class=>[
            SendEmailVerificationNotification::class,
        ],
        'App\Events\Event' => [
            'App\Listeners\EventListener',
        ],
    ];
    /*注册*/

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
//        InterfaceTable::observe(InterfaceTableObserver::class);

//        parent::boot();
//
//        InterfaceTable::observe(InterfaceTableObserver::class);
    }
}
