<?php

        defined('FROM_INDEX') or die('coquin');

        $title= 'Liste des marques';
        ob_start();
?>
        <div class="add-instruments"><a href=""><i class="fa-solid fa-square-plus"></i> Ajouter une marque</a></div>
        
        <div id="l-mark">     
                <table>
                        <thead>
                                <tr>
                                        <th>La liste des marques</th>
                                        <th>La date de modification</th>
                                </tr>
                        </thead>
                        <tbody>
<?php   foreach($data as $marque): ?>
                <div>
                        <tr>
                                <td><?= $marque->getName(); ?></td>
                                <td><?= $marque->getUpdate(); ?></td>
                        </tr>
                </div>
<?php   endforeach; ?>
                        </tbody>
                </table>
        </div>

<?php
        $content = ob_get_clean();

        require ROOT . '/templates/template.php';
?>