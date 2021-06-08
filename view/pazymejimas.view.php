<?php
?>

<!doctype html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pazymejimo Generavimas</title>
</head>
<body>
<div class="container">
    <form method="post">
        <div class="form-group" id="idNumber">
            <label for="idNumber">Asmens kodas</label>
            <input type="text" class="form-control" id="idNumber" aria-describedby="idNumberHelp" placeholder="Iveskite asmens koda">
            <small id="idNumberHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group" id="firstName">
            <label for="firstName">Vardas</label>
            <input type="text" class="form-control" id="firstName" aria-describedby="firstNameHelp" placeholder="Iveskite savo varda">
            <small id="firstNameHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group" id="lastName">
            <label for="lastName">Pavarde</label>
            <input type="text" class="form-control" id="lastName" aria-describedby="lastNameHelp" placeholder="Iveskite savo pavarde">
            <small id="lastNameHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <select style="width: 200px" class="form-control" name="course">
            <option selected disabled>-- Pasirinkite kursa --</option>
                <?php foreach ($courses as $course):?>
                <option value="<?=$course;?>"><?=$course;?></option>
                <?php endforeach;?>
            </select>
        </div>
        <div class="form-group" id="schoolName">
            <label for="schoolName">Mokyklos pavadinimas</label>
            <input type="text" class="form-control" id="schoolName" aria-describedby="schoolNanemHelp" placeholder="Iveskite mokyklos pavadinima">
            <small id="schoolNameHelp" class="form-text text-muted"></small>
        </div>
        <button type="submit" class="btn btn-primary" name="send">Generuoti</button>
    </form>
</div>

<table>
    <thead>
    <tr>
        <td>Duomenys</td>
    </tr>
    </thead>
    <tbody>
    <?php foreach (printData() as $data):?>
    <tr>
        <?php $data = explode(',',$data)?>
            <?php foreach ($data as $arr):?>
            <td><?=$arr?></td>
            <?php endforeach;?>
        <?php endforeach;?>
    </tr>
    </tbody>
</table>
</body>

