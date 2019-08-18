<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Parents {

    private $parentModel;

    public function __construct() {
        $this->parentModel = new Parents_Model();
    }

    /**
     * 
     * @return type
     */
    public function getAllParents() {
        return $this->parentModel->getAll();
    }

    /**
     * 
     * @param type $student_name
     */
    public function addAParent($parent_details) {
        $this->parentModel->insetOne($parent_details);
    }

}
