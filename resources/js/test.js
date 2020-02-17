<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>暑期实习管理系统</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" type="text/css" href="css/login.css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	</head>
	
	<body>
	<div class="box">
		<div class="login-box">
			<div class="login-title text-center">
				<h1>
					<small>暑期实习管理系统</small>
				</h1>
			</div>
			<div class="login-content ">
				<div class="form">
					<form id="modifyPassword" class="form-horizontal" action="" method="post">							
						<!-- 用户名输入 -->
						<div class="form-group">
							<div class="col-xs-10 col-xs-offset-1">
								<div class="input-group">
									<span class="input-group-addon"><span
										class="glyphicon glyphicon-user"></span></span> 
								<input type="text" id="username" name="username" class="form-control" placeholder="用户名" value="20180804">
								</div>
							</div>
						</div>
						
						<!-- 密码输入 -->
						<div class="form-group">
							<div class="col-xs-10 col-xs-offset-1">
								<div class="input-group">
									<span class="input-group-addon"><span
										class="glyphicon glyphicon-lock"></span></span> 
										<input type="password" id="password" name="password" class="form-control" placeholder="密码" value="123456">
								</div>
							</div>
						</div>
						
						<!-- 用户类型选择 -->
						<div class="radio-group">
							<input type="radio" name="radioname" id="radioname1" value="学生" checked="checked">学生&nbsp;
							<input type="radio" name="radioname" id="radioname2" value="实习指导老师" >实习指导老师&nbsp;
							<input type="radio" name="radioname" id="radioname3" value="项目负责人">项目负责人
						</div>
								
						<!-- 登录重置按钮 -->
						<div class="form-group form-actions">
							<div class="col-xs-12 text-center">
								<button type="button" id="login" class="btn btn-sm btn-success" >
									<span class="fa fa-check-circle"></span>登录
								</button>
								<button type="button" id="reset" class="btn btn-sm btn-danger">
									<span class="fa fa-close"></span> 重置
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>
	
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/login.js"></script>
</html>