<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class DetentionType_Model implements Model {

    public function __construct() {
        
    }

    public function getAll() {
        return $all = DB::run("SELECT * FROM detention_type where is_active=1 ORDER BY  detention_type_id DESC")->fetchAll();
    }

    public function getOne($id) {
        $row = DB::run("SELECT * FROM detention_type WHERE id=?", [$id])->fetch();
    }

    public function insetOne($array) {
        $teacher_name = $array['detention_type_name'];

        $is_active = true;

        DB::run("INSERT INTO `detention_type` (`detention_type_id`, `detention_type_name`,  `is_active`) VALUES (NULL, ?,  ?)", [$teacher_name, $is_active]);
        return DB::lastInsertId();
    }

    public function editOne($value, $id) {

        $stmt = DB::run("UPDATE detentions SET name=? WHERE id=?", [$value, $id]);
        var_dump($stmt->rowCount());
    }

    public function deleteOne($id) {
        $stmt = DB::run("UPDATE detentions SET is_active=? WHERE id=?", [0, $id]);
        var_dump($stmt->rowCount());
    }

}
