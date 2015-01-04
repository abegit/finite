// JavaScript Document
// var $jqnew = jQuery.noConflict();
// $jqnew(function(e){
//     $jqnew('#startEngin ul').onePageNav({
//         currentClass: 'current',
//         changeHash: false,
//         scrollSpeed: 550,
//         scrollOffset: 80,
//         scrollThreshold: 0.5,
//         filter: '',
//         easing: 'swing',
//         begin: function() {
//             //I get fired when the animation is starting
//         },
//         end: function() {
//             //I get fired when the animation is ending
//         },
//         scrollChange: function($jqnewcurrentListItem) {
//             //I get fired when you enter a section and I pass the list item of the section
//         }
//     });
// ------------ other scrollTo Links
// ---------------------nav sticktop---------------------------
//    var div = $jqnew('#headerscroll'); // the div that is going to be stuck on the top
//    var sticktop = $jqnew('#headerscroll').offset().top; // grab the initial top offset of the navigation
//  var socialtab = $jqnew('#social-tabs');
//  var contacttab = $jqnew('.slide-out-div .handle')
// our function that decides weather the navigation bar should have "fixed" css position or not.
//    var sticknav = function () {
//    var scroll_top = $jqnew(window).scrollTop(); // our current vertical position from the top
// if we've scrolled more than the navigation, change its position to fixed to stick to top,
// otherwise change it back to relative
//        if (scroll_top > sticktop) {
//            $jqnew(div).addClass('sticktop');  
//        } else {
//            $jqnew(div).removeClass('sticktop');
//        }
//      // ---------------------------------this is for after 200 pixels under the nav sticktop
//      if (scroll_top - 200 > sticktop) {
//          $jqnew(socialtab).stop().animate({
//              marginRight: 0,
//            }, 150 );
//          $jqnew(contacttab).stop().animate({
//              left: "-40px",
//            }, 150 );
//       } else {
//          $jqnew(socialtab).stop().animate({
//              marginRight: "34px",
//            }, 150 );
//          $jqnew(contacttab).stop().animate({
//              left: 0,
//            }, 150 );
//       }
//      
//      
//   };
// run our function on load
//  sticknav();
//
//  and run it again every time you scroll
//  
// });
/*!
 * jQuery Cycle Lite Plugin
 * http://malsup.com/jquery/cycle/lite/
 * Copyright (c) 2008-2012 M. Alsup
 * Version: 1.7 (20-FEB-2013)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 * Requires: jQuery v1.3.2 or later
 */function createDropDown(){$dd("select").each(function(){var e=$dd(this),t=e.find("option[selected]"),n=$dd("option",e),r=$dd(this).attr("id");$dd(this).wrap('<div class="selectwrap '+r+'"></div>');$dd(this).after('<dl class="dropdown '+r+'"></dl>');$dd(".dropdown."+r).append('<dt><a href="#">'+t.text()+'<i class="icon-chevron-down right"></i><span class="value">'+t.val()+"</span></a></dt>");$dd(".dropdown."+r).append("<dd><ul></ul></dd>");n.each(function(){$dd(".dropdown."+r+" dd ul").append('<li><a href="#">'+$dd(this).text()+'<span class="value">'+$dd(this).val()+"</span></a></li>")})})}(function(e){"use strict";function r(t,i,s,o){function h(e){e.timeout&&(u.cycleTimeout=setTimeout(function(){r(t,e,0,!e.rev)},e.timeout))}if(i.busy)return;var u=t[0].parentNode,a=t[i.currSlide],f=t[i.nextSlide];if(u.cycleTimeout===0&&!s)return;if(s||!u.cyclePause){i.before.length&&e.each(i.before,function(e,t){t.apply(f,[a,f,i,o])});var l=function(){n&&this.style.removeAttribute("filter");e.each(i.after,function(e,t){t.apply(f,[a,f,i,o])});h(i)};if(i.nextSlide!=i.currSlide){i.busy=1;e.fn.cycle.custom(a,f,i,l)}var c=i.nextSlide+1==t.length;i.nextSlide=c?0:i.nextSlide+1;i.currSlide=c?t.length-1:i.nextSlide-1}else h(i)}function i(e,t,n){var i=e[0].parentNode,s=i.cycleTimeout;if(s){clearTimeout(s);i.cycleTimeout=0}t.nextSlide=t.currSlide+n;t.nextSlide<0?t.nextSlide=e.length-1:t.nextSlide>=e.length&&(t.nextSlide=0);r(e,t,1,n>=0);return!1}var t="Lite-1.7",n=/MSIE/.test(navigator.userAgent);e.fn.cycle=function(t){return this.each(function(){t=t||{};this.cycleTimeout&&clearTimeout(this.cycleTimeout);this.cycleTimeout=0;this.cyclePause=0;var s=e(this),o=t.slideExpr?e(t.slideExpr,this):s.children(),u=o.get();if(u.length<2){window.console&&console.log("terminating; too few slides: "+u.length);return}var a=e.extend({},e.fn.cycle.defaults,t||{},e.metadata?s.metadata():e.meta?s.data():{}),f=e.isFunction(s.data)?s.data(a.metaAttr):null;f&&(a=e.extend(a,f));a.before=a.before?[a.before]:[];a.after=a.after?[a.after]:[];a.after.unshift(function(){a.busy=0});var l=this.className;a.width=parseInt((l.match(/w:(\d+)/)||[])[1],10)||a.width;a.height=parseInt((l.match(/h:(\d+)/)||[])[1],10)||a.height;a.timeout=parseInt((l.match(/t:(\d+)/)||[])[1],10)||a.timeout;s.css("position")=="static"&&s.css("position","relative");a.width&&s.width(a.width);a.height&&a.height!="auto"&&s.height(a.height);var c=0;o.css({position:"absolute",top:0}).each(function(t){e(this).css("z-index",u.length-t)});e(u[c]).css("opacity",1).show();n&&u[c].style.removeAttribute("filter");a.fit&&a.width&&o.width(a.width);a.fit&&a.height&&a.height!="auto"&&o.height(a.height);a.pause&&s.hover(function(){this.cyclePause=1},function(){this.cyclePause=0});var h=e.fn.cycle.transitions[a.fx];h&&h(s,o,a);o.each(function(){var t=e(this);this.cycleH=a.fit&&a.height?a.height:t.height();this.cycleW=a.fit&&a.width?a.width:t.width()});a.cssFirst&&e(o[c]).css(a.cssFirst);if(a.timeout){a.speed.constructor==String&&(a.speed={slow:600,fast:200}[a.speed]||400);a.sync||(a.speed=a.speed/2);while(a.timeout-a.speed<250)a.timeout+=a.speed}a.speedIn=a.speed;a.speedOut=a.speed;a.slideCount=u.length;a.currSlide=c;a.nextSlide=1;var p=o[c];a.before.length&&a.before[0].apply(p,[p,p,a,!0]);a.after.length>1&&a.after[1].apply(p,[p,p,a,!0]);a.click&&!a.next&&(a.next=a.click);a.next&&e(a.next).unbind("click.cycle").bind("click.cycle",function(){return i(u,a,a.rev?-1:1)});a.prev&&e(a.prev).unbind("click.cycle").bind("click.cycle",function(){return i(u,a,a.rev?1:-1)});a.timeout&&(this.cycleTimeout=setTimeout(function(){r(u,a,0,!a.rev)},a.timeout+(a.delay||0)))})};e.fn.cycle.custom=function(t,n,r,i){var s=e(t),o=e(n);o.css(r.cssBefore);var u=function(){o.animate(r.animIn,r.speedIn,r.easeIn,i)};s.animate(r.animOut,r.speedOut,r.easeOut,function(){s.css(r.cssAfter);r.sync||u()});r.sync&&u()};e.fn.cycle.transitions={fade:function(e,t,n){t.not(":eq(0)").hide();n.cssBefore={opacity:0,display:"block"};n.cssAfter={display:"none"};n.animOut={opacity:0};n.animIn={opacity:1}},fadeout:function(t,n,r){r.before.push(function(t,n,r,i){e(t).css("zIndex",r.slideCount+(i===!0?1:0));e(n).css("zIndex",r.slideCount+(i===!0?0:1))});n.not(":eq(0)").hide();r.cssBefore={opacity:1,display:"block",zIndex:1};r.cssAfter={display:"none",zIndex:0};r.animOut={opacity:0};r.animIn={opacity:1}}};e.fn.cycle.ver=function(){return t};e.fn.cycle.defaults={animIn:{},animOut:{},fx:"fade",after:null,before:null,cssBefore:{},cssAfter:{},delay:0,fit:0,height:"auto",metaAttr:"cycle",next:null,pause:!1,prev:null,speed:1e3,slideExpr:null,sync:!0,timeout:4e3}})(jQuery);var $dd=jQuery.noConflict();$dd(document).ready(function(){createDropDown();$dd(".selectwrap .dropdown dt a").click(function(){$dd(this).closest(".selectwrap").find("dd ul").toggle()});$dd(document).bind("click",function(e){var t=$dd(e.target);t.parents().hasClass("dropdown")||$dd(".dropdown dd ul").hide()});$dd(".dropdown dd ul li a").click(function(){var e=$dd(this).html(),t=$dd(this).closest(".dropdown").attr("class").split(" ")[1];$dd(".dropdown."+t+" dt a").html(e);$dd(".dropdown."+t+" dd ul").hide();var n=$dd("select#"+t);n.val($dd(this).find("span.value").html())})});