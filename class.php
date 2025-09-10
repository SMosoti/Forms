<?php
require_once 'class2.php';
require_once 'forms.php';


//create an instance of MyClass
$instance = new MyClass();
//call the myMethod function
$instance->heading();
$instance->myMethod();

//call sign up form
$formInstance->signup_form();
$instance->footer();