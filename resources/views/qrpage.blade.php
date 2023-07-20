<!DOCTYPE html>
<html>
<head>
    <title>Echttech QR</title>
</head>
<body>
    <p>Akansha Chauhan</p>    
<div class="visible-print text-center">
    {!! QrCode::size(50)->generate('https://qr.echttech.com/public/getdetails/1'); !!}
</div>
    
    <p>Praveen Kumar Srivastava</p>    
<div class="visible-print text-center">
    {!! QrCode::size(50)->generate('https://qr.echttech.com/public/getdetails/2'); !!}
</div><!-- comment -->

<p>Neeraj Kumar</p>
<div class="visible-print text-center">
    {!! QrCode::size(50)->generate('https://qr.echttech.com/public/getdetails/3'); !!}
</div>
    
</body>
</html>