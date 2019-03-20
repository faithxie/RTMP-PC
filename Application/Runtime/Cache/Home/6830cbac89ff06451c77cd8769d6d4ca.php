<?php if (!defined('THINK_PATH')) exit();?><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh_cn" lang="zh_cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=gb2312"/>
    <title>呼叫</title>
    <script type="text/javascript" src="/git/Public/easyui/js/jquery-1.8.0.min.js"></script>
    <script data-main="/git/Public/shipin/main" src="/git/Public/shipin/require.js"></script>
    <style type="text/css">
    	.buttoncall {
		    background-color: #4CAF50; /* Green */
		    border: none;
		    color: white;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		}
		.buttonstop {
		    background-color: #b2b5b2; 
		    border: none;
		    color: white;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		}

    </style>
</head>
<body style="text-align: center;">

<input id="url" type="text" style="width: 400px;" value="rtmp://store.doposoft.cn:1935/live" title="url" hidden>
<input id="stream-my" type="text" style="width: 150px;" value="<?php echo ($my); ?>" title="stream-my" hidden>
<input id="stream-name" type="text" style="width: 150px;" value="<?php echo ($id); ?>" title="stream-name" hidden>
<div style="display:inline-block;">
	<object>
	    <embed id="rtmp-streamer" src="/git/Public/shipin/RtmpStreamer.swf" bgcolor="#999999" quality="high"
	           width="320" height="240" allowScriptAccess="sameDomain" type="application/x-shockwave-flash"></embed>
	</object>
	<br>
	<button id="publish" hidden> push</button>
	<button id="streamer-disconnect" hidden> disconnect</button>
</div>
<div style="display:inline-block;">
	<object >
	    <embed id="rtmp-player" src="/git/Public/shipin/RtmpStreamer.swf" bgcolor="#999999" quality="high"
	           width="320" height="240" allowScriptAccess="sameDomain" type="application/x-shockwave-flash"></embed>
	</object>
	<br>
	<button id="play" hidden> play</button>
	<button id="player-disconnect" hidden> disconnect</button>

</div>
<div>
	<button class="buttoncall" id="call" onclick = "call()">呼叫</button>
	<button class="buttonstop" id="callstop" onclick = "callstop()">挂断</button>
</div>

</body>

<script lang="javascript">
 function call(){
 	$(".buttonstop").css({'background-color':'red'});
 	$(".buttoncall").css({'background-color':'#b2b5b2'});
 	$.ajax({
            method: 'get',
            data:{myphone:"<?php echo ($my); ?>",callphone:"<?php echo ($id); ?>"},
            url: "<?php echo U('User/publish');?>",
            success: function (OriginalFromActivity) {
                //在这里对获取的数据经常操作
                console.log('222');
 				console.log(OriginalFromActivity);
 
                },
            fail:function(res){
            	console.log('111');
            	console.log(res);
                }
 	})

 }
 function callstop(){
 	$(".buttonstop").css({'background-color':'#b2b5b2'});
 	$(".buttoncall").css({'background-color':'#4CAF50'});
 }
 
</script>

</html>