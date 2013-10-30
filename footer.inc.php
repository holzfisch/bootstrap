<footer class="footer">
    <hr />
    <div class='pull-left'>
        Datum: <?= date("d.m.Y") ?>               <br />
        IP-Adresse: <?= $_SERVER['REMOTE_ADDR'] ?>     <br />
        <?= $_SERVER['HTTP_USER_AGENT'] ?> 
    </div>
    <div class='pull-right'>
        <a
            href="http://validator.w3.org/check?uri=<?= $_SERVER['SERVER_NAME'] ?><?= $_SERVER['PHP_SELF'] ?>?ID=<?= $ID ?>" 
            target="_blank">Valides HTML5? Hier Prüfen!</a>
    </div>
</footer>
