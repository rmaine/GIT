<?php

include($_SERVER["DOCUMENT_ROOT"]."/_webApp/siteConstants.php");

$webApp_string = "";
$pageTemplate = "hideRight";
$placement_string = "";
$archive_string = "";
$header = "";
$cookieTrail = "Y";
$col_a = "";
$col_b = "nav";
$col_c = "";
$custom_footer = "";
$special_notice = "";
$lead_string = "";
$alias_string = "";
$title_string = "PHP and CSS code examples";
$subTitle_string = "Code examples for the site management system that runs this site.";
$description_string = "PHP and CSS code examples";
$keyWords_string = "";
$copyright_string = "Robert L Maine";
$author_string = "Robert L Maine";
$start_string = "";
$stop_string = "";
$pullQuote_string = <<<EOT
     <div id="pullquote">
     </div>
EOT;

$sideBar_string = <<<EOT
      <div id="sidebar">
     </div>
EOT;

$teaser_string = <<<EOT
EOT;

$body_string = <<<EOT
<p>
My coding and production experience pretty much covers most phases of Internet and web technology including photography, web related production tools such Dreamweaver, FrontPage, hand coding of xhtml, PHP, JavaScript, as well as some Perl and ASP experience. 
</p>
<p>The links below are to some of the scripts that run this page. I will try to include self documentation as time goes on, but for now this is what I have.The file extensions have been modified to allow the pages to be downloaded as apposed to being executed. </p>
<p><a href="index.php.txt" this page</a></p>
<p><a href="section.php.txt">the navigation code for the sidebar</a>. I still need to tweek the css for this.</p>
<p><a href="hideRight.php">the layout template for this page.</a> I base my templates on the work of <a href="http://www.webproducer.at/flexible-layout/">Tonico Strasser</a>. His grasp of CSS is amaizing. These templates and basic CSS stylesheets are nearly a decade old and are still the only 3 column fluid layout that just plain works. I have hotrodded them with a lot of PHP but at the core I start over each time with these pages.</p>
EOT;

$action = $_GET['action'];
if(($_GET['action'] != "") || (!empty($_POST))){
	include($_SERVER["DOCUMENT_ROOT"]."/_webApp/templates/$action.php");
}else{	
   if($webApp_string ==""){
		include($_SERVER["DOCUMENT_ROOT"]."/_webApp/templates/$pageTemplate.php");
	}else{
        include($_SERVER["DOCUMENT_ROOT"]."/$webApp_string/_webApp/templates/$pageTemplate.php");
   }
} 
?>


