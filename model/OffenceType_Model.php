<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class OffenceType_Model implements Model {

    public function __construct() {
        
    }

    /**
     * 
     * @return type
     */
    public function getAll() {
        return $all = DB::run("SELECT * FROM offence_type where is_active=1")->fetchAll();
    }

    /**
     * 
     * @param type $id
     */
    public function getOne($id) {
        $row = DB::run("SELECT * FROM offence_type WHERE id=?", [$id])->fetch();
    }

    /**
     * 
     * @param type $array
     */
    public function insetOne($array) {
        $stmt = DB::prepare("INSERT INTO offence_type VALUES (NULL, ?)");
        foreach (['Sam', 'Bob', 'Joe'] as $name) {
            $stmt->execute([$name]);
        }
    }

    /**
     * 
     * @param type $value
     * @param type $id
     */
    public function editOne($value, $id) {

        $stmt = DB::run("UPDATE offence_type SET name=? WHERE id=?", [$value, $id]);
    }

    /**
     * 
     * @param type $id
     */
    public function deleteOne($id) {
        $stmt = DB::run("UPDATE offence_type SET is_active=? WHERE id=?", [0, $id]);
    }

}
