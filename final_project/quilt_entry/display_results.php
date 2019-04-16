<?php
    // get the data from the form
	$qlength = filter_input(INPUT_POST, 'qlength', FILTER_VALIDATE_FLOAT);
	$qwidth = filter_input(INPUT_POST, 'qwidth', FILTER_VALIDATE_FLOAT);
    $details = filter_input(INPUT_POST, 'details');
    $details = htmlspecialchars($details);  
    // NOTE: You must code htmlspecialchars before nl2br for this to work correctly
    $details = nl2br($details, false); 

// //Validate Inputs
if ($qlength == NULL || $qlength == FALSE || $qwidth == NULL || $qwidth == FALSE || $details == NULL) {
    $error = "Invalid data. Check all fields and try again.";
    include('../errors/error.php');
} 
else {
    require_once('../model/database.php');

    //Add the product to the database
    global $db;
    $query = 'INSERT INTO quilt_entry
                 (qlength, qwidth, details)
              VALUES
                 (:qlength, :qwidth, :details)';
    $statement = $db->prepare($query);
    $statement->bindValue(':qlength', $qlength);
	$statement->bindValue(':qwidth', $qwidth);
	$statement->bindValue(':details', $details);
    $statement->execute();
    $statement->closeCursor();
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
        <h1>Quilt Entry Information</h1>
		<span>Description:</span><br><br>
        <span><?php echo $details; ?></span><br>
        <p>&nbsp;</p>
		
		<fieldset>
		<legend>Dimensions:</legend>
		<label>Length:</label>
        <span><?php echo htmlspecialchars($qlength); echo ' '; echo 'in'; ?></span><br>
		
        <label>Width:</label>
        <span><?php echo htmlspecialchars($qwidth); echo ' '; echo 'in'; ?></span><br>
		</fieldset>
        <form method="get" action="quilt_entry.php">
    <button type="submit">Back</button>
    </main>
</body>
</html>