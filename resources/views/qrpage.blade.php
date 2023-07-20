<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Information</title>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- bootstrap css -->


  <!-- font awesome  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- google font -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="main-container">
        <div class="mob">
            <div class="container">
                <div class="header">
                    <div class="header-container">
                        <div class="title">
                            <h3> {{ $userdata->name }}</h3>
                            <p>{{ $userdata->designation }}</p>
                        </div>
                        <div class="content">
                            <div class="phone">
                                <a href="tel:{{ $userdata->contact_no }}">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <p>Call</p>
                                </a>
                                
                                
                            </div>
                            <div class="phone">
                                <a href="mailto:{{ $userdata->email }}">
                                    <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                    <p> Email</p>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mob-body">
                    <div class="content-body mt-4">
                        <div class="box-text">
                            <div class="icon">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="no-text">
                                <p class="contact-text-number">{{ $userdata->contact_no }}</p>
                                <p class="contact-text">Mobile</p>
                            </div>
                        </div>

                        <div class="box-text">
                            <div class="icon">
                                <i class="fa fa-envelope" aria-hidden="true"></i> 
                            </div>
                            <div class="no-text">
                                <p class="contact-text-number">{{ $userdata->email }}</p>
                                <p class="contact-text">Email</p>
                            </div>
                        </div>

                        <div class="box-text">
                            <div class="icon">
                                <i class="fa fa-briefcase" aria-hidden="true"></i>
                            </div>
                            <div class="no-text">
                                <p class="contact-text-number">{{ $userdata->organization }}</p>
                                <p class="contact-text">{{ $userdata->designation }}</p>
                            </div>
                        </div>

                        <div class="box-text">
                            <div class="icon">
                                <i class="fa fa-globe" aria-hidden="true"></i>
                            </div>
                            <div class="no-text">
                                <p class="contact-text-number"><a style="text-decoration: none; color:#333;" target="_blank" href="{{ $userdata->website }}">{{ $userdata->website }}</a></p>
                                <p class="contact-text">Website</p>
                            </div>
                        </div>


                        <div class="media">
                            <div class="media-text">
                                <p>Sociol Media</p>

                                <div class="sociol-icon">
                                    <a href="{{ $userdata->linkedin }}" ><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                    <a href="{{ $userdata->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="{{ $userdata->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a target="_blank" href="https://goo.gl/maps/gnNziCeMnwu12SW89" class="map"><img src="{{ asset('images/map.jpeg') }}" alt="map"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>

<!--<!DOCTYPE html>
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
</div> comment 

<p>Neeraj Kumar</p>
<div class="visible-print text-center">
    {!! QrCode::size(50)->generate('https://qr.echttech.com/public/getdetails/3'); !!}
</div>
    
</body>
</html>-->