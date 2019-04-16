
<!DOCTYPE html>
<html>
<head>
    <title>Quilter Account Sign Up</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <main>
    <h1>Quilter Account Sign Up</h1>
    <form action="display_results.php" method="post" id="add_quilter_form">
		<input type="hidden" name="action" value="add_quilter">

    <fieldset>
    <legend>Quilter Information</legend>
		<label>First Name</label>
        <input type="text" name="fname" value="" class="textbox">
		<br>
		<label>Last Name</label>
        <input type="text" name="lname" value="" class="textbox">
		
        <label>E-Mail:</label>
        <input type="text" name="email" value="" class="textbox">
        <br>

        <label>Phone Number:</label>
        <input type="text" name="phone" value="" class="textbox">
    </fieldset>

    <fieldset>
    <legend>Settings</legend>

        <p>Contact via:</p>
        <select name="contact_via">
                <option value="email">Email</option>
                <option value="text">Text Message</option>
                <option value="phone">Phone</option>
                <option value="other">Other</option>
        </select>
		<br>
<!--
		<p>Comments:</p>
        <textarea name="comments" rows="4" cols="50"></textarea>
-->
    </fieldset>

    <input type="submit" value="Submit">
    <br>

    </form>    
    </main>
</body>
</html>