<?php if (!defined('THINK_PATH')) exit(); header('Content-type:text/html;charset=UTF-8'); ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
<meta name="description" content="">
<meta name="author" content="">

<title>Blog Template for Bootstrap</title>

<!-- Bootstrap core CSS -->
<link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css"
	rel="stylesheet">
<style>
.container { width: 100%; padding: 0 }
.container > .row { width: 100%; margin: 0 }
.row > .col-sm-2, .row > .col-sm-12 { background-color: #6BB66D; padding: 0 }
.breadcrumb { padding-left: 0px; background: transparent; margin-bottom: 0px }
hr { border-color: #6BB66D; margin: 0px }
.hero-unit { background-color: #EEEEEE; margin: 10px 0px; padding: 5px; border-radius: 5px }
.hero-unit > h1 { margin: 5px }
.nav > li > a { color: #FFF }
.nav > li > a:focus, .nav > li > a:hover { background-color: #FFF; color: #6BB66D; border-radius: 0px }
.nav-pills > li.active > a, .nav-pills > li.active > a:focus, .nav-pills > li.active > a:hover { background-color: #FFF; color: #6BB66D; border-radius: 0px }


#main-menu { padding-top: 1em; padding-bottom: 2em }
#main-menu-head { display: block; text-align: center; border-radius: 50% }
#main-menu-head > img { border-radius: 50% }
#main-menu-nickname { text-align: center; color: #FFF; margin-top: 0.5em }
</style>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-sm-2" id="main-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-12">
							<a id="main-menu-head"><img src="http://www.gexing.com.cn/uploadfile/2011/0819/20110819085842173.jpg"></a>
							<p id="main-menu-nickname">连培鑫</p>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12">
							<ul class="nav nav-pills nav-stacked">
								<li class="dropdown active">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown">首页<b class="caret"></b></a>
							    <ul class="dropdown-menu">
							      <li><a href="#home" data-toggle="tab">首页1</a></li>
		                <li><a href="#messages" data-toggle="tab">首页2</a></li>
		                <li><a href="#settings" data-toggle="tab">首页3</a></li>
							    </ul>
							  </li>
								<li><a href="#profile" data-toggle="tab">Profile</a></li>
								<li><a href="#messages" data-toggle="tab">Messages</a></li>
								<li><a href="#settings" data-toggle="tab">Settings</a></li>
								<li><a href="#home" data-toggle="tab">首页</a></li>
								<li><a href="#profile" data-toggle="tab">Profile</a></li>
								<li><a href="#messages" data-toggle="tab">Messages</a></li>
								<li><a href="#settings" data-toggle="tab">Settings</a></li>
								<li><a href="#home" data-toggle="tab">首页</a></li>
								<li><a href="#profile" data-toggle="tab">Profile</a></li>
								<li><a href="#messages" data-toggle="tab">Messages</a></li>
								<li><a href="#settings" data-toggle="tab">Settings</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-10">
				<div class="container">
					<div class="tab-content">
						<div class="tab-pane active" id="home">
					    <ul class="breadcrumb">
					    	<li onclick="$('#register-modal').modal('show')"><a href="javascript:void(0)">注册</a> <span class="divider"></span></li>
					    	<li><a href="#">登录</a> <span class="divider"></span></li>
					    </ul>
					    <hr>
					    <div class="hero-unit">
					    	<h1>标题</h1>
					    	<p>作者</p>
					    	<p>内容</p>
					    	<p>
					        	<a class="btn btn-primary btn-large">
					          	Learn more
					        	</a>
					    	</p>
					    </div>
					    <div class="hero-unit">
					    	<h1>标题</h1>
					    	<p>作者</p>
					    	<p>内容</p>
					    	<p>
					        	<a class="btn btn-primary btn-large">
					          	Learn more
					        	</a>
					      	</p>
					    </div>
					    <div class="hero-unit">
					    	<h1>标题</h1>
					      	<p>作者</p>
					      	<p>内容</p>
					      	<p>
					        	<a class="btn btn-primary btn-large">
					          	Learn more
					        	</a>
					      	</p>
					    </div>
					    <div class="hero-unit">
					      <h1>标题</h1>
					      <p>作者</p>
					      <p>内容</p>
					      <p>
					        <a class="btn btn-primary btn-large">
					          Learn more
					        </a>
					      </p>
					    </div>
						</div>
						<div class="tab-pane" id="profile">profile</div>
						<div class="tab-pane" id="messages">messages</div>
						<div class="tab-pane" id="settings">settings</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- /.container -->
  <!-- modals start -->
  <!-- register modal start -->
	<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">注册</h4>
				</div>
				<div class="modal-body">
					<form role="form">
						<div class="form-group">
							<label>邮箱</label>
							<input type="text" class="form-control" id="" placeholder="请输入邮箱">
						</div>
						<div class="form-group">
							<label>昵称</label>
							<input type="text" class="form-control" id="" placeholder="3～20位昵称">
						</div>
						<div class="form-group">
							<label>密码</label>
							<input type="password" class="form-control" id="" placeholder="6~20位密码">
						</div>
						<div class="form-group">
							<label>确认密码</label>
							<input type="password" class="form-control" id="" placeholder="请再次输入密码">
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">关闭
					</button>
					<button type="button" class="btn btn-success">提交更改</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
	</div>
	<!-- register modal end -->
	<!-- modals end -->

	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
	<script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>