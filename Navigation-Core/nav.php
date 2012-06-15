<?php
$filePath = dirname($_SERVER["PHP_SELF"]);
$filePath = explode("/", $filePath);
$slashDot = "./";
$count = (count($filePath) -1);
$i = 1; 
for ($i; $i < $count; $i ++){
$slashDot = $slashDot."../";
}
$link = basename(realpath($slashDot));
$division  = $link;
	$division = explode("~", $division);
	$division = array_pop($division);
	$division = str_replace("&", "&amp;", $division);
	$division = str_replace("-", " ", $division);
	$link = str_replace("&", "%26", $link);
echo "<h2 id=\"sideNav\"><a href=\"/$link/\">$division</a></h2>\n";

function makedir($path, $backOut) {
echo "<ul>\n";
$files=scandir($path);



foreach($files as $key => $value) {	
	$alias = explode("~", $value);
	$alias = array_pop($alias);
	$alias = str_replace("&", "&amp;", $alias);
	$alias = str_replace("-", " ", $alias);
	$isMe = $value;
	$value = str_replace("&", "%26", $value);
		if($value != "."
			&& $value != ".."
			&& $value != "images"
			&& substr($value, 0, 1) != "_"
			&& substr($value,  -3) != "php") {		
				$pos = strrpos($_SERVER["PHP_SELF"], $value);
				echo "<li>";
				if (basename(realpath(".")) == $isMe){
				echo "<span class=\"currentPage\">$alias</span>";
				$backOut = "yup";
			//break 1;
				}else{
				echo "<a href=\"$path$value\">$alias</a>";
				$backOut = "nope";
				}
					if($pos === false){
						echo "</li>\n";
					}else{
						$path= explode("/", $path);
						array_pop($path);
						array_pop($path);
						$path=implode("/", $path)."/";
						makedir($path, $backOut);
						$path=$path."../";
						echo "</ul>\n";
						echo "</li>\n";		
					}
				}
			}
}
$path="$slashDot";
$backOut = "nope";
makedir($path, $backOut);
echo "</ul>";
?>
<br />