<?php
$movie = "Star Wars";
$which = 1;
$movies = array("Alien", "Aliens","More Aliens");
$one = 1;
$two = 'k';
print_r($_SERVER["REQUEST_METHOD"]);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Basics</title>
</head>
<body>
<h1>Basics</h1>
<p> <?php echo "I like $movie $which"; ?> </p>
<p><?php echo implode(',', $movies);?></p>
<p> <?php echo htmlspecialchars("<script>This is my bad script</script>"); ?> </p>
<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
	<input type="hidden" name="bob" value="priceless">
	<button type="submit">Send it</button>
</form>
<?php 
	if(!empty($two)){
		echo "I am not empty";
	}
?>
<h3>SUPER GLOBALS</h3>
<ul>
	<li>POST</li>
	<li>GET</li>
	<li>SERVER (to get PHP_SELF and REQUEST_METHOD)</li>
</ul>
<h3>New html</h3>
<ul>
	<li>&lt;pre&gt;</li>
</ul>
<h3>CSS</h3>
<ul>
	<li>transform</li>
	<li>transition</li>
</ul>
<h3>Methods to know</h3>
<ul>
<li>echo</li>
<li>print_r()</li>
<li>explode()</li>
<li>array_splice()</li>
<li>count()</li>
<li style="color:magenta">*implode()</li>
<li>fopen()</li>
<li>fread()</li>
<li>fwrite()</li>
<li>fclose()</li>
<li>file_get_contents()</li>
<li>file_put_contents()</li>
<li>str_getcsv()</li>
<li>isset()</li>
<li style="magenta">* empty()</li>
<!--<li></li> -->
</ul>

<h3>Techniques</h3>
<ul>
	<li>foreach</li>
	<li>retrieveing data from a form</li>
	<li>self-referencing file - form submitted
		<ul>
			<li>check if hidden input isset()</li>
			<li>check if $_SERVER["REQUEST_METHOD"] is post</li>
			<li>if (isset($_POST['myval'] && $_SERVER["REQUEST_METHOD"] == "POST"){}</li>
		</ul>
	</li>
	<li>if
		<ul>
			<li>compound if statements</li>
		</ul>
	</li>
	<li>concatenation (concat. operator is <code>.</code>)</li>
</ul>
</body>
</html>