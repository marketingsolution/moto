

<?php
$header = file_get_contents('partials/header.html');
echo $header;
?>
         <main>
        
           

        <div class="relative">
            <div class="cover-bg" id="news-bg"></div>
            <div class="h2-home">
                
                <h2>News</h2>
            </div>
        </div>
    
        <div id="news">
    
  
           
        </div>
        <button id="view-button" class="button">Load More</button>
        <div class="news-posts-list" id="codey">
            <div class="news-post">
                <div class="news-img"></div>
                    <div class="news-description">
                        <p class="data">12 stycznia 2019</p>
                        <h3>Tytuł newsa h3 Muli, weight 300</h3>
                    </div>
            </div>
            <div class="news-post">
                <div class="news-img"></div>
                <div class="news-description">
                    <p class="data">12 stycznia 2019</p>
                    <h3>background-color: rgba(255, 255, 255, 0.08);</h3>
                </div>
            </div>
            <div class="news-post">
                <div class="news-img"></div>
                <div class="news-description">
                    <p class="data">12 stycznia 2019</p>
                    <h3>Lorem ipsum dolor sit amet consectetur, adipisicing elit. </h3>
                </div>
            </div>
            <div class="news-post">
                <div class="news-img"></div>
                <div class="news-description">
                    <p class="data">12 stycznia 2019</p>
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. </h3>
                </div>
            </div>

        </div>
        <button class="button" id='close-button'>Zwiń</button>


  
        <div class="relative">
            <div class="cover-bg" id="moto-test-bg"></div>
            <div class="h2-home">
                
                <h2>Moto Test</h2>
            </div>
        </div>

       

        <div class="clearfix"></dv>

       <div class="flex">
           <div class="moto-test-post">
                <div class="moto-test-img"></div>
                <div class="moto-test-description">
                    <h3>Lorem ipsum dolor sit amet consectetur</h3>
                    <p>Moto Test</p>
                </div>

           </div>
           <div class="moto-test-post">
            <div class="moto-test-img"></div>
            <div class="moto-test-description">
                <h3>Lorem ipsum dolor sit amet consectetur</h3>
                <p>Moto Test</p>
            </div>

       </div>
       <div class="moto-test-post">
        <div class="moto-test-img"></div>
        <div class="moto-test-description">
            <h3>Lorem ipsum dolor sit amet consectetur</h3>
            <p>Moto Test</p>
        </div>

   </div>
   <div class="moto-test-post">
    <div class="moto-test-img"></div>
    <div class="moto-test-description">
        <h3>Lorem ipsum dolor sit amet consectetur</h3>
        <p>Moto Test</p>
    </div>

</div>

       </div>


    <div class="relative">
        <div  id="inne-bg" class="cover-bg"></div>
        <div class="h2-home">
            
            <h2>Inne</h2>
        </div>
    </div>


    

    
   
    
</main>
<script src="js/handlebars.min.js"></script>
        <script id='templateHB' type='text/x-handlebars-template'>
        
                
            
            <div class="flex" id="featured-news">
                <a href="/news/{{featured.link}}">
                    <div id="news-featured-img">
                           
                    </div>
                </a>
                    

                        <div id="featured-description">
                            <h2>{{featured.title}}</h2>
                            <p>{{featured.body}}
                            </p>
                            <a href="/news/{{featured.link}}"><button>Enter</button></a>

                            

                        </div>
            </div>
            <div id="news-list" class="news-posts-list" >
                {{#each news}}
            
                    <a class="news-link" href="/news/{{this.link}}">
                    <div class="news-post">
                        <img class="news-img" src="{{this.image}}"/>
                        <div class="news-description">
                            <div class="data">
                                <p>{{this.date}}</p>
                            </div>
                                <h3>{{this.title}}</h3>
                        </div>
                    </div>
                    </a>
            
                {{/each}}
            </div>
        
           

               
        </script>
        
<script src="js/newsTitles.js" type="text/javascript"></script>  
</body>


</HTML>

