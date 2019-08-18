<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

interface Model {

    public function getAll();

    public function getOne($id);

    public function insetOne($array);

    public function editOne($value, $id);

    public function deleteOne($id);
}
