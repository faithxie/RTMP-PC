/*
* Copyright (c) 2017-2020 Lir Corporation. All rights reserved.
*┌───────────────────────────────────────────┐
*│　        www.doposoft.cn           　│
*│　     版权所有：东博信息科技有限公司     │
*└───────────────────────────────────────────┘
*/
/*
    功能 ：页面基本布局控制代码
	bruce.lee
	2017.12.14
*/

$(function(){
	//mainbox padding left
	var mpaddingleft=200;
	//初始化页面元素
	pageInit();
	function pageInit() {
		//loadheader
		$("#header").load("header.html");
		//loadfooter
		$("#footer").load("footer.html");

		var wHeight = $(window).height();
		var rHeight = $("#right").height();
		var menuHeight =  (rHeight > wHeight) ? rHeight - 70 : wHeight - 110;
		// alert(wHeight + "--" + rHeight);
		 //alert(menuHeight);
		//$("#leftmenu").css({'height':menuHeight});
		//隐藏按钮
		$("#hideit").show();
		//显示按钮
		$("#showit").hide();
		//扩大按钮
		$("#zoombtn").show();
		//缩小按钮
		$("#scbtn").hide();
	}
	//resizefunction
	$(window).resize(function() {pageInit();});

	//菜单代码
	//隐藏操作
	$("#hideit").click(function(){
		//alert(0);
		//var treeboxstate=$("#treein").css("display");
		$("#leftmenu").animate({
			'left':-mpaddingleft
		},200,function () {
			$("#showit").fadeIn();
			$("#hideit").hide();
			$("#leftmenu li").hide();
			$("#mainbox").animate({
				"padding-left":'10'
			},100)
		})
	})
	//显示操作
	$("#showit").click(function(){
		$("#mainbox").animate({
			"padding-left":mpaddingleft
		},100);
		//var treeboxstate=$("#treein").css("display");
		$("#leftmenu").animate({
			'left':'0'
		},300,function () {
			$("#showit").hide();
			$("#hideit").fadeIn();
			$("#leftmenu li").show();

		})
	})

	//zoombtn
	$("#zoombtn").click(function(){
		$("#leftmenu").animate({
			'width':350
		},300,function () {
			$("#zoombtn").hide();
			$("#scbtn").show();
			//mainbox-padding-left
			$("#mainbox").animate({
				"padding-left":350
			},100);
			mpaddingleft=350;
		})
	})
	//scbtn
	$("#scbtn").click(function(){
		$("#leftmenu").animate({
			'width':200
		},300,function () {
			$("#zoombtn").show();
			$("#scbtn").hide();
			//mainbox-padding-left
			$("#mainbox").animate({
				"padding-left":200
			},100);
		});
		mpaddingleft=200;
	})

})
