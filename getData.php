<?php
//
//Get data for the page
//
$locationArray = explode("/", $_GET['i']);

if($locationArray[0]=='about'){
	include_once('about.php');
	exit;
} else if($locationArray[0]=='music'){
	include_once('music.php');
	exit;
} else if($locationArray[0]=='technology'){
	include_once('tech.php');
	exit;
} else if($locationArray[0]=='art'){
	echo '<div class="bigBlock">
			<div class="bigBlockTitle">Art</div>
			<div class="bigBlockContainer">Een verhaal over mij, bla die bla, bla bla, blop blop, bliep bliep etc etc etc</div>
			<div class="bigBlockTags">
				<div class="tag">Tags: '.$_GET['i'].'</div>
			</div>

	</div>';
} else if($locationArray[0]=='books'){
	echo '<div class="bigBlock">
			<div class="bigBlockTitle">Books</div>
			<div class="bigBlockContainer">Een verhaal over mij, bla die bla, bla bla, blop blop, bliep bliep etc etc etc</div>
			<div class="bigBlockTags">
				<div class="tag">Tags: '.$_GET['i'].'</div>
			</div>

	</div>';
}