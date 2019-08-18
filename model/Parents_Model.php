<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Parents_Model implements Model {

    public function __construct() {
        
    }

    /**
     * 
     * @return type
     */
    public function getAll() {
        return $all = DB::run("SELECT * FROM parents where is_active=1 ORDER BY  parent_id DESC")->fetchAll();
    }

    /**
     * 
     * @param type $id
     */
    public function getOne($id) {
        $row = DB::run("SELECT * FROM parents WHERE id=?", [$id])->fetch();
    }

    /**
     * 
     * @param type $array
     * @return type
     */
    public function insetOne($array) {

        $parent_name = $array['parent_name'];
        $parent_phone = $array['parent_phone'];


        $is_active = true;

        DB::run("INSERT INTO `parents` (`parent_id`, `parent_name`, `parent_phone`, `is_active`) VALUES (NULL, ?, ?, ?)", [$parent_name, $parent_phone, $is_active]);
        return DB::lastInsertId();
    }

    /**
     * 
     * @param type $value
     * @param type $id
     */
    public function editOne($value, $id) {

        $stmt = DB::run("UPDATE parents SET parent_name=? WHERE id=?", [$value, $id]);
        var_dump($stmt->rowCount());
    }

    /**
     * 
     * @param type $id
     */
    public function deleteOne($id) {
        $stmt = DB::run("UPDATE parents SET is_active=? WHERE id=?", [0, $id]);
        var_dump($stmt->rowCount());
    }

}
