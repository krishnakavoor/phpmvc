<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Offence {

    private $offenceModel;

    public function __construct() {
        $this->offenceModel = new Offence_Model();
    }

    /**
     * 
     * @return type
     */
    public function getAllOffence() {
        return $this->offenceModel->getAll();
    }

    /**
     * 
     * @param type $student_name
     */
    public function addAOffence($offece_details) {
        $this->offenceModel->insetOne($offence_details);
    }

}
