
<?php

  use App\Post; 
  $posts = Post::all();
?>
<div style="padding-top: 10px;">
<div >
          <div class="thumbnail">
            <img src="http://placehold.it/500x250/6495ED">
              <div class="caption">
                <h4 style="color:#6495ED"><span class="glyphicon glyphicon-th-large"></span>Thumbnail label</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <a href="#" class="btn btn-default btn-xs pull-right" role="button"><i class="glyphicon glyphicon-edit"></i></a> <a href="#" class="btn btn-info btn-xs" role="button"><span class="glyphicon glyphicon-thumbs-up"></span>Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a>
            </div>
          </div>
</div>
<ul class="ppost_nav" style="padding-top:15px; padding-left:10px;">
          
          
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
       