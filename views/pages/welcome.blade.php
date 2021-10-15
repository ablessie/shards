@extends('main')

@section('content')
  <div class="container main">
    <div class="container">
          <div class="row row-1">
            <div class="col-md-2 logo-shards"> 
              <img src="/images/logo_shards.png" alt="logo" > 
            </div>
            <div class="col-md-8 search-bar">
              <div class="search-container">
                <form action="#">
                <input type="text" id="search" placeholder="Search Shards..." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
            </div> 
            <div class="col-md-2 login-btn">
              <button type="submit" class="login-image"  formtarget="#modalLoginForm"><img src="/images/person_shards.png" alt="login" class="login-btn-image"/>Login</button>
            </div> 
      </div> <!--/row-->
    </div> <!--/container-->

    <div class="container">
      <div class="row row-2">
        <div class="col-md-8 popular-post"> Popular Posts </div> 
      </div> <!--/row-->
    </div> <!-- /container -->

    <div class="container">
      <div class="row row-3">
        <div class="col-md-8 popular-posts-col">
          <div class="row row-list-w">    
            <div class="col-sm-1 row-one">
              <span class="iconify" data-icon="bi:arrow-up-short"></span>
              <p class="post-number">2,301</p>
              <span class="iconify" data-icon="bi:arrow-up-short" data-rotate="180deg"></span>
            </div>
            <div class="col-sm-11 row-two">
              <h4 class="post-title-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </h4>
              <p class="post-content-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum tempore itaque ipsam 
                  consequuntur culpa similique sapiente architecto nemo. Dolore libero officia doloribus 
                  quod cum saepe sapiente earum eveniet necessitatibus nostrum? </p>
              <p class="post-details-text">4 Comments</p><span style="color:grey;padding:2px;">&#183;</span>
              <p class="post-details-text">Posted by user2</p><span style="color:grey;padding:2px;">&#183;</span>
              <p class="post-details-text">May 4, 2021</p>
            </div>
            </div>
          <div class="row row-list-w">    
            <div class="col-sm-1 row-one">
              <span class="iconify" data-icon="bi:arrow-up-short"></span>
              <p class="post-number">2,301</p>
              <span class="iconify" data-icon="bi:arrow-up-short" data-rotate="180deg"></span>
            </div>
            <div class="col-sm-11 row-two">
              <h4 class="post-title-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </h4>
              <p class="post-content-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum tempore itaque ipsam 
                  consequuntur culpa similique sapiente architecto nemo. Dolore libero officia doloribus 
                  quod cum saepe sapiente earum eveniet necessitatibus nostrum? </p>
              <p class="post-details-text">Posted by user2</p><span style="color:grey;padding:2px;">&#183;</span>
              <p class="post-details-text">May 4, 2021</p>
            </div>
          </div>
          <div class="row row-list-w">    
            <div class="col-sm-1 row-one">
              <span class="iconify" data-icon="bi:arrow-up-short"></span>
              <p class="post-number">2,301</p>
              <span class="iconify" data-icon="bi:arrow-up-short" data-rotate="180deg"></span>
            </div>
            <div class="col-sm-11 row-two">
              <h4 class="post-title-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </h4>
              <p class="post-content-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum tempore itaque ipsam 
                  consequuntur culpa similique sapiente architecto nemo. Dolore libero officia doloribus 
                  quod cum saepe sapiente earum eveniet necessitatibus nostrum? </p>
              <p class="post-details-text">Posted by user2</p><span style="color:grey;padding:2px;">&#183;</span>
              <p class="post-details-text">May 4, 2021</p>
            </div>
          </div>
          <div class="row row-list-w">    
            <div class="col-sm-1 row-one">
              <span class="iconify" data-icon="bi:arrow-up-short"></span>
              <p class="post-number">2,301</p>
              <span class="iconify" data-icon="bi:arrow-up-short" data-rotate="180deg"></span>
            </div>
            <div class="col-sm-11 row-two">
              <h4 class="post-title-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </h4>
              <p class="post-content-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum tempore itaque ipsam 
                  consequuntur culpa similique sapiente architecto nemo. Dolore libero officia doloribus 
                  quod cum saepe sapiente earum eveniet necessitatibus nostrum? </p>
              <p class="post-details-text">Posted by user2</p><span style="color:grey;padding:2px;">&#183;</span>
              <p class="post-details-text">May 4, 2021</p>
            </div>
          </div>
          <div class="row row-list-w">    
            <div class="col-sm-1 row-one">
              <span class="iconify" data-icon="bi:arrow-up-short"></span>
              <p class="post-number">2,301</p>
              <span class="iconify" data-icon="bi:arrow-up-short" data-rotate="180deg"></span>
            </div>
            <div class="col-sm-11 row-two">
              <h4 class="post-title-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. </h4>
              <p class="post-content-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum tempore itaque ipsam 
                  consequuntur culpa similique sapiente architecto nemo. Dolore libero officia doloribus 
                  quod cum saepe sapiente earum eveniet necessitatibus nostrum? </p>
              <p class="post-details-text">Posted by user2</p><span style="color:grey;padding:2px;">&#183;</span>
              <p class="post-details-text">May 4, 2021</p>
            </div>
          </div>
          <div class="next-page">
            <button type="submit" class="next-page-btn">Next Page<img src="/images/Vector.png" alt="login" class="arrow-right"/></button>
          </div>
        </div><!--/popular-posts-col--> 
        <div class="col-md-4 create-posts-col">
          <div class="container create-posts">
            <div class="row">
              <img src="/images/paperkite_shards.png" alt="paperkite" class="paper-kite"/><span class="create-label">Create a Post</span>
            </div>
            <div class="row">
              <input type="text" class="post-title" placeholder="My post title">
            </div>
            <div class="row">
              <textarea rows="8" class="post-content" placeholder=" Post content"></textarea>
            </div>
            <div class="row">
            <button type="submit" class="create-post-btn">Create Post</button>
            </div>
          </div> <!--/create-posts-col-->
        </div> <!--/create-posts-->
      </div> <!--row 3-->
    </div> <!-- /container -->
  </div> <!-- /container main -->
@endsection