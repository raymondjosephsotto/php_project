<?php
// function get_quilter_info($quilter_id) {
//     global $db;
//     $query = 'SELECT * FROM quilter_account_setup
//               WHERE quilter_account_setup.quilter_id = :quilter_id
//               ORDER BY quilter_id';
//     $statement = $db->prepare($query);
//     $statement->bindValue(":quilter_id", $quilter_id);
//     $statement->execute();
//     $get_quilter_info = $statement->fetchAll();
//     $statement->closeCursor();
//     return $get_quilter_info;
// }


// function delete_get_quilter_info($quilter_id) {
//     global $db;
//     $query = 'DELETE FROM quilter_account_setup
//               WHERE quilter_id = :quilter_id';
//     $statement = $db->prepare($query);
//     $statement->bindValue(':quilter_id', $quilter_id);
//     $statement->execute();
//     $statement->closeCursor();
// }

function add_quilter($quilter_id, $fname, $lname, $phone, $email, $contact_via) {
    global $db;
    $query = 'INSERT INTO quilter_account_setup
                 (quilter_id, fname, lname, phone, email, contact_via)
              VALUES
                 (:quilter_id, :fname, :lname, :phone, :email, :contact_via)';

    $statement = $db->prepare($query);
    $statement->bindValue(':quilter_id', $quilter_id);
    $statement->bindValue(':fname', $fname);
    $statement->bindValue(':lname', $lname);
    $statement->bindValue(':phone', $phone);
	$statement->bindValue(':email', $email);
    $statement->bindValue(':contact_via', $contact_via);
    $statement->execute();
    $statement->closeCursor();
}

// function get_quilter_id() {
//     global $db;
//     $query = 'SELECT  quilter_id FROM quilter_account_setup
//               ORDER BY LAST_INSERT_ID()';
//     $statement = $db->prepare($query);
//     $statement->execute();
//     return $statement;    
// }

?>