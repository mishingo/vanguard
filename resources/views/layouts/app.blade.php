<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('partials.header')
    <div class="row" role="document">
      
        <main class="main">
          @yield('content')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      
    </div>
    @php(do_action('get_footer'))
    @include('partials.footer')
    @php(wp_footer())
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script>ga('send', 'pageview');</script>
  </body>
</html>
