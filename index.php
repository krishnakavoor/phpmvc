<?php

/* * *
 * This is front controller methodology where in all the events of the site happens in front index.php
 */

include 'config/config.php';

include 'view/template/header.php';
$student = new Student();
$teacher = new Teacher();
$offence = new Offence();
$offenceType = new OffenceType();
$detentionType = new DetentionType();
$detention = new Detention();
$parent = new Parents();
if ($_SERVER['REQUEST_URI'] == PROJECT_PATH . '/') {

    $allStudent = $student->getAllStudents();
    $allTeacher = $teacher->getAllTeachers();
    $allOffence = $offence->getAllOffence();
    $allDetentionType = $detentionType->getAllDetentionType();
    $allOffenceType = $offenceType->getAllOffenceType();
    $allDetention = $detention->getAllDetention();

    include 'view/home.php';
} elseif ($_SERVER['REQUEST_URI'] == PROJECT_PATH . '/student') {
    $allParent = $parent->getAllParents();
    $all = $student->getAllStudents();

    include 'view/student.php';
} elseif ($_SERVER['REQUEST_URI'] == PROJECT_PATH . '/student/add') {

    if (isset($_POST['student_name'])) {
        $student->addAStudent($_POST);
    }
} elseif ($_SERVER['REQUEST_URI'] == PROJECT_PATH . '/teacher') {

    $all = $teacher->getAllTeachers();
    include 'view/teacher.php';
}  elseif ($_SERVER['REQUEST_URI'] == PROJECT_PATH . '/parents') {

    $all = $parent->getAllParents();
    include 'view/parents.php';
} elseif ($_SERVER['REQUEST_URI'] == PROJECT_PATH . '/teacher/add') {

    if (isset($_POST['teacher_name'])) {
        $teacher->addATeacher($_POST);
    }
} elseif ($_SERVER['REQUEST_URI'] == PROJECT_PATH . '/detention-mode') {
    include 'view/detention-mode.php';
} elseif ($_SERVER['REQUEST_URI'] == PROJECT_PATH . '/offense-types') {

    $all = $offence->getAllOffence();
    include 'view/offense-types.php';
} elseif ($_SERVER['REQUEST_URI'] == PROJECT_PATH . '/detention/add') {

    if (isset($_POST['student_id'])) {
        $detention->addADetention($_POST);
    }
} else {
    include 'view/404.php';
}

include 'view/template/footer.php';
?>