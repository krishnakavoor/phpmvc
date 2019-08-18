<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class OffenceType {

    private $offenceTypeModel;

    public function __construct() {
        $this->offenceTypeModel = new OffenceType_Model();
    }

    /**
     * 
     * @return type
     */
    public function getAllOffenceType() {
        return $this->offenceTypeModel->getAll();
    }

    /**
     * 
     * @param type $student_name
     */
    public function addAOffenceType($offece_details) {
        $this->offenceTypeModel->insetOne($offence_details);
    }

}
