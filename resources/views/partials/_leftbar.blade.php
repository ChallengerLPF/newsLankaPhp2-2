
<?php

  use App\Post; 
  $posts = Post::all();
?>
<div>


<?php
  foreach ($posts as $post) {
    # code...
    echo $post->title;
  }
?>

</div>



<ul class="ppost_nav" style="padding-top:15px; padding-left:10px;">
          
          
              @foreach ($posts as $post)
                      <li>
                          <div class="media" >
                              <a class="media-left" href="single_page.html">
                                  {{$post->title}}
                              </a>
                              <div class="media-body">
                                <a class="catg_title" href="single_page.html" style="text-align:justify;">
                                  {{$post->description}}
                                </a>                    
                              </div> 
                              <div class="numberofviews2"><font color="#000000"><b><span class="glyphicon glyphicon-eye-open "></span> 5,253</b></font> Views</div>
                              <div class="numberofviews2"><font color="#000000"><b><span class="glyphicon glyphicon-thumbs-up"></span> 5,253</b></font> Likes</div>
                              <div class="timestamp">
                                  {{$post->created_at}}
                              </div>
                        </div>
            </li>  
           @endforeach
             <div class="hr-primary" />  
                                      
</ul>