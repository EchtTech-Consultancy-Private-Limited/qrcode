<!DOCTYPE html>
<html>
<head>
    <title>Echttech QR</title>
</head>
<body>
<div class="visible-print text-center">
    {!! QrCode::size(120)->generate('http://localhost/qr/public/getdetails/3'); !!}
</div>
</body>
</html>