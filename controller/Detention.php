<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Detention {

    private $detentionModel;

    /**
     * 
     */
    public function __construct() {
        $this->detentionModel = new Detention_Model();
    }

    /**
     * 
     * @return type
     */
    public function getAllDetention() {
        return $this->detentionModel->getAll();
    }

    /**
     * 
     * @param type $teacher_details
     */
    public function addADetention($detention_details) {
      

        $date = new DateTime($detention_details['date']);

        $date->format("U");

        $detention_details['date'] = $date->getTimestamp();

        $this->detentionModel->insetOne($detention_details);
    }

}
