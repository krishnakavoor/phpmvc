<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Student_Model implements Model {

    public function __construct() {
        
    }

    /**
     * 
     * @return type
     */
    public function getAll() {
        return $all = DB::run("SELECT * FROM student where is_active=1 ORDER BY  student_id DESC")->fetchAll();
    }

    /**
     * 
     * @param type $id
     */
    public function getOne($id) {
        $row = DB::run("SELECT * FROM student WHERE id=?", [$id])->fetch();
    }

    /**
     * 
     * @param type $array
     * @return type
     */
    public function insetOne($array) {

        $student_name = $array['student_name'];

        $parent_id = $array['parent_id'];

        $is_active = true;

        DB::run("INSERT INTO `student` (`student_id`, `student_name`, `parent_id`, `is_active`) VALUES (NULL, ?, ?, ?)", [$student_name, $parent_id, $is_active]);
        return DB::lastInsertId();
    }

    /**
     * 
     * @param type $value
     * @param type $id
     */
    public function editOne($value, $id) {

        $stmt = DB::run("UPDATE student SET name=? WHERE id=?", [$value, $id]);
        var_dump($stmt->rowCount());
    }

    /**
     * 
     * @param type $id
     */
    public function deleteOne($id) {
        $stmt = DB::run("UPDATE student SET is_active=? WHERE id=?", [0, $id]);
        var_dump($stmt->rowCount());
    }

}
