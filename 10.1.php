 <?php
$password = file_get_contents($argv[1]);
$res= preg_split("/([A-Z]+[0-9]+)|([0-9]{1}\D[0-9]{1})|(\D)/",$password);
for($i=0;$i<count($res);$i++)
{
	if(strlen($res[$i]>0))
	echo $res[$i]."\n";
}
