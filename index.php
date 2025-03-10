<?php include 'admin/api/data.php' ; ?>
<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<?php echo '<title>'."$web_title".'</title>'; ?>
		<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="KEYWords" contect="宇柒云阁团队,个人主页,个人引导页">
		<meta name="DEscription" contect="宇柒云阁的个人引导页">
		<meta name="Author" contect="宇柒云阁团队">
		<meta name="Robots" contect= "all">
		<link rel="stylesheet"  href="style.css">
	</head>
	<body>
		<div class="container"><!-- 主体开始 -->
			<div class="hander"><!-- 导航开始 -->
				<nav id="nav-menu">
					<a href="#" data-rel="home-me-section" class="active">首页</a>
					<a href="#" data-rel="about-exp-section">联系</a>
					<a href="#" data-rel="course-exp-section">历程</a>
					<a href="#" data-rel="website-exp-section">站点</a>
                    <a href="#" data-rel="website-exp-FriendshipChain">友链</a>
                    <a href="#" data-rel="website-exp-leaveAMessage">留言</a>
					</nav>
				</div><!-- 导航结束 -->
			<div class="content"><!-- 内容开始 -->
				<section class="home-me-section active-section"><!-- 首页开始 -->
					<div class="main"><!-- 首页内容 -->
                        <?php echo '<img src="' . $web_bg . '" class="bgo" />'; ?>
                        <?php echo '<img src="'. $user_head . '" class="ato" onclick="alert('."$user_head_txt".')" />' ;?>
						<div class="name" ><?php echo "$user_name"; ?></div>
						<div class="motto" ><?php echo "$user_sign"; ?>
                        <?php echo "$web_index_url"; ?></div>
					
					</div><!-- 首页内容结束 -->
					</section><!-- 首页结束 -->
				<section class="about-exp-section"><!-- 关于开始 -->
					<div class="main"><!-- 关于内容 -->
						<img src="img/bgt.jpg" class="bgt" />
						<img src="https://q1.qlogo.cn/g?b=qq&nk=2958613932&s=640" class="ats" />
						<img src="https://q1.qlogo.cn/g?b=qq&nk=2958613932&s=640" class="ats" />
						<a href="https://www.yuqiee.com" target="_blank"><div class="web">宇柒云阁</div></a><!-- 站点一 -->
						<a href="https://pay.yuqiee.com" target="_blank"><div class="web">聚合易支付</div></a><!-- 站点二 -->
						<a href="https://u.yuqios.com" target="_blank"><div class="web">聚合登录</div></a><!-- 站点三 -->
					
					</div><!-- 关于内容结束 -->
					</section><!-- 关于结束 -->
				<section class="course-exp-section"><!-- 历程开始 -->
					<div class="main"><!-- 历程内容 -->
						<img src="img/bgt.jpg" class="bgt" />
						<img src="https://q1.qlogo.cn/g?b=qq&nk=2958613932&s=640" class="ats" />
						<div class="box">
							<div id="boxs">
								<div class="track-list"><!-- 时间轴开始 -->
								<ul>
									<li>
										<i class="node-icon"><img src="img/tbl.svg"></i>
										<span class="time" style="color:#2ECC71">2021-9-4</span>
										<span class="txt" style="color:#2ECC71">摸鱼</span>
									</li>
									<li>
										<i class="node-icon"><img src="img/tb.svg"></i>
										<span class="time">2021-9-6</span>
										<span class="txt">摸鱼</span>
									</li>
								</ul>
							</div><!-- 时间轴结束 -->
						</div>
					</div>
						<div style="color:#aaa;text-align:center;font-size:12px">
								注: 上下滑动查看历史进程
							</div>
						</div><!-- 历程内容结束 -->
					</section><!-- 历程结束 -->
				<section class="website-exp-section"><!-- 站点开始 -->
					<div class="main"><!-- 站点内容开始 -->
						<img src="img/bgt.jpg" class="bgt" />
						<img src="https://q1.qlogo.cn/g?b=qq&nk=2958613932&s=640" class="ats" />
						<a href="https://www.yuqiee.com" target="_blank"><div class="web">宇柒云阁</div></a><!-- 站点一 -->
						<a href="https://pay.yuqiee.com" target="_blank"><div class="web">聚合易支付</div></a><!-- 站点二 -->
						<a href="https://u.yuqios.com" target="_blank"><div class="web">聚合登录</div></a><!-- 站点三 -->
						<div class="tips">所有站点均正常运行</div>
                  <div style="color:#aaa;text-align:center;font-size:12px">
								注: 上下滑动查看站点
							</div>
						</div><!-- 站点内容结束 -->
                  
					</section><!-- 站点结束 -->
               	<section class="website-exp-FriendshipChain"><!-- 友链开始 -->
					<div class="main"><!-- 友链开始 -->
						<img src="img/bgt.jpg" class="bgt" />
						<img src="https://q1.qlogo.cn/g?b=qq&nk=2958613932&s=640" class="ats" />
                  <div class="tips">戳我申请友链</div>
						<a href="https://www.yuqiee.com" target="_blank"><div class="web">宇柒云阁</div></a><!-- 站点一 -->
						<a href="https://pay.yuqiee.com" target="_blank"><div class="web">聚合易支付</div></a><!-- 站点二 -->
						<a href="https://u.yuqios.com" target="_blank"><div class="web">聚合登录</div></a><!-- 站点三 -->
                  <div style="color:#aaa;text-align:center;font-size:12px">
								注: 上下滑动查看更多友链
							</div>
						</div><!-- 友链结束 -->
                  
					</section><!-- 友链结束 -->
                  	<section class="website-exp-leaveAMessage"><!-- 友链开始 -->
					<div class="main"><!-- 留言开始 -->
						<img src="img/bgt.jpg" class="bgt" />
						<img src="https://q1.qlogo.cn/g?b=qq&nk=2958613932&s=640" class="ats" />
                 
						<a href="https://www.yuqiee.com" target="_blank"><div class="web">宇柒云阁</div></a><!-- 站点一 -->
						<a href="https://pay.yuqiee.com" target="_blank"><div class="web">聚合易支付</div></a><!-- 站点二 -->
						<a href="https://u.yuqios.com" target="_blank"><div class="web">聚合登录</div></a><!-- 站点三 -->
              
							
						</div><!-- 留言结束 -->
                  
					</section><!-- 留言结束 -->
				</div><!-- 内容结束 -->
			</div><!-- 主体结束 -->
			<img src="img/China.svg" style="width:60px;right:0px;position:fixed;bottom:0px;" /><!-- 右下角国旗 -->
		<div class="footer"><!-- 底部版权 -->
				<span id="sitetime"></span><!-- 运行时间 -->
				<br>宇柒云阁官方站点
			</div><!-- 版权结束 -->
		<div id="tp-weather-widget"></div><!-- 天气插件 -->
		
		

		
		<script>
			(function(a,h,g,f,e,d,c,b){b=function(){d=h.createElement(g);c=h.getElementsByTagName(g)[0];d.src=e;d.charset="utf-8";d.async=1;c.parentNode.insertBefore(d,c)};a["SeniverseWeatherWidgetObject"]=f;a[f]||(a[f]=function(){(a[f].q=a[f].q||[]).push(arguments)});a[f].l=+new Date();if(a.attachEvent){a.attachEvent("onload",b)}else{a.addEventListener("load",b,false)}}(window,document,"script","SeniverseWeatherWidget","//cdn.sencdn.com/widget2/static/js/bundle.js?t="+parseInt((new Date().getTime() / 100000000).toString(),10)));
			window.SeniverseWeatherWidget('show', {
			flavor: "bubble",
			location: "WX4FBXXFKE4F",
			geolocation: true,
			language: "zh-Hans",
			unit: "c",
			theme: "auto",
			token: "ac1d036a-99f3-4f88-ae98-f795bb93a9f0",
			hover: "disabled",
			container: "tp-weather-widget"
			})
		</script><!-- 天气插件结束 -->
		<script src="js/index.js"></script><!-- 核心插件 -->
		<script src="js/all.js"></script><!-- 图标库 -->
		<!--<script src="js/Sitetime.js"></script> 运行时间 -->
		<script src="js/Mouse.js"></script><!-- 点击烟花特效 -->
	</body>
</html>