<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="copyright" content="All Rights Reserved, Copyright (C) 2013, Wuyeguo, Ltd." />
<title>汇式云视频</title>
<link rel="stylesheet" type="text/css" href="/git/Public/easyui/easyui/1.3.4/themes/metro/easyui.css" />
<link rel="stylesheet" type="text/css" href="/git/Public/easyui/css/wu.css" />
<link rel="stylesheet" type="text/css" href="/git/Public/easyui/css/icon.css" />
<link href="/git/Public/easyui/icons/icon-all.css" rel="stylesheet" type="text/css" />

 <script type="text/javascript" src="/git/Public/easyui/js/jquery-1.8.0.min.js"></script>

<script type="text/javascript" src="/git/Public/easyui/easyui/1.3.4/jquery.easyui.min.js"></script>
<script type="text/javascript" src="/git/Public/easyui/easyui/1.3.4/locale/easyui-lang-zh_CN.js"></script>

<!-- <script type="text/javascript" src="/git/Public/release/jeasyui.extensions.all.min.js"></script> -->
<link rel="stylesheet" type="text/css" href="/git/Public/release/jeasyui.extensions.min.css" />
    <link rel="stylesheet" type="text/css" href="/git/Public/static/css/index.css">、


    <style>
    .clearfix {*zoom:1}
    .clearfix:before, .clearfix:after { display: table; content: ""; line-height: 0 }
    .clearfix:after { clear: both }
    .gnav{float:right;height:50px;line-height: 50px;margin-right:250px;}
    .gnav ul{margin:0 0}
    .gnav ul li{display:block;border-right:0 solid #114f86;height:50px;line-height: 50px;float:left;padding:0 13px;}
    .gnav ul li a{color:#fff;font-size: 14px;}
    .gnav ul li.last{border-right:none;}
    .gnav ul li.current{background:url(/git/Public/static/images/nb.png) repeat-x;}
    .gnav ul li:hover{background:url(/git/Public/static/images/nb.png) repeat-x;}
    .gnav ul li:hover a{color:#30409f;}
    .gnav ul li.current a{color:#30409f;}
    /*样式重写*/
    .wu-header-right{top:8px;}
</style>
<script>
    $(document).ready(function(){
        $(".gnav li").click(function(){
            $(this).addClass("current").siblings('li').removeClass("current");
        })
    })
</script>



</head>
<body class="easyui-layout">
    <!-- begin of header -->
    <div class="wu-header" data-options="region:'north',border:false,split:true">
        <div class="wu-header-left">
            <h1>汇氏云视频远程控制台</h1>
        </div>
         <div class="gnav">
            <ul class="clearfix">
              <!--  <li ><a href="<?php echo U('Index/index');?>">首页</a></li>
                <li class="current"><a href="#">人员管理</a></li>
                <li ><a href="<?php echo U('Date/index');?>">数据展示</a></li>
                <li ><a href="<?php echo U('Search/index');?>">查询分析</a></li>
                <li ><a href="<?php echo U('Org/index');?>">机构管理</a></li>
                <li class="last"><a href="#">系统管理</a></li> -->
            </ul>
        </div>
        <div class="wu-header-right">
            <p><strong class="easyui-tooltip" title=""><?php echo ($name); ?>-<?php echo ($my); ?></strong>，欢迎您！ |<a href="<?php echo U('Login/logout');?>">安全退出</a></p>
        </div>
    </div>

    <!-- end of header -->
    <!-- begin of sidebar -->
    <!-- <div class="wu-sidebar" data-options="region:'west',split:true,border:true,title:'人员管理'"> 
        <div class="easyui-accordion" data-options="border:false,fit:true"> 
           <ul id="wu-category-tree" class="easyui-tree"></ul>
        </div> 

    </div> -->
     <div data-options="region: 'west', title: '菜单', iconCls: 'icon-standard-map', split: true, minWidth: 250, maxWidth: 500" style="width: 250px; padding: 1px;">

            <div id="navTabs_tools" class="tabs-tool">
                <table>
                    <tr>
                        <td><a id="navMenu_refresh" class="easyui-linkbutton easyui-tooltip" title="刷新该选项卡及其导航菜单" data-options="plain: true, iconCls: 'icon-hamburg-refresh'"></a></td>
                    </tr>
                </table>
            </div>

            <div id="navTabs" class="easyui-tabs" data-options="fit: true, border: true, tools: '#navTabs_tools'">
                <div data-options="title: '人员列表', iconCls: 'icon-standard-application-view-tile', refreshable: false, selected: true">
                    <div id="westLayout" class="easyui-layout" data-options="fit: true">
                        <div data-options="region: 'center', border: false" style="border-bottom-width: 1px;">
                            <div id="westCenterLayout" class="easyui-layout" data-options="fit: true">
                            
                                <div data-options="region: 'center', border: false">
                                    <!-- <ul id="wu-category-tree" class="easyui-tree"></ul> -->

                                    <ul id="tt" class="easyui-tree">   
                                      
                                    </ul>  


                                </div>
                            </div>
                        </div>
                       <!--  <div id="westSouthPanel" data-options="region: 'south', border: false, split: true, minHeight: 32, maxHeight: 275" style="height: 275px; border-top-width: 1px;">
                            <ul id="navMenu_list"></ul>
                        </div> -->
                    </div>
                </div>

                
            

            </div>

        </div>

    <!-- end of sidebar -->    
    <!-- begin of main -->
    <div class="wu-main" data-options="region:'center'">
        <div id="wu-tabs" class="easyui-tabs" data-options="border:false,fit:true">  
            <div title="首页" data-options="href:'<?php echo U('d');?>',closable:false,iconCls:'icon-tip',cls:'pd3'"></div>
        </div>
    </div>
    <!-- end of main --> 
    <!-- begin of footer -->
    <div class="wu-footer" data-options="region:'south',border:true,split:true">
        &copy; 山东东博软件
    </div>
    <!-- end of footer -->  
   <script type="text/javascript">
     // $.util.namespace("$.easyui");
       /**
    * Name 载入菜单树
    */
    $('#tt').tree({
        url:'<?php echo U("Index/tree");?>',
        onClick:function(node){
            console.log(node)
            var url = node.id;
                if(url==null || url == ""){
                    return false;
                }
                else{
                    // addTab(node.text, url, '', node.attributes['iframe']);
                   menuClick(node.text,url);
                }
        }
    });

     $('#tt').tree({
       
        onClick:function(node){
            console.log(node)
            var url = node.id;
            // alert(node)
                if(url==null || url == ""){
                    return false;
                }
                else{
                   menuClick(node.text,url);
                }
        }
    });
    function menuClick(title,id) {
        // body...
          urls = '<?php echo U("User/index");?>' + "/id/" + id+"/my/"+<?php echo ($my); ?>;

         console.log( urls);
        addTab(title, urls, '', true);
    }

    /**
        * Name 选项卡初始化
        */
        $('#wu-tabs').tabs({
            tools:[{
                iconCls:'icon-reload',
                border:false,
                handler:function(){
                    $('#wu-datagrid').datagrid('reload');
                }
            }]
        });
            
        /**
        * Name 添加菜单选项
        * Param title 名称
        * Param href 链接
        * Param iconCls 图标样式
        * Param iframe 链接跳转方式（true为iframe，false为href）
        */  
        function addTab(title, href, iconCls, iframe){
            var tabPanel = $('#wu-tabs');
            if(!tabPanel.tabs('exists',title)){
                var content = '<iframe scrolling="auto" frameborder="0"  src="'+ href +'" style="width:100%;height:100%;"></iframe>';
                if(iframe){
                    tabPanel.tabs('add',{
                        title:title,
                        content:content,
                        iconCls:iconCls,
                        fit:true,
                        cls:'pd3',
                        closable:true
                    });
                }
                else{
                    tabPanel.tabs('add',{
                        title:title,
                        href:href,
                        iconCls:iconCls,
                        fit:true,
                        cls:'pd3',
                        closable:true
                    });
                }
            }
            else
            {
                tabPanel.tabs('select',title);
            }
        }
        /**
        * Name 移除菜单选项
        */
        function removeTab(){
            var tabPanel = $('#wu-tabs');
            var tab = tabPanel.tabs('getSelected');
            if (tab){
                var index = tabPanel.tabs('getTabIndex', tab);
                tabPanel.tabs('close', index);
            }
        }

        function check(){
            // body...
              
            persontype = $("#persontype").val();
            localStorage.setItem("persontype",persontype); 
             persontype =  localStorage.getItem("persontype")
            $.messager.alert('信息提示','切换成功！','info');
        }

        $('#navMenu_refresh').click(function(){
            // body...
            window.location.reload()
        });

   </script>
</body>
</html>