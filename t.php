<?php 

function endWith($haystack, $needle, $case = true) {
	if ($case) {
	    return (strcmp(substr($haystack, strlen($haystack) - strlen($needle)), $needle) === 0);
	}
	return (strcasecmp(substr($haystack, strlen($haystack) - strlen($needle)), $needle) === 0);
}
//获取文件列表
function getFile($dir) {
    $fileArray[]=NULL;
    if (false != ($handle = opendir ( $dir ))) {
        $i=0;
        while ( false !== ($file = readdir ( $handle )) ) {
            //去掉"“.”、“..”以及带“.xxx”后缀的文件
            if ($file != "." && $file != ".."&&strpos($file,".")) {
            	if(endWith($file,".md"))
            	{
            		$fileArray[$i]=$file;                
                	$i++;	
            	}                
            }
        }
        //关闭句柄
        closedir ( $handle );
    }
    return $fileArray;
}


	$curDir = dirname(__FILE__); 
	echo "当前目录:".$curDir;

?>
<?php
	echo "<br/>";echo "<br/>";
	$fileNameArr = getFile($curDir);
	foreach ($fileNameArr as $fileName)
	{
		echo "".$fileName." ";
		?>
		<a href="template.php?name=<?php echo $fileName; ?>">预览并生成</a>
		<?php	
		echo "<br/>";
	}
?>

<pre>
	<?php 
	?>
</pre>