<section>
	<!-- Left Sidebar -->
	<aside id="leftsidebar" class="sidebar">
		<!-- User Info -->
		<div class="user-info">
			<div class="image">
				<img src=" {{ asset('images/vendor/adminbsb-materialdesign/user-img-background.jpg') }} " width="48" height="48" alt="User" />
			</div>
			<div class="info-container">
				<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()['name'] }}</div>
				<div class="email"> {{ Auth::user()['email'] }}  </div>
				<div class="btn-group user-helper-dropdown">
					<i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
					<ul class="dropdown-menu pull-right">
						<li><a href="javascript:void(0);"><i class="material-icons">person</i>{{trans('front.left_bar.profile')}}</a></li>
						<li role="seperator" class="divider"></li>
						<li><a href="javascript:void(0);"><i class="material-icons">group</i>{{trans('front.left_bar.followers')}}</a></li>
						<li><a href="javascript:void(0);"><i class="material-icons">shopping_cart</i>{{trans('front.left_bar.sales')}}</a></li>
						<li><a href="javascript:void(0);"><i class="material-icons">favorite</i>{{trans('front.left_bar.likes')}}</a></li>
						<li role="seperator" class="divider"></li>
						<li>
							<a href="{{ route('logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
							{{trans('front.left_bar.logout')}}
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								{{ csrf_field() }}
							</form>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- #User Info -->
		<!-- Menu -->
		<div class="menu">
			<ul class="list">
				<li class="header">{{strtoupper(trans('front.left_bar.main_nav'))}}</li>
				<li class="active">
					<a href="{{url('home')}}">
						<i class="material-icons">home</i>
						<span>{{trans('front.left_bar.home')}}</span>
					</a>
				</li>
				<li class="">
					<a href="{{ route('companies.index') }}">
						<i class="material-icons">content_copy</i>
						<span>{{trans('front.left_bar.companies')}}</span>
					</a>
				</li>
				<li class="">
					<a href="{{ route('employees.index') }}">
						<i class="material-icons">widgets</i>
						<span>{{trans('front.left_bar.employees')}}</span>
					</a>
				</li>
			</ul>
		</div>
		<!-- #Menu -->
	</aside>
</section>

