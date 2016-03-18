<?php
$backgroundColor = "AAA";
$textOutput = "";

    if (isset($_GET["color"])){
        $backgroundColor = $_GET["color"];
        echo $txt = "This is pretty cool";
        $textOutput .= $_GET["color"];
    }    
       else {
           $backgroundColor = 333;
       }


    
    if (isset($_POST["submitGrey"])) {
        $backgroundColor = $_POST["submitGrey"];
        $textOutput .= $_POST["submitGrey"];
    }

?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Assignment 1</title>
<style>
body{
    text-align: center;
	color:#FFF;
	background-color:#<?php echo $backgroundColor ?>;
   <? $txt ?>;

}

</style>
</head>


<body>
	<div align="center" id="wrapper">
    
    	<h2>Select a colour</h2>
    
        <form name="greyForm" method="post" action="index.php">
            <button type="submit" name="submitGrey" value="AAA">Light Grey</button>
        </form>
        
        <form name="colorForm" method="get" action="index.php">
            <select name="color" onChange="">
                <option value="844">Red</option>
                <option value="484">Green</option>
                <option value="448">Blue</option>
            </select>
            <button type="submit" name="submitColor" value="submitColor">Submit</button>
        </form>
        
        <?php echo $textOutput;
        ?>
        
	</div>
</body>
</html>