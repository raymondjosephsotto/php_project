<?php
require('../model/database.php');
require('../model/quilter_account_db.php');

    // get the data from the form

	$fname = filter_input(INPUT_POST, 'fname');
	$lname = filter_input(INPUT_POST, 'lname');
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT);
    $contact_via = filter_input(INPUT_POST, 'contact_via');
    

// //Validate Inputs
if ($fname == NULL || $lname == NULL || $phone == NULL || $phone == FALSE || $email == NULL || $email == FALSE || $contact_via == NULL) {
    $error = "Invalid data. Check all fields and try again.";
    include('../errors/error.php');
} else {
    require_once('../model/database.php');

    //Add the product to the database
    global $db;
    $query = 'INSERT INTO quilter_account_setup
                 (fname, lname, phone, email, contact_via)
              VALUES
                 (:fname, :lname, :phone, :email, :contact_via);';

    $statement = $db->prepare($query);
    // $statement->bindValue(':quilter_id', $quilter_id);
    $statement->bindValue(':fname', $fname);
    $statement->bindValue(':lname', $lname);
    $statement->bindValue(':phone', $phone);
	$statement->bindValue(':email', $email);
    $statement->bindValue(':contact_via', $contact_via);
    $statement->execute();
    $statement->closeCursor();
}


// $quilter_id = '';

function get_quilter_id($quilter_id) {
    global $db;
    $id_query = 'SELECT * FROM quilter_account_setup
                 WHERE quilter_id = :quilter_id);';
    $id_statement = $db->prepare($id_query);
    $id_statement->bindValue(':quilter_id', $quilter_id);
    $id_statement->execute(); 
    $quilter = $id_statement->fetch();
    $id_statement->closeCursor(); 


}



 ?> 


<!DOCTYPE html>
<html>
<head>
    <title>Account Information</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>
<body>
    <main>
        <h1>Quilter Account Information</h1>

        <label>Quilter ID:</label>
        <span><?php echo htmlspecialchars($quilter_id); ?></span><br>

		<label>Name:</label>
        <span><?php echo htmlspecialchars($fname); echo ' '; echo htmlspecialchars($lname); ?></span><br>
		
        <label>Email Address:</label>
        <span><?php echo htmlspecialchars($email); ?></span><br>

        <label>Phone Number:</label>
        <span><?php echo htmlspecialchars($phone); ?></span><br>
		
		<label>Contact Via:</label>
        <span><?php echo htmlspecialchars($contact_via); ?></span><br><br>
        
        <form method="get" action="quilter_account_setup.php">
    <button type="submit">Back</button>
</form>
        <p>&nbsp;</p>
    </main>
</body>
</html>