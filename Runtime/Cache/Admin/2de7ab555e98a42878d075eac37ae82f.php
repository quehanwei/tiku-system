<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
	<head>
		<meta charset="utf-8" />
        
  <title>知识分类</title>
  <meta name="keywords" content="" />
  <meta name="description" content=""/>

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- basic styles -->
		<link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/Public/bootstrap/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="/Public/bootstrap/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->
		<!--link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" /-->

		<!-- ace styles -->
		<link rel="stylesheet" href="/Public/bootstrap/css/ace.min.css" />
		<link rel="stylesheet" href="/Public/bootstrap/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/Public/bootstrap/css/ace-skins.min.css" />
        
        <link rel="stylesheet" href="/Public/artDialog6/css/ui-dialog.css">

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/Public/bootstrap/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- ace settings handler -->
		<script src="/Public/bootstrap/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/Public/bootstrap/js/html5shiv.js"></script>
		<script src="/Public/bootstrap/js/respond.min.js"></script>
		<![endif]-->
        
        
	</head>

	<body class="navbar-fixed breadcrumbs-fixed">
		<div class="navbar navbar-default navbar-fixed-top" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							<?php echo (C("system-title")); ?>
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->
				
                				
                
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

								
                <div class="sidebar sidebar-fixed" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success" onclick="location.href='/index.php/Admin/Index/action1';">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info" onclick="location.href='/index.php/Admin/Index/action2';">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning" onclick="location.href='/index.php/Admin/Index/action3';">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger" onclick="location.href='/index.php/Admin/Index/action4';">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li class="active">
							<a href="/index.php/Admin/Index">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 控制台 </span>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-text-width"></i>
								<span class="menu-text"> 教学内容 </span>
                                
                                <b class="arrow icon-angle-down"></b>
							</a>
                            
                            <ul class="submenu">
								<li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>
										管理知识点
                                        <b class="arrow icon-angle-down"></b>
									</a>
                                    
                                    <ul class="submenu">
										<li>
											<a href="/index.php/Admin/Edu">
												<i class="icon-leaf"></i>
												教学专区
											</a>
										</li>

										<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												内容维护
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">

												<li>
													<a href="/index.php/Admin/Question">
														<i class="icon-eye-open"></i>
														管理知识点
													</a>
												</li>
												<li>
													<a href="/index.php/Admin/Question/form">
														<i class="icon-plus"></i>
														添加知识点
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>

								<li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>
										管理试题
                                        <b class="arrow icon-angle-down"></b>
									</a>
                                    
                                    <ul class="submenu">
										<li>
											<a href="/index.php/Admin/Question">
												<i class="icon-cog"></i>
												教学配置
											</a>
										</li>
										<li>
											<a href="/index.php/Admin/Question/chart">
												<i class="icon-bar-chart"></i>
												统计报表
											</a>
										</li>

										<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-asterisk"></i>

												客观题
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">

												<li>
													<a href="/index.php/Admin/Question/objective">
														<i class="icon-folder-close-alt"></i>
														管理/查询
													</a>
												</li>
												<li>
													<a href="/index.php/Admin/Question/objective_form">
														<i class="icon-plus"></i>
														添加/试题
													</a>
												</li>
											</ul>
										</li>
                                        
                                        <li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-book"></i>

												资料题
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">

												<li>
													<a href="/index.php/Admin/Question/material">
														<i class="icon-folder-close-alt"></i>
														管理/材料
													</a>
												</li>
                                                <li>
													<a href="/index.php/Admin/Question/objective/serach/1/class/1000">
														<i class="icon-check"></i>
														资料/子题
													</a>
												</li>
												<li>
													<a href="/index.php/Admin/Question/material_form">
														<i class="icon-plus"></i>
														添加/试题
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>

								<li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>
										管理试卷
                                        <b class="arrow icon-angle-down"></b>
									</a>
                                    
                                    <ul class="submenu">
										<li>
											<a href="/index.php/Admin/Edu">
												<i class="icon-leaf"></i>
												教学专区
											</a>
										</li>

										<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												内容维护
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">

												<li>
													<a href="#">
														<i class="icon-eye-open"></i>
														管理知识点
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon-plus"></i>
														添加知识点
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
                             </ul>    
						</li>

						<!--li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> 内容采集 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/index.php/Admin/GrabCls">
										<i class="icon-double-angle-right"></i>
										知识分类
									</a>
								</li>

								<li>
									<a href="buttons.html">
										<i class="icon-double-angle-right"></i>
										试卷列表
									</a>
								</li>

								<li>
									<a href="treeview.html">
										<i class="icon-double-angle-right"></i>
										树菜单
									</a>
								</li>

								<li>
									<a href="jquery-ui.html">
										<i class="icon-double-angle-right"></i>
										jQuery UI
									</a>
								</li>

								<li>
									<a href="nestable-list.html">
										<i class="icon-double-angle-right"></i>
										可拖拽列表
									</a>
								</li>

								<li>
									<a href="#" class="dropdown-toggle">
										<i class="icon-double-angle-right"></i>

										三级菜单
										<b class="arrow icon-angle-down"></b>
									</a>

									<ul class="submenu">
										<li>
											<a href="#">
												<i class="icon-leaf"></i>
												第一级
											</a>
										</li>

										<li>
											<a href="#" class="dropdown-toggle">
												<i class="icon-pencil"></i>

												第四级
												<b class="arrow icon-angle-down"></b>
											</a>

											<ul class="submenu">
												<li>
													<a href="#">
														<i class="icon-plus"></i>
														添加产品
													</a>
												</li>

												<li>
													<a href="#">
														<i class="icon-eye-open"></i>
														查看商品
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 表格 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="tables.html">
										<i class="icon-double-angle-right"></i>
										简单 &amp; 动态
									</a>
								</li>

								<li>
									<a href="jqgrid.html">
										<i class="icon-double-angle-right"></i>
										jqGrid plugin
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 表单 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="form-elements.html">
										<i class="icon-double-angle-right"></i>
										表单组件
									</a>
								</li>

								<li>
									<a href="form-wizard.html">
										<i class="icon-double-angle-right"></i>
										向导提示 &amp; 验证
									</a>
								</li>

								<li>
									<a href="wysiwyg.html">
										<i class="icon-double-angle-right"></i>
										编辑器
									</a>
								</li>

								<li>
									<a href="dropzone.html">
										<i class="icon-double-angle-right"></i>
										文件上传
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a href="widgets.html">
								<i class="icon-list-alt"></i>
								<span class="menu-text"> 插件 </span>
							</a>
						</li>

						<li>
							<a href="calendar.html">
								<i class="icon-calendar"></i>

								<span class="menu-text">
									日历
									<span class="badge badge-transparent tooltip-error" title="2&nbsp;Important&nbsp;Events">
										<i class="icon-warning-sign red bigger-130"></i>
									</span>
								</span>
							</a>
						</li>

						<li>
							<a href="gallery.html">
								<i class="icon-picture"></i>
								<span class="menu-text"> 相册 </span>
							</a>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-tag"></i>
								<span class="menu-text"> 更多页面 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="profile.html">
										<i class="icon-double-angle-right"></i>
										用户信息
									</a>
								</li>

								<li>
									<a href="inbox.html">
										<i class="icon-double-angle-right"></i>
										收件箱
									</a>
								</li>

								<li>
									<a href="pricing.html">
										<i class="icon-double-angle-right"></i>
										售价单
									</a>
								</li>

								<li>
									<a href="invoice.html">
										<i class="icon-double-angle-right"></i>
										购物车
									</a>
								</li>

								<li>
									<a href="timeline.html">
										<i class="icon-double-angle-right"></i>
										时间轴
									</a>
								</li>

								<li>
									<a href="login.html">
										<i class="icon-double-angle-right"></i>
										登录 &amp; 注册
									</a>
								</li>
							</ul>
						</li>

						<li class="active open">
							<a href="#" class="dropdown-toggle">
								<i class="icon-file-alt"></i>

								<span class="menu-text">
									其他页面
									<span class="badge badge-primary ">5</span>
								</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="faq.html">
										<i class="icon-double-angle-right"></i>
										帮助
									</a>
								</li>

								<li>
									<a href="error-404.html">
										<i class="icon-double-angle-right"></i>
										404错误页面
									</a>
								</li>

								<li>
									<a href="error-500.html">
										<i class="icon-double-angle-right"></i>
										500错误页面
									</a>
								</li>

								<li>
									<a href="grid.html">
										<i class="icon-double-angle-right"></i>
										网格
									</a>
								</li>

								<li class="active">
									<a href="blank.html">
										<i class="icon-double-angle-right"></i>
										空白页面
									</a>
								</li>
							</ul>
						</li-->
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>
                

				<div class="main-content">
					<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
						<script type="text/javascript">
							try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
						</script>

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="javascript:void(0);">控制台</a>
							</li>
                            
							

<li>知识分类</li>
<li class="active">采集入库</li>

						</ul><!-- .breadcrumb -->

												
					</div>

					<div class="page-content">
                    	
  <div class="row">
    <div class="col-xs-12">
      <div class="tabbable">
        <ul class="nav nav-tabs" id="myTab">
          <li class="active"> <a data-toggle="tab" href="#fenbi"> <i class="green icon-home bigger-110"></i> FenBi </a> </li>
          <li> <a data-toggle="tab" href="#zhuantiku"> ZhuanTiKu </a> </li>
        </ul>
        <div class="tab-content">
          <div id="fenbi" class="tab-pane in active">
            <div class="box-bd clearfix">
              <h3 class="text-label text-label-green"><span class="text-label-inner bold">
                <button class="btn btn-lg btn-success js-submit-fenbi"><i class="icon-ok"></i> 采集入库(fenbi)</button>
                </span></h3>
              <div class="user-csk-table-wrap csk-table-wrap">
                <table class="csk-table table">
                  <thead>
                    <tr class="even">
                      <th class="name-col">考点</th>
                      <th class="count-col">答题量</th>
                      <th class="rate-col">正确率</th>
                      <th class="capacity-col last">能力评估</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="keypoint keypoint-level-0" data-id="13825">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>言语理解与表达</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.54%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">24道 / 4443道</span></td>
                      <td class="ratio-col">12.5%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="此考点的考试能力弱爆了，要加油哦"><span class="sprite sprite-level-1"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1 even" data-parent-id="13825" data-id="13841" style="">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>阅读理解</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.78%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">21道 / 2705道</span></td>
                      <td class="ratio-col">14.3%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="此考点的考试能力弱爆了，要加油哦"><span class="sprite sprite-level-1"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13841" data-id="14147">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>表面主旨题</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 1.30%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">14道 / 1076道</span></td>
                      <td class="ratio-col">7.1%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="此考点的考试能力弱爆了，要加油哦"><span class="sprite sprite-level-1"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13841" data-id="14149">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>隐含主旨题</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.37%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">2道 / 545道</span></td>
                      <td class="ratio-col">0.0%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13841" data-id="14151">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>细节判断题</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.14%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">1道 / 694道</span></td>
                      <td class="ratio-col">100.0%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13841" data-id="14153">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>词句理解题</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 1.51%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">3道 / 199道</span></td>
                      <td class="ratio-col">33.3%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="此考点的考试能力亟需提高啊"><span class="sprite sprite-level-1"></span><span class="sprite sprite-level-1"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13841" data-id="14157">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>标题选择题</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 1.92%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">1道 / 52道</span></td>
                      <td class="ratio-col">0.0%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13841" data-id="14159">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>接语选择题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 47道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13841" data-id="14161">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>态度理解题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 87道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13841" data-id="14163">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>其他</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 4道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1" data-parent-id="13825" data-id="13842" style="">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>逻辑填空</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.13%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">2道 / 1520道</span></td>
                      <td class="ratio-col">0.0%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13842" data-id="14165">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>实词填空</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 890道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13842" data-id="14167">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>虚词填空</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 66道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13842" data-id="14169">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>成语填空</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.70%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">2道 / 286道</span></td>
                      <td class="ratio-col">0.0%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13842" data-id="14171">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>混搭填空</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 276道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1 even" data-parent-id="13825" data-id="67491" style="">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>语句表达</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.47%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">1道 / 215道</span></td>
                      <td class="ratio-col">0.0%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="67491" data-id="67493">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>语句排序</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 107道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="67491" data-id="67495">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>语句填空</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.94%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">1道 / 106道</span></td>
                      <td class="ratio-col">0.0%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-0" data-id="13826">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>数量关系</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.12%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">3道 / 2439道</span></td>
                      <td class="ratio-col">66.7%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1" data-parent-id="13826" data-id="13845">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>数学运算</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.12%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">3道 / 2439道</span></td>
                      <td class="ratio-col">66.7%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13845" data-id="13903">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>计算问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 244道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13845" data-id="13905">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>多位数问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 82道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13845" data-id="13907">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>平均数问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 54道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13845" data-id="13909">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>工程问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 125道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13845" data-id="13911">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>浓度问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 64道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13845" data-id="13913">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>抽屉原理问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 39道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13845" data-id="13915">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>计数模型问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 79道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13845" data-id="13917">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>年龄问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 41道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13845" data-id="13919">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>牛吃草问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 22道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13845" data-id="13921">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>盈亏问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 39道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13845" data-id="13923">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>鸡兔同笼问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 40道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13845" data-id="13925">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>周期问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 29道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13845" data-id="13927">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>倍数约数问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 44道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13845" data-id="13929">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>分段计算问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 23道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13845" data-id="13931">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>和差倍比问题</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.88%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">3道 / 340道</span></td>
                      <td class="ratio-col">66.7%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="此考点的考试能力不错呦"><span class="sprite sprite-level-1"></span><span class="sprite sprite-level-1"></span><span class="sprite sprite-level-1"></span><span class="sprite sprite-level-1"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13845" data-id="13933">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>数列问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 62道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13845" data-id="13935">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>行程问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 213道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13845" data-id="13937">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>几何问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 218道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13845" data-id="13939">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>容斥原理问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 86道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13845" data-id="13941">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>排列组合问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 103道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13845" data-id="13943">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>概率问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 59道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13845" data-id="13945">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>经济利润问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 128道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13845" data-id="13947">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>函数最值问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 22道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13845" data-id="13949">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>不定方程问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 40道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13845" data-id="13951">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>不等式分析问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 25道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13845" data-id="13953">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>余数与同余问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 32道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13845" data-id="13955">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>星期日期问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 24道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13845" data-id="13957">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>钟表问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 27道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13845" data-id="13959">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>统筹规划问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 63道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13845" data-id="13961">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>趣味数学问题</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 42道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13845" data-id="14089">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>其他</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 25道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-0 even" data-id="13827">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>判断推理</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.09%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">6道 / 6888道</span></td>
                      <td class="ratio-col">50.0%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1" data-parent-id="13827" data-id="13846">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>图形推理</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 1776道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13846" data-id="14095">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>平面-元素</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 415道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13846" data-id="14097">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>平面-属性</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 127道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13846" data-id="14099">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>平面-数数</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 458道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13846" data-id="14101">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>平面-位置</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 335道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13846" data-id="14103">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>平面-特殊考点</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 138道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13846" data-id="14105">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>平面-拼图</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 76道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13846" data-id="14107">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>空间-折纸盒</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 160道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13846" data-id="14109">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>空间-立体图形与其三视图</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 35道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13846" data-id="14145">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>其他</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 31道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1 even" data-parent-id="13827" data-id="13847">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>定义判断</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 1584道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13847" data-id="14125">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>单定义判断</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 1520道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13847" data-id="14127">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>多定义判断</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 64道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1" data-parent-id="13827" data-id="13848">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>逻辑判断</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.14%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">3道 / 2188道</span></td>
                      <td class="ratio-col">33.3%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13848" data-id="14111">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>关联词推导</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 491道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13848" data-id="14113">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>真假破案</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 135道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13848" data-id="14115">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>排列组合</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 197道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13848" data-id="14117">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>加强题型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 425道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13848" data-id="14119">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>削弱题型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 337道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13848" data-id="14121">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>日常结论</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.56%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">3道 / 534道</span></td>
                      <td class="ratio-col">33.3%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="此考点的考试能力弱爆了，要加油哦"><span class="sprite sprite-level-1"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13848" data-id="14123">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>其他</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 68道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1 even" data-parent-id="13827" data-id="13849">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>类比推理</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.22%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">3道 / 1341道</span></td>
                      <td class="ratio-col">66.7%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13849" data-id="14129">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>全同关系</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 135道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13849" data-id="14131">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>并列关系</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 116道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13849" data-id="14133">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>包容关系</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 1.73%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">3道 / 173道</span></td>
                      <td class="ratio-col">66.7%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="此考点的考试能力还凑合"><span class="sprite sprite-level-1"></span><span class="sprite sprite-level-1"></span><span class="sprite sprite-level-1"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13849" data-id="14135">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>交叉关系</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 14道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13849" data-id="14137">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>属性关系</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 51道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13849" data-id="14139">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>因果关系</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 62道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13849" data-id="14141">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>对应关系</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 621道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13849" data-id="14143">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>双重逻辑</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 103道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13849" data-id="14185">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>其他</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 65道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-0" data-id="13828">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>资料分析</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.13%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">5道 / 3731道</span></td>
                      <td class="ratio-col">20.0%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1" data-parent-id="13828" data-id="13850">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>文字资料</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.47%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">5道 / 1061道</span></td>
                      <td class="ratio-col">20.0%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="此考点的考试能力弱爆了，要加油哦"><span class="sprite sprite-level-1"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13850" data-id="13963">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>直接查找型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 125道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13850" data-id="13965">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>数值计算型</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.64%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">4道 / 626道</span></td>
                      <td class="ratio-col">25.0%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="此考点的考试能力弱爆了，要加油哦"><span class="sprite sprite-level-1"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13850" data-id="13967">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>比较大小型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 91道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13850" data-id="13969">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>趋势判断型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 17道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13850" data-id="13971">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>综合推断型</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.52%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">1道 / 193道</span></td>
                      <td class="ratio-col">0.0%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13850" data-id="13973">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>化数为图型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 5道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1 even" data-parent-id="13828" data-id="13851">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>统计表</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 1158道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13851" data-id="13975">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>直接查找型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 196道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13851" data-id="13977">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>数值计算型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 506道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13851" data-id="13979">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>比较大小型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 190道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13851" data-id="13981">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>趋势判断型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 27道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13851" data-id="13983">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>综合推断型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 231道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13851" data-id="13985">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>化数为图型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 5道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1" data-parent-id="13828" data-id="13852">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>统计图</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 784道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13852" data-id="13987">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>直接查找型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 158道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13852" data-id="13989">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>数值计算型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 337道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13852" data-id="13991">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>比较大小型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 113道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13852" data-id="13993">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>趋势判断型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 31道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13852" data-id="13995">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>综合推断型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 139道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13852" data-id="13997">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>化数为图型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 3道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1 even" data-parent-id="13828" data-id="13853">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>综合资料</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 728道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13853" data-id="13999">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>直接查找型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 80道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13853" data-id="14001">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>数值计算型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 362道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13853" data-id="14003">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>比较大小型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 88道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13853" data-id="14005">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>趋势判断型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 15道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13853" data-id="14007">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>综合推断型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 174道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13853" data-id="14009">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>化数为图型</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 5道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-0 even" data-id="13829">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>常识判断</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.06%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">2道 / 3184道</span></td>
                      <td class="ratio-col">0.0%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1" data-parent-id="13829" data-id="13854">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>政治常识</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 372道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13854" data-id="14013">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>马克思主义</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 173道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13854" data-id="14015">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>毛泽东思想</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 18道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13854" data-id="14017">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>邓小平理论</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 33道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13854" data-id="14019">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>“三个代表”思想</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 18道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13854" data-id="14021">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>科学发展观</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 62道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1 even" data-parent-id="13829" data-id="13855">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>经济常识</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 240道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13855" data-id="14023">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>市场</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 74道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13855" data-id="14025">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>宏观经济与调控政策</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 106道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13855" data-id="14027">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>国际经济及组织</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 37道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1" data-parent-id="13829" data-id="13857">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>科技常识</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 617道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13857" data-id="14051">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>信息科学技术</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 38道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13857" data-id="14053">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>能源与材料科技</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 57道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13857" data-id="14055">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>医学与生命科学技术</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 112道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13857" data-id="14057">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>空间与海洋技术</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 34道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13857" data-id="14059">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>生活常识</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 330道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1 even" data-parent-id="13829" data-id="13858">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>人文常识</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.14%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">1道 / 698道</span></td>
                      <td class="ratio-col">0.0%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13858" data-id="14061">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>中国历史</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 176道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13858" data-id="14063">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>世界历史</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 70道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13858" data-id="14065">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>文学常识</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 175道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13858" data-id="14067">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>文化常识</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.38%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">1道 / 260道</span></td>
                      <td class="ratio-col">0.0%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1" data-parent-id="13829" data-id="13859">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>地理国情</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.26%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">1道 / 382道</span></td>
                      <td class="ratio-col">0.0%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13859" data-id="14069">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>自然常识</span></td>
                      <td class="count-col"><span class="keypoint-progress-wrap"><span class="keypoint-progress-bg slide slide-progress-left"><span class="slide slide-progress-right"></span></span><span class="keypoint-progress-fill slide slide-progress-fill-left" style="width: 0.70%"><span class="slide slide-progress-fill-right"></span></span></span><span class="keypoint-number">1道 / 143道</span></td>
                      <td class="ratio-col">0.0%</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="13859" data-id="14071">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>环境常识</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 73道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="13859" data-id="14085">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>国情社情</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 159道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-1 even" data-parent-id="13829" data-id="81961">
                      <td class="name-col"><span class="text toggle-expand"><span class="sprite sprite-expand i-20"></span>法律常识</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 876道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="81961" data-id="81963">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>法理学</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 34道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="81961" data-id="81971">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>宪法</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 131道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="81961" data-id="81973">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>行政法</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 181道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="81961" data-id="81975">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>民法</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 159道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="81961" data-id="81977">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>刑法</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 114道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="81961" data-id="81979">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>刑事诉讼法</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 14道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="81961" data-id="81981">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>公务员法</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 67道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="81961" data-id="81983">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>劳动法</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 13道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="81961" data-id="81985">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>政府信息公开条例</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 4道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="81961" data-id="81987">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>其他法律法规</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 53道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2" data-parent-id="81961" data-id="81989">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>民事诉讼法</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 27道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                    <tr class="keypoint keypoint-level-2 even" data-parent-id="81961" data-id="81991">
                      <td class="name-col"><span class="text"><span class="expand-holder">－</span>经济法</span></td>
                      <td class="count-col"><span class="keypoint-number">0道 / 62道</span></td>
                      <td class="ratio-col">-</td>
                      <td class="capacity-col last"><span class="capacity-wrap" title="考点还未进行能力评估"><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span><span class="sprite sprite-level-0"></span></span></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div id="zhuantiku" class="tab-pane">
          
          <button class="btn btn-lg btn-success js-submit-zhuantiku"><i class="icon-ok"></i> 采集入库(zhuantiku)</button><br>

            <div class="TableLsitDiv TableLsiexm">
              <div class="TableTitleTop">
                <ul>
                  <li class="t1">考点</li>
                  <li class="t2">答题对数</li>
                  <li class="t3">题目总数</li>
                  <li class="t4">正确率</li>
                  <li class="t5">练习时长</li>
                  <li class="t6">掌握情况</li>
                  <li class="t7">&nbsp;</li>
                </ul>
                <div class="clear"></div>
              </div>
              <div class="TableList">
                <ul>
                  <li>
                    <div style="background: none repeat scroll 0% 0% transparent;">
                      <div class="t1 cut">常识判断</div>
                      <div class="t2">0</div>
                      <div class="t3">0</div>
                      <div class="t4">0%</div>
                      <div class="t5">0秒</div>
                      <div class="t6"><img src="/public/static/images/t-0.png"></div>
                      <div class="t7"><a href="javascript:xc.module.special_exercise.begin(392);" style="display: none;">强化训练</a></div>
                      <div class="clear"></div>
                    </div>
                    <ul style="display: block;" bclk="false">
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">政治</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(393);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul style="display: block;" bclk="false">
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">时政</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(394);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">马克思主义哲学</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(395);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">中共党史</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(396);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">中国特色社会主义理论体系</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(397);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">经济</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(398);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">马克思主义政治经济学</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(399);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">社会主义市场经济</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(400);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">微观经济</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(401);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">宏观经济</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(402);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">热点经济词汇</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(403);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">法律</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(404);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div>
                              <div class="t1 add">宪法</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(405);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">行政法</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(406);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">民法</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(407);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">刑法</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(408);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">法理学</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(409);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">诉讼法</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(410);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">经济法</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(411);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">历史</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(412);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">中国古代史</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(413);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">中国近现代史</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(414);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">世界史</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(415);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">人文</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(416);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">文学</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(417);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">艺术</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(418);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">宗教思想</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(419);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">语言文字</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(420);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">中国传统文化</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(421);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">建筑</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(422);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">人文其它</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(423);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">科技</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(424);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div>
                              <div class="t1 add">近现代重大科技成就</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(425);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">计算机网络</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(426);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">物理</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(427);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">化学</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(428);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">生物医学</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(429);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">地理国情</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(430);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">生活常识</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(431);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">管理公文</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(432);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div>
                              <div class="t1 add">管理</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(433);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">公文</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(434);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <div style="background: none repeat scroll 0% 0% transparent;">
                      <div class="t1 cut">言语理解与表达</div>
                      <div class="t2">0</div>
                      <div class="t3">0</div>
                      <div class="t4">0%</div>
                      <div class="t5">0秒</div>
                      <div class="t6"><img src="/public/static/images/t-0.png"></div>
                      <div class="t7"><a href="javascript:xc.module.special_exercise.begin(435);" style="display: none;">强化训练</a></div>
                      <div class="clear"></div>
                    </div>
                    <ul bclk="false" style="display: block;">
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">片段阅读</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(436);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div>
                              <div class="t1 add">主旨概括</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(437);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">标题选择</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(438);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">意图判断</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(439);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">态度理解</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(440);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">细节理解</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(441);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">细节查找</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(442);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">词语理解</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(443);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">语句理解</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(444);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">代词指代</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(445);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">逻辑填空</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(446);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div>
                              <div class="t1 add">实词辨析</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(447);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">虚词辨析</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(448);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">成语辨析</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(449);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">实词与虚词综合考查</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(450);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">实词与成语综合考查</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(451);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">虚词与成语综合考查</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(452);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">语句表达</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(453);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">语句填空</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(454);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">下文推断</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(455);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">语句排序</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(456);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">病句辨析</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(457);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">歧义句辨析</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(458);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">基础知识</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(459);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <div style="background: none repeat scroll 0% 0% transparent;">
                      <div class="t1 cut">数量关系</div>
                      <div class="t2">0</div>
                      <div class="t3">0</div>
                      <div class="t4">0%</div>
                      <div class="t5">0秒</div>
                      <div class="t6"><img src="/public/static/images/t-0.png"></div>
                      <div class="t7"><a href="javascript:xc.module.special_exercise.begin(482);" style="display: none;">强化训练</a></div>
                      <div class="clear"></div>
                    </div>
                    <ul bclk="false" style="display: block;">
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">数字推理</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(483);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">基本数列</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(484);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">差级数列</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(489);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">幂次数列</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(495);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">组合拆分数列</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(499);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">递推数列</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(504);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">非整数数列</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(511);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">数图推理</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(515);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">特殊数列</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(520);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">数学运算</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(524);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">基础计算模块</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(525);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">初等数学模块</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(536);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">方程与不等式模块</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(555);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">比例问题模块</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(567);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">几何问题模块</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(583);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">计数问题模块</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(598);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">最值问题模块</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(612);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">趣味杂题模块</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(617);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">其他模块</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(625);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">费用问题模块</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(630);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">行程问题模块</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(636);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <div style="background: none repeat scroll 0% 0% transparent;">
                      <div class="t1 cut">判断推理</div>
                      <div class="t2">0</div>
                      <div class="t3">0</div>
                      <div class="t4">0%</div>
                      <div class="t5">0秒</div>
                      <div class="t6"><img src="/public/static/images/t-0.png"></div>
                      <div class="t7"><a href="javascript:xc.module.special_exercise.begin(642);" style="display: none;">强化训练</a></div>
                      <div class="clear"></div>
                    </div>
                    <ul bclk="false" style="display: block;">
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">图形推理</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(643);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div>
                              <div class="t1 add">数量类</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(644);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">位置类</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(661);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">样式类</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(667);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">其他规律</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(674);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">功能信息</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(675);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">实体信息</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(680);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">空间重构</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(681);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">平面重构</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(685);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">平面拼合</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(686);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">线条拼合</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(687);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">类比推理</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(688);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">语法关系</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(689);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">集合关系</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(693);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">逻辑关系</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(698);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">语义关系</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(702);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">其他类比</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(706);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">定义判断</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(707);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">法律法规类</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(708);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">社会学类</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(709);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">心理学类</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(710);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">管理学类</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(711);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">经济学类</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(712);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">生物学类</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(713);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">其他定义</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(714);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">逻辑判断</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(715);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div>
                              <div class="t1 add">翻译推理</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(716);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">真假推理</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(722);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">分析推理</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(727);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">结论类</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(731);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">解释类</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(735);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">评价类</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(738);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">形式论证</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(741);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">日常论证</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(744);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">机械推理</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(748);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">其他逻辑</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(749);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">事件排序</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(750);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div>
                              <div class="t1 add">首尾顺序</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(751);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">逻辑顺序</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(752);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">时间顺序</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(753);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <div style="background: none repeat scroll 0% 0% transparent;">
                      <div class="t1 cut">资料分析</div>
                      <div class="t2">0</div>
                      <div class="t3">0</div>
                      <div class="t4">0%</div>
                      <div class="t5">0秒</div>
                      <div class="t6"><img src="/public/static/images/t-0.png"></div>
                      <div class="t7"><a href="javascript:xc.module.special_exercise.begin(754);" style="display: none;">强化训练</a></div>
                      <div class="clear"></div>
                    </div>
                    <ul bclk="true" style="display: block;">
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">直接读数类</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(755);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div>
                              <div class="t1 add">直接读数</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(756);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">简单计算</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(757);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">读数比较</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(758);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">读数排序</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(759);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">读数比较（排序）</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(760);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">计算类</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(761);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">基期量计算</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(762);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">末期量计算</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(763);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">增长率计算</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(764);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">间隔增长率计算</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(765);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">平均增长率计算</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(766);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">（间隔、平均）增长率计算</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(767);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">增长量计算</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(768);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">比重计算</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(769);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">平均数计算</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(770);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">指数计算</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(771);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">倍数计算</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(772);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">其他计算</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(773);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">大小比较类</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(774);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="false" style="display: block;">
                          <li>
                            <div>
                              <div class="t1 add">增长率大小比较</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(775);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">增长量大小比较</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(776);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">基期量大小比较</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(777);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">比重大小比较</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(778);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div>
                              <div class="t1 add">平均数大小比较</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(779);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">其他类型比较</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(780);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                      <li>
                        <div style="background: none repeat scroll 0% 0% transparent;">
                          <div class="t1 cut">综合分析类</div>
                          <div class="t2">0</div>
                          <div class="t3">0</div>
                          <div class="t4">0%</div>
                          <div class="t5">0秒</div>
                          <div class="t6"><img src="/public/static/images/t-0.png"></div>
                          <div class="t7"><a href="javascript:xc.module.special_exercise.begin(781);" style="display: none;">强化训练</a></div>
                          <div class="clear"></div>
                        </div>
                        <ul bclk="true" style="display: block;">
                          <li>
                            <div style="background: none repeat scroll 0% 0% transparent;">
                              <div class="t1 add">综合分析</div>
                              <div class="t2">0</div>
                              <div class="t3">0</div>
                              <div class="t4">0%</div>
                              <div class="t5">0秒</div>
                              <div class="t6"><img src="/public/static/images/t-0.png"></div>
                              <div class="t7"><a href="javascript:xc.module.special_exercise.begin(782);" style="display: none;">强化训练</a></div>
                              <div class="clear"></div>
                            </div>
                          </li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                </ul>
                <div class="clear"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.col --> 
  </div>
  <!-- /.row --> 

					</div><!-- /.page-content -->
				</div><!-- /.main-content -->

								
                
			</div><!-- /.main-container-inner -->

			<a href="javascript:void(0);" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<!--script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script-->
		<!-- <![endif]-->

		<!--[if IE]>
        <!--script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script-->
        <![endif]-->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='/Public/bootstrap/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>
		<!-- <![endif]-->

		<!--[if IE]>
        <script type="text/javascript">
         window.jQuery || document.write("<script src='/Public/bootstrap/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
        </script>
        <![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/Public/bootstrap/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/Public/bootstrap/js/bootstrap.min.js"></script>
		<script src="/Public/bootstrap/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->
		<script src="/Public/artDialog6/dist/dialog-min.js"></script>

		<!-- ace scripts -->
		<script src="/Public/bootstrap/js/ace-elements.min.js"></script>
		<script src="/Public/bootstrap/js/ace.min.js"></script>
        
        <!-- common functions -->
        <script src="/Public/js/common.js"></script>
        
        <script language="javascript">
        
/**
 * 全局公用 请求函数
 *
 * @param  string    action    请求地址
 * @param  string    data      发送的数据
 * @param  function  success   成功,回调函数
 * @param  function  success   失败,回调函数
 * @param  json      params    更多配置参数 
 */
function ajaxSend(action, data, success, error, params){
	
	var config = {url: action, dataType:'json',type: "POST",data:data,success:success,error:error,cache:false};
	for(var x in params){config[x] = param[x];}
	$.ajax(config);
}
        
        </script>
         
  <script language="javascript">

$(function(){
	
	$('.js-submit-fenbi').click(fenbi_class);
	$('.js-submit-zhuantiku').click(zhuantiku_class);
	
});



function fenbi_class(){
	
	var ytk_class	= $('.csk-table');
	var list		= ytk_class.find('tbody tr');
	
	list.each(function(index, element) {
        
		var t0	= $(this);
		var txt0= encodeURIComponent(t0.find('.name-col').text().replace('－', ''));
		var soid= t0.attr('data-id');
		var tpid= t0.attr('data-parent-id');
		
		var row	= [];
			row.push('title=' + txt0);
			row.push('sourceid='  + soid);
			row.push('topid='+ tpid);
			row.push('supplierid=1');
			row.push('rank=' + index);
		ajaxSend('/index.php/Admin/GrabCls/insert', row.join('&'), function(json){
			
			var txt0 = t0.find('.name-col').text();
			if(json.status == 1){
				t0.find('.name-col').html(txt0 + '(ok)');
			}
			
			if(json.status == 2){
				t0.find('.name-col').html(txt0 + '(ok1)');
			}
			
			
			if(json.status == 0){
				t0.find('.name-col').html(txt0 + '(err)');
			}
				
		}, function(){
			
			
			
		});
    });	
	
}


function zhuantiku_class(){
	
	var box		= $('#zhuantiku .TableList');
	var root 	= box.children('ul');
	
	//一级分类
	var list	= root.children('li');
	zhuantiku_cls_loop(list, 0);
}


function zhuantiku_cls_loop(list, topid){
	
	list.each(function(index, element) {
        
		var box		= $(this);
		var title 	= box.children('div').find('.t1').text();
		var sotxt 	= box.children('div').find('.t7 a').attr('href');
		var soid 	= sotxt.match(/\(.*\)/).toString().replace('(','').replace(')',''); 
		
		var row	= [];
			row.push('title=' + title);
			row.push('sourceid='  + soid);
			row.push('topid='+ topid);
			row.push('supplierid=2');
			row.push('rank=' + index);
		ajaxSend('/index.php/Admin/GrabCls/insert', row.join('&'), function(json){
			
			if(json.status == 1){
				box.children('div').find('.t1').text(title + '(ok)');	
			}else if(json.status == 2){
				box.children('div').find('.t1').text(title + '(ok1)');	
				
			}else{
				
				box.children('div').find('.t1').text(title + '(err)');	
			}
		});
		
		var slist 	= box.children('ul').children('li');
		if(slist.size() > 0){
		
		slist.each(function(index, element) {
			
			var box		= $(this);
			var title 	= box.children('div').find('.t1').text();
			var sotxt 	= box.children('div').find('.t7 a').attr('href');
			var soid1 	= sotxt.match(/\(.*\)/).toString().replace('(','').replace(')',''); 
			
			var row	= [];
				row.push('title=' + title);
				row.push('sourceid='  + soid1);
				row.push('topid='+ soid);
				row.push('supplierid=2');
				row.push('rank=' + index);
			ajaxSend('/index.php/Admin/GrabCls/insert', row.join('&'), function(json){
				if(json.status == 1){
					box.children('div').find('.t1').text(title + '(ok)');	
				}else if(json.status == 2){
					box.children('div').find('.t1').text(title + '(ok1)');	
					
				}else{
					
					box.children('div').find('.t1').text(title + '(err)');	
				}
			});
			
			var slist 	= box.children('ul').children('li');
			if(slist.size() > 0){
				
				
				zhuantiku_cls_loop(slist, soid1);
				
			}
			
		});
		
		}
    });	
}

</script> 

</body>
</html>