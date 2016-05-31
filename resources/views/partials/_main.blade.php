    
    @foreach($posts as $post)  
    <div id="mainDiv" style="padding-top:15px;" class="panel-default">
        
        <ul class="media-list main-list">
            
              <li class="media">
              
                <a class="pull-left" href="#">
                  
                </a>
                
                <div class="row">
                    <div class="col-md-2">
                    
                    <div class="text-center date-body" style="width:150px">
                        <label for="" class="date-title">April/2016</label>
                                <div class="date-content">
                                <p class="dia">10</p>
                                <hr class="nomargin"/>
                               
                                </div>
                   </div>
                    </div>  
                    <div class="col-md-7">  
                        <h2 class="media-heading" style="padding-left:10px;"><a href="#">{{ $post->title }} </a> </h2>
                    </div>  
                    <div class="col-md-3">
                            
                        <a href="http://facebook.com" class="btn btn-social-icon btn-facebook"> <i class="fa fa-facebook"></i></a>    
                        <a class="btn btn-social-icon btn-google-plus"><i class="fa fa-google-plus"></i></a>
                        <a class="btn btn-social-icon btn-twitter"><i class="fa fa-twitter"></i></a>
                    
                    </div>
                </div>
               
                <div class="row text-right" style="padding-right:20px;">
                        <ul class="list-unstyled list-inline">
                            <li><i class="fa fa-calendar"></i> February 02, 2013</li>
                            <li><i class="fa fa-user"></i> Janaka Sampath</li>
                            <li><i class="fa fa-comments"></i> <a href="#">24 Comments</a></li>
                        </ul>   
                </div>    
                <div class="media-body" id="k">
                  <h4 class="media-content"><img class="media-object img-responsive pull-left " src="http://lorempixel.com/350/350/" alt="..." style="padding-right:10px">
                 
                     {{ $post->description }}
                  </h4>
                  
                  <p class="by-author">By JSB</p>
                  
                  
                  <div class="source-section first-section first-lower-section subscribe" id="viewMore">
                        <button type="button" class="btn btn-success btn-md btn-subscribe"><i class="fa fa-newspaper-o fa-lg"></i>Read More</button>
                        
                    </div>
                    
                   </li>  
                </div>
                
                    
                    
          </div>
          @endforeach 