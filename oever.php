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
                    <li class="active"><a href="oever.php">Över</a></li>
                    <li><a href="breefkasten.php">Breefkasten</a></li>
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
                        <p>Up düsse Siede findt Se dat aller Neeste över dat Tüffeltuten 
                            und wat ook noch daarto hören dot.</p>
                        <p>Un dat Se  över all de veelen Informationen de Öwersicht beholen dot, 
                            heft ick mie hier op dat Nootwendigste beschränken dot. <br />
                            Dorbie heft ich mie dacht, dat Se dör de Verbindung von de Daten flink und 
                            zielseeker up dat too kommt, wat Se eegentlich söken wullt.</p>
                    </article>
                </div>
            </div>

            <div class="row-fluid inhalt">   

                <div class="span6">
                    <article>  
                        <h4>Hinwies Een:</h4>
                        <p>Rechtschaipfählör sind Ausdruck meine persöhnlichen Individualität.<br />
                           Außerdem bin ich Hobbylegastehniker und Betatester der Rechschraibrehfoom 2036.
                        </p>
                    </article>
  
                </div>

                <div class="span6">
                    <article> 
                        <h4>Hinwies Twee:</h4>
                        <p>Die Sätz_innin sind aus überzeugter Faulheit nicht gegendert, <strong>so bäh!</strong></p>
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