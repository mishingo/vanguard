<div class="navbar-fixed">
  <nav class="pl-m--l pl-m--l z-depth-1 white">
    <div class="nav-wrapper container">
      <a href="{{ home_url('/') }}" class="brand-logo" alt="{{ get_bloginfo('name', 'display') }}">
      	@include('svg/logo-black')
      </a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons black-text">menu</i></a>
      <ul class="right hide-on-med-and-down ul-black-links fira">
        @if (has_nav_menu('primary_navigation'))
        	{!! wp_nav_menu([
    			'menu' => 'primary_navigation',
                'theme_location'=>'primary_navigation',
                'menu_class' => 'hide-on-med-and-down',
                'container' => false,
                'items_wrap' => '%3$s',
                'walker' => new wp_materialize_navwalker()]) 
            !!}
      	@endif
      </ul>
      <ul class="side-nav" id="mobile-demo ul-black-links">
        <li><a href="sass.html">Sass</a></li>
        <li><a href="badges.html">Components</a></li>
        <li><a href="collapsible.html">Javascript</a></li>
        <li><a href="mobile.html">Mobile</a></li>
      </ul>
    </div>
  </nav>
</div>