<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<link href="https://www.bootcss.com/p/layoutit/css/bootstrap-combined.min.css" rel="stylesheet">
<script src="js/apexcharts.js"></script>

<?php
$json_string = file_get_contents('wife.json');
$data = json_decode($json_string, JSON_UNESCAPED_SLASHES);
?>

<body style="background-color: #E0E0E0;"> 
<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
		</div>
	</div>
	<div class="row-fluid">
		<div class="span1">
		</div>
		<div class="span10">
			<div class="navbar">
				<div class="navbar-inner">
					<div class="container-fluid">
						 <a data-target=".navbar-responsive-collapse" data-toggle="collapse" class="btn btn-navbar"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></a> <a href="index.php" class="brand">后宫起火(Beta)</a>
						<div class="nav-collapse collapse navbar-responsive-collapse">
							<ul class="nav">
								<li>
									<a href="#">投币排行</a>
								</li>
								<li>
									<a href="#">帮助与玩法</a>
								</li>
								<li>
									<a href="#">运营公告</a>
								</li>
								<li class="dropdown">
									 <a data-toggle="dropdown" class="dropdown-toggle" href="#">用户中心<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">登录</a>
										</li>
										<li>
											<a href="#">注册</a>
										</li>
										<li>
											<a href="#">其他</a>
										</li>
										<li class="divider">
										</li>
										<li class="nav-header">
											标签
										</li>
										<li>
											<a href="#">链接1</a>
										</li>
										<li>
											<a href="#">链接2</a>
										</li>
									</ul>
								</li>
							</ul>
							<ul class="nav pull-right">
								<li>
									<a href="#">返回主站</a>
								</li>
								<li class="divider-vertical">
								</li>
								<li class="dropdown">
									 <a data-toggle="dropdown" class="dropdown-toggle" href="#">我要投稿<strong class="caret"></strong></a>
									<ul class="dropdown-menu">
										<li>
											<a href="#">上传老婆</a>
										</li>
										<li>
											<a href="#">bug反馈</a>
										</li>
										<li>
											<a href="#">其他</a>
										</li>
										<li class="divider">
										</li>
										<li>
											<a href="#">链接3</a>
										</li>
									</ul>
								</li>
							</ul>
						</div>
						
					</div>
				</div>
				
			</div>
		</div>
		<div class="span1">
		</div>
	</div>
	<div class="row-fluid" >
		<div class="span1">
		</div>
		<div class="span10">
			<div class="row-fluid">
				<div class="span9">
					<div style="box-shadow: 0 2px 12px 0 rgba(0,0,0,.1);padding:10px;background-color: #ffffff;">
					<div class="row-fluid">
						<div class="span10">
							<h3>
								<?php echo $_GET['name'] ?>
							</h3>
							<h4>
								热度：<?php echo $_GET['hot'] ?>
							</h4>
						</div>
						<div class="span2">
							 <button class="btn btn-large btn-block" type="button">买入</button>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							<div class="progress">
								<div class="bar" style="width: <?php echo $_GET['hot']/1000 ?>%">
								</div>
							</div>
						</div>
					</div>
					</div>
					<br>
					<div style="box-shadow: 0 2px 12px 0 rgba(0,0,0,.1);padding:10px;background-color: #ffffff;">
					<div class="row-fluid">
						<div class="span12">
							
<div id="wrapper">
  <div id="chart-area">

  </div>
  <div id="chart-bar">

  </div>
</div>

<script>
var data = generateDayWiseTimeSeries(new Date("22 Apr 2017").getTime(), 115, {
  min: 30,
  max: 90
});
var options1 = {
  chart: {
    id: "chart2",
    type: "area",
    height: 230,
    foreColor: "#ccc",
    toolbar: {
      autoSelected: "pan",
      show: false
    }
  },
  colors: ["#00BAEC"],
  stroke: {
    width: 3
  },
  grid: {
    borderColor: "#555",
    yaxis: {
      lines: {
        show: false
      }
    }
  },
  dataLabels: {
    enabled: false
  },
  fill: {
    gradient: {
      enabled: true,
      opacityFrom: 0.55,
      opacityTo: 0
    }
  },
  markers: {
    size: 5,
    colors: ["#000524"],
    strokeColor: "#00BAEC",
    strokeWidth: 3
  },
  series: [
    {
      data: data
    }
  ],
  tooltip: {
    theme: "dark"
  },
  xaxis: {
    type: "datetime"
  },
  yaxis: {
    min: 0,
    tickAmount: 4
  }
};

var chart1 = new ApexCharts(document.querySelector("#chart-area"), options1);

chart1.render();

var options2 = {
  chart: {
    id: "chart1",
    height: 130,
    type: "bar",
    foreColor: "#ccc",
    brush: {
      target: "chart2",
      enabled: true
    },
    selection: {
      fill: {
        color: "#fff",
        opacity: 0.4
      },
      xaxis: {
        min: new Date("27 Jul 2017 10:00:00").getTime(),
        max: new Date("14 Aug 2017 10:00:00").getTime()
      }
    }
  },
  colors: ["#FF0080"],
  series: [
    {
      data: data
    }
  ],
  stroke: {
    width: 2
  },
  grid: {
    borderColor: "#444"
  },
  markers: {
    size: 0
  },
  xaxis: {
    type: "datetime",
    tooltip: {
      enabled: false
    }
  },
  yaxis: {
    tickAmount: 2
  }
};

var chart2 = new ApexCharts(document.querySelector("#chart-bar"), options2);

chart2.render();

function generateDayWiseTimeSeries(baseval, count, yrange) {
  var i = 0;
  var series = [];
  while (i < count) {
    var x = baseval;
    var y =
      Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;

    series.push([x, y]);
    baseval += 86400000;
    i++;
  }
  return series;
}
</script>

<div style="text-align:center;clear:both;">
<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
<script src="/follow.js" type="text/javascript"></script>
</div>

							
						</div>
					</div>
					</div>
					<br>
					<div style="box-shadow: 0 2px 12px 0 rgba(0,0,0,.1);padding:10px;background-color: #ffffff;">
					<div class="row-fluid">
						<div class="span12">
							<table class="table">
								<thead>
									<tr>
										<th>
											编号
										</th>
										<th>
											用户
										</th>
										<th>
											交易时间
										</th>
										<th>
											状态
										</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											1
										</td>
										<td>
											挖掘滨1
										</td>
										<td>
											2019/8/22
										</td>
										<td>
											success
										</td>
									</tr>
									<tr class="success">
										<td>
											1
										</td>
										<td>
											挖掘滨2
										</td>
										<td>
											2019/8/22
										</td>
										<td>
											success
										</td>
									</tr>
									<tr class="error">
										<td>
											2
										</td>
										<td>
											挖掘滨3
										</td>
										<td>
											2019/8/22
										</td>
										<td>
											error
										</td>
									</tr>
									<tr class="warning">
										<td>
											3
										</td>
										<td>
											挖掘滨4
										</td>
										<td>
											2019/8/22
										</td>
										<td>
											success
										</td>
									</tr>
									<tr class="info">
										<td>
											4
										</td>
										<td>
											挖掘滨5
										</td>
										<td>
											2019/8/22
										</td>
										<td>
											success
										</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					</div>
					<br>
					<!-- <div style="box-shadow: 0 2px 12px 0 rgba(0,0,0,.1);padding:10px;background-color: #ffffff;">
					<div class="row-fluid">
						<div class="span12">
							<h5>以68.00成交6021股<span style="float: right">1min前</span></h5>
							<h5>以68.00成交6021股<span style="float: right">2min前</span></h5>
							<h5>以68.00成交6021股<span style="float: right">2min前</span></h5>
							<h5>以68.00成交6021股<span style="float: right">3min前</span></h5>
							<h5>以68.00成交6021股<span style="float: right">3min前</span></h5>
						</div>
					</div>
					</div> -->
				</div>
				<div class="span3">
					<div class="row-fluid">
						<div class="span12" style="box-shadow: 0 2px 12px 0 rgba(0,0,0,.1);padding:15px;background-color: #ffffff;">
								<h4>角色音乐</h4>
								<hr>		

								<?php $music=$_GET['id'];?>
								
							<iframe frameborder="no" border="0" marginwidth="0" marginheight="0" width=230 height=85 src="<?php 
								echo $data[$music]['music'];?>"></iframe>
						</div>
					</div>
					<br>
					<div class="row-fluid-2" style="box-shadow: 0 2px 12px 0 rgba(0,0,0,.1);background-color: #ffffff;">
					<div class="row-fluid">
						<br>
						<div class="span1"></div>
						<div class="span10">
							<h4>标签</h4>
							<hr>
							<style>
								.label{margin-bottom: 5px}
							</style>
							 <span class="label">万年萝莉</span>
							 <span class="label">下双马尾</span>
							 <span class="label">无口</span>
							 <span class="label">腹黑</span>
							 <span class="label">吃货</span>
							 <span class="label">白丝</span>
						</div>
						<div class="span1"></div>
					</div>
					</div>
					<br>
					<div class="row-fluid">
						<div class="span12" style="box-shadow: 0 2px 12px 0 rgba(0,0,0,.1);;padding:15px;background-color: #ffffff;">
							<div class="span1"></div>
						<div class="span10">
							<h4>现任老公</h4>
							<hr>
							 <h5>"挖掘先先"</h5>
							 <h5>持有：4482053股</h5>
						</div>
						<div class="span1"></div>
						</div>
					</div>
					<br>
					<div class="row-fluid">
						<div class="span12" style="box-shadow: 0 2px 12px 0 rgba(0,0,0,.1);;padding:15px;background-color: #ffffff;">
							<div class="span1"></div>
						<div class="span10">
							<h4>后宫起火</h4>
							<hr>
							 <span>挖掘滨1持有：448053股</span><br>
							 <span>挖掘滨2持有：412053股</span><br>
							 <span>挖掘滨3持有：348253股</span><br>
							 <span>挖掘滨4持有：182053股</span><br>
							 <span>挖掘滨5持有：142053股</span><br>
						</div>
						<div class="span1"></div>
						</div>
					</div>
					<div class="row-fluid">
						<div class="span12">
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="span1">
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
		</div>
	</div>
</div>
</body>
</html>
