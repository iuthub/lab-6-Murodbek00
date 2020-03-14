<?php


if(isset($_POST['check_string']))
{
	$word = $_POST['word'];
	$mystring = $_POST['text1'];
 
	// Test if string contains the word 
	if(strpos($mystring, $word) !== false){
   	 	$result1 = "Word Found!";
	} 
	else
	{
    echo "Word Not Found!";	
	}
}




	$pattern="";
	$text="";
	$replaceText="";
	$replacedText="";

	$match="Not checked yet.";

	

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$pattern=$_POST["pattern"];
	$text=$_POST["text"];
	$replaceText=$_POST["replaceText"];

	$replacedText=preg_replace($pattern, $replaceText, $text);

	if(preg_match($pattern, $text)) 
	{
		$match="Match!";
	} 
	else 
	{
		$match="Does not match!";
	}

	


}





?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valid Form</title>
</head>
<body>
 
	<form action="regex_valid_form.php" method="post">
		 
		<dl>
			<dt>Pattern</dt>
			<dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>

			<dt>Text</dt>
			<dd><input type="text" name="text1" value="<?= $text ?>"></dd>

			<dt>Replace Text</dt>
			<dd><input type="text" name="replaceText" value="<?= $replaceText ?>"></dd>

			<dt>Output Text</dt>
			<dd><?=	$match ?></dd>

			<dt>Replaced Text</dt>
			<dd> <code><?=	$replacedText ?></code></dd>

			<dt>&nbsp;</dt>
			<dd><input type="submit" value="Check"></dd>
		</dl>

	</form>
	<hr>

	<form>
	<dl>
		<label>Check if String contains another string</label>
			<dt>Text</dt>
			<dd><input type="text" name="text1" value="<?php echo $mystring; ?>"></dd>

			<dt>Word</dt>
			<dd><input type="text" name="word" value="<?php echo  $word; ?>"></dd>

			<dt>Result</dt>
			<dd><?php echo $result1;?></dd>
			<br>
			<dd><input type="submit"  name="check_string" value="Check"></dd>
		</dl>
	</form>
	
	<hr>

	<form>
	<label>Check if String contains email string</label>
			<dt>String</dt>
			<dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>

			<dt>Email</dt>
			<dd><input type="text" name="text1" value="<?= $text ?>"></dd>

			<dt>Result</dt>
			<dd><input type="text" name="replaceText" value="<?= $replaceText ?>"></dd>
			<br>
			<dd><input type="submit" value="Check"></dd>
		</dl>
	</form>
	<hr>
	
	<form>
	<label>Check if String contains phone number format</label>
			<dt>String</dt>
			<dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>

			<dt>Phone Number</dt>
			<dd><input type="text" name="text1" value="<?= $text ?>"></dd>

			<dt>Result</dt>
			<dd><input type="text" name="replaceText" value="<?= $replaceText ?>"></dd>
			<br>
			<dd><input type="submit" value="Check"></dd>
		</dl>
	</form>
	<hr>
	<form>
	<label>Removing WhtieSpace</label>
			<dt>String</dt>
			<dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>
			
			<br>
			<dd><input type="submit" value="Remove"></dd>
			<br>

			<dt>Result</dt>
			<dd><input type="text" name="replaceText" value="<?= $replaceText ?>"></dd>
			
		</dl>
	</form>
	
	<hr>
	<form>
	<label>Removing Non numberic characters</label>
			<dt>String</dt>
			<dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>

			<br>
			<dd><input type="submit" value="Remove"></dd>
			<br>
			

			<dt>Result</dt>
			<dd><input type="text" name="replaceText" value="<?= $replaceText ?>"></dd>
			
		</dl>

	</form>

	<hr>
	<form>
	<label>Removing New lines</label>
			<dt>String</dt>
			<dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>

			<br>
			<dd><input type="submit" value="Remove"></dd>
			<br>
			

			<dt>Result</dt>
			<dd><input type="text" name="replaceText" value="<?= $replaceText ?>"></dd>
			
		</dl>

	</form>
	<hr>
	<form>
	<label>Extracting the text</label>
			<dt>Text</dt>
			<dd><input type="text" name="pattern" value="<?= $pattern ?>"></dd>

			<dt>Word</dt>
			<dd><input type="text" name="text1" value="<?= $text ?>"></dd>

			<dt>Result</dt>
			<dd><input type="text" name="replaceText" value="<?= $replaceText ?>"></dd>
			<br>
			<dd><input type="submit" value="Check"></dd>
			</dl>
	</form>

</body>
</html>
