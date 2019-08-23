<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link href="https://www.bootcss.com/p/layoutit/css/bootstrap-combined.min.css" rel="stylesheet">

<style>
  ul{
    list-style-type:none;
    margin:0;
    padding:0;
    /*overflow:hidden;*/
  }
  


  li a:hover, .dropdown:hover, .dropbtn
  {
    /*background-color:#ffffff;*/
        text-align: center;
  }
  
  .dropdown
  {
    display:inline-block;
  }
  
  .dropdown-content
  {
    display:none;
    position:absolute;
    background-color:#f9f9f9;
    min-width:95px;
    /*margin: 0 auto;*/
    box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2);
  }
  
  .dropdown-content a
  {
    color:black;
    padding:12px 16px;
    text-decoration:none;
    display:block;
  }
  
  .dropdown-content a:hover {background-color: #f1f1f1}
  
  .dropdown:hover .dropdown-content
  {
    display:block;
  }
  
  
  </style>

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
									 <a data-toggle="dropdown" class="dropdown" href="#">用户中心<strong class="caret"></strong></a>
									<ul class="dropdown-content">
										<li>
											<a href="#">登录</a>
										</li>
										<li>
											<a href="#">注册</a>
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
									 <a data-toggle="dropdown" class="dropdown" href="#">我要投稿<strong class="caret"></strong></a>
									<ul class="dropdown-content">
										<li>
											<a href="#">上传老婆</a>
										</li>
										<li>
											<a href="#">bug反馈</a>
										</li>
										<li>
											<a href="#">其他</a>
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
	<div class="row-fluid">
		<div class="span1">
		</div>
		<div class="span10">
			<div class="row-fluid">
				<div class="span5">
					<ul class="breadcrumb">
						<li>
							<a href="#">热门排序</a> <span class="divider">/</span>
						</li>
						<li>
							<a href="#">市值排序</a> <span class="divider">/</span>
						</li>
						<li>
							<a href="#">高价收购</a> <span class="divider">/</span>
						</li>
						<li>
							<a href="#">低价出让</a> <span class="divider">/</span>
						</li>
						<li>
							<a href="#">特别关注</a> <span class="divider">/</span>
						</li>																	
					</ul>
				</div>
				<div class="span4">
				</div>
				<div class="span3">
					<form class="form-search">
						<input class="input-medium search-query" type="text" /> <button type="submit" class="btn">查找</button>
					</form>
				</div>
			</div>
		</div>
		<div class="span1">
		</div>
	</div>

<?php
// 从文件中读取数据到PHP变量
$json_string = file_get_contents('wife.json');
 
// 把JSON字符串转成PHP数组
$data = json_decode($json_string, JSON_UNESCAPED_SLASHES);
//PHP中让json_encode不自动转义斜杠“/”的方法，默认true
 
// 显示出来看看
//var_dump($data);

?>

	<div class="row-fluid">
		<div class="span1">
		</div>
		<div class="span10">
			<div class="row-fluid">
				<div class="span3">
					<div class="img-polaroid"><a href="wife.php?name=<?php echo $data[0]['name']?>&hot=<?php echo $data[0]['hot']; ?>&id=<?php echo $data[0]['id']?>">
						<img alt="140x140" src="https://buzi.online/2/wp-content/uploads/2019/08/c4ca4238a0b923820dcc509a6f75849b.jpg" class="img-rounded" /></a>
						<br>
					<div class="img-polaroid">
						<center>
							<br>
							<span><?php echo $data[0]['name']; ?></span>
							<br><br>
							<div class="progress">
								<div class="bar" style="background:pink;width: <?php echo $data[0]['hot']/100 ?>%"><span><?php echo $data[0]['hot']; ?></span>
								</div>
							</div>
						</center>
					</div>
					</div>
				</div>
				<div class="span3">
					<div class="img-polaroid"><a href="wife.php?name=<?php echo $data[1]['name']?>&hot=<?php echo $data[1]['hot']; ?>&id=<?php echo $data[1]['id']?>">
						<img alt="140x140" src="https://buzi.online/2/wp-content/uploads/2019/08/02c816a395258db90dfb71c3f981566b.jpg" class="img-rounded" /></a>
						<br>
					<div class="img-polaroid">
						<center>
							<br>
							<span><?php echo $data[1]['name']; ?></span>
							<br><br>
							<div class="progress">
								<div class="bar" style="background:pink;width: <?php echo $data[1]['hot']/100 ?>%"><span><?php echo $data[1]['hot']; ?></span>
								</div>
							</div>
						</center>
					</div>
					</div>
				</div>
				<div class="span3">
					<div class="img-polaroid"><a href="wife.php?name=<?php echo $data[2]['name']?>&hot=<?php echo $data[2]['hot']; ?>&id=<?php echo $data[2]['id']?>">
						<img alt="140x140" src="https://buzi.online/2/wp-content/uploads/2019/08/eccbc87e4b5ce2fe28308fd9f2a7baf3.jpg" class="img-rounded" /></a>
						<br>
					<div class="img-polaroid">
						<center>
							<br>
							<span><?php echo $data[2]['name']; ?></span>
							<br><br>
							<div class="progress">
								<div class="bar" style="background:pink;width: <?php echo $data[2]['hot']/100 ?>%"><span><?php echo $data[2]['hot']; ?></span>
								</div>
							</div>
						</center>
					</div>
					</div>
				</div>
				<div class="span3">
					<div class="img-polaroid"><a href="wife.php?name=<?php echo $data[3]['name']?>&hot=<?php echo $data[3]['hot']; ?>&id=<?php echo $data[3]['id']?>">
						<img alt="140x140" src="https://buzi.online/2/wp-content/uploads/2019/08/a87ff679a2f3e71d9181a67b7542122c.jpg" class="img-rounded" /></a>
						<br>
					<div class="img-polaroid">
						<center>
							<br>
							<span><?php echo $data[3]['name']; ?></span>
							<br><br>
							<div class="progress">
								<div class="bar" style="background:pink;width: <?php echo $data[3]['hot']/100 ?>%"><span><?php echo $data[3]['hot']; ?></span>
								</div>
							</div>
						</center>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
		</div>
	</div>
	<div class="row-fluid">
		<div class="span1">
		</div>
		<div class="span10">
			<div class="row-fluid">
				<div class="span3">
					<div class="img-polaroid"><a href="wife.php?name=<?php echo $data[4]['name']?>&hot=<?php echo $data[4]['hot']; ?>&id=<?php echo $data[4]['id']?>">
						<img alt="140x140" src="https://buzi.online/2/wp-content/uploads/2019/08/e4da3b7fbbce2345d7772b0674a318d5.jpg" class="img-rounded" /></a>
						<br>
					<div class="img-polaroid">
						<center>
							<br>
							<span><?php echo $data[4]['name']; ?></span>
							<br><br>
							<div class="progress">
								<div class="bar" style="background:pink;width: <?php echo $data[4]['hot']/100 ?>%"><span><?php echo $data[4]['hot']; ?></span>
								</div>
							</div>
						</center>
					</div>
					</div>
				</div>
				<div class="span3">
					<div class="img-polaroid"><a href="wife.php?name=<?php echo $data[5]['name']?>&hot=<?php echo $data[5]['hot']; ?>&id=<?php echo $data[5]['id']?>">
						<img alt="140x140" src="https://buzi.online/2/wp-content/uploads/2019/08/1679091c5a880faf6fb5e6087eb1b2dc.jpg" class="img-rounded" /></a>
						<br>
					<div class="img-polaroid">
						<center>
							<br>
							<span><?php echo $data[5]['name']; ?></span>
							<br><br>
							<div class="progress">
								<div class="bar" style="background:pink;width: <?php echo $data[5]['hot']/550 ?>%"><span><?php echo $data[5]['hot']; ?></span>
								</div>
							</div>
						</center>
					</div>
					</div>
				</div>
				<div class="span3">
					<div class="img-polaroid"><a href="wife.php?name=<?php echo $data[6]['name']?>&hot=<?php echo $data[6]['hot']; ?>&id=<?php echo $data[6]['id']?>">
						<img alt="140x140" src="https://buzi.online/2/wp-content/uploads/2019/08/8f14e45fceea167a5a36dedd4bea2543.jpg" class="img-rounded" /></a>
						<br>
					<div class="img-polaroid">
						<center>
							<br>
							<span><?php echo $data[6]['name']; ?></span>
							<br><br>
							<div class="progress">
								<div class="bar" style="background:pink;width: <?php echo $data[6]['hot']/100 ?>%"><span><?php echo $data[6]['hot']; ?></span>
								</div>
							</div>
						</center>
					</div>
					</div>
				</div>
				<div class="span3">
					<div class="img-polaroid"><a href="wife.php?name=<?php echo $data[7]['name']?>&hot=<?php echo $data[7]['hot']; ?>&id=<?php echo $data[7]['id']?>">
						<img alt="140x140" src="https://buzi.online/2/wp-content/uploads/2019/08/c9f0f895fb98ab9159f51fd0297e236d.jpg" class="img-rounded" /></a>
						<br>
					<div class="img-polaroid">
						<center>
							<br>
							<span><?php echo $data[7]['name']; ?></span>
							<br><br>
							<div class="progress">
								<div class="bar" style="background:pink;width: <?php echo $data[7]['hot']/100 ?>%"><span><?php echo $data[7]['hot']; ?></span>
								</div>
							</div>
						</center>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
		</div>
	</div>
	<div class="row-fluid">
		<div class="span1">
		</div>
		<div class="span10">
			<div class="row-fluid">
				<div class="span3">
					<div class="img-polaroid">
						<img alt="140x140" src="https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=2120390626,1567972273&fm=26&gp=0.jpg" class="img-rounded" />
						<br>
					<div class="img-polaroid">
						<center>
							<br>
							<span>施工中</span>
							<br>
							<span>...</span>
						</center>
						<br>
					</div>
					</div>
				</div>
				<div class="span3">
					<div class="img-polaroid">
						<img alt="140x140" src="https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=2120390626,1567972273&fm=26&gp=0.jpg" class="img-rounded" />
						<br>
					<div class="img-polaroid">
						<center>
							<br>
							<span>施工中</span>
							<br>
							<span>...</span>
						</center>
						<br>
					</div>
					</div>
				</div>
				<div class="span3">
					<div class="img-polaroid">
						<img alt="140x140" src="https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=2120390626,1567972273&fm=26&gp=0.jpg" class="img-rounded" />
						<br>
					<div class="img-polaroid">
						<center>
							<br>
							<span>施工中</span>
							<br>
							<span>...</span>
						</center>
						<br>
					</div>
					</div>
				</div>
				<div class="span3">
					<div class="img-polaroid">
						<img alt="140x140" src="https://ss1.bdstatic.com/70cFuXSh_Q1YnxGkpoWK1HF6hhy/it/u=2120390626,1567972273&fm=26&gp=0.jpg" class="img-rounded" />
						<br>
					<div class="img-polaroid">
						<center>
							<br>
							<span>施工中</span>
							<br>
							<span>...</span>
						</center>
						<br>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span12">
		</div>
	</div>

</div>
</body>
</html>
