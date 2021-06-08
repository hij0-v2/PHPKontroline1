<?php
$currentPage = 'kontroline/index';
?>

<ul class="nav navbar-nav navbar-right">
    <?php foreach ($navigacija as $name => $url):?>
    <?php print '<li '.(($currentPage === $name) ? ' class="active" ': '').'><a href="'.$url.'">'.$name.'</a></li>'?>
    <?php endforeach;?>
</ul>
