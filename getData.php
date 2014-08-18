<?php
//
//Get data for the page
//
$locationArray = explode("/", $_GET['i']);

if($locationArray[0]=='about'){
	echo '<div class="bigBlock">
			<div class="bigBlockTitle">About</div>
			<div class="bigBlockContainer">Een verhaal over mij, bla die bla, bla bla, blop blop, bliep bliep etc etc etc</div>
			<div class="bigBlockTags">
				<div class="tag">About</div>
			</div>
			<div class="cornerBlock cornerBlockLeftTop"></div>
			<div class="cornerBlock cornerBlockRightTop"></div>
			<div class="cornerBlock cornerBlockLeftBottom"></div>
			<div class="cornerBlock cornerBlockRightBottom"></div>
	</div>';
} else if($locationArray[0]=='music'){
	
} else if($locationArray[0]=='technology'){
	
} else if($locationArray[0]=='art'){
	
} else if($locationArray[0]=='books'){
	
}