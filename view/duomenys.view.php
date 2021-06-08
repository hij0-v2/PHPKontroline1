<?php
require "data/duomenys.data.php";
?>
<style>
    table{
        border: 3px solid black;
    }
    th{
     border: 1px solid black;
        text-align: center;
    }
    td{
        border: 1px solid black;
        text-align: center;
    }
</style>
<table>
    <thead>
    <tr>
        <th>Asmens Kodas</th>
        <th>Vardas</th>
        <th>Pavarde</th>
        <th>Vidurkis</th>
        <th>Praleistos pamokos</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <?php foreach ($student1->showStudents() as $students): ?>
            <td><?=$students?></td>
        <?php endforeach;?>
    </tr>

    </tbody>
</table>