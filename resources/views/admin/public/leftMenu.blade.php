<!-- 侧边导航栏 -->
<div class="left-sidebar">
	<!-- 用户信息 -->
	<div class="tpl-sidebar-user-panel">
		<div class="tpl-user-panel-slide-toggleable">
			<div class="tpl-user-panel-profile-picture">
				<img src="/assets/img/user04.png" alt="">
			</div>
			<span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              禁言小张
          </span>
			<a href="javascript:;" class="tpl-user-panel-action-link"> <span class="am-icon-pencil"></span> 账号设置</a>
		</div>
	</div>

	<!-- 菜单 -->
	<ul class="sidebar-nav">
		<!-- <li class="sidebar-nav-heading">Components <span class="sidebar-nav-heading-info"> 附加组件</span></li>-->
		<li class="sidebar-nav-link">
			<a href="/admin/" class="@if($controller == 'index') active @endif">
				<i class="am-icon-dashboard sidebar-nav-link-logo"></i> 首页
			</a>
		</li>
		<!--
		<li class="sidebar-nav-link">
			<a href="tables.html">
				<i class="am-icon-table sidebar-nav-link-logo"></i> 表格
			</a>
		</li>
		<li class="sidebar-nav-link">
			<a href="calendar.html">
				<i class="am-icon-calendar sidebar-nav-link-logo"></i> 日历
			</a>
		</li>
		<li class="sidebar-nav-link">
			<a href="form.html">
				<i class="am-icon-wpforms sidebar-nav-link-logo"></i> 表单

			</a>
		</li>
		<li class="sidebar-nav-link">
			<a href="chart.html">
				<i class="am-icon-bar-chart sidebar-nav-link-logo"></i> 图表

			</a>
		</li>

-->
		<!-- <li class="sidebar-nav-heading">Page<span class="sidebar-nav-heading-info"> 常用页面</span></li> -->
		@foreach($menuData as $menu)
			<li class="sidebar-nav-link">
				<a href="javascript:;" class="sidebar-nav-sub-title @if($menu->isActive) active @endif">
					<i class="{{$menu->icon}} sidebar-nav-link-logo"></i> {{$menu->name}}
					@if(!empty($menu->subMenu))
						<span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico @if($menu->isActive) sidebar-nav-sub-ico-rotate @endif"></span>
				</a>
				<ul class="sidebar-nav sidebar-nav-sub" @if($menu->isActive) style="display: block;" @endif>
					@foreach($menu->subMenu as $subMenu)
						<li class="sidebar-nav-link">
							<a href="/admin/{{$subMenu->controller}}/{{$subMenu->action}}"
							   class="@if($subMenu->isActive) sub-active @endif">
								<span class="am-icon-angle-right sidebar-nav-link-logo"></span> {{$subMenu->name}}
							</a>
						</li>
					@endforeach
				</ul>
				@else
				</a>
				@endif
			</li>
	@endforeach
	<!--
		<li class="sidebar-nav-link">
			<a href="sign-up.html">
				<i class="am-icon-clone sidebar-nav-link-logo"></i> 注册
				<span class="am-badge am-badge-secondary sidebar-nav-link-logo-ico am-round am-fr am-margin-right-sm">6</span>
			</a>
		</li>
		<li class="sidebar-nav-link">
			<a href="login.html">
				<i class="am-icon-key sidebar-nav-link-logo"></i> 登录
			</a>
		</li>
		<li class="sidebar-nav-link">
			<a href="404.html">
				<i class="am-icon-tv sidebar-nav-link-logo"></i> 404错误
			</a>
		</li>
		-->
	</ul>
</div>
