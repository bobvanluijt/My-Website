<?php
include_once('mobileDetect.php');
$detect = new Mobile_Detect;
if($detect->isMobile() && !$detect->isTablet()){
 	include_once('mobile.uncomp.php');
	exit;
}?><!DOCTYPE html>
<html>
<!-- ///////\\\\\\\\\-->
<!-- WELCOME TO MY WEBSITE -->
<!-- contact: twitter.com/bobvanluijt
<!-- ///////\\\\\\\\\-->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
<!-- Facebook meta -->
<meta property="og:locale" content="en_US" />
<meta property="og:description" content="Bob van Luijt is [more text]."/>
<meta property="og:url" content="http://bobvanluijt.com/newAva/"/>
<meta property="og:title" content="Bob van Luijt"/>
<meta property="og:type" content="website"/>
<meta property="og:image" content="http://bobvanluijt.com/newAva/emailLogoKub.png"/>
<meta name="viewport" content="user-scalable=1.0,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">
<title>Bob van Luijt // Kubrickology</title>
<link href='http://fonts.googleapis.com/css?family=Cutive+Mono|Press+Start+2P' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />
<style>
body {
	font-family: 'Press Start 2P', cursive;
	margin:0px;
	overflow:hidden;
	background-color:#009de0;
}
.container {
	position:absolute;
	left:50%;
	margin-left:-260px;
	z-index:3;
}

.containerLinks {
	position:absolute;
	text-align:center;
	height:25%;
	top:10.5%;
	left:0px;
	right:0px;	
	display:none;
	z-index:3;
}
.containerLinksBlock {
	font-family: 'Cutive Mono';
	cursor:pointer;
	display:inline-block;
	height:72%;
	width:160px;
	background-color:#009de0;
	text-align:left;
	padding:16px;
	margin-right:12px;
	margin-bottom:12px;
	overflow:hidden;
	font-size:18px;
	font-weight:bold;
	-webkit-box-shadow: 21px 21px 16px 6px rgba(0,0,0,0.38);
	-moz-box-shadow: 21px 21px 16px 6px rgba(0,0,0,0.38);
	box-shadow: 21px 21px 16px 6px rgba(0,0,0,0.38);
	opacity:0;
}

#page1 {
	background-color:#53b6e0 !important;
	overflow:auto;
	-webkit-box-shadow: 0px 17px 12px -1px rgba(0,0,0,0.47);
	-moz-box-shadow: 0px 17px 12px -1px rgba(0,0,0,0.47);
	box-shadow: 0px 17px 12px -1px rgba(0,0,0,0.47);
	z-index:2;
}

.littleBlockCloud {
	position:absolute;
	opacity:1;
	box-shadow: 2px 2px 2px rgba(0,0,0,0.4);
}
.littleBlockCloud figure {
  width: 10px;
  height: 10px;
  display: block;
  position: absolute;
}


.littleBlock {
	position:absolute;
	opacity:0;
	box-shadow: 2px 2px 2px rgba(0,0,0,0.4);
}
.littleBlock figure {
  width: 10px;
  height: 10px;
  display: block;
  position: absolute;
}
#title {
	font-size: 19px;
	width: 480px;
	position: absolute;
	left: 49%;
	line-height: 28px;
	height: 180px;
	top: 50%;
	margin-top: -139px;
	display:none;
	z-index:9999;
	text-shadow: 2px 2px 2px rgba(0,0,0,0.4);
}
#title2 {
	font-size: 19px;
	width: 480px;
	position: absolute;
	left: 49%;
	line-height: 28px;
	height: 180px;
	top: 50%;
	margin-top: -100px;
	z-index:9999;
	text-shadow: 2px 2px 2px rgba(0,0,0,0.4);
}

#title h1 {
	font-size: 15px;
	position: absolute;
	bottom: -8px;
	letter-spacing: -0.5px;
	word-spacing: -6px;
}
#titleH1 {
	display:none;	
}

.tag {
	display:none;
}

.page {
	position:relative;
	left:0px;
	top:0px;
	width:100%;
}
.bottomBlockContainer {
	position:fixed;
	left:0px;
	bottom:0px;
	right:0px;
	height:58px;
	overflow:hidden;
	z-index:2000;
}
.bottomBlock {
	position:relative;
	float:left;
	width:180px;
	height:40px;
	top:70px; //revert to 8 in jQuery
	margin-left:5px;
	margin-right:5px;
	padding:8px;
	padding-top:2px;
	font-size:11px;
	cursor:pointer;
	z-index:2000;
	box-shadow: 2px 2px 2px rgba(0,0,0,0.4);
	text-align: center;
	border: 2px dotted #FFF;
}
.imFirst { /* padding for bottomBlocks */
	margin-left:5px;
}
#page2 {
	overflow:hidden;
}

#bobRoll {
	position:absolute;
	left:0px;
	top:0px;
	width:100%;
	height:100%;
}

#footer {
	position:fixed;
	left:0px;
	right:0px;
	bottom:0px;
	height:58px;
	margin:0px;
	padding:0px;
	overflow-x:auto;
	z-index:9999;
}

.footerLink {
	position:relative;
	float:left;
	width:12.9%;
	height:100%;
	text-align:center;
	font-size:12px;
	cursor:pointer;
	padding-top:23px;
	z-index:999999;
	color:#000;
	text-decoration:none;
	margin-top:58px;
}

.footerLinkMakeSmall {
	width:22.6%;
	padding-top:0px !important;
}

.footerLinkSmall {
	position:relative;
	float:left;
	width:20%;
	height:100%;
	text-align:center;
	font-size:22px;
	background-position: center;
	background-repeat: no-repeat;
	background-size: 88%;
}

.mountain {
	position:absolute;
	left:0px;
	right:0px;
	bottom:0px;
	height:100%;
	background-position: top;
	background-repeat: no-repeat;
	background-size: cover;
	background-image: url(attributes/berg.png);
	z-index:2;
}

.note {
	position:absolute;
	left:0px;
	right:0px;
	width:32px;
	height:32px;
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	background-image: url(icons/note.png);
	z-index:99999;
}
.cloud {
	position:absolute;
	top:0px;
	width:90px;
	height:65px;
	z-index:1;
	cursor:crosshair;
}

.cloudMouth {
	position:absolute;
	background-color:#000;
	width:18px;
	height:20px;
	bottom:12px;
	left:52px;
	z-index:999999999;
	border-radius: 50%;
}

.blockContainer {
	z-index:3;
}
.blockContainerCloud {
	position:absolute;
	margin-left:160px;
	z-index:4;
}

.infoImageCase {
	position:relative;
	background-color:transparent;
	-webkit-box-shadow: inset 0 0 50px rgba(0,0,0,0.5);
	-moz-box-shadow: inset 0 0 50px rgba(0,0,0,0.5);
	box-shadow: inset 0 0 50px rgba(0,0,0,0.5);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
	float:left;
	margin:8px;
	margin-left:0px;
	margin-top:0px;
	margin-bottom:2px;
	width:150px;
	height:150px;
	overflow:hidden;
}
.noShadow { /* remove box Shadow */
	-webkit-box-shadow: inset 0 0 0px rgba(0,0,0,0) !important;
	-moz-box-shadow: inset 0 0 0px rgba(0,0,0,0) !important;
	box-shadow: inset 0 0 0px rgba(0,0,0,0) !important;
}

.bigLetter {
	float: left;
	font-size: 76px;
	margin-right: 5px;
	margin-bottom: -17px;
	margin-top: -15px;
}
.bigBlock {
	font-family: 'Cutive Mono';
	position: absolute;
	width: 100%;
	left: 0px;
	margin-left: -1200px;
	top: 58px;
	box-shadow: 2px 2px 2px rgba(0,0,0,0.4);
	transform: rotate(270deg);
	opacity:0;
	z-index: 2;
	display:none;
}
.content {
	font-family: 'Cutive Mono';
	position:relative;
	width:800px;
	left:50%;
	margin-left:-400px;
}
.contentText {
	line-height: 1.2rem;
	font-size:24px;
}
.bigBlockTitle {
	padding: 10px;
	font-size: 12px;
	padding-bottom: 6px;
	display:none;
}
.bigBlockTitleContent {
	position:relative;
	width:600px;
	left:50%;
	margin-left:-300px;
}
.bigBlockContainer {
	padding: 10px;
	font-size: 22px;
}
.bigBlockTagsContent {
	position:relative;
	width:600px;
	left:50%;
	margin-left:-300px;
}
.bigBlockTags {
	position: absolute;
	bottom: 0px;
	padding: 10px;
	padding-bottom: 3px;
	left: 0px;
	right: 0px;
	padding-top: 4px;
}
.cornerBlockLeftTop {
	position: absolute;
	left: 6px;
	top: -6px;
	background-color: #FF0;
	width: 184px;
	height: 6px;
}
.imageBlock img {
	margin-left:-10px;
	margin-top:-10px;
	width:600px;	
}

.imageBlockPhotos img {
		width:26%;
		padding:14px;
}

#hiddenField {
	display:none;
}

#resizer {
	position:fixed;
	font-size:36px;
	left:0px;
	right:0px;
	top:0px;
	bottom:0px;
	display:none;
	background-color:#009de0;
	display: none;
    vertical-align: middle;
	text-align:center;
	z-index:99999;
}

.animator001 {
  -webkit-animation: cssAnimation 1.8939s 1 ease;
  -moz-animation: cssAnimation 1.8939s 1 ease;
  -o-animation: cssAnimation 1.8939s 1 ease;
}
@-webkit-keyframes cssAnimation {
	from { -webkit-transform: scale(1); }
	to {
		-webkit-transform: scale(0.6);
		margin-left: 400px !important;
  		bottom: 376px !important;
	}
}
@-moz-keyframes cssAnimation {
	from { -moz-transform: scale(1); }
	to {
		-moz-transform: scale(0.6);
		margin-left: 400px !important;
  		bottom: 376px !important;
	}
}
@-o-keyframes cssAnimation {
	from { -o-transform: scale(1); }
	to {
		-moz-transform: scale(0.6);
		margin-left: 400px !important;
  		bottom: 376px !important;
	}
}

/*
 * Responsive edits
 */
@media only screen and (max-width: 940px) {
	#title {
		font-size: 16px;
		width: 400px;
	}
}

@media only screen and (max-width: 800px) {
	#title {
		font-size: 14px;
		width: 340px;
	}
	
	.content {
 		width: 100%;
		left: 0%;
		margin-left: 0px;
	}
}
@media only screen and (max-width: 860px) {
	.footerLink {
		font-size:11px;
	}
}
@media only screen and (max-width: 780px) {
	.footerLink {
		font-size:10px;
	}
}
@media only screen and (max-width: 702px) {
	.footerLink {
		font-size:9px;
	}
}
@media only screen and (max-width: 640px) {
	.footerLink {
		font-size:8px;
	}
}
@media only screen and (max-width: 610px) {
	.content {
		width:100%;
		left:0%;
		margin-left:0px;
	}
	#resizer {
		display:block;
		height:100%;
	}
	.DivWhichNeedToBeVerticallyAligned {
		display: inline-block;
		vertical-align: middle;
		white-space: normal;
	}
}
@media only screen and (max-height: 644px) {
	#resizer {
		display:block;
		height:100%;
	}
	.DivWhichNeedToBeVerticallyAligned {
		display: inline-block;
		vertical-align: middle;
		white-space: normal;
	}
}
</style>
</head>

<body>
<div id="page1" class="page"></div>
<div id="page2" class="page">
    <div id="title">
        Hi there!<br>My name is Bob van Luijt. I run a design lab called Kubrickology. I work a lot with sound and music, technology or a combination of those things. On this website you can find a selection of my work.
    </div>
    <div class="container"><!--LOAD ANIMATION--></div>
    <div class="mountain"><!--show me the mountain--></div>
</div>

<div id="footer">
    <a class="footerLink" style="background-color:#0076b3" data-rel="about" href="#!about">about</a>
    <a class="footerLink" style="background-color:#6dc8bf" data-rel="music" href="#!music">music</a>
    <a class="footerLink" style="background-color:#00a650" data-rel="technology" href="#!technology">technology</a>
    <a class="footerLink" style="background-color:#fef200" data-rel="art" href="#!art">art</a>
    <a class="footerLink" style="background-color:#534fa3" data-rel="talks" href="#!talks">talks</a>
    <a class="footerLink" style="background-color:#f68b1f" data-rel="library" href="#!library">library</a>
    <div class="footerLink footerLinkMakeSmall">
        <a class="footerLinkSmall" style="background-color:#f15a23; background-image:url(icons/twitter.png);" target="_blank" href="https://twitter.com/bobvanluijt"></a>
        <a class="footerLinkSmall" style="background-color:#672d91; background-image:url(icons/youtube.png);" target="_blank" href="https://youtube.com/bobvanluijt"></a>
        <a class="footerLinkSmall" style="background-color:#534fa3; background-image:url(icons/github.png);" target="_blank" href="https://github.com/kubrickology"></a>
        <a class="footerLinkSmall" style="background-color:#b72468; background-image:url(icons/facebook.png);" target="_blank" href="https://facebook.com/bvanluijt"></a>
        <a class="footerLinkSmall" style="background-color:rgb(109, 200, 191); background-image:url(icons/wtf.png);" target="_blank" href="https://ello.co/bvl"></a>
    </div>
</div>
<script>
var blockSize 	   = 10;
var blockSizeCloud = 3;
var i			   = 0;
var coolClose	   = false;

function tickle(){
	//
	// sweather arms 1,2,13,14
	//
	$('.sweater').css('cursor','pointer');
	$('.sweater').click(function(){
		//
		// whistle
		//
		var noteNr = Math.floor((Math.random()*9999)+1);
		$('body').append('<div class="note" id="note__'+noteNr+'" style="display:none"><!--fiet fiew--></div>');
		var noteNrId = $('#note__'+noteNr);
		noteNrId.css('display', 'block');		
		var chinOffset = $('.chin').offset();
		noteNrId.css('left', chinOffset.left);
		noteNrId.css('top', (chinOffset.top-10));
		
		noteNrId.animate({
			top: "-48px",
			left: "+="+(Math.floor((Math.random()*1200)+1)/2)+"px"
		}, 1400, function(){
			noteNrId.remove();
		});
		
		var audio = new Audio();
		//var canPlayOgg = !!audio.canPlayType && audio.canPlayType('audio/ogg; codecs="vorbis"') !== "";
		var canPlayOgg = false;
		var file = "whistle"
		var baseUrl = "./attributes/";
			baseUrl += canPlayOgg ? file + ".ogg" : file + '.mp3';
		
		audio.setAttribute('src', baseUrl);
		audio.controls = false;
		audio.preload = 'auto';
		$('.container').append(audio);
		audio.play();
		//
		// end whistle
		//
		$('.container').animate({
			bottom: '606px'
		}, 90, function(){
			$('.container').animate({
				bottom: '588px'
			}, 90);
		});
		$('.littleBlock').each(function(index, element) {
			var currentElement = $(element);
			if(currentElement.hasClass('sweater')){
				if(currentElement.attr('data-row')!=16 && currentElement.attr('data-row')!=17){
					if(currentElement.hasClass('left')){
						currentElement.animate({
							left: '-=10px'
						}, 60, function(){
							currentElement.animate({
								left: '+=10px'
							}, 140);
						});
					} else if(currentElement.hasClass('right')){
						currentElement.animate({
							left: '+=10px'
						}, 60, function(){
							currentElement.animate({
								left: '-=10px'
							}, 140);
						});
					}
				}
			}
		});
	});
}

function funkyHead(){
	//
	// move row 0 to 14, max columns of 16
	//
	var timer = 3000;
	var boxShadow = 0;
	setInterval(function(){
		//if($('.container').hasClass('animateHead')){
			$('.littleBlock').each(function(index, element) {
				if($(element).attr('data-row')<14){
					var reversedColumn = 15-$(element).attr('data-column');	
					$(element).attr('data-column', reversedColumn);
					$(element).css('box-shadow', boxShadow+'px '+boxShadow+'px '+boxShadow+'px rgba(0,0,0,0.4)');
					
					$(element).animate({
						left: Math.round(reversedColumn*$(element).width())+'px'
					}, 280);
				}
			});
		//}
		timer = Math.floor(Math.random() * 3000)+300;
	}, timer);
}

function setBlockCloud(toId, top, left, color, additionalClass, secondAdditionalClass){
	
	$('#'+toId).append('<div class="littleBlockCloud" id="littleBlockCloud__'+i+'" data-row="'+top+'" data-column="'+left+'"></div>');
	var littleBlock = $("#littleBlockCloud__"+i);
	littleBlock.css('background-color', color);
	littleBlock.css('z-index', i);
	littleBlock.css('left', Math.round(left*blockSizeCloud)+'px');
	littleBlock.css('top', Math.round(top*blockSizeCloud)+'px');
	if(additionalClass!=''){
		littleBlock.addClass(additionalClass);
	}
	if(secondAdditionalClass!=''){
		littleBlock.addClass(secondAdditionalClass);
	}
	littleBlock.css('width', blockSizeCloud+'px');
	littleBlock.css('height', blockSizeCloud+'px');
	i=i+1;
}

function setBlock(top, left, color, additionalClass, secondAdditionalClass){
	if(!$('.blockContainer').length){
		$('.container').append('<div class="blockContainer"></div>');
	}
	$('.blockContainer').append('<div class="littleBlock" id="littleBlock__'+i+'" data-row="'+top+'" data-column="'+left+'"></div>');
	var littleBlock = $("#littleBlock__"+i);
	littleBlock.css('background-color', color);
	littleBlock.css('z-index', i);
	littleBlock.css('left', Math.round(left*blockSize)+'px');
	littleBlock.css('top', Math.round(top*blockSize)+'px');
	if(additionalClass!=''){
		littleBlock.addClass(additionalClass);
	}
	if(secondAdditionalClass!=''){
		littleBlock.addClass(secondAdditionalClass);
	}
	littleBlock.css('width', blockSize+'px');
	littleBlock.css('height', blockSize+'px');
	i=i+1;
}

function animations(){
	var first_timer = 0;
	var classCounter= 0;
	
	//
	//set mountain 
	//
	$('.mountain').animate({
		height: "30%"
	}, 1400, function(){
		buildBob();	
	});
	
	//
	// set start text
	//
	$('#title').toggle();
	var keepMe = $("#title").html();
	$("#title").cooltext({
	   sequence:[
		  {
			  action:"animation",
			  animation:"cool99",
			  speed:60,
			  stagger:80,
			  onComplete:function(){
				clouds(1);  
			  }
		  }
	   ]
	});
}

var interCloud;
function clouds(i){
	if(i==1){
		intercloud = 0;
	} else {
		interCloud = Math.floor((Math.random() * 14000) + 4000);
	}
	setTimeout(function(){
		cloudCreator(i);
		i = i+1;
		clouds(i);
	}, interCloud);
}

function cloudCreator(i){
	$('body').append('<div class="cloud" id="cloud__'+i+'"><!--cloud--></div>');
	buildCloud('cloud__'+i);
	$('#cloud__'+i).draggable();
	var cloudTop = Math.floor((Math.random() * (($('#page2').offset().top+$('#page2').height())-$('.mountain').height())) + 1);
	var cloud = $('#cloud__'+i);
	var cloudAni = $('#cloud__'+i).find(".littleBlockCloud");
	
	cloud.css('top', cloudTop);
	
	var leftOrRight = Math.floor((Math.random() * 2) + 1);
	
	if(leftOrRight==1){
		cloud.css('left', 0-cloud.width());
		cloud.animate({
			left: $(document).width()+cloud.width()
		}, { duration: Math.floor((Math.random() * 40000) + 10000), queue: false, complete: function(){
				$(cloud).remove();
			}
		});
	} else {
		cloud.css('right', 0-cloud.width());
		cloud.animate({
			right: $(document).width()+cloud.width()
		}, { duration: Math.floor((Math.random() * 40000) + 10000), queue: false, complete: function(){
				$(cloud).remove();
			}
		});
	}
	
	$(cloud).mouseover(function(){
		if(!$(cloud).hasClass('rotating')){
			$(cloud).addClass('rotating');
			
			$(cloud).append('<div class="cloudMouth"><!--woosh--></div>');
			
			var angle = 360;
			$({deg: 0}).animate({deg: angle}, {
				duration: 1200,
				step: function(now) {
					$(cloud).css({
						transform: 'rotate(' + now + 'deg)',
					});
					if($(cloud).css('opacity')>1){
						$(cloud).css('opacity', '1');
					}
				}
			});
			
			setTimeout(function(){
				$(cloud).removeClass('rotating');
				$(cloud).find(".cloudMouth").remove();
				$(cloud).fadeOut(1200, function(){
					$(cloud).remove();	
				});
			}, 1210);
		}
	});
	
}

function doOnRelClick(){
	$('a').click(function(event){
		if($(this).attr('target')!='_blank'){
			event.preventDefault();
			
			if($('body,html').scrollTop()==0){
				$("html, body").animate({ scrollTop: $(document).height() }, 1600);
			}
			
			var durationBottomRemove = 200;
			if( $('.bottomBlock').length ){
				$('.bottomBlock').each(function(index, element) {
                    $(element).animate({
						top: '70px'
					}, durationBottomRemove);
					durationBottomRemove = durationBottomRemove+200;
                });
			}
			
			if( !$('.bigBlock').length ){
				clickRels($(this).attr('data-rel'));
			} else {
				 var changeMe = $(this).attr('data-rel');
				 var angle = 90;
				 
				 $('.bigBlock').addClass('.moved');
				 
				 $('.bigBlock').animate({
					marginLeft:"1200px"
				 }, { duration: 1250, queue: false });
				 
				 $({deg: 0}).animate({deg: angle}, {
					duration: 1250,
					step: function(now) {
						$('.bigBlock').css({
							transform: 'rotate(' + now + 'deg)'
						});
					}
				 });
				
				//setTimeout(function(){
				//	$('.bigBlock').remove();
					clickRels(changeMe);
				//}, 1750);
			}
		}
	});
}

function clickRels(i){
	
	var isOpen = false;

	window.location.assign("#!"+i);
	
	if(i.substr(0, 7)=='social:'){
		if(i=='social:twitter'){
			window.open(
			  'https://twitter.com/bobvanluijt',
			  '_blank'
			);
		} else if(i=='social:facebook'){
			window.open(
			  'https://www.facebook.com/bob.vanluijt',
			  '_blank'
			);
		} else if(i=='social:youtube'){
			window.open(
			  'https://www.youtube.com/bobvanluijt',
			  '_blank'
			);
		}  else if(i=='social:github'){
			window.open(
			  'https://www.github.com/kubrickology',
			  '_blank'
			);
		}
	} else {

		if($('.containerLinksBlock').length){
			$('.containerLinksBlock').fadeOut(400);
		}
		
		setTimeout(function(){
			$.get(i+".html", function(data) {
				
				if(!$('#hiddenField').length){
					$('body').append('<div id="hiddenField"></div>');	
				}
				$('#hiddenField').html(data);
				
				if(!$('.containerLinks').length){
					$('#page2').append('<div class="containerLinks"></div>');	
				}
				
				if($('.containerLinksBlock').length){
					$('.containerLinksBlock').remove();
				}
				
				var countContainerBlock = 1;
				$('.bigBlock').each(function(index, element) {
					$('.containerLinks').append('<div class="containerLinksBlock" id="containerLinksBlock__'+countContainerBlock+'">'+$(element).find(".bigBlockTitleContent").text()+'</div>');
					
					$('#containerLinksBlock__'+countContainerBlock).click(function(){
						window.location.assign("#!"+$(element).attr('data-url'));
						$("html, body").animate({ scrollTop: "0px" });
						$('#page1').html( $(element).html() );
					});
					
					$('#containerLinksBlock__'+countContainerBlock).animate({
						'background-color': $('#footer').find('a[data-rel='+i+']').css('background-color'),
						'opacity': 1
					}, 1600);
					
					countContainerBlock++;
				});
				
				$(".containerLinks").fadeIn("slow");
				
				$("#title").fadeOut();
				
				$(".mountain").animate({
					"height": "17%"
				}, 1100);
				
				if(!$('.container').hasClass('imSmall')){
					
					$('.container').addClass('imSmall');
					
					$('.container').animate({
						'bottom': '376px',
						'margin-left': "260px"
						}, 1200);
					
					$('.littleBlock').each(function(index, element) {
						var newLeft = parseInt($(element).css('left'))-(4*parseInt($(element).attr('data-column')));
						var newTop  = parseInt($(element).css('top'))-(4*parseInt($(element).attr('data-row')));
						$(element).animate({
							'width': '6px',
							'height': '6px',
							'left': newLeft+'px',
							'top': newTop+'px'
						}, Math.floor((Math.random() * 2600) + 600));
					});
				
					setTimeout(function(){
						sleepWalkBob();	
					}, 2601);
				
				}
				
			});
		}, 401);
	}
}


//
//start to point with blocks
//
function buildCloud(toId){
	var row = 0;
	setBlockCloud(toId, row,  17,  '#000', 'border');
	setBlockCloud(toId, row,  18,  '#000', 'border');
	setBlockCloud(toId, row,  19,  '#000', 'border');
	setBlockCloud(toId, row,  20,  '#000', 'border');
	setBlockCloud(toId, row,  21,  '#000', 'border');
	setBlockCloud(toId, row,  22,  '#000', 'border');
	setBlockCloud(toId, row,  23,  '#000', 'border');
	setBlockCloud(toId, row,  24,  '#000', 'border');
		row = 1;
	setBlockCloud(toId, row,  14,  '#000', 'border');
	setBlockCloud(toId, row,  15,  '#000', 'border');
	setBlockCloud(toId, row,  16,  '#000', 'border');
	setBlockCloud(toId, row,  17,  '#000', 'border');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#FFF', 'white');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#000', 'border');
	setBlockCloud(toId, row,  25,  '#000', 'border');
	setBlockCloud(toId, row,  26,  '#000', 'border');
	setBlockCloud(toId, row,  27,  '#000', 'border');
		row = 2;
	setBlockCloud(toId, row,  13,  '#000', 'border');
	setBlockCloud(toId, row,  14,  '#000', 'border');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#FFF', 'white');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#000', 'border');
	setBlockCloud(toId, row,  28,  '#000', 'border');
		row = 3;
	setBlockCloud(toId, row,  13,  '#000', 'border');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#FFF', 'white');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#000', 'border');
	setBlockCloud(toId, row,  28,  '#000', 'border');
		row = 4;
	setBlockCloud(toId, row,  12,  '#000', 'border');
	setBlockCloud(toId, row,  13,  '#000', 'border');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#000', 'eye');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#000', 'eye');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#000', 'border');
	setBlockCloud(toId, row,  29,  '#000', 'border');
		row = 5;
	setBlockCloud(toId, row,  12,  '#000', 'border');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#000', 'eye');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#000', 'eye');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#FFF', 'white');
	setBlockCloud(toId, row,  29,  '#000', 'border');
		row = 6;
	setBlockCloud(toId, row,  12,  '#000', 'border');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#000', 'eye');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#000', 'eye');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#FFF', 'white');
	setBlockCloud(toId, row,  29,  '#000', 'border');
		row = 7;
	setBlockCloud(toId, row,  11,  '#000', 'border');
	setBlockCloud(toId, row,  12,  '#000', 'border');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#FFF', 'white');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#FFF', 'white');
	setBlockCloud(toId, row,  29,  '#000', 'border');
	setBlockCloud(toId, row,  30,  '#000', 'border');
	setBlockCloud(toId, row,  31,  '#000', 'border');
	setBlockCloud(toId, row,  32,  '#000', 'border');
		row = 8;
	setBlockCloud(toId, row,  11,  '#000', 'border');
	setBlockCloud(toId, row,  12,  '#FFF', 'white');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#FFF', 'white');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#FFF', 'white');
	setBlockCloud(toId, row,  29,  '#FFF', 'white');
	setBlockCloud(toId, row,  30,  '#FFF', 'white');
	setBlockCloud(toId, row,  31,  '#FFF', 'white');
	setBlockCloud(toId, row,  32,  '#000', 'border');
	setBlockCloud(toId, row,  33,  '#000', 'border');
	setBlockCloud(toId, row,  34,  '#000', 'border');
	setBlockCloud(toId, row,  35,  '#000', 'border');
		row = 9;
	setBlockCloud(toId, row,  9,  '#000', 'border');
	setBlockCloud(toId, row,  10,  '#000', 'border');
	setBlockCloud(toId, row,  11,  '#000', 'border');
	setBlockCloud(toId, row,  12,  '#FFF', 'white');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#FFF', 'white');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#FFF', 'white');
	setBlockCloud(toId, row,  29,  '#FFF', 'white');
	setBlockCloud(toId, row,  30,  '#FFF', 'white');
	setBlockCloud(toId, row,  31,  '#FFF', 'white');
	setBlockCloud(toId, row,  32,  '#FFF', 'white');
	setBlockCloud(toId, row,  33,  '#FFF', 'white');
	setBlockCloud(toId, row,  34,  '#FFF', 'white');
	setBlockCloud(toId, row,  35,  '#000', 'border');
	setBlockCloud(toId, row,  36,  '#000', 'border');
		row = 10;
	setBlockCloud(toId, row,  8,  '#000', 'border');
	setBlockCloud(toId, row,  9,  '#000', 'border');
	setBlockCloud(toId, row,  10,  '#FFF', 'white');
	setBlockCloud(toId, row,  11,  '#FFF', 'white');
	setBlockCloud(toId, row,  12,  '#FFF', 'white');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#FFF', 'white');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#FFF', 'white');
	setBlockCloud(toId, row,  29,  '#FFF', 'white');
	setBlockCloud(toId, row,  30,  '#FFF', 'white');
	setBlockCloud(toId, row,  31,  '#FFF', 'white');
	setBlockCloud(toId, row,  32,  '#FFF', 'white');
	setBlockCloud(toId, row,  33,  '#FFF', 'white');
	setBlockCloud(toId, row,  34,  '#FFF', 'white');
	setBlockCloud(toId, row,  35,  '#FFF', 'white');
	setBlockCloud(toId, row,  36,  '#000', 'border');
		row = 11;
	setBlockCloud(toId, row,  6,  '#000', 'border');
	setBlockCloud(toId, row,  7,  '#000', 'border');
	setBlockCloud(toId, row,  8,  '#000', 'border');
	setBlockCloud(toId, row,  9,  '#FFF', 'white');
	setBlockCloud(toId, row,  10,  '#FFF', 'white');
	setBlockCloud(toId, row,  11,  '#FFF', 'white');
	setBlockCloud(toId, row,  12,  '#FFF', 'white');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#FFF', 'white');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#FFF', 'white');
	setBlockCloud(toId, row,  29,  '#FFF', 'white');
	setBlockCloud(toId, row,  30,  '#FFF', 'white');
	setBlockCloud(toId, row,  31,  '#FFF', 'white');
	setBlockCloud(toId, row,  32,  '#FFF', 'white');
	setBlockCloud(toId, row,  33,  '#FFF', 'white');
	setBlockCloud(toId, row,  34,  '#FFF', 'white');
	setBlockCloud(toId, row,  35,  '#FFF', 'white');
	setBlockCloud(toId, row,  36,  '#000', 'border');
		row = 12;
	setBlockCloud(toId, row,  5,  '#000', 'border');
	setBlockCloud(toId, row,  6,  '#000', 'border');
	setBlockCloud(toId, row,  7,  '#FFF', 'white');
	setBlockCloud(toId, row,  8,  '#FFF', 'white');
	setBlockCloud(toId, row,  9,  '#FFF', 'white');
	setBlockCloud(toId, row,  10,  '#FFF', 'white');
	setBlockCloud(toId, row,  11,  '#FFF', 'white');
	setBlockCloud(toId, row,  12,  '#FFF', 'white');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#FFF', 'white');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#FFF', 'white');
	setBlockCloud(toId, row,  29,  '#FFF', 'white');
	setBlockCloud(toId, row,  30,  '#FFF', 'white');
	setBlockCloud(toId, row,  31,  '#FFF', 'white');
	setBlockCloud(toId, row,  32,  '#FFF', 'white');
	setBlockCloud(toId, row,  33,  '#FFF', 'white');
	setBlockCloud(toId, row,  34,  '#FFF', 'white');
	setBlockCloud(toId, row,  35,  '#FFF', 'white');
	setBlockCloud(toId, row,  36,  '#000', 'border');
	setBlockCloud(toId, row,  37,  '#000', 'border');
		row = 13;
	setBlockCloud(toId, row,  4,  '#000', 'border');
	setBlockCloud(toId, row,  5,  '#000', 'border');
	setBlockCloud(toId, row,  6,  '#FFF', 'white');
	setBlockCloud(toId, row,  7,  '#FFF', 'white');
	setBlockCloud(toId, row,  8,  '#FFF', 'white');
	setBlockCloud(toId, row,  9,  '#FFF', 'white');
	setBlockCloud(toId, row,  10,  '#FFF', 'white');
	setBlockCloud(toId, row,  11,  '#FFF', 'white');
	setBlockCloud(toId, row,  12,  '#FFF', 'white');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#FFF', 'white');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#FFF', 'white');
	setBlockCloud(toId, row,  29,  '#FFF', 'white');
	setBlockCloud(toId, row,  30,  '#FFF', 'white');
	setBlockCloud(toId, row,  31,  '#FFF', 'white');
	setBlockCloud(toId, row,  32,  '#FFF', 'white');
	setBlockCloud(toId, row,  33,  '#FFF', 'white');
	setBlockCloud(toId, row,  34,  '#FFF', 'white');
	setBlockCloud(toId, row,  35,  '#FFF', 'white');
	setBlockCloud(toId, row,  36,  '#FFF', 'white');
	setBlockCloud(toId, row,  37,  '#000', 'border');
		row = 14;
	setBlockCloud(toId, row,  3,  '#000', 'border');
	setBlockCloud(toId, row,  4,  '#000', 'border');
	setBlockCloud(toId, row,  5,  '#FFF', 'white');
	setBlockCloud(toId, row,  6,  '#FFF', 'white');
	setBlockCloud(toId, row,  7,  '#FFF', 'white');
	setBlockCloud(toId, row,  8,  '#FFF', 'white');
	setBlockCloud(toId, row,  9,  '#FFF', 'white');
	setBlockCloud(toId, row,  10,  '#FFF', 'white');
	setBlockCloud(toId, row,  11,  '#FFF', 'white');
	setBlockCloud(toId, row,  12,  '#FFF', 'white');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#FFF', 'white');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#FFF', 'white');
	setBlockCloud(toId, row,  29,  '#FFF', 'white');
	setBlockCloud(toId, row,  30,  '#FFF', 'white');
	setBlockCloud(toId, row,  31,  '#FFF', 'white');
	setBlockCloud(toId, row,  32,  '#FFF', 'white');
	setBlockCloud(toId, row,  33,  '#FFF', 'white');
	setBlockCloud(toId, row,  34,  '#FFF', 'white');
	setBlockCloud(toId, row,  35,  '#FFF', 'white');
	setBlockCloud(toId, row,  36,  '#FFF', 'white');
	setBlockCloud(toId, row,  37,  '#000', 'border');
		row = 15;
	setBlockCloud(toId, row,  2,  '#000', 'border');
	setBlockCloud(toId, row,  3,  '#000', 'border');
	setBlockCloud(toId, row,  4,  '#FFF', 'white');
	setBlockCloud(toId, row,  5,  '#FFF', 'white');
	setBlockCloud(toId, row,  6,  '#FFF', 'white');
	setBlockCloud(toId, row,  7,  '#FFF', 'white');
	setBlockCloud(toId, row,  8,  '#FFF', 'white');
	setBlockCloud(toId, row,  9,  '#FFF', 'white');
	setBlockCloud(toId, row,  10,  '#FFF', 'white');
	setBlockCloud(toId, row,  11,  '#FFF', 'white');
	setBlockCloud(toId, row,  12,  '#FFF', 'white');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#FFF', 'white');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#FFF', 'white');
	setBlockCloud(toId, row,  29,  '#FFF', 'white');
	setBlockCloud(toId, row,  30,  '#FFF', 'white');
	setBlockCloud(toId, row,  31,  '#FFF', 'white');
	setBlockCloud(toId, row,  32,  '#FFF', 'white');
	setBlockCloud(toId, row,  33,  '#FFF', 'white');
	setBlockCloud(toId, row,  34,  '#FFF', 'white');
	setBlockCloud(toId, row,  35,  '#FFF', 'white');
	setBlockCloud(toId, row,  36,  '#FFF', 'white');
	setBlockCloud(toId, row,  37,  '#000', 'border');
		row = 16;
	setBlockCloud(toId, row,  2,  '#000', 'border');
	setBlockCloud(toId, row,  3,  '#FFF', 'white');
	setBlockCloud(toId, row,  4,  '#FFF', 'white');
	setBlockCloud(toId, row,  5,  '#FFF', 'white');
	setBlockCloud(toId, row,  6,  '#FFF', 'white');
	setBlockCloud(toId, row,  7,  '#FFF', 'white');
	setBlockCloud(toId, row,  8,  '#FFF', 'white');
	setBlockCloud(toId, row,  9,  '#FFF', 'white');
	setBlockCloud(toId, row,  10,  '#FFF', 'white');
	setBlockCloud(toId, row,  11,  '#FFF', 'white');
	setBlockCloud(toId, row,  12,  '#FFF', 'white');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#FFF', 'white');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#FFF', 'white');
	setBlockCloud(toId, row,  29,  '#FFF', 'white');
	setBlockCloud(toId, row,  30,  '#FFF', 'white');
	setBlockCloud(toId, row,  31,  '#FFF', 'white');
	setBlockCloud(toId, row,  32,  '#FFF', 'white');
	setBlockCloud(toId, row,  33,  '#FFF', 'white');
	setBlockCloud(toId, row,  34,  '#FFF', 'white');
	setBlockCloud(toId, row,  35,  '#FFF', 'white');
	setBlockCloud(toId, row,  36,  '#FFF', 'white');
	setBlockCloud(toId, row,  37,  '#000', 'border');
		row = 17;
	setBlockCloud(toId, row,  2,  '#000', 'border');
	setBlockCloud(toId, row,  3,  '#000', 'border');
	setBlockCloud(toId, row,  4,  '#FFF', 'white');
	setBlockCloud(toId, row,  5,  '#FFF', 'white');
	setBlockCloud(toId, row,  6,  '#FFF', 'white');
	setBlockCloud(toId, row,  7,  '#FFF', 'white');
	setBlockCloud(toId, row,  8,  '#FFF', 'white');
	setBlockCloud(toId, row,  9,  '#FFF', 'white');
	setBlockCloud(toId, row,  10,  '#FFF', 'white');
	setBlockCloud(toId, row,  11,  '#FFF', 'white');
	setBlockCloud(toId, row,  12,  '#FFF', 'white');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#FFF', 'white');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#FFF', 'white');
	setBlockCloud(toId, row,  29,  '#FFF', 'white');
	setBlockCloud(toId, row,  30,  '#FFF', 'white');
	setBlockCloud(toId, row,  31,  '#FFF', 'white');
	setBlockCloud(toId, row,  32,  '#FFF', 'white');
	setBlockCloud(toId, row,  33,  '#FFF', 'white');
	setBlockCloud(toId, row,  34,  '#FFF', 'white');
	setBlockCloud(toId, row,  35,  '#FFF', 'white');
	setBlockCloud(toId, row,  36,  '#FFF', 'white');
	setBlockCloud(toId, row,  37,  '#000', 'border');
		row = 18;
	setBlockCloud(toId, row,  3,  '#000', 'border');
	setBlockCloud(toId, row,  4,  '#000', 'border');
	setBlockCloud(toId, row,  5,  '#FFF', 'white');
	setBlockCloud(toId, row,  6,  '#FFF', 'white');
	setBlockCloud(toId, row,  7,  '#FFF', 'white');
	setBlockCloud(toId, row,  8,  '#FFF', 'white');
	setBlockCloud(toId, row,  9,  '#FFF', 'white');
	setBlockCloud(toId, row,  10,  '#FFF', 'white');
	setBlockCloud(toId, row,  11,  '#FFF', 'white');
	setBlockCloud(toId, row,  12,  '#FFF', 'white');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#FFF', 'white');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#FFF', 'white');
	setBlockCloud(toId, row,  29,  '#FFF', 'white');
	setBlockCloud(toId, row,  30,  '#FFF', 'white');
	setBlockCloud(toId, row,  31,  '#FFF', 'white');
	setBlockCloud(toId, row,  32,  '#FFF', 'white');
	setBlockCloud(toId, row,  33,  '#FFF', 'white');
	setBlockCloud(toId, row,  34,  '#FFF', 'white');
	setBlockCloud(toId, row,  35,  '#FFF', 'white');
	setBlockCloud(toId, row,  36,  '#000', 'border');
	setBlockCloud(toId, row,  37,  '#000', 'border');
		row = 19;
	setBlockCloud(toId, row,  4,  '#000', 'border');
	setBlockCloud(toId, row,  5,  '#000', 'border');
	setBlockCloud(toId, row,  6,  '#FFF', 'white');
	setBlockCloud(toId, row,  7,  '#FFF', 'white');
	setBlockCloud(toId, row,  8,  '#FFF', 'white');
	setBlockCloud(toId, row,  9,  '#FFF', 'white');
	setBlockCloud(toId, row,  10,  '#FFF', 'white');
	setBlockCloud(toId, row,  11,  '#FFF', 'white');
	setBlockCloud(toId, row,  12,  '#FFF', 'white');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#FFF', 'white');
	setBlockCloud(toId, row,  23,  '#FFF', 'white');
	setBlockCloud(toId, row,  24,  '#FFF', 'white');
	setBlockCloud(toId, row,  25,  '#FFF', 'white');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#FFF', 'white');
	setBlockCloud(toId, row,  29,  '#FFF', 'white');
	setBlockCloud(toId, row,  30,  '#FFF', 'white');
	setBlockCloud(toId, row,  31,  '#FFF', 'white');
	setBlockCloud(toId, row,  32,  '#FFF', 'white');
	setBlockCloud(toId, row,  33,  '#FFF', 'white');
	setBlockCloud(toId, row,  34,  '#FFF', 'white');
	setBlockCloud(toId, row,  35,  '#FFF', 'white');
	setBlockCloud(toId, row,  36,  '#000', 'border');
		row = 20;
	setBlockCloud(toId, row,  5,  '#000', 'border');
	setBlockCloud(toId, row,  6,  '#000', 'border');
	setBlockCloud(toId, row,  7,  '#000', 'border');
	setBlockCloud(toId, row,  8,  '#000', 'border');
	setBlockCloud(toId, row,  9,  '#FFF', 'white');
	setBlockCloud(toId, row,  10,  '#FFF', 'white');
	setBlockCloud(toId, row,  11,  '#FFF', 'white');
	setBlockCloud(toId, row,  12,  '#FFF', 'white');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#FFF', 'white');
	setBlockCloud(toId, row,  22,  '#000', 'border');
	setBlockCloud(toId, row,  23,  '#000', 'border');
	setBlockCloud(toId, row,  24,  '#000', 'border');
	setBlockCloud(toId, row,  25,  '#000', 'border');
	setBlockCloud(toId, row,  26,  '#FFF', 'white');
	setBlockCloud(toId, row,  27,  '#FFF', 'white');
	setBlockCloud(toId, row,  28,  '#FFF', 'white');
	setBlockCloud(toId, row,  29,  '#FFF', 'white');
	setBlockCloud(toId, row,  30,  '#FFF', 'white');
	setBlockCloud(toId, row,  31,  '#FFF', 'white');
	setBlockCloud(toId, row,  32,  '#FFF', 'white');
	setBlockCloud(toId, row,  33,  '#FFF', 'white');
	setBlockCloud(toId, row,  34,  '#FFF', 'white');
	setBlockCloud(toId, row,  35,  '#000', 'border');
	setBlockCloud(toId, row,  36,  '#000', 'border');
		row = 21;
	setBlockCloud(toId, row,  8,  '#000', 'border');
	setBlockCloud(toId, row,  9,  '#000', 'border');
	setBlockCloud(toId, row,  10,  '#FFF', 'white');
	setBlockCloud(toId, row,  11,  '#FFF', 'white');
	setBlockCloud(toId, row,  12,  '#FFF', 'white');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#FFF', 'white');
	setBlockCloud(toId, row,  21,  '#000', 'border');
	setBlockCloud(toId, row,  22,  '#000', 'border');
	setBlockCloud(toId, row,  25,  '#000', 'border');
	setBlockCloud(toId, row,  26,  '#000', 'border');
	setBlockCloud(toId, row,  27,  '#000', 'border');
	setBlockCloud(toId, row,  28,  '#FFF', 'white');
	setBlockCloud(toId, row,  29,  '#FFF', 'white');
	setBlockCloud(toId, row,  30,  '#FFF', 'white');
	setBlockCloud(toId, row,  31,  '#FFF', 'white');
	setBlockCloud(toId, row,  32,  '#FFF', 'white');
	setBlockCloud(toId, row,  33,  '#000', 'border');
	setBlockCloud(toId, row,  34,  '#000', 'border');
	setBlockCloud(toId, row,  35,  '#000', 'border');
		row = 22;
	setBlockCloud(toId, row,  9,  '#000', 'border');
	setBlockCloud(toId, row,  10,  '#000', 'border');
	setBlockCloud(toId, row,  11,  '#FFF', 'white');
	setBlockCloud(toId, row,  12,  '#FFF', 'white');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#FFF', 'white');
	setBlockCloud(toId, row,  19,  '#FFF', 'white');
	setBlockCloud(toId, row,  20,  '#000', 'border');
	setBlockCloud(toId, row,  21,  '#000', 'border');
	setBlockCloud(toId, row,  27,  '#000', 'border');
	setBlockCloud(toId, row,  28,  '#000', 'border');
	setBlockCloud(toId, row,  29,  '#000', 'border');
	setBlockCloud(toId, row,  30,  '#000', 'border');
	setBlockCloud(toId, row,  31,  '#000', 'border');
	setBlockCloud(toId, row,  32,  '#000', 'border');
	setBlockCloud(toId, row,  33,  '#000', 'border');
		row = 23;
	setBlockCloud(toId, row,  10,  '#000', 'border');
	setBlockCloud(toId, row,  11,  '#000', 'border');
	setBlockCloud(toId, row,  12,  '#FFF', 'white');
	setBlockCloud(toId, row,  13,  '#FFF', 'white');
	setBlockCloud(toId, row,  14,  '#FFF', 'white');
	setBlockCloud(toId, row,  15,  '#FFF', 'white');
	setBlockCloud(toId, row,  16,  '#FFF', 'white');
	setBlockCloud(toId, row,  17,  '#FFF', 'white');
	setBlockCloud(toId, row,  18,  '#000', 'border');
	setBlockCloud(toId, row,  19,  '#000', 'border');
	setBlockCloud(toId, row,  20,  '#000', 'border');
		row = 24;
	setBlockCloud(toId, row,  11,  '#000', 'border');
	setBlockCloud(toId, row,  12,  '#000', 'border');
	setBlockCloud(toId, row,  13,  '#000', 'border');
	setBlockCloud(toId, row,  14,  '#000', 'border');
	setBlockCloud(toId, row,  15,  '#000', 'border');
	setBlockCloud(toId, row,  16,  '#000', 'border');
	setBlockCloud(toId, row,  17,  '#000', 'border');
	setBlockCloud(toId, row,  18,  '#000', 'border');
}

function sleepWalkBob(){

	if(!$('.shoes').hasClass('walking')){
		activateWalkBob(true);
		
		var outOfScreenLeft  = ($(document).width()/2)*1.6;
		var preLeft = $('.container').css('margin-left');
		
		$('.container').animate({
			'marginLeft': outOfScreenLeft+'px'
		}, 3000, function(){
			$('.container').css('marginLeft', (0-outOfScreenLeft-$('.container').width())+'px');
			$('.container').animate({
				'marginLeft': preLeft
			}, 5000, function(){
				activateWalkBob(false);
				setTimeout(function(){
					sleepWalkBob();
				}, Math.floor(Math.random() * 10000) + 2000);
			});
		});
	}
}

function activateWalkBob(walk){
	if(walk===true){
		$('.shoes').addClass('walking');
		walkBob();
	} else if(walk===false){
		$('.shoes').removeClass('walking');
	}
}

function walkBob(){

	if( $('.shoes').hasClass('walking') ){

		var stepTime = 168;
	
		$('.leftShoe').animate({
			top: '-=12px'
		}, stepTime);
		
		setTimeout(function(){
			$('.leftShoe').animate({
				top: '+=12px'
			}, stepTime);
			$('.rightShoe').animate({
				top: '-=12px'
			}, stepTime);
		}, stepTime);
		
		setTimeout(function(){
			$('.rightShoe').animate({
				top: '+=12px'
			}, stepTime);
		}, stepTime*2);
		
		setTimeout(function(){
			walkBob();
		}, stepTime*3);
	
	}
	
}

function buildBob(){
	//
	//setBlock(y,x,color,extraClass,2ndExtraClass)
	//
	if(!$('.blockContainer').length){
		var row = 0;
		setBlock(row,  9,  '#edc945', 'hair');
		setBlock(row,  10, '#edc945', 'hair');
		row = 1;
		setBlock(row,  9,  '#edc945', 'hair');
		setBlock(row,  10, '#edc945', 'hair');
		row = 2;
		setBlock(row,  7,  '#edc945', 'hair');
		setBlock(row,  8, '#edc945', 'hair');
		setBlock(row,  9,  '#edc945', 'hair');
		setBlock(row,  10, '#edc945', 'hair');
		row = 3
		setBlock(row,  7,  '#edc945', 'hair');
		setBlock(row,  8, '#edc945', 'hair');
		setBlock(row,  9,  '#edc945', 'hair');
		setBlock(row,  10, '#edc945', 'hair');
		setBlock(row,  7,  '#edc945', 'hair');
		row = 4
		setBlock(row,  5, '#edc945', 'hair');
		setBlock(row,  6,  '#edc945', 'hair');
		setBlock(row,  7, '#edc945', 'hair');
		setBlock(row,  8,  '#edc945', 'hair');
		setBlock(row,  9, '#edc945', 'hair');
		setBlock(row,  10,  '#edc945', 'hair');
		setBlock(row,  11, '#edc945', 'hair');
		setBlock(row,  12, '#edc945', 'hair');
		setBlock(5,  5, '#edc945', 'hair');
		setBlock(5,  6,  '#edc945', 'hair');
		setBlock(5,  7, '#edc945', 'hair');
		setBlock(5,  8,  '#edc945', 'hair');
		setBlock(5,  9, '#edc945', 'hair');
		setBlock(5,  10,  '#edc945', 'hair');
		setBlock(5,  11, '#edc945', 'hair');
		setBlock(5,  12, '#edc945', 'hair');
		setBlock(6,  5, '#edc945', 'hair');
		setBlock(6,  6,  '#edc945', 'hair');
		setBlock(6,  7, '#fff9dc', 'skin');
		setBlock(6,  8,  '#fff9dc', 'skin');
		setBlock(6,  9, '#fff9dc', 'skin');
		setBlock(6,  10,  '#fff9dc', 'skin');
		setBlock(6,  11, '#fff9dc', 'skin');
		setBlock(6,  12, '#fff9dc', 'skin');
		setBlock(7,  5, '#000', 'glasses');
		setBlock(7,  6,  '#000', 'glasses');
		setBlock(7,  7, '#000', 'glasses');
		setBlock(7,  8,  '#000', 'glasses');
		setBlock(7,  9, '#000', 'glasses');
		setBlock(7,  10,  '#000', 'glasses');
		setBlock(7,  11, '#000', 'glasses');
		setBlock(7,  12, '#000', 'glasses');
		setBlock(7,  13, '#000', 'glasses');
		setBlock(7,  14,  '#000', 'glasses');
		setBlock(7,  15, '#000', 'glasses');
		setBlock(7,  16, '#000', 'glasses');
		setBlock(8,  5, '#edc945', 'hair');
		setBlock(8,  6,  '#edc945', 'hair');
		setBlock(8,  7, '#000', 'glasses');
		setBlock(8,  8,  '#fff9dc', 'skin');
		setBlock(8,  9, '#fff9dc', 'skin');
		setBlock(8,  10,  '#000', 'glasses');
		setBlock(8,  11, '#fff9dc', 'skin');
		setBlock(8,  12, '#fff9dc', 'skin');
		setBlock(8,  13, '#000', 'glasses');
		setBlock(8,  16, '#000', 'glasses');
		setBlock(9,  5, '#edc945', 'hair');
		setBlock(9,  6,  '#edc945', 'hair');
		setBlock(9,  7, '#000', 'glasses');
		setBlock(9,  8,  '#fff9dc', 'skin');
		setBlock(9,  9, '#fff9dc', 'skin');
		setBlock(9,  10,  '#000', 'glasses');
		setBlock(9,  11, '#fff9dc', 'skin');
		setBlock(9,  12, '#fff9dc', 'skin');
		setBlock(9,  13, '#000', 'glasses');
		setBlock(9,  16, '#000', 'glasses');
		setBlock(10,  5, '#fff9dc', 'skin');
		setBlock(10,  6,  '#fff9dc', 'skin');
		setBlock(10,  7, '#000', 'glasses');
		setBlock(10,  8,  '#000', 'glasses');
		setBlock(10,  9, '#000', 'glasses');
		setBlock(10,  10,  '#000', 'glasses');
		setBlock(10,  11, '#fff9dc', 'skin');
		setBlock(10,  12, '#fff9dc', 'skin');
		setBlock(10,  13, '#000', 'glasses');
		setBlock(10,  14, '#000', 'glasses');
		setBlock(10,  15, '#000', 'glasses');
		setBlock(10,  16, '#000', 'glasses');	
		setBlock(11,  5, '#fff9dc', 'skin');
		setBlock(11,  6,  '#fff9dc', 'skin');
		setBlock(11,  7, '#fff9dc', 'skin');
		setBlock(11,  8,  '#fff9dc', 'skin');
		setBlock(11,  9, '#fff9dc', 'skin');
		setBlock(11,  10,  '#fff9dc', 'skin');
		setBlock(11,  11, '#fff9dc', 'skin');
		setBlock(11,  12, '#fff9dc', 'skin');	
		setBlock(12,  5, '#fff9dc', 'skin');
		setBlock(12,  6,  '#fff9dc', 'skin');
		setBlock(12,  7, '#dcd4a6', 'chin');
		setBlock(12,  8,  '#dcd4a6', 'chin');
		setBlock(12,  9, '#dcd4a6', 'chin');
		setBlock(12,  10,  '#dcd4a6', 'chin');
		setBlock(13,  5, '#fff9dc', 'skin');
		setBlock(13,  6,  '#fff9dc', 'skin');
		setBlock(13,  7, '#dcd4a6', 'chin');
		setBlock(13,  8,  '#dcd4a6', 'chin');
		setBlock(13,  9, '#dcd4a6', 'chin');
		setBlock(13,  10,  '#dcd4a6', 'chin');
		setBlock(14,  3, '#000', 'sweater');
		setBlock(14,  4,  '#000', 'sweater');
		setBlock(14,  5, '#fff9dc', 'skin');
		setBlock(14,  6,  '#fff9dc', 'skin');
		setBlock(14,  7, '#fff9dc', 'skin');
		setBlock(14,  8,  '#fff9dc', 'skin');
		setBlock(14,  9, '#fff9dc', 'skin');
		setBlock(14,  10,  '#fff9dc', 'skin');
		setBlock(14,  11, '#000', 'sweater');
		setBlock(14,  12,  '#000', 'sweater');
		setBlock(15,  3, '#000', 'sweater');
		setBlock(15,  4,  '#000', 'sweater');
		setBlock(15,  5, '#000', 'sweater');
		setBlock(15,  6,  '#fff9dc', 'skin');
		setBlock(15,  7, '#fff9dc', 'skin');
		setBlock(15,  8,  '#fff9dc', 'skin');
		setBlock(15,  9, '#fff9dc', 'skin');
		setBlock(15,  10,  '#000', 'sweater');
		setBlock(15,  11, '#000', 'sweater');
		setBlock(15,  12,  '#000', 'sweater');
		setBlock(16,  1, '#000', 'sweater', 'left');
		setBlock(16,  2,  '#000', 'sweater', 'left');
		setBlock(16,  3, '#000', 'sweater');
		setBlock(16,  4,  '#000', 'sweater');
		setBlock(16,  5, '#000', 'sweater');
		setBlock(16,  6,  '#000', 'sweater');
		setBlock(16,  7, '#000', 'sweater');
		setBlock(16,  8,  '#000', 'sweater');
		setBlock(16,  9, '#000', 'sweater');
		setBlock(16,  10,  '#000', 'sweater');
		setBlock(16,  11, '#000', 'sweater');
		setBlock(16,  12,  '#000', 'sweater');
		setBlock(16,  13, '#000', 'sweater', 'right');
		setBlock(16,  14,  '#000', 'sweater', 'right');	
		setBlock(17,  1, '#000', 'sweater', 'left');
		setBlock(17,  2,  '#000', 'sweater', 'left');
		setBlock(17,  3, '#000', 'sweater');
		setBlock(17,  4,  '#000', 'sweater');
		setBlock(17,  5, '#888888', 'chord', 'left');
		setBlock(17,  6,  '#000', 'sweater');
		setBlock(17,  7, '#000', 'sweater');
		setBlock(17,  8,  '#000', 'sweater');
		setBlock(17,  9, '#000', 'sweater');
		setBlock(17,  10,  '#888888', 'chord', 'right');
		setBlock(17,  11, '#000', 'sweater');
		setBlock(17,  12,  '#000', 'sweater');
		setBlock(17,  13, '#000', 'sweater', 'right');
		setBlock(17,  14,  '#000', 'sweater', 'right');
		setBlock(18,  1, '#000', 'sweater', 'left');
		setBlock(18,  2,  '#000', 'sweater', 'left');
		setBlock(18,  3, '#000', 'sweater');
		setBlock(18,  4,  '#000', 'sweater');
		setBlock(18,  5, '#888888', 'chord', 'left');
		setBlock(18,  6,  '#000', 'sweater');
		setBlock(18,  7, '#000', 'sweater');
		setBlock(18,  8,  '#000', 'sweater');
		setBlock(18,  9, '#000', 'sweater');
		setBlock(18,  10,  '#888888', 'chord', 'right');
		setBlock(18,  11, '#000', 'sweater');
		setBlock(18,  12,  '#000', 'sweater');
		setBlock(18,  13, '#000', 'sweater', 'right');
		setBlock(18,  14,  '#000', 'sweater', 'right');
		setBlock(19,  1, '#000', 'sweater', 'left');
		setBlock(19,  2,  '#000', 'sweater', 'left');
		setBlock(19,  3, '#000', 'sweater');
		setBlock(19,  4,  '#000', 'sweater');
		setBlock(19,  5, '#888888', 'chord', 'left');
		setBlock(19,  6,  '#000', 'sweater');
		setBlock(19,  7, '#000', 'sweater');
		setBlock(19,  8,  '#000', 'sweater');
		setBlock(19,  9, '#000', 'sweater');
		setBlock(19,  10,  '#888888', 'chord', 'right');
		setBlock(19,  11, '#000', 'sweater');
		setBlock(19,  12,  '#000', 'sweater');
		setBlock(19,  13, '#000', 'sweater', 'right');
		setBlock(19,  14,  '#000', 'sweater', 'right');
		setBlock(20,  1, '#000', 'sweater', 'left');
		setBlock(20,  2,  '#000', 'sweater', 'left');
		setBlock(20,  3, '#000', 'sweater');
		setBlock(20,  4,  '#000', 'sweater');
		setBlock(20,  5, '#888888', 'chord', 'left');
		setBlock(20,  6,  '#000', 'sweater');
		setBlock(20,  7, '#000', 'sweater');
		setBlock(20,  8,  '#000', 'sweater');
		setBlock(20,  9, '#000', 'sweater');
		setBlock(20,  10,  '#888888', 'chord', 'right');
		setBlock(20,  11, '#000', 'sweater');
		setBlock(20,  12,  '#000', 'sweater');
		setBlock(20,  13, '#000', 'sweater', 'right');
		setBlock(20,  14,  '#000', 'sweater', 'right');
		setBlock(21,  1, '#000', 'sweater', 'left');
		setBlock(21,  2,  '#000', 'sweater', 'left');
		setBlock(21,  3, '#000', 'sweater');
		setBlock(21,  4,  '#000', 'sweater');
		setBlock(21,  5, '#888888', 'chord', 'left');
		setBlock(21,  6,  '#000', 'sweater');
		setBlock(21,  7, '#000', 'sweater');
		setBlock(21,  8,  '#000', 'sweater');
		setBlock(21,  9, '#000', 'sweater');
		setBlock(21,  10,  '#888888', 'chord', 'right');
		setBlock(21,  11, '#000', 'sweater');
		setBlock(21,  12,  '#000', 'sweater');
		setBlock(21,  13, '#000', 'sweater', 'right');
		setBlock(21,  14,  '#000', 'sweater', 'right');
		setBlock(22,  1, '#000', 'sweater', 'left');
		setBlock(22,  2,  '#000', 'sweater', 'left');
		setBlock(22,  3, '#000', 'sweater');
		setBlock(22,  4,  '#000', 'sweater');
		setBlock(22,  5, '#888888', 'chord', 'left');
		setBlock(22,  6,  '#000', 'sweater');
		setBlock(22,  7, '#000', 'sweater');
		setBlock(22,  8,  '#000', 'sweater');
		setBlock(22,  9, '#000', 'sweater');
		setBlock(22,  10,  '#888888', 'chord', 'right');
		setBlock(22,  11, '#000', 'sweater');
		setBlock(22,  12,  '#000', 'sweater');
		setBlock(22,  13, '#000', 'sweater', 'right');
		setBlock(22,  14,  '#000', 'sweater', 'right');
		setBlock(23,  1, '#000', 'sweater', 'left');
		setBlock(23,  2,  '#000', 'sweater', 'left');
		setBlock(23,  3, '#000', 'sweater');
		setBlock(23,  4,  '#000', 'sweater');
		setBlock(23,  5, '#888888', 'chord', 'left');
		setBlock(23,  6,  '#000', 'sweater');
		setBlock(23,  7, '#000', 'sweater');
		setBlock(23,  8,  '#000', 'sweater');
		setBlock(23,  9, '#000', 'sweater');
		setBlock(23,  10,  '#888888', 'chord', 'right');
		setBlock(23,  11, '#000', 'sweater');
		setBlock(23,  12,  '#000', 'sweater');
		setBlock(23,  13, '#000', 'sweater', 'right');
		setBlock(23,  14,  '#000', 'sweater', 'right');
		setBlock(24,  1, '#000', 'sweater', 'left');
		setBlock(24,  2,  '#000', 'sweater', 'left');
		setBlock(24,  3, '#000', 'sweater');
		setBlock(24,  4,  '#000', 'sweater');
		setBlock(24,  5, '#000', 'sweater');
		setBlock(24,  6,  '#000', 'sweater');
		setBlock(24,  7, '#000', 'sweater');
		setBlock(24,  8,  '#000', 'sweater');
		setBlock(24,  9, '#000', 'sweater');
		setBlock(24,  10,  '#000', 'sweater');
		setBlock(24,  11, '#000', 'sweater');
		setBlock(24,  12,  '#000', 'sweater');
		setBlock(24,  13, '#000', 'sweater', 'right');
		setBlock(24,  14,  '#000', 'sweater', 'right');
		setBlock(25,  1, '#000', 'sweater', 'left');
		setBlock(25,  2,  '#000', 'sweater', 'left');
		setBlock(25,  3, '#000', 'sweater');
		setBlock(25,  4,  '#000', 'sweater');
		setBlock(25,  5, '#000', 'sweater');
		setBlock(25,  6,  '#000', 'sweater');
		setBlock(25,  7, '#000', 'sweater');
		setBlock(25,  8,  '#000', 'sweater');
		setBlock(25,  9, '#000', 'sweater');
		setBlock(25,  10,  '#000', 'sweater');
		setBlock(25,  11, '#000', 'sweater');
		setBlock(25,  12,  '#000', 'sweater');
		setBlock(25,  13, '#000', 'sweater', 'right');
		setBlock(25,  14,  '#000', 'sweater', 'right');
		setBlock(26,  1, '#000', 'sweater', 'left');
		setBlock(26,  2,  '#000', 'sweater', 'left');
		setBlock(26,  3, '#000', 'sweater');
		setBlock(26,  4,  '#000', 'sweater');
		setBlock(26,  5, '#000', 'sweater');
		setBlock(26,  6,  '#000', 'sweater');
		setBlock(26,  7, '#000', 'sweater');
		setBlock(26,  8,  '#000', 'sweater');
		setBlock(26,  9, '#000', 'sweater');
		setBlock(26,  10,  '#000', 'sweater');
		setBlock(26,  11, '#000', 'sweater');
		setBlock(26,  12,  '#000', 'sweater');
		setBlock(26,  13, '#000', 'sweater', 'right');
		setBlock(26,  14,  '#000', 'sweater', 'right');
		setBlock(27,  1, '#000', 'sweater', 'left');
		setBlock(27,  2,  '#000', 'sweater', 'left');
		setBlock(27,  3, '#000', 'sweater');
		setBlock(27,  4,  '#000', 'sweater');
		setBlock(27,  5, '#000', 'sweater');
		setBlock(27,  6,  '#000', 'sweater');
		setBlock(27,  7, '#000', 'sweater');
		setBlock(27,  8,  '#000', 'sweater');
		setBlock(27,  9, '#000', 'sweater');
		setBlock(27,  10,  '#000', 'sweater');
		setBlock(27,  11, '#000', 'sweater');
		setBlock(27,  12,  '#000', 'sweater');
		setBlock(27,  13, '#000', 'sweater', 'right');
		setBlock(27,  14,  '#000', 'sweater', 'right');
		setBlock(28,  1, '#000', 'sweater', 'left');
		setBlock(28,  2,  '#000', 'sweater', 'left');
		setBlock(28,  3, '#000', 'sweater');
		setBlock(28,  4,  '#000', 'sweater');
		setBlock(28,  5, '#000', 'sweater');
		setBlock(28,  6,  '#000', 'sweater');
		setBlock(28,  7, '#000', 'sweater');
		setBlock(28,  8,  '#000', 'sweater');
		setBlock(28,  9, '#000', 'sweater');
		setBlock(28,  10,  '#000', 'sweater');
		setBlock(28,  11, '#000', 'sweater');
		setBlock(28,  12,  '#000', 'sweater');
		setBlock(28,  13, '#000', 'sweater', 'right');
		setBlock(28,  14,  '#000', 'sweater', 'right');
		setBlock(29,  1, '#000', 'sweater', 'left');
		setBlock(29,  2,  '#000', 'sweater', 'left');
		setBlock(29,  3, '#000', 'sweater');
		setBlock(29,  4,  '#000', 'sweater');
		setBlock(29,  5, '#000', 'sweater');
		setBlock(29,  6,  '#000', 'sweater');
		setBlock(29,  7, '#000', 'sweater');
		setBlock(29,  8,  '#000', 'sweater');
		setBlock(29,  9, '#000', 'sweater');
		setBlock(29,  10,  '#000', 'sweater');
		setBlock(29,  11, '#000', 'sweater');
		setBlock(29,  12,  '#000', 'sweater');
		setBlock(29,  13, '#000', 'sweater', 'right');
		setBlock(29,  14,  '#000', 'sweater', 'right');
		setBlock(30,  1, '#000', 'sweater', 'left');
		setBlock(30,  2,  '#000', 'sweater', 'left');
		setBlock(30,  3, '#402017', 'belt');
		setBlock(30,  4,  '#402017', 'belt');
		setBlock(30,  5, '#402017', 'belt');
		setBlock(30,  6,  '#402017', 'belt');
		setBlock(30,  7, '#402017', 'belt');
		setBlock(30,  8,  '#402017', 'belt');
		setBlock(30,  9, '#402017', 'belt');
		setBlock(30,  10,  '#402017', 'belt');
		setBlock(30,  11, '#402017', 'belt');
		setBlock(30,  12,  '#402017', 'belt');
		setBlock(30,  13, '#000', 'sweater', 'right');
		setBlock(30,  14,  '#000', 'sweater', 'right');
		setBlock(31,  1, '#000', 'sweater', 'left');
		setBlock(31,  2,  '#000', 'sweater', 'left');
		setBlock(31,  3, '#402017', 'belt');
		setBlock(31,  4,  '#402017', 'belt');
		setBlock(31,  5, '#402017', 'belt');
		setBlock(31,  6,  '#402017', 'belt');
		setBlock(31,  7, '#402017', 'belt');
		setBlock(31,  8,  '#402017', 'belt');
		setBlock(31,  9, '#402017', 'belt');
		setBlock(31,  10,  '#402017', 'belt');
		setBlock(31,  11, '#402017', 'belt');
		setBlock(31,  12,  '#402017', 'belt');
		setBlock(31,  13, '#000', 'sweater', 'right');
		setBlock(31,  14,  '#000', 'sweater', 'right');
		setBlock(32,  1, '#fff9dc', 'skin');
		setBlock(32,  2,  '#fff9dc', 'skin');
		setBlock(32,  3, '#24426c', 'pants');
		setBlock(32,  4,  '#24426c', 'pants');
		setBlock(32,  5, '#24426c', 'pants');
		setBlock(32,  6,  '#24426c', 'pants');
		setBlock(32,  7, '#24426c', 'pants');
		setBlock(32,  8,  '#24426c', 'pants');
		setBlock(32,  9, '#24426c', 'pants');
		setBlock(32,  10,  '#24426c', 'pants');
		setBlock(32,  11, '#24426c', 'pants');
		setBlock(32,  12,  '#24426c', 'pants');
		setBlock(32,  13, '#fff9dc', 'skin');
		setBlock(32,  14,  '#fff9dc', 'skin');
		setBlock(33,  1, '#fff9dc', 'skin');
		setBlock(33,  2,  '#fff9dc', 'skin');
		setBlock(33,  3, '#24426c', 'pants');
		setBlock(33,  4,  '#24426c', 'pants');
		setBlock(33,  5, '#24426c', 'pants');
		setBlock(33,  6,  '#24426c', 'pants');
		setBlock(33,  7, '#24426c', 'pants');
		setBlock(33,  8,  '#24426c', 'pants');
		setBlock(33,  9, '#24426c', 'pants');
		setBlock(33,  10,  '#24426c', 'pants');
		setBlock(33,  11, '#24426c', 'pants');
		setBlock(33,  12,  '#24426c', 'pants');
		setBlock(33,  13, '#fff9dc', 'skin');
		setBlock(33,  14,  '#fff9dc', 'skin');
		setBlock(34,  1, '#fff9dc', 'skin');
		setBlock(34,  2,  '#fff9dc', 'skin');
		setBlock(34,  3, '#24426c', 'pants');
		setBlock(34,  4,  '#24426c', 'pants');
		setBlock(34,  5, '#24426c', 'pants');
		setBlock(34,  6,  '#24426c', 'pants');
		setBlock(34,  9, '#24426c', 'pants');
		setBlock(34,  10,  '#24426c', 'pants');
		setBlock(34,  11, '#24426c', 'pants');
		setBlock(34,  12,  '#24426c', 'pants');
		setBlock(34,  13, '#fff9dc', 'skin');
		setBlock(34,  14,  '#fff9dc', 'skin');
		setBlock(35,  1, '#fff9dc', 'skin');
		setBlock(35,  2,  '#fff9dc', 'skin');
		setBlock(35,  3, '#24426c', 'pants');
		setBlock(35,  4,  '#24426c', 'pants');
		setBlock(35,  5, '#24426c', 'pants');
		setBlock(35,  6,  '#24426c', 'pants');
		setBlock(35,  9, '#24426c', 'pants');
		setBlock(35,  10,  '#24426c', 'pants');
		setBlock(35,  11, '#24426c', 'pants');
		setBlock(35,  12,  '#24426c', 'pants');
		setBlock(35,  13, '#fff9dc', 'skin');
		setBlock(35,  14,  '#fff9dc', 'skin');
		setBlock(36,  3, '#24426c', 'pants');
		setBlock(36,  4,  '#24426c', 'pants');
		setBlock(36,  5, '#24426c', 'pants');
		setBlock(36,  6,  '#24426c', 'pants');
		setBlock(36,  9, '#24426c', 'pants');
		setBlock(36,  10,  '#24426c', 'pants');
		setBlock(36,  11, '#24426c', 'pants');
		setBlock(36,  12,  '#24426c', 'pants');
		setBlock(37,  3, '#24426c', 'pants');
		setBlock(37,  4,  '#24426c', 'pants');
		setBlock(37,  5, '#24426c', 'pants');
		setBlock(37,  6,  '#24426c', 'pants');
		setBlock(37,  9, '#24426c', 'pants');
		setBlock(37,  10,  '#24426c', 'pants');
		setBlock(37,  11, '#24426c', 'pants');
		setBlock(37,  12,  '#24426c', 'pants');
		setBlock(38,  3, '#24426c', 'pants');
		setBlock(38,  4,  '#24426c', 'pants');
		setBlock(38,  5, '#24426c', 'pants');
		setBlock(38,  6,  '#24426c', 'pants');
		setBlock(38,  9, '#24426c', 'pants');
		setBlock(38,  10,  '#24426c', 'pants');
		setBlock(38,  11, '#24426c', 'pants');
		setBlock(38,  12,  '#24426c', 'pants');
		setBlock(39,  3, '#24426c', 'pants');
		setBlock(39,  4,  '#24426c', 'pants');
		setBlock(39,  5, '#24426c', 'pants');
		setBlock(39,  6,  '#24426c', 'pants');
		setBlock(39,  9, '#24426c', 'pants');
		setBlock(39,  10,  '#24426c', 'pants');
		setBlock(39,  11, '#24426c', 'pants');
		setBlock(39,  12,  '#24426c', 'pants');
		setBlock(40,  3, '#24426c', 'pants');
		setBlock(40,  4,  '#24426c', 'pants');
		setBlock(40,  5, '#24426c', 'pants');
		setBlock(40,  6,  '#24426c', 'pants');
		setBlock(40,  9, '#24426c', 'pants');
		setBlock(40,  10,  '#24426c', 'pants');
		setBlock(40,  11, '#24426c', 'pants');
		setBlock(40,  12,  '#24426c', 'pants');
		setBlock(41,  3, '#24426c', 'pants');
		setBlock(41,  4,  '#24426c', 'pants');
		setBlock(41,  5, '#24426c', 'pants');
		setBlock(41,  6,  '#24426c', 'pants');
		setBlock(41,  9, '#24426c', 'pants');
		setBlock(41,  10,  '#24426c', 'pants');
		setBlock(41,  11, '#24426c', 'pants');
		setBlock(41,  12,  '#24426c', 'pants');
		setBlock(42,  3, '#24426c', 'pants');
		setBlock(42,  4,  '#24426c', 'pants');
		setBlock(42,  5, '#24426c', 'pants');
		setBlock(42,  6,  '#24426c', 'pants');
		setBlock(42,  9, '#24426c', 'pants');
		setBlock(42,  10,  '#24426c', 'pants');
		setBlock(42,  11, '#24426c', 'pants');
		setBlock(42,  12,  '#24426c', 'pants');
		setBlock(43,  3, '#24426c', 'pants');
		setBlock(43,  4,  '#24426c', 'pants');
		setBlock(43,  5, '#24426c', 'pants');
		setBlock(43,  6,  '#24426c', 'pants');
		setBlock(43,  9, '#24426c', 'pants');
		setBlock(43,  10,  '#24426c', 'pants');
		setBlock(43,  11, '#24426c', 'pants');
		setBlock(43,  12,  '#24426c', 'pants');
		setBlock(44,  3, '#24426c', 'pants');
		setBlock(44,  4,  '#24426c', 'pants');
		setBlock(44,  5, '#24426c', 'pants');
		setBlock(44,  6,  '#24426c', 'pants');
		setBlock(44,  9, '#24426c', 'pants');
		setBlock(44,  10,  '#24426c', 'pants');
		setBlock(44,  11, '#24426c', 'pants');
		setBlock(44,  12,  '#24426c', 'pants');
		setBlock(45,  3, '#24426c', 'pants');
		setBlock(45,  4,  '#24426c', 'pants');
		setBlock(45,  5, '#24426c', 'pants');
		setBlock(45,  6,  '#24426c', 'pants');
		setBlock(45,  9, '#24426c', 'pants');
		setBlock(45,  10,  '#24426c', 'pants');
		setBlock(45,  11, '#24426c', 'pants');
		setBlock(45,  12,  '#24426c', 'pants');
		setBlock(46,  3, '#24426c', 'pants');
		setBlock(46,  4,  '#24426c', 'pants');
		setBlock(46,  5, '#24426c', 'pants');
		setBlock(46,  6,  '#24426c', 'pants');
		setBlock(46,  9, '#24426c', 'pants');
		setBlock(46,  10,  '#24426c', 'pants');
		setBlock(46,  11, '#24426c', 'pants');
		setBlock(46,  12,  '#24426c', 'pants');
		setBlock(47,  3, '#24426c', 'pants');
		setBlock(47,  4,  '#24426c', 'pants');
		setBlock(47,  5, '#24426c', 'pants');
		setBlock(47,  6,  '#24426c', 'pants');
		setBlock(47,  9, '#24426c', 'pants');
		setBlock(47,  10,  '#24426c', 'pants');
		setBlock(47,  11, '#24426c', 'pants');
		setBlock(47,  12,  '#24426c', 'pants');
		setBlock(48,  3, '#24426c', 'pants');
		setBlock(48,  4,  '#24426c', 'pants');
		setBlock(48,  5, '#24426c', 'pants');
		setBlock(48,  6,  '#24426c', 'pants');
		setBlock(48,  9, '#24426c', 'pants');
		setBlock(48,  10,  '#24426c', 'pants');
		setBlock(48,  11, '#24426c', 'pants');
		setBlock(48,  12,  '#24426c', 'pants');
		setBlock(49,  3, '#24426c', 'pants');
		setBlock(49,  4,  '#24426c', 'pants');
		setBlock(49,  5, '#24426c', 'pants');
		setBlock(49,  6,  '#24426c', 'pants');
		setBlock(49,  9, '#24426c', 'pants');
		setBlock(49,  10,  '#24426c', 'pants');
		setBlock(49,  11, '#24426c', 'pants');
		setBlock(49,  12,  '#24426c', 'pants');
		setBlock(50,  3, '#24426c', 'pants');
		setBlock(50,  4,  '#24426c', 'pants');
		setBlock(50,  5, '#24426c', 'pants');
		setBlock(50,  6,  '#24426c', 'pants');
		setBlock(50,  9, '#24426c', 'pants');
		setBlock(50,  10,  '#24426c', 'pants');
		setBlock(50,  11, '#24426c', 'pants');
		setBlock(50,  12,  '#24426c', 'pants');
		setBlock(51,  1, '#c94f24', 'shoes', 'leftShoe');
		setBlock(51,  2,  '#c94f24', 'shoes', 'leftShoe');
		setBlock(51,  3, '#c94f24', 'shoes', 'leftShoe');
		setBlock(51,  4,  '#c94f24', 'shoes', 'leftShoe');
		setBlock(51,  5, '#c94f24', 'shoes', 'leftShoe');
		setBlock(51,  6,  '#c94f24', 'shoes', 'leftShoe');
		setBlock(51,  9, '#c94f24', 'shoes', 'rightShoe');
		setBlock(51,  10,  '#c94f24', 'shoes', 'rightShoe');
		setBlock(51,  11, '#c94f24', 'shoes', 'rightShoe');
		setBlock(51,  12,  '#c94f24', 'shoes', 'rightShoe');
		setBlock(51,  13, '#c94f24', 'shoes', 'rightShoe');
		setBlock(51,  14,  '#c94f24', 'shoes', 'rightShoe');
		setBlock(52,  1, '#c94f24', 'shoes', 'leftShoe');
		setBlock(52,  2,  '#c94f24', 'shoes', 'leftShoe');
		setBlock(52,  3, '#c94f24', 'shoes', 'leftShoe');
		setBlock(52,  4,  '#c94f24', 'shoes', 'leftShoe');
		setBlock(52,  5, '#c94f24', 'shoes', 'leftShoe');
		setBlock(52,  6,  '#c94f24', 'shoes', 'leftShoe');
		setBlock(52,  9, '#c94f24', 'shoes', 'rightShoe');
		setBlock(52,  10,  '#c94f24', 'shoes', 'rightShoe');
		setBlock(52,  11, '#c94f24', 'shoes', 'rightShoe');
		setBlock(52,  12,  '#c94f24', 'shoes', 'rightShoe');
		setBlock(52,  13, '#c94f24', 'shoes', 'rightShoe');
		setBlock(52,  14,  '#c94f24', 'shoes', 'rightShoe');
		$('.container').css("bottom", "588px");
		$(document).bind('touchmove', false);
		setTimeout(function(){
			var speed  		= 20;
			var runner		= 'a';
			$('.littleBlock').each(function(index, element) {
				var setMargin = Math.round(Math.random()*1000);
				var chooseLocations = Math.floor((Math.random() * 4) + 1);
				if(chooseLocations==1){
					$(element).css('margin-top', setMargin+'px');
					$(element).css('margin-right', setMargin+'px');
				} else if(chooseLocations==2){
					$(element).css('margin-top', Math.round(setMargin-(setMargin+setMargin))+'px');
					$(element).css('margin-right', Math.round(setMargin-(setMargin+setMargin))+'px');
				} else if(chooseLocations==2){
					$(element).css('margin-top', setMargin+'px');
					$(element).css('margin-right', Math.round(setMargin-(setMargin+setMargin))+'px');
				} else if(chooseLocations==2){
					$(element).css('margin-top', setMargin+'px');
					$(element).css('margin-right', Math.round(setMargin-(setMargin+setMargin))+'px');
				}

				$(element).animate({
					marginLeft: '',
					marginRight: '',
					marginBottom: '',
					marginTop: '',
					opacity: 1
				}, speed*index);
			});
		}, 10);
		funkyHead();
		tickle();
	}
}

function loadScript(url, callback){
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = url;
    script.onreadystatechange = callback;
    script.onload = callback;
    head.appendChild(script);
}


var sizerPage1;
var sizerPage2;

function setSizer(){	
		$('.footerLink').css('height', '35px');	
		$('.footerLinkSmall').css('height', '58px');
}

loadScript('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', function(){
	$(window).load(function() {
		$.ajaxSetup({
			cache: false
		});
		$.getScript("//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js", function(){
			$.getScript("js/TweenMax.min.js", function(){
				$.getScript("js/cooltext.animations.js", function(){
					$.getScript("js/cooltext.min.js", function(){
						$('#page1').height(($(window).height()/2));
						$('#page2').height($(window).height());
						
						$('body').append('<div id="resizer"><div class="DivWhichNeedToBeVerticallyAligned">Please make your screen a bit bigger...</div></div>');
						
						$("html, body").animate({ scrollTop: $('#page1').height() }, 100);
						
						$('.footerLink').each(function(index, element) {
							$(element).delay(320*index).animate({
								marginTop: '0px'
							}, "fast");
						});
						
						doOnRelClick();
						
						if(window.location.hash) {
							$('#title').remove();
							clickRels(window.location.hash.substr(2));
						} else {
							animations();
						}
						
						$( window ).resize(function() {
							location.reload();
						});
						
					});
				});
			});
		});
	});
});
</script>
</body>
</html>
