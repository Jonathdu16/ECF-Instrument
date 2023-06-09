<?php

        defined('FROM_INDEX') or die('coquin');

        $title= 'Liste des marques';
        ob_start();
?>
        <div class="add-instruments"><a href=""><i class="fa-solid fa-square-plus"></i> Ajouter une marque</a></div>
        
        <div id="l-mark"></div>

<?php
        $content = ob_get_clean();

        require ROOT . '/templates/template.php';
?>