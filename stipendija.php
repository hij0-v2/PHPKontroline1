<?php
include "data/duomenys.data.php";

?>


<div>
    <?php foreach ($student1->showStudents() as $students):?>
    <?=$students?>
    <?php endforeach;?>
</div>

