/*
 *
 *	CoolText v1.1.1
 *
 *	Copyright (c) 2014 Thomas Dolso
 *	http://www.megalocode.com/cooltext
 *
 *	Licenses
 * http://codecanyon.net/licenses/regular
 * http://codecanyon.net/licenses/extended
 *
 *
 */


function htmlCoolText(){$.each($("body").find("[ct-sequence], [ct-mouseover], [ct-mouseout], [ct-click], [ct-visible]"),function(e,t){var n=$(this).attr("ct-sequence");var r=$(this).attr("ct-mouseover");var i=$(this).attr("ct-mouseout");var s=$(this).attr("ct-click");var o=$(this).attr("ct-visible");var u=$(this).attr("ct-config");var a=[];if(typeof n!=="undefined"){n=n.replace(/\s+/g,"").split("|");for(var f=0;f<n.length;f++){var l=n[f].replace(/\s+/g,"").split(",");a[f]={action:"animation",stop:false,animation:l[0],elements:l[1],speed:l[2],stagger:l[3],delay:l[4],order:l[5],css:{color:l[6]}}}}if(typeof r!=="undefined"){r=r.replace(/\s+/g,"").split(",");var c={action:"animation",animation:r[0],elements:r[1],speed:r[2],stagger:r[3],delay:r[4],order:r[5],overwrite:r[6],css:{color:r[7]}}}if(typeof i!=="undefined"){i=i.replace(/\s+/g,"").split(",");var h={action:"animation",animation:i[0],elements:i[1],speed:i[2],stagger:i[3],delay:i[4],order:i[5],overwrite:i[6],css:{color:i[7]}}}if(typeof s!=="undefined"){s=s.replace(/\s+/g,"").split(",");var p={action:"animation",animation:s[0],elements:s[1],speed:s[2],stagger:s[3],delay:s[4],order:s[5],overwrite:s[6],css:{color:s[7]}}}if(typeof o!=="undefined"){o=o.replace(/\s+/g,"").split(",");var d={action:"animation",animation:o[0],elements:o[1],speed:o[2],stagger:o[3],delay:o[4],order:o[5],overwrite:o[6],css:{color:o[7]}}}if(typeof u!=="undefined"){var v=u.indexOf("cycle")>=0;var m=u.indexOf("pause-on-mouseover")>=0;var g=u.indexOf("resume-on-mouseout")>=0;var y=u.indexOf("wait-for-load")>=0}$(this).cooltext({pauseOnMouseOver:m,resumeOnMouseOut:g,cycle:v,waitForLoad:y,onMouseOver:c,onMouseOut:h,onClick:p,onVisible:d,sequence:a})})}(function(e,t,n,r){"use strict";function u(n,s){this.name=i;this.defaults=o;this.options=e.extend({},o,s);if(this.options.sequence===r)this.options.sequence=[];this.num_actions=this.options.sequence.length;this.current_action=0;this.element=n;this.j_element=e(n);this.timeline=new TimelineMax;this.num_letters=0;this.num_words=0;e.extend(this.options.animations,cool_animations);if(this.options.onVisible)this.j_element.css("visibility","hidden");if(this.options.waitForLoad){var u=this;e(t).load(function(){u._init()})}else this._init()}var i="cooltext";var s;var o={cycle:false,pauseOnMouseOver:false,resumeOnMouseOut:false,waitForLoad:false,animations:[],onComplete:r,onMouseOver:r,onMouseOut:r,onClick:r,onVisible:r,onVisibleFired:false};var a=function(t){var n=t.data.plugin;if((typeof n.options.onMouseOver.overwrite==="undefined"||!n.options.onMouseOver.overwrite)&&(n.animating||n.animating_over||n.animating_out||n.animating_click))return false;n.animating_over=true;var r=e.extend(true,{},n.options.onMouseOver);if(e.isArray(r.animation))n._getRandomAnimation(r);else n._getAnimation(r);n._getAnimationInfo(r);n.pause();n._startAnimation(r,true)};var f=function(t){var n=t.data.plugin;if((typeof n.options.onMouseOut.overwrite==="undefined"||!n.options.onMouseOut.overwrite)&&(n.animating||n.animating_over||n.animating_out||n.animating_click))return false;n.animating_out=true;var r=e.extend(true,{},n.options.onMouseOut);if(e.isArray(r.animation))n._getRandomAnimation(r);else n._getAnimation(r);n._getAnimationInfo(r);n.pause();n._startAnimation(r,true)};var l=function(t){var n=t.data.plugin;if((typeof n.options.onClick.overwrite==="undefined"||!n.options.onClick.overwrite)&&(n.animating||n.animating_over||n.animating_out||n.animating_click))return false;n.animating_click=true;var r=e.extend(true,{},n.options.onClick);if(e.isArray(r.animation))n._getRandomAnimation(r);else n._getAnimation(r);n._getAnimationInfo(r);n.pause();n._startAnimation(r,true)};u.prototype={_init:function(){var n=this;if(n.options.pauseOnMouseOver)n.j_element.on("mouseenter",{plugin:this},function(){n.pause()});if(n.options.resumeOnMouseOut)n.j_element.on("mouseleave",{plugin:this},function(){n.play()});if(n.options.onMouseOver)n.j_element.on("mouseenter",{plugin:this},a);if(n.options.onMouseOut)n.j_element.on("mouseleave",{plugin:this},f);if(n.options.onClick)n.j_element.on("click",{plugin:this},l);if(n.options.onVisible){e(t).load(function(){e(t).scroll(function(){n._fireOnVisible()});n._fireOnVisible()})}n._getAnimations();n._createLetters();n._doAction()},_onVisible:function(t){var n=this;var r=e.extend(true,{},n.options.onVisible);if(e.isArray(r.animation))n._getRandomAnimation(r);else n._getAnimation(r);n._getAnimationInfo(r);n.pause();n._startAnimation(r,true)},_fireOnVisible:function(){var e=this;if(e.onVisibleFired)return false;if(e._isScrolledIntoView()){e.onVisibleFired=true;e._onVisible()}},_isScrolledIntoView:function(){var n=this;var i=50;var s=e(t).scrollTop();if(t.innerHeight===r)var o=e(t).height();else var o=t.innerHeight;var u=n.j_element.offset().top;var a=n.j_element.height();return s+i<u+a&&s+o>u+i},_getAnimation:function(t){if(typeof t==="undefined")return;var n=this;if(e.isArray(t.animation))t.action="do_animate";else if(t.action=="animation"&&t.animation!=""){var r=false;for(var i=0;i<n.options.animations.length;i++){if(t.animation==n.options.animations[i].name){r=true;t.action="do_animate";t.steps=jQuery.extend(true,[],n.options.animations[i].steps)}}if(!r){console.log("COOLTEXT WARNING: animation "+t.animation+" not found");n.options.sequence.splice(i,1);n.num_actions--}}},_getAnimations:function(){var e=this;for(var t=0;t<e.options.sequence.length;t++){var n=e.options.sequence[t];e._getAnimation(n)}},_getRandomAnimation:function(t){var n=this;if(e.isArray(t.animation)){var r=Math.floor(t.animation.length*Math.random());t.name=t.animation[r];var i=false;for(var s=0;s<n.options.animations.length;s++){if(t.name==n.options.animations[s].name){i=true;t.steps=jQuery.extend(true,[],n.options.animations[s].steps)}}if(!i){console.log("COOLTEXT WARNING: animation "+t.name+" not found");n.options.sequence.splice(s,1);n.num_actions--}}},_createLetters:function(){var t=this;t.j_element.html(t.j_element.html().replace(/\n/g,"").replace("	","").replace(/\s{2,}/g," "));t.current_text=t.j_element.html();t.j_element.html(e.trim(t.j_element.html()));var n=t.j_element.clone();t.j_element.html("");n.find("br").replaceWith("\n");var i=n.text().split("");var s;var o=e("<div/>",{css:{position:"relative",display:"inline-block"}}).addClass("ct-word").appendTo(t.j_element);t._fixWordEvents(o);e.each(i,function(n,r){if(r==="\n"){e("<br/>",{css:{position:"relative",display:"inline-block"}}).addClass("ct-br").appendTo(t.j_element);o=e("<div/>",{css:{position:"relative",display:"inline-block"}}).addClass("ct-word").appendTo(t.j_element);t._fixWordEvents(o)}if(r==" "||r=="&nbsp;"){t.j_element.append(" ");o=e("<div/>",{css:{position:"relative",display:"inline-block"}}).addClass("ct-word").appendTo(t.j_element);t._fixWordEvents(o)}else{s=e("<div/>",{css:{position:"relative",display:"inline-block"}}).addClass("ct-letter").html(r).appendTo(o);t._fixLetterEvents(s)}});t._finds();t.words_positions=Array();e.each(t.words,function(n,r){var i=e(this).position();t.words_positions[n]=i});t.letters_positions=Array();e.each(t.letters,function(n,r){var i=e(this).position();t.letters_positions[n]=i});TweenMax.set(t.j_element,{z:.1});if((typeof t.options.sequence===r||t.options.sequence.length==0)&&t.options.onVisible===r)t.j_element.css("visibility","visible");t._createResetValues()},_fixLetterEvents:function(t){e(t).on("mousedown",function(e){if(e.which==1){e.stopPropagation();e.preventDefault()}}).on("mouseup",function(t){if(t.which==1){t.stopPropagation();t.preventDefault();e(t.target).parent().parent()[0].click()}}).on("click",function(e){if(e.which==1){e.stopPropagation();e.preventDefault()}})},_fixWordEvents:function(t){e(t).on("mousedown",function(e){if(e.which==1){e.stopPropagation();e.preventDefault()}}).on("mouseup",function(t){if(t.which==1){t.stopPropagation();t.preventDefault();e(t.target).parent()[0].click()}}).on("click",function(e){if(e.which==1){e.stopPropagation();e.preventDefault()}})},_finds:function(){var e=this;e.letters=e.j_element.find(".ct-letter");e.words=e.j_element.find(".ct-word");e.num_letters=e.letters.length;e.num_words=e.words.length},_resetLetters:function(){var t=this;e.each(t.letters,function(e,n){TweenMax.to(this,0,t.letters_reset[e])})},_resetWords:function(){var t=this;e.each(t.words,function(e,n){TweenMax.to(this,0,t.words_reset[e])})},_createResetValues:function(){var t=this;t.words_reset=Array();e.each(t.words,function(e,n){t.words_reset[e]={transformOrigin:"50% 50% 0",transform:"none",rotationY:0,rotationX:0,rotation:0,scale:1,opacity:1,immediateRender:true}});t.letters_reset=Array();e.each(t.letters,function(e,n){t.letters_reset[e]={transformOrigin:"50% 50% 0",transform:"none",rotationY:0,rotationX:0,rotation:0,scale:1,opacity:1,immediateRender:true}})},_nextAction:function(){var e=this;e.current_action++;if(e.current_action>=e.num_actions){if(e.options.onComplete!==r)e.options.onComplete();if(e.options.cycle)e.current_action=0;else return false}e._doAction();return true},_prevAction:function(){var e=this;e.current_action--;if(e.current_action<0){return false}e._doAction();return true},_getAnimationInfo:function(e){var t=this;t.current_animation={};if(e.elements=="words"){t.current_animation.num_elements=t.num_words;t.current_animation.jelements=".ct-word";t.current_animation.stagger_multiplier=7}else{t.current_animation.num_elements=t.num_letters;t.current_animation.jelements=".ct-letter";t.current_animation.stagger_multiplier=1}for(var n=1;n<e.steps.length;n++){var i=e.steps[n];if(e.speed!=r)i.time*=100/e.speed;if(e.stagger!=r)i.stagger*=100/e.stagger;i.stagger*=t.current_animation.stagger_multiplier}for(var n=1;n<e.steps.length;n++){var s=e.steps[n];s.total_time=(t.current_animation.num_elements-1)*parseFloat(s.stagger)+parseFloat(s.time)}var o=0;e.steps[1].delay=0;for(var n=2;n<e.steps.length;n++){o+=e.steps[n-1].total_time*e.steps[n].start_at;e.steps[n].delay=o}t.current_animation.total_time=0;for(var n=1;n<e.steps.length;n++)if(e.steps[n].total_time+e.steps[n].delay>t.current_animation.total_time)t.current_animation.total_time=e.steps[n].total_time+e.steps[n].delay;t.current_animation.one_element_total_time=0;for(var n=1;n<e.steps.length;n++)if(e.steps[n].time+e.steps[n].delay>t.current_animation.one_element_total_time)t.current_animation.one_element_total_time=e.steps[n].time+e.steps[n].delay},_doAction:function(){var t=this;if(t.options.sequence.length==0)return false;var n=e.extend(true,{},t.options.sequence[t.current_action]);switch(n.action){case"do_animate":if(e.isArray(n.animation))t._getRandomAnimation(n);t._getAnimationInfo(n);t._startAnimation(n);break;case"update":t.j_element.css("visibility","hidden");if(n.text!==r)t.j_element.html(n.text);else t.j_element.html(t.current_text);if(n.addClass!==r)t.j_element.addClass(n.addClass);if(n.removeClass!==r)t.j_element.removeClass(n.removeClass);if(typeof n.css!==r)TweenMax.set(t.j_element,{css:n.css});t._createLetters();t._nextAction();break}},_resetElements:function(){var e=this;if(e.current_animation.jelements==".ct-letter")e._resetWords();else if(e.current_animation.jelements==".ct-word")e._resetLetters()},_startAnimation:function(t,n){var i=this;i.animating=true;if(n===r)n=false;var s=t.steps[0];if(t.onStart!==r){if(t.delay!==r)TweenMax.delayedCall(t.delay,function(){t.onStart()});else t.onStart()}TweenLite.set(i.words,{perspective:s.p});i.timeline.clear();i.timeline=new TimelineMax;i.timeline.pause();i.timeline.eventCallback("onComplete",function(){i._resetElements();i._doSteps(t,n)});if(e(i.j_element).css("visibility")!="visible")TweenMax.to(i.j_element,0,{delay:t.delay===r?0:t.delay,visibility:"visible"});var o=Array();e.each(i.j_element.find(i.current_animation.jelements),function(e,n){if(s.xt=="value")var i=s.x;else if(s.xt=="random")var i=Math.floor(s.x1+(s.x2-s.x1)*Math.random());if(s.yt=="value")var u=s.y;else if(s.yt=="random")var u=Math.floor(s.y1+(s.y2-s.y1)*Math.random());var a=s.o;if(t.startingOpacity!==r)a=t.startingOpacity;o.push(TweenMax.to(this,0,{opacity:a,transformOrigin:s.tox+"% "+s.toy+"% "+s.toz+"px",x:i,y:u,z:.1,rotationX:s.rx,rotationY:s.ry,rotationZ:s.rz,scaleX:s.sx,scaleY:s.sy,delay:t.delay===r?0:t.delay}))});i.timeline.add(o);i.timeline.play()},_doSteps:function(t,n){var i=this;i.timeline.clear();i.timeline=new TimelineMax;i.timeline.pause();i.timeline.eventCallback("onComplete",function(){i.animating=false;i.animating_over=false;i.animating_out=false;i.animating_click=false;if(t.onComplete!==r)t.onComplete();if(!n&&!t.stop)i._nextAction()});var s=i.j_element.find(i.current_animation.jelements);var o=Array();if(t.order=="reverse"){for(var u=0;u<i.current_animation.num_elements;u++)o[u]=i.current_animation.num_elements-u-1}else if(t.order=="random"){for(var u=0;u<i.current_animation.num_elements;u++)o[u]=u;for(var u=0;u<i.current_animation.num_elements;u++){var a=Math.floor(Math.random()*i.current_animation.num_elements);var f=o[u];o[u]=o[a];o[a]=f}}else{for(var u=0;u<i.current_animation.num_elements;u++)o[u]=u}for(var l=1;l<t.steps.length;l++){var c=t.steps[l];var h=t.steps[l-1];TweenLite.set(i.words,{perspective:c.p});var p={};if(c.o!=h.o)p.opacity=c.o;if(c.tox!=h.tox||c.toy!=h.toy||c.toz!=h.toz)p.transformOrigin=c.tox+"% "+c.toy+"% "+c.toz+"px";if(c.rx!=h.rx)p.rotationX=c.rx;if(c.ry!=h.ry)p.rotationY=c.ry;if(c.rz!=h.rz)p.rotationZ=c.rz;if(c.sx!=h.sx)p.scaleX=c.sx;if(c.sy!=h.sy)p.scaleY=c.sy;p.z=.1;p.ease=c.e;for(var u=0;u<i.current_animation.num_elements;u++){if(c.xt=="random")var a=Math.floor(c.x1+(c.x2-c.x1)*Math.random());else if(c.xt!=h.type||c.x!=h.x)var a=c.x;if(c.yt=="random")var d=Math.floor(c.y1+(c.y2-c.y1)*Math.random());else if(c.yt!=h.type||c.y!=h.y)var d=c.y;i.timeline.add(TweenMax.to(s[o[u]],c.time,e.extend({},p,{x:a,y:d})),c.delay+u*c.stagger);if(typeof t.css!==r){i.timeline.add(TweenMax.to(s[o[u]],i.current_animation.one_element_total_time,{css:t.css}),0+u*c.stagger)}}}i.timeline.play()},_doBefore:function(t){var n=this;var i=e.extend(true,{},t.before);i.onComplete=function(){t.before=r;n.goto(t)};n._getAnimation(i);n._getAnimationInfo(i);n._startAnimation(i,true)},restart:function(e){var t=this;t.current_action=0;t._doAction()},pause:function(e){var t=this;t.timeline.pause()},play:function(e){var t=this;t.timeline.play()},"goto":function(e){var t=this;var n=t.current_action;if(e.before!==r){t._doBefore(e);return}switch(e.where){case"next":if(t.current_action>=t.num_actions-1){if(t.options.cycle){t.current_action=-1;t._nextAction()}}else t._nextAction();break;case"prev":if(t.current_action<=0){if(t.options.cycle){t.current_action=t.num_actions;t._prevAction()}}else t._prevAction();break;case"next_update":do{t.current_action++;if(t.current_action>=t.num_actions)t.current_action=0;if(t.options.sequence[t.current_action].action=="update"){if(e.stagger!==r){t.current_action+=parseInt(e.stagger);if(t.current_action>=t.num_actions)t.current_action=0;else if(t.current_action<0)t.current_action=t.num_actions-1}t._doAction();return t.current_action}}while(t.current_action!=n);return false;break;case"prev_update":var i=false;do{t.current_action--;if(t.current_action<0)t.current_action=t.num_actions-1;if(t.options.sequence[t.current_action].action=="update"){if(i){if(e.stagger!==r){t.current_action+=parseInt(e.stagger);if(t.current_action>=t.num_actions)t.current_action=0;else if(t.current_action<0)t.current_action=t.num_actions-1}t._doAction();return t.current_action}else i=true}}while(t.current_action!=n);return false;break}}};e.fn[i]=function(t){var n=arguments;if(t===r||typeof t==="object"){return this.each(function(){if(!e.data(this,"plugin_"+i))e.data(this,"plugin_"+i,new u(this,t))})}else if(typeof t==="string"&&t[0]!=="_"){return this.each(function(){var r=e.data(this,"plugin_"+i);if(r instanceof u&&typeof r[t]==="function")r[t].apply(r,Array.prototype.slice.call(n,1))})}}})(jQuery,window,document);if(typeof tmAutoStart==="undefined"){$(document).ready(function(){htmlCoolText()})}