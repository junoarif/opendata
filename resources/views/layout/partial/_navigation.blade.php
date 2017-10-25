<!-- NavBar-->
<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				@foreach($about as $abo)
				<a class="navbar-brand" href="{{URL::to('/')}}">
					{{$abo->nama_app}}
					@endforeach
				</a>
			</div>

			<div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					@foreach($menu as $main_menu)
        		<li class="menuItem"><a href="{{url('/'.$main_menu->link.'/')}}">{{$main_menu->nama_mm}}</a></li>
				  @endforeach

      </ul>
    </div>

  </div>
</nav>
