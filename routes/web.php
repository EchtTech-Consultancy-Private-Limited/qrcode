<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('qr-code/examples/v-card', function () 
{
    // Personal Information
    $firstName = 'Gaurav';
    $lastName = 'Saxena';
    $title = 'Mr.';
    $email = 'john.doe@example.com';
    
    // Addresses
    $homeAddress = [
        'type' => 'home',
        'pref' => true,
        'street' => '123 my street st',
        'city' => 'My Beautiful Town',
        'state' => 'LV',
        'country' => 'Neverland',
        'zip' => '12345-678'
    ];
    $wordAddress = [
       'type' => 'work',
       'pref' => false,
       'street' => '123 my work street st',
       'city' => 'My Dreadful Town',
       'state' => 'LV',
       'country' => 'Hell',
       'zip' => '12345-678'
    ];
    
    $addresses = [$homeAddress, $wordAddress];
    
    // Phones
    $workPhone = [
        'type' => 'work',
        'number' => '8130102486',
        'cellPhone' => false
    ];
    $homePhone = [
        'type' => 'home',
        'number' => '001 555-4321',
        'cellPhone' => false
    ];
    $cellPhone = [
        'type' => 'work',
        'number' => '001 9999-8888',
        'cellPhone' => true
    ];

    $phones = [$workPhone, $homePhone, $cellPhone];
    
    $workinfo = [
        'jobtitle' => 'CEO',
        'department' => '',
        'company' => 'EchtTech Consultancy Services Pvt. Ltd.'
    ];

    
    return QRCode::vCard($firstName, $lastName, $title, $email, $addresses, $phones, $workinfo)
                ->setErrorCorrectionLevel('L')
                ->setSize(9)
                ->setMargin(5)
                ->svg();
});


Route::get('getdetails/{id}', [QRController::class, 'qrdetails']);

Route::get('qrcodegeneration', [QRController::class, 'qrcodegeneration']);



