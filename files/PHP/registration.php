<?php 
$url = $_SERVER["QUERY_STRING"];
$myArray = parse_url($url);
parse_str($url, $myArray);
$keys = array_keys($myArray);
$i = 0;
$chosenColor = 0;
echo "<article>";
echo "<header>Registration by PHP</header><section><table>";
while($i<sizeof($myArray))
{
	if(!strcmp($keys[$i], "colorChosen"))
	{
		if(!strcmp($_GET[$KEYS[$i]],"1"))
		{
			$chosenColor = 1;	
		}
	}
	$i++;
}
$i = 0;
while($i<sizeof($myArray))
{
	if(strcmp($keys[$i], "colorChosen"))
	{
		echo "<tr><td>" . $keys[$i] . "</td>";
		if($chosenColor == 0)
		{
			if(strlen($_GET[$keys[$i]]) != 0)
			{
				if(!strcmp($keys[$i],"Favorite_Color"))
				{
					echo "<td>Null Value</td>";
				}
				else{
					echo "<td>" . $_GET[$keys[$i]] . "</td></tr>";
				}
			}
			else{
				echo "<td>Null Value</td>";
			}
		}
		else{
			if(strlen($_GET[$keys[$i]]) != 0)
			{
				echo "<td>" . $_GET[$keys[$i]] . "</td></tr>";
			}
			else{
				echo "<td>Null Value</td>";
			}
		}
	}
	$i++;
}
echo "</table></section><footer>Registration is done on " . date("d/m/y", time()) . " at " . date("h:mA") . ".</footer></article>";
?>
<style>
table {
	background: #f3f3f3;
    color: black;
    width: 80%;
	height: 100%;
    padding: 5px 5px 5px 5px;
    margin: 0 auto;
	border: 1px;
	border-collapse: collapse;
}

tr {
	text-align: center;
}

tr:hover {
	background: black;
	color: white;

}

td:first-child
{
	width: 100px;
}

header, footer {
	background: black;
	color: white;
	padding: 20px;
	text-align: center;
}

td {
	border: 1px solid black;
}
</style>