<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Student {

    private $studentModel;

    public function __construct() {
        $this->studentModel = new Student_Model();
    }

    /**
     * 
     * @return type
     */
    public function getAllStudents() {
        return $this->studentModel->getAll();
    }

    /**
     * 
     * @param type $student_name
     */
    public function addAStudent($student_details) {
        $this->studentModel->insetOne($student_details);
    }

}
