<?php
namespace StudentsApp;

class Students{
    private $id;
    private $firstname;
    private $lastname;
    private $average;
    private $absence;

    public function __construct($id,$firstname,$lastname,$average,$absence){
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->average = $average;
        $this->absence = $absence;
    }



    public function showStudents(){
        return[
            $this->id,
            $this->firstname,
            $this->lastname,
            $this->average,
            $this->absence
        ];
    }
}