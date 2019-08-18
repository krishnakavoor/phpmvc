<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Teacher {

    private $teacherModel;

    /**
     * 
     */
    public function __construct() {
        $this->teacherModel = new Teacher_Model();
    }

    /**
     * 
     * @return type
     */
    public function getAllTeachers() {
        return $this->teacherModel->getAll();
    }

    /**
     * 
     * @param type $teacher_details
     */
    public function addATeacher($teacher_details) {
        $this->teacherModel->insetOne($teacher_details);
    }

}
