<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Detention_Model implements Model {

    public function __construct() {
        
    }

    public function getAll() {
        return $all = DB::run("SELECT d.detentions_id,s.student_name,t.teacher_name,d.date,o.offense_name,ot.offence_type_name,
dt.detention_type_name,p.parent_name,p.parent_phone,d.total_time FROM detentions d 
left join student s on s.student_id=d.student_id
left join teachers t on t.teacher_id=d.teacher_id
left join offense o on o.offense_id=d.offence_id
left join detention_type dt on dt.detention_type_id=d.detention_type_id
left join offence_type ot on ot.offence_type_id=d.offence_type_id
left join parents p on p.parent_id=s.parent_id
where d.is_active=1 
ORDER BY  detentions_id DESC")->fetchAll();
    }

    public function getOne($id) {
        $row = DB::run("SELECT * FROM detentions WHERE id=?", [$id])->fetch();
    }

    public function insetOne($array) {
        $teacher_id = $array['teacher_id'];
        $student_id = $array['student_id'];
        $date = $array['date'];
        $detention_type_id = $array['detention_type_id'];
        $total_time = $array['total_time'] * 60;
        $offence_id = $array['offence_id'];
        $offence_type_id = $array['offence_type_id'];

        $is_active = true;
        /**
         * $date,$detention_type_id and $student_id get the value of them and search if the given student has more than 8 hrs of the consecutive detentions from below query
         * 
         * $value= select sum(total_time)/60 as total_time from detentions where student_id=2 
          and date=461714400
          and detention_type_id=1;
         * 
          if($value>8){
         * throw an exception and send error message
          }else{
          run below query
         * }
         */
        DB::run("INSERT INTO `detentions` (`detentions_id`, `student_id`, `teacher_id`,`date`,`detention_type_id`,`offence_id`,`offence_type_id`,`total_time`, `is_active`) VALUES (NULL, ?,  ?,?,?,?,?,?,?)", [$student_id, $teacher_id, $date, $detention_type_id, $offence_id, $offence_type_id, $total_time, $is_active]);
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
