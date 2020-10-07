<?php
$password = file_get_contents($argv[1]);
preg_match_all("/\s[A-Z]{1}[A-Z]+/",$password,$res);
for($i=0;$i<count($res);$i++)
{
	for($j=0;$j<count($res[$i]);$j++)
	echo $res[$i][$j]."\n";
}         //no parenthesis
<?php
$password = file_get_contents($argv[1]);
preg_match_all("/\([A-Z]{1}[A-Z]+\)/",$password,$res);
for($i=0;$i<count($res);$i++)
{
	for($j=0;$j<count($res[$i]);$j++)
	echo $res[$i][$j]."\n";
}         //have  parenthesis
