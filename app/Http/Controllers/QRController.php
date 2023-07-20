<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Redirect;
use DB;
class QRController extends Controller
{
    public function qrgeneration()
    {

        // phpinfo();
        // die;
        $firstName = "John";
        $lastName = "Doe";
        $jobTitle = "Software Developer";
        $company = "ABC Corporation";
        $email = "john.doe@example.com";
        $phone = "+1 555-1234";
        $website = "https://example.com";

        $vCard = "BEGIN:VCARD\r\n";
        $vCard .= "VERSION:3.0\r\n";
        $vCard .= "FN:" . $firstName . " " . $lastName . "\r\n";
        $vCard .= "N:" . $lastName . ";" . $firstName . "\r\n";
        $vCard .= "ORG:" . $company . "\r\n";
        $vCard .= "TITLE:" . $jobTitle . "\r\n";
        $vCard .= "EMAIL:" . $email . "\r\n";
        $vCard .= "TEL:" . $phone . "\r\n";
        $vCard .= "URL:" . $website . "\r\n";
        $vCard .= "END:VCARD";


        $options = [
            'size' => 300,
            'margin' => 10,
        ];

        // Generate the QR code using the vCard data
        $qrCode = QrCode::generate($vCard);

        return view('qrpage', ['qrCode'=>$qrCode, 'options'=>$options]);
        
    }
    
    public function qrdetails($id)
    {
        $id = $id;
        $userDetails = DB::table('user_details')->where('id',$id)->first();
        return view('qrpage',['userdata'=> $userDetails]);
    }
    
    public function qrcodegeneration()
    {
        return view('qrpage');
    }
    
}
