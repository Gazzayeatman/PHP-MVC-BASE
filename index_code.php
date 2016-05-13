<?php
$index = new Website("index","","Sell you car","default.css");
include "hyperlinks.php";
	//------Creating the table for the rightContentDiv
	
	//------Deciding which links to display
		/*if (isset($_SESSION['valid_user'])){
			$links = "$nav1l$nav2l$nav3l$nav4l$nav5l";
			$rightContent = "<h3>Details</h3>".$rightTable->returnTable()."";
		} else {
			$links = "$nav10l$nav11l$nav11l$nav11l$nav9l";
			$rightContent = "";
		}
		*/
//------Creating the divs
	$index->createDiv("header","header","<h1>Trader - Sell you car</h1>",$index);
	$index->createDiv('blankspace',"blankspace","&nbsp;",$index);
	$index->createDiv('navbar',"navBar","$links",$index);
	$leftContent = new BootstrapRow("leftContent",$index);
	$leftContent->addCol(1,"col-md-4","Left Links",$index);
	$leftContent->addCol(2,"col-md-8","The rest",$index);
	$leftContent->commitRow();
	$footer = new BootstrapRow("footer",$index);
	$footer->addCol(1,"col-xs-12","Footer",$index);
	$footer->commitRow();
		
//------Gets the value of the divs
	$divHeader = $index->getDivContentByKey('header');
	$divBlankSpace = $index->getDivContentByKey('blankspace');
	$divNavBar = $index->getDivContentByKey('navBar');
	$contentDiv = $index->getDivContentByKey($leftContent->id);
	$footerDiv = $index->getDivContentByKey($footer->id);
		
//------Adds the links to the page	
	$index->createDiv('container',"container","$divHeader$divBlankSpace$divNavBar$contentDiv$footerDiv",$index);
	
	$divContainer = $index->getDivContentByKey('container');
	$index->addContent($divContainer);
?>