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
				<div class="tag">Tags: '.$_GET['i'].'</div>
			</div>
			<div class="cornerBlock cornerBlockLeftTop"></div>
			<div class="cornerBlock cornerBlockRightTop"></div>
			<div class="cornerBlock cornerBlockLeftBottom"></div>
			<div class="cornerBlock cornerBlockRightBottom"></div>
	</div>';
} else if($locationArray[0]=='music'){
	echo '<div class="bigBlock">
			<div class="bigBlockTitle">Music</div>
			<div class="bigBlockContainer">Een verhaal over mij, bla die bla, bla bla, blop blop, bliep bliep etc etc etc</div>
			<div class="bigBlockTags">
				<div class="tag">Tags: '.$_GET['i'].'</div>
			</div>
			<div class="cornerBlock cornerBlockLeftTop"></div>
			<div class="cornerBlock cornerBlockRightTop"></div>
			<div class="cornerBlock cornerBlockLeftBottom"></div>
			<div class="cornerBlock cornerBlockRightBottom"></div>
	</div>';
} else if($locationArray[0]=='technology'){
	echo '<div class="bigBlock">
			<div class="bigBlockTitle">Technology</div>
			<div class="bigBlockContainer">Een verhaal over mij, bla die bla, bla bla, blop blop, bliep bliep etc etc etc</div>
			<div class="bigBlockTags">
				<div class="tag">Tags: '.$_GET['i'].'</div>
			</div>
			<div class="cornerBlock cornerBlockLeftTop"></div>
			<div class="cornerBlock cornerBlockRightTop"></div>
			<div class="cornerBlock cornerBlockLeftBottom"></div>
			<div class="cornerBlock cornerBlockRightBottom"></div>
	</div>';
} else if($locationArray[0]=='art'){
	echo '<div class="bigBlock">
			<div class="bigBlockTitle">Art</div>
			<div class="bigBlockContainer">Een verhaal over mij, bla die bla, bla bla, blop blop, bliep bliep etc etc etc</div>
			<div class="bigBlockTags">
				<div class="tag">Tags: '.$_GET['i'].'</div>
			</div>
			<div class="cornerBlock cornerBlockLeftTop"></div>
			<div class="cornerBlock cornerBlockRightTop"></div>
			<div class="cornerBlock cornerBlockLeftBottom"></div>
			<div class="cornerBlock cornerBlockRightBottom"></div>
	</div>';
} else if($locationArray[0]=='books'){
	echo '<div class="bigBlock">
			<div class="bigBlockTitle">Books</div>
			<div class="bigBlockContainer">Een verhaal over mij, bla die bla, bla bla, blop blop, bliep bliep etc etc etc</div>
			<div class="bigBlockTags">
				<div class="tag">Tags: '.$_GET['i'].'</div>
			</div>
			<div class="cornerBlock cornerBlockLeftTop"></div>
			<div class="cornerBlock cornerBlockRightTop"></div>
			<div class="cornerBlock cornerBlockLeftBottom"></div>
			<div class="cornerBlock cornerBlockRightBottom"></div>
	</div>';
}