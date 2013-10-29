<!DOCTYPE html>
<html lang="de">
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" >  

        <title>De T&uuml;ffeltuterie</title>
        <meta name="description" content="Hausaufgabe MOOC Web-Engeneering 2013 I">
        <meta name="author" content="Sven Petersen">

        <!-- Bootstrap -->    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="css/bootstrap-responsive.css" rel="stylesheet">
        <link href="css/mystyle.css" rel="stylesheet" media="screen">

        <!-- Favicon -->
        <link rel="shortcut icon" href="ico/favicon.png">
    </head>

    <body>

        <div class="seite">

            <div class="navigation">
                <ul class="nav nav-pills pull-right">
                    <li><a href="index.php">na Hus</a></li>
                    <li><a href="oever.php">Över</a></li>
                    <li class="active"><a href="breefkasten.php">Breefkasten</a></li>
                </ul>
                <h3 class="muted">De T&uuml;ffeltuterie</h3>
            </div>

            <hr>

            <div class="kopf">
                <h1>Moinsens,</h1>
                <p class="lead">
                    von Harten wellkomen up de Siede von den 
                    Tüffeltuterie-Fachhompätsch.</p>
            </div>

            <hr>

            <div class="row-fluid inhalt">
                <div class="span12">
                    <article>
                        <p>Up düsse Siede dot stein, as du mi wat vertellen kannst.</p>

                        <p>Dat noemt söch <strong> A Standard for the Transmission of IP Datagrams on Avian Carriers</strong>. 
                        Beesrieven is dat allens in dössen 
                        <a class="btn btn-info" href='http://www.ietf.org/rfc/rfc1149.txt' target='_blank'>RFC 1149</a>. 
                         Un in <a class="btn btn-info" href='http://www.ietf.org/rfc/rfc2549.txt' target='_blank'>RFC 2549</a> is och noch wat drin.</p>
                        <p>Nich dat de denkst, ik veertell di nur Tüddelkrom. De Buttchers un Deerns  
                        <a class="btn btn-info" href='http://www.blug.linux.no/rfc1149/' target='_blank'>hier</a> hebben döt all daan.</p>
                    </article>
                </div>
            </div>


            <hr>
            <div class='clearfix'></div>
            <footer class="footer">
                <hr />
                <div class='pull-left'><?php echo $_SERVER['HTTP_USER_AGENT'] . "<br />" . $_SERVER['REMOTE_ADDR'] . "<br />" . date("d.m.Y"); ?></div>
                <div class='pull-right'><a href="http://validator.w3.org/check?uri=bootstrap.storchbraterei.de" target="_blank">Valides HTML5? Hier Prüfen!</a></div>
            </footer>

        </div> <!-- /container -->


        <!--Script am ende einladen, geht scneller -->
        <!--  weil wir ja auch schon so wahnsinnig viel JS benutzen -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>