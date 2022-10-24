<?php
include_once('includes/header.php');

$employee = [
'name' => $_POST['employeeName'],
'job' => $_POST['employeeJob'],
'salary' => $_POST['employeeSalary'],
];

$_SESSION['employee'][] = $employee; //criando varios arrays e salvando os dados na sessão, sem sobreescrever os dados

include_once('includes/footer.php'); ?>