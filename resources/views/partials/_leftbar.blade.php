
<?php

  use App\Post; 
  $posts = Post::all();
?>



<div style="padding-left: 20px; padding-top: 10px">
  <ul class="list-unstyled video-list-thumbs row">
  <li >
    <a href="#" title="UTI Video Text">
      <img src="http://img.youtube.com/vi/iPMfy2sHujU/0.jpg" alt="Barca" class="img-responsive" height="130px" />
      <h2>England Master is on the move</h2>
      <span class="glyphicon glyphicon-play-circle"></span>
      <span class="duration">03:15</span>
    </a>
  </li>
</ul>
</div>

<div style="padding-top:10px; padding-left:10px">

    <div class="panel panel-default">
      <div class="panel-body">

      </div>
      <div class="panel-footer">Panel footer</div>
    </div>
<ul class="ppost_nav" style="padding-top:10px; padding-left:10px" >
          
          
              @foreach ($posts as $post)
                      <li>
                          <div class="media" >
                              <a class="media-left" href="single_page.html">
                                 <img src="http://lorempixel.com/70/70/" alt="img"> 
                              </a>
                              <div class="media-body">
                                <a class="catg_title" href="single_page.html" style="text-align:justify;">
                                  {{$post->title}}
                                </a>                    
                              </div> 
                              <div class="numberofviews2"><font color="#000000"><b><span class="glyphicon glyphicon-eye-open "></span> 5,253</b></font> Views</div>
                              <div class="numberofviews2"><font color="#000000"><b><span class="glyphicon glyphicon-thumbs-up"></span> 5,253</b></font> Likes</div>
                              <div class="timestamp">
                                  
                              </div>
                        </div>
            </li>  
           @endforeach
             <div class="hr-primary" />  
                                      
</ul>
</div>