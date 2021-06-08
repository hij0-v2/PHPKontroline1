<?php

function printData(){
    $data = "data/rawIdData.txt";
    $content = file_get_contents($data);
    $formData = implode(',', $_POST);
    $content .= $formData."/n";
    file_put_contents($data, $content);
    $messages = file_get_contents($data, true);
    $messages = explode('/n', $messages);
    return $messages;
}