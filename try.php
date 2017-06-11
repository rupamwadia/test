<!--html>
<body>
<h1> My Home Page </h1>
<button onclick="addElement()" >Click Me</button>
<p id="demo"> </p>
<script>
	var fruits = ['Apple', 'Mango', 'Banana'];
	document.getElementById('demo').innerHTML = fruits ;

	function addElement()
	{
		fruits.push('Lemon');
		document.getElementById('demo').innerHTML = fruits ;
	}

</script>
</body>
<html-->
<html>
<body>
Name: <input type="text" name="pname">
<input type="button" value="Add">
<?php
	
	echo $pname ;
?>
</body>
</html>
