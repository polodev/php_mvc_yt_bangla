<?php
require 'models/Data.php';
require 'models/Teacher.php';

$obj = new Teacher();
$teachers = $obj->allTeachers();
require 'views/indexView.php';