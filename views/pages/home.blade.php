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
            <button type="submit" class="account-btn">User4 <img src="/images/icons8-expand-arrow-50.png" class="dropdown-icon"/></button>
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
            <div class="row row-list">    
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
              <hr class="line">
              <div class="posting-user"> Posting as user2: </div>
              <div class="row">
                <textarea rows="5" class="post-content-user" placeholder=" Post content"></textarea>
                <button type="submit" class="post-comment-btn">Post Comment</button>
              </div>
              <div class="user-name"> user2 
                <span style="color:grey;padding:2px;">&#183;</span> 
                <span style="color:white;padding:2px;">Jayne_Kuhic@sydney.com</span>
              </div>
              <p class="user-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum tempore itaque ipsam 
                    consequuntur culpa similique sapiente architecto nemo. Dolore libero officia doloribus 
                    quod cum saepe sapiente earum eveniet necessitatibus nostrum? </p>
              <p class="user-date">May 4, 2021</p>
              <div class="user-name"> user2 
                <span style="color:grey;padding:2px;">&#183;</span> 
                <span style="color:white;padding:2px;">Jayne_Kuhic@sydney.com</span>
              </div>
              <p class="user-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum tempore itaque ipsam 
                    consequuntur culpa similique sapiente architecto nemo. Dolore libero officia doloribus 
                    quod cum saepe sapiente earum eveniet necessitatibus nostrum? </p>
              <p class="user-date">May 4, 2021</p>
              <div class="user-name"> user2 
                <span style="color:grey;padding:2px;">&#183;</span> 
                <span style="color:white;padding:2px;">Jayne_Kuhic@sydney.com</span>
              </div>
              <p class="user-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum tempore itaque ipsam 
                    consequuntur culpa similique sapiente architecto nemo. Dolore libero officia doloribus 
                    quod cum saepe sapiente earum eveniet necessitatibus nostrum? </p>
              <p class="user-date">May 4, 2021</p>
              <div class="user-name"> user2 
                <span style="color:grey;padding:2px;">&#183;</span> 
                <span style="color:white;padding:2px;">Jayne_Kuhic@sydney.com</span>
              </div>
              <p class="user-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum tempore itaque ipsam 
                    consequuntur culpa similique sapiente architecto nemo. Dolore libero officia doloribus 
                    quod cum saepe sapiente earum eveniet necessitatibus nostrum? </p>
              <p class="user-date">May 4, 2021</p>
            </div> <!--/row-list--> 
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
                <button type="submit" class="create-post-btn-2">Create Post</button>
              </div>
            </div> <!--/create-posts-col-->
          </div> <!--/create-->
        </div><!--row 3-->
      </div><!-- /container -->

  </div> <!-- /container main -->
@endsection