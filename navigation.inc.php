<div class="navigation">
    <ul class="nav nav-pills pull-right">
        <?php
        foreach ($CFG['NAV'] as $NAV) {
            if ($ID == $NAV['ID'])
                echo '<li class="active">';
            else
                echo '<li>';
            echo '<a href="' . $_SERVER['PHP_SELF'] . '?ID=' . $NAV['ID'] . '">' . $NAV['Name'] . '</a></li>';
        }
        ?>
    </ul>
    <h3 class="muted"><?php print($CFG['Titel']); ?></h3>
</div>

