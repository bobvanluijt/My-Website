<!DOCTYPE html>
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
<link href="//fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/themes/smoothness/jquery-ui.css" />
<style>
body {
	font-family: 'Press Start 2P', cursive;
	margin:0px;
	background-color:#009de0;
}
.container {
	position:absolute;
	top:100%;
	width:100%;
	z-index:3;
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
	margin-top: -100px;
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
	font-size:9px;
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
}
.imFirst { /* padding for bottomBlocks */
	margin-left:5px;
}
#page2 {
	/*
	background-image: url(bob.jpg);
	background-position: center;
	background-repeat: no-repeat;
	background-size: cover;
	*/
}

#bobRoll {
	position:absolute;
	left:0px;
	top:0px;
	width:100%;
	height:100%;
}

#footer {
	position:absolute;
	left:0px;
	right:0px;
	top:0px;
	height:100%;
	margin:0px;
	padding:0px;
	z-index:999;
}

.footerLink {
	position:relative;
	float:left;
	width:100%;
	height:14.2857142857%;
	text-align:center;
	font-size:28px;
	cursor:pointer;
	z-index:999999;
	color:#000;
	text-decoration:none;
	line-height: 250%;
}


.footerLinkMakeSmall {
	width:100%;
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
	background-size: contain;
}
.cloud {
	position:absolute;
	top:0px;
	width:90px;
	height:65px;
	z-index:1;
	cursor:crosshair;
	z-index:9999;
}

.cloudMouth {
	position:absolute;
	background-color:#000;
	width:18px;
	height:20px;
	bottom:12px;
	left:52px;
	z-index:9999999;
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
	float:left;
	font-size:76px;
	margin-right:10px;
	margin-bottom:0px;	
}
.bigBlock {
	position: relative;
	width: 100%;
	background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAIAAAACCAYAAABytg0kAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpFNEUzMDlGRDIwMDQxMUU0OTlFOEQ4OEQ3REIxQTdBMCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpFNEUzMDlGRTIwMDQxMUU0OTlFOEQ4OEQ3REIxQTdBMCI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOkU0RTMwOUZCMjAwNDExRTQ5OUU4RDg4RDdEQjFBN0EwIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOkU0RTMwOUZDMjAwNDExRTQ5OUU4RDg4RDdEQjFBN0EwIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+IwW5SgAAABVJREFUeNpi+v///00QZmKAAoAAAwBoTAexViABSgAAAABJRU5ErkJggg==);
	left: 0px;
	box-shadow: 2px 2px 2px rgba(0,0,0,0.4);
	z-index: 2;
}
.content {
	position:relative;
	width:600px;
	left:50%;
	margin-left:-300px;
}
.contentText {
	line-height: 1.2rem;
	letter-spacing: 0.1rem;
}
.bigBlockTitle {
	padding: 10px;
	font-size: 12px;
	padding-bottom: 6px;
}
.bigBlockTitleContent {
	position:relative;
	width:600px;
	left:50%;
	margin-left:-300px;
}
.bigBlockContainer {
	padding: 10px;
	font-size: 14px;
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

/*
 * Responsive edits
 */
@media only screen and (max-width: 610px) {
	.content {
		width:100%;
		left:0%;
		margin-left:0px;
	}
}
@media screen and (orientation:landscape) {
	.footerLink {
		line-height: 100% !important;
	}
</style>
</head>
<body>
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
	<div class="container"></div>
<script>
var blockSize 	   = 10;
var blockSizeCloud = 3;
var i			   = 0;
var coolClose	   = false;

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

function clouds(i){
	var interCloud = Math.floor((Math.random() * 7000) + 1000);
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
	var cloudTop = Math.floor(Math.random() * ($(document).height()) + 1);
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
			}, 1210);
		}
	});
	
}

function doOnRelClick(){
	$('a').click(function(event){
		if($(this).attr('target')!='_blank'){
			
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
		//
		// add data
		//
		$.get(i+".php", function(data) {
			$( ".container" ).html(data);
			$('html, body').animate({
				scrollTop: $("#footer").height()
			}, 1200);
			$('.bigBlockTitle').css('background-color', $('#footer').find('a[data-rel='+i+']').css('background-color'));
			$('.bigBlockTags').css('background-color', $('#footer').find('a[data-rel='+i+']').css('background-color'));
		});
		
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

function loadScript(url, callback){
    var head = document.getElementsByTagName('head')[0];
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = url;
    script.onreadystatechange = callback;
    script.onload = callback;
    head.appendChild(script);
}

//$(window).load(function() {
	loadScript('//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js', function(){
		$.ajaxSetup({
			cache: true
		});
		clouds(1);
		$.getScript("//ajax.googleapis.com/ajax/libs/jqueryui/1.11.0/jquery-ui.min.js", function(){
			$.getScript("js/TweenMax.min.js", function(){
				$.getScript("js/cooltext.animations.js", function(){
					$.getScript("js/cooltext.min.js", function(){
						$('.page').height($(document).height());
						
						
						$('.footerLink').each(function(index, element) {
							if(!$(element).hasClass('footerLinkMakeSmall')){
								$(element).cooltext({
									onClick:{action:"animation", animation:["cool102","cool106","cool190"]}
								});	
							}
                        });
						
						
						
						doOnRelClick();
						if(window.location.hash) {
							//$('#title').remove();
							clickRels(window.location.hash.substr(2));
							//$('.footerLink').css('margin-top', '0px');
						}
						$(window).on('hashchange',function(){ 
							clickRels(location.hash.substr(2));
						});
					});
				});
			});
		});
	});
//});
</script>
</body>
</html>
