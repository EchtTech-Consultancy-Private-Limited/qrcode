<!DOCTYPE html>
<html>
<head>
    <title>Echttech QR</title>
</head>
<body>
<div class="visible-print text-center">
    {!! QrCode::size(120)->generate('https://qr.echttech.com/public/getdetails/1'); !!}
</div>
</body>
</html>