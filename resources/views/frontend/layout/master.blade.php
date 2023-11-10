<!DOCTYPE html>
<html lang="en">
<head>
  @include('frontend.include.head')

</head>
  

  <body>

    
    @include('frontend.include.nav')
    <!-- Page Content -->
    
    @include('frontend.include.banner')

    


    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                @yield('content')
                  <div class="main-button">
                    <a href="blog.html">View All Posts</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
         @include('frontend.include.sidebar') 
    </section>

    @include('frontend.include.footer')
    

    <!-- Bootstrap core JavaScript -->
    @include('frontend.include.scripts')
  </body>
</html>