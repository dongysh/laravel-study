<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type">
	<meta content="text/html; charset=utf-8">
	<meta charset="utf-8">
	<title>百信广场.领寓</title>		
	<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="format-detection" content="telephone=no">
	<meta name="format-detection" content="email=no">
	<link rel="stylesheet" type="text/css" href="/css/reset.css">
	<link rel="stylesheet" type="text/css" href="/css/simon.css">
	<link rel="stylesheet" href="/css/mobiscroll.custom-2.5.0.min.css" />
<script type="text/javascript" src="/js/jquery-1.10.1.min.js"></script>
<script src="/js/jquery.mobile-1.4.2.min.js" type="text/javascript"></script>
<script src="/js/mobiscroll.custom-2.5.0.min.js" type="text/javascript"></script>
		<link href="/css/datetimepicker.css" rel="stylesheet" type="text/css">
  <script type="text/javascript" src="/js/bootstrap-datetimepicker.min.js"></script>
  <script type="text/javascript" src="/js/bootstrap-datetimepicker.zh-CN.js" charset="UTF-8"></script>
</head>
<body>
	<div class="WillCont">
		<form action="" >
			<div class="continput"><span>标题：</span><input type="text" value = "" /></div>
			<div class="continput"><span>内容：</span> <textarea class = "contIptSw" rows="3" cols="20" style = "height：120px"></textarea></div>
			<div class="continput"><span>设置时间：</span><input class = "timeSelect" type="text" data-role="datebox" value = "" placeholder="请选择时间" /></div>	
			<div class="ruzhu"><input type="submite" value = "" /></div>
		</form>
	</div>
</body>
<script type="text/javascript">
	$(function(){
	   var opt = {
	             preset: 'datetime', //日期
	             theme: 'Android ICS Light', //皮肤样式
	             display: 'bottom', //显示方式
	             mode: 'scroller', //日期选择模式
	             dateFormat: 'yy-mm-dd', // 日期格式
	             setText: '确定', //确认按钮名称
	             cancelText: '取消', //取消按钮名籍我
	             dateOrder: 'yymmdd', //面板中日期排列格式
	             hourText:'时',minuteText:'分',dayText: '日', monthText: '月', yearText: '年', //面板中年月日文字
	             
	             endYear: 2020 //结束年份
	         };
	         $('input:jqmData(role="datebox")').mobiscroll(opt).datetime(opt);

});
</script>
</html>