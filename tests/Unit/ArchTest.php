<?php

declare(strict_types=1);

use App\Console\Commands\ImportExternalProducts;
use App\Enums\BarionItemUnit;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Mail\ContactFormSubmission;
use App\Mail\OrderConfirmationCustomer;
use App\Mail\OrderNotificationAdmin;
use Illuminate\Database\Eloquent\Model;

arch()->preset()->php();
// arch()->preset()->strict();
arch()->preset()->laravel()->ignoring([
    AuthController::class,
    CheckoutController::class,
    ContactController::class,
    ProfileController::class,
    ContactFormSubmission::class,
    OrderConfirmationCustomer::class,
    OrderNotificationAdmin::class,
    ImportExternalProducts::class,
    BarionItemUnit::class,
]);
arch()->preset()->security();
arch()->expect('App\Models')->toBeClasses()->toExtend(Model::class);
arch()->expect('App\Controllers\Controller')->toBeAbstract();
