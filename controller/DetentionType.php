<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DetentionType {

    private $detentionTypeModel;

    /**
     * 
     */
    public function __construct() {
        $this->detentionTypeModel = new DetentionType_Model();
    }

    /**
     * 
     * @return type
     */
    public function getAllDetentionType() {
        return $this->detentionTypeModel->getAll();
    }

    /**
     * 
     * @param type $teacher_details
     */
    public function addADetentionType($teacher_details) {
        $this->detentionTypeModel->insetOne($teacher_details);
    }

}
