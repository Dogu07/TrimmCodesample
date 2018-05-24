<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Schiphol</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">
    <link href="extern.css" rel="stylesheet">
</head>
<body>


<nav class="navbar navbar-default navbar-fixed-top" id="navbarcolor">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="index.html"><img class="navbar-brand" src="images/logo.png" alt="logo"></a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.html">Home</a></li>
                <li><a href="klachtmelden.php">Klacht melden</a></li>
                <li><a href="overzichtklachten/overzicht.html">Overzicht</a></li>
                <li><a href="about/about.html">About us</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Content -->
<div class="container">
    <div class="row">
        <section>
            <div class="wizard">
                <div class="wizard-inner">
                    <div class="connecting-line"></div>
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                            <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                                            <span class="round-tab">
                                                <i class="glyphicon glyphicon-user"></i>
                                            </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                                            <span class="round-tab">
                                                <i class="glyphicon glyphicon-pencil"></i>
                                            </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                                            <span class="round-tab">
                                                <i class="glyphicon glyphicon-phone-alt"></i>
                                            </span>
                            </a>
                        </li>
                        <li role="presentation" class="disabled">
                            <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                                            <span class="round-tab">
                                                <i class="glyphicon glyphicon-ok"></i>
                                            </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <form action="" role="form" class="formcss" method="POST">
                    <div class="tab-content">
                        <div class="tab-pane active" role="tabpanel" id="step1">
                            <div class="step1">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Voornaam</label>
                                        <input type="text" name="naam" class="form-control"  placeholder="Voornaam">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Achternaam</label>
                                        <input type="text" name="achternaam" class="form-control" placeholder="Achternaam">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Straat &amp; huisnummer </label>
                                        <input type="text" name="straat" class="form-control"  placeholder="Straat & Huisnummer">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Postcode</label>
                                        <input type="text" name="postcode" class="form-control" placeholder="Postcode">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email address</label>
                                        <div class="row">
                                            <div class="col-md-9 col-xs-9">
                                                <input type="email" name="email" class="form-control"  placeholder="Email">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                            </ul>
                        </div>







                        <div class="tab-pane" role="tabpanel" id="step2">
                            <div class="step2">
                                <div class="step_21">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label >Type Klacht</label>
                                            <select name="typen">
                                                <option value="geluiden">Geluiden</option>
                                                <option value="verkeer">Verkeer</option>
                                                <option value="parkeren">Parkeren</option>
                                                <option value="toeristen">Toeristen</option>
                                                <option value="milleu">Milleu</option>
                                                <option value="overig">Overig</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Omschrijving Klacht</label>
                                            <input type="text" name="klacht" class="form-control"  placeholder="Omschrijving">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Waneer zou u tevreden zijn</label>
                                            <input type="text" name="tevreden" class="form-control" placeholder="Tevreden">
                                        </div>
                                    </div>

                                </div>


                                <div class="step-22"></div>
                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                <li><button type="button" class="btn btn-primary next-step">Save and continue</button></li>
                            </ul>
                        </div>




                        <div class="tab-pane" role="tabpanel" id="step3">
                            <div class="step3">
                                <h5 class="text-center"><strong>U kunt ons als nog bellen op : 0612345678</strong></h5>
                                <hr>
                            </div>
                            <ul class="list-inline pull-right">
                                <li><button type="button" class="btn btn-default prev-step">Previous</button></li>
                                <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                                <li><button type="button" name="submit" value="Sent" class="btn btn-primary btn-info-full next-step">Save and continue</button></li>
                            </ul>
                        </div>
                        <div class="tab-pane" role="tabpanel" id="complete">
                            <div class="step44">
                                <h5 class="text-center">Voldaan</h5>
                                <hr>
                                <p class="text-center">Dank u wel voor uw tijd</p>
                            </div>
                            <li><input type="submit" class="btn btn-primary next-step"></li>
                        </div>


                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </section>
    </div>
</div>
<div class="space"></div>
<!-- End content -->

<footer class="footer" id="shadow">
    <div class="container">
        <p class="text-muted">© Copyrighted by Groep 6</p>
    </div>
</footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/js.js"></script>
</body>
</html>
<?php

// Controleren voor front-end in normale vorm





$link = mysqli_connect("localhost", "*****", "*****", "*****");
if($link === false){die("ERROR: Could not connect. " . mysqli_connect_error());}
$sql = 'INSERT INTO omwonende_klachten (`voornaam`, `achternaam`, `adres`, `postcode`, `email`, `typen` , `omschrijving`, `tevreden`)VALUES("'. $_POST['naam'] . '", "' . $_POST['achternaam'] . '", "' . $_POST['straat'] . '", "' . $_POST['postcode'] . '", "' . $_POST['email'] . '", "' . $_POST['typen'] . '", "' . $_POST['klacht'] . '",  "' . $_POST['tevreden'] . '" );';
if(mysqli_query($link, $sql)){
    echo "";
} else{
    echo "ERROR: Could not able to execute. " . mysqli_error($link);
}
mysqli_close($link);
?>

