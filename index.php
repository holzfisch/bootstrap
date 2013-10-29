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
                    <li class="active"><a href="index.php">na Hus</a></li>
                    <li><a href="oever.php">Över</a></li>
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
                        Dat aller Neeste över dat Tüffeltuten 
                        und wat ook noch daarto hören dot.
                    </article>
                </div>
            </div>

            <div class="row-fluid inhalt">   

                <div class="span6">
                    <article>  
                        <h4>Otto Klawuttke sagt:</h4>
                        <p>Kaum macht man's richtig, schon funktionierts.</p>
                    </article>

                    <article> 
                        <h4>GIT-Tutorial</h4>
                        <p>Äh, wo warnochmal die letzte Version? Wie, weg?<br />  
                            Och nö, menno kann doch nich war sein. Geht das nicht anders? Das Chaos bändigen?
                            Oder einfach nur durchblicken und doch mal fertig werden?<br />
                            <a class="btn btn-info" href='http://git.storchbraterei.de' target='_blank'>Doch hier gehts lang</a></p>
                    </article>    

                    <article> 
                        <h4>Tüffeltuten lernen</h4>
                        <p>Wo? Latürnich auf  
                            <a class="btn btn-primary btn-small " 
                               href="https://iversity.org/courses/web-engineering-i-grundlagen-der-web-entwicklung">iversity.org</a>
                                der einzig wahren Wissenstankstelle im Netz
                    </article>    
                </div>

                <div class="span6">
                    <article> 
                        <h4>Samuel L. Ipsum</h4>
                        <p><a href="http://slipsum.com" target='_blank'>a much less offensive 
                                placeholder text generator!</a></p>
                        <!-- start slipsum code -->

                        <h5>Hold on to your butts</h5>
                        <p>The path of the righteous man is beset on all sides by 
                            the iniquities of the selfish and the tyranny of evil men. 
                            Blessed is he who, in the name of charity and good will, 
                            shepherds the weak through the valley of darkness, for he 
                            is truly his brother's keeper and the finder of lost 
                            children. And I will strike down upon thee with great 
                            vengeance and furious anger those who would attempt to 
                            poison and destroy My brothers. And you will know My name 
                            is the Lord when I lay My vengeance upon thee. </p>

                        <!-- please do not remove this line -->

                        <div style="display:none;">
                            <a href="http://slipsum.com">lorem ipsum</a></div>

                        <!-- end slipsum code -->
                    </article>    

                    <article> 
                        <h4>Und wo ist der Rest?</h4>
                        <p><a class="btn btn-block btn-large btn-danger" href='http://lmgtfy.com/?q=Wo+ist+der+Rest%3F' target='_blank'>na Hier</a></p>
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