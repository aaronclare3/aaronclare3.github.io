<?php 
if(isset($_POST['submit'])){
    $to = "aaronclare88@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $message = $_POST['message'];
    $name = $_POST['name'];
    $subject = "Form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    header('Location: index.html');
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact | Clare Accounting</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="jQuery.js"></script>
    <link rel="stylesheet" href="css/flexboxgrid.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/2d0c359df6.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</head>
<body>
    <header id="main-header">
        <div class="row center-xs center-sm middle-xs middle-sm middle-md middle-lg">
            <div class="header-img col-xs-12 col-sm-12 col-md-4 col-lg-4">
                <img src="./images/transparent_logo1.png" alt="Clare Accounting Group">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 mt-2">
                <nav id="navbar">
                    <ul class="firstlist">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">Our Team</a></li>
                        <li>
                            <a>Services <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown">
                                <li><a href="accounting_bookkeeping.html">Accounting & Bookkeeping</a></li>
                                <li><a href="business_taxation.html">Business Income Taxation</a></li>
                                <li><a href="payroll_processing.html">Payroll Services</a></li>
                                <li><a href="consulting.html">Consulting</a></li>
                                <li><a href="financial_statement_preparation.html">Financial Statement Preparation</a></li>
                                <li><a href="individual_income_tax.html">Individual Income Taxation</a></li>
                            </ul>
                        </li>
                        <li class="current"><a href="contact.php">Contact</a></li>
                        <li><a href="client_portal.html">Client Portal</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>


    
    
    
    <div id="page" class="row center-xs center-md center-sm center-lg">
        <div class="col-sm-11 col-xs-11 col-md-8 col-lg-4">
            <div class="card">
                <div class="card-header text-white">
                    <h4 class='mb-0'>Setup a Free Consultation</h4>
                </div>
                <div class="card-body">
                    <form action="" class="form" method='post' role='form' autocomplete="off">
                        <div class="form-group mb-4 row">
                            <div class="col-lg-12">
                                <input type="text" name='name' class="form-control" placeholder='Name'>
                            </div>
                        </div>
                        
                        <div class="form-group mb-4 row">
                            <div class="col-lg-12">
                                <input type="email" name='email' class="form-control" placeholder='Email'>
                            </div>
                        </div>
                        
                        <div class="form-group mb-4 row">
                            <div class="col-lg-12">
                                <textarea name="message" class="form-control" placeholder='Message' maxlength="500"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-lg-12">
                                <button type='submit' class='btn text-white'>Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="center-lg center-md center-sm center-xs" id="page-contact"><h3> Call us at 425-497-1431</h3></div>

    <section  id="page" class="contact">
        <div class="container">
            <div class="row center-xs center-sm center-md center-lg">
                <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                    <div id="map"></div>
                </div>
            </div>
        </div>
    </section>

  
        
    <section id="company">
        <div class="row center-xs center-sm center-md center-lg pb-3">
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h4>Contact Us</h4>
                <ul>
                    <li><i class="fa fa-phone"></i> 425-497-1431</li>
                    <li><i class="fa fa-envelope"></i> <a href="mailto:scott.clare@clareaccountinggroup.com">scott.clare@clareaccountinggroup.com</a></li>
                    <li><i class="fa fa-map"></i><a target="_blank" href="https://www.google.com/maps/dir//7981+168th+Ave+NE+%23222,+Redmond,+WA+98052/@47.6746557,-122.1867028,12z/data=!4m9!4m8!1m0!1m5!1m1!1s0x549072b13f995d7b:0xc7be10a07b2a7e05!2m2!1d-122.1166624!2d47.674677!3e0"> 7981 168th Avenue NE Suite 222 Redmond, WA 98052</a></li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                <h4>Our Values</h4>
                <p>Integrity, Commitment, Simplicity, Teamwork, and Quality</p>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 text-bottom">
                <a href="privacy.html">Privacy Policy</a><span> | </span>
                <a href="">Disclaimer</a>
            </div>
        </div>
        <div class="row center-xs center-sm center-md center-lg">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 add-border">
                <p>Copyright &copy; 2019 | Clare Accounting Group</p>
            </div>
        </div>
    </section>


    <script>
        function initMap() {
            var myLatLng = {lat: 47.674670, lng: -122.116840};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 18,
                center: myLatLng,
                mapTypeId: google.maps.MapTypeId.HYBRID
            });

            var marker = new google.maps.Marker({
                position: myLatLng,
                map: map,
                title: 'Clare Accounting Group',
                animation: google.maps.Animation.DROP
            });
            var contentString = '<h1 style="color: black;">Clare Accounting Group</h1>' + '<a target="_blank" href="https://www.google.com/maps/dir//7981+168th+Avenue+Northeast,+Redmond,+WA/@47.6746557,-122.1867028,12z/data=!4m9!4m8!1m0!1m5!1m1!1s0x549072b13f995d7b:0xdd3e10a5d6adbc64!2m2!1d-122.1166624!2d47.674677!3e0">7981 168th Avenue NE Suite 222 Redmond, WA 98052</a>'

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });
            marker.addListener('click', function() {
                infowindow.open(map, marker);
            });
        }

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4HjeXhplfNZb1oPX3HlrQkFz2FuCzoAs&callback=initMap"></script>
</body>
</html>