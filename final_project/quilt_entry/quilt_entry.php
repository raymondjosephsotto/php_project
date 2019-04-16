<!DOCTYPE html>
<html>
<head>
    <title>Enter a Quilt</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <main>
    <h1>Enter a Quilt</h1>
    <form action="display_results.php" method="post">

    <fieldset>
    <legend>Quilt Entry Information</legend>
		<label>Quilt Length:</label> 
        <input type="text" name="qlength" value="" class="textbox">  (inches)
		<br>
		<label>Quilt Width:</label>
        <input type="text" name="qwidth" value="" class="textbox">  (inches)
		<br>
		<p>Description:</p>
        <textarea name="details" rows="4" cols="50"></textarea>
		<br>
	</fieldset>

    <input type="submit" value="Submit">
    <br>

    </form>    
    </main>
</body>
</html>