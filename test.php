<?php




echo "<html>
<head>
	<title>
	</title>
</head>
<script>
var upll='http://www.google.com/';
</script>
<body>

</body>
</html>";

function Redirect($url)
{
    
    	header('Location: ' . $url);

    exit();
}
$abc='http://www.google.com/';
//Redirect($abc);
?>