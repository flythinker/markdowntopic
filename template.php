<?php
	$curDir = dirname(__FILE__); 
	$name = $_GET['name'];
	//echo $name.system("pandoc ".$name." -o ".$name.".html" );
	$mdHtmlContent = file_get_contents($curDir."/".$name.".html");
	$topicHtmlFile = $curDir."/".$name."_topic.html";
	//echo "<br/>";
	ob_start();  
?>
<!-- saved from url=(0065)http://i5ting.github.io/i5ting_ztree_toc/build/jquery.plugin.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
					  
		        <title>jquery.plugin</title>
						
						<link href="./static/e.css" media="all" rel="stylesheet" type="text/css">
						<link href="./static/a.css" media="all" rel="stylesheet" type="text/css">
				
					  <style>
						pre {
						    counter-reset: line-numbering;
						    border: solid 1px #d9d9d9;
						    border-radius: 0;
						    background: #fff;
						    padding: 0;
						    line-height: 23px;
						    margin-bottom: 30px;
						    white-space: pre;
						    overflow-x: auto;
						    word-break: inherit;
						    word-wrap: inherit;
						}

						pre a::before {
						  content: counter(line-numbering);
						  counter-increment: line-numbering;
						  padding-right: 1em; /* space after numbers */
						  width: 25px;
						  text-align: right;
						  opacity: 0.7;
						  display: inline-block;
						  color: #aaa;
						  background: #eee;
						  margin-right: 16px;
						  padding: 2px 10px;
						  font-size: 13px;
						  -webkit-touch-callout: none;
						  -webkit-user-select: none;
						  -khtml-user-select: none;
						  -moz-user-select: none;
						  -ms-user-select: none;
						  user-select: none;
						}

						pre a:first-of-type::before {
						  padding-top: 10px;
						}

						pre a:last-of-type::before {
						  padding-bottom: 10px;
						}

						pre a:only-of-type::before {
						  padding: 10px;
						}
					
						.highlight { background-color: #ffffcc } /* RIGHT */
						</style>
					  <link rel="stylesheet" href="./static/zTreeStyle.css" type="text/css">
					  <style>
					
						.ztree li a.curSelectedNode {
							padding-top: 0px;
							background-color: #FFE6B0;
							color: black;
							height: 16px;
							border: 1px #FFB951 solid;
							opacity: 0.8;
						}
						.ztree{
							overflow: auto;
							height:100%;
							min-height: 200px;
							top: 0px;
						}
					  </style>
		      </head>
		      <body style="">
					  <div>
								<div style="width:30%;">
										<ul id="tree" class="ztree" style='width:100%'  ></ul>
								</div>
				        <div id="readme" style="width:70%;margin-left:25%;">
				          	<article class="markdown-body">
				            	
<?php echo $mdHtmlContent; ?>								



				          	</article>
				        </div>
						</div>
						<script src="./static/jquery-1.10.2.min.js"></script>
						<script src="./static/jquery.ztree.all-3.5.min.js"></script>
						<script src="./static/jquery.ztree_toc.min.js"></script>
						<script type="text/javascript">
							<!--
							$(document).ready(function(){
								$('#tree').ztree_toc({
									is_auto_number:true,
									documment_selector:'.markdown-body'
								});
							});
							//-->
						</script>
		      
		    
		  </body></html>
		  <?php 
$buffer = ob_get_contents();  
ob_end_clean();  
file_put_contents($topicHtmlFile,$buffer);
echo $buffer;
		  ?>