<?php
require('../model/database.php');
require('../model/quilter_account_db.php');
include('quilter_account_setup.php');


// $action = filter_input(INPUT_POST, 'action');
// if ($action == NULL) {
//     $action = filter_input(INPUT_GET, 'action');
//     if ($action == NULL) {
//         $action = 'quilter_account_setup';
//     }
// }

// if ($action == 'quilter_account_setup') {
//     $add_quilter = add_quilter($quilter_id, $fname, $lname, $phone, $email, $contact_via);
//     include('quilter_account_setup.php');
// } else if ($action == 'quilter_account_setup') {
//     $quilter_id = filter_input(INPUT_GET, 'quilter_id');
//     $fname = filter_input(INPUT_POST, 'fname');
// 	$lname = filter_input(INPUT_POST, 'lname');
//     $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
//     $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
//     $contact_via = filter_input(INPUT_POST, 'contact_via');

//     // Validate inputs
//     if ($fname == NULL || $lname == NULL || $phone == NULL || $phone == FALSE || $email == NULL || $email == FALSE || $contact_via == NULL) {
//             $error = "Invalid data. Check all fields and try again.";
//             include('../errors/error.php');
//         }  else {
//             include('quilter_account_setup.php');  // display the Quilter Account Setup page
//     }
// } 




?>