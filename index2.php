
<main>
<div class="container">
    <div class="intro">
      <h1 class="h1 headline">Hi, I'm<span class="outline"> Angela</span><span role="image" aria-label="wave hand">👋</span></h1>
      <h3 class="grey pitch h3 mt-5 col-10 pl-0 tagline"><?php echo($row["title"]);?>I’m a UX/UI Designer, illustrator, taco enthusiast and a fan of good storytelling. I currently reside outside of Toronto, Canada.</h3>
    </div>
    <!--  -->
    <?php
    while($row=$stmt->fetch())
    {
    ?>
    <div class="row divDisp">
      <div class="col-sm mt-4 headline">
          
          <h3 class="h3 blue medium"><?php echo($row['title']);?></h3>
          <p class="tag"><?php echo($row['tag']); ?></p>
          <div class="mt-4 mb-4">
          <p>
            <?php echo($row['description']); ?>
          </p>
          <div class="my-4">
          <a href="project-<?php echo($row['id']);?>.html" class="button">Read more</a>
          </div>
        </div>
      </div>
        
        <div class="col-sm">
        <img class="displayImg img-fluid m-2 tagline" alt="Responsive image" src="img/<?php echo($row['photo']); ?>">
        </div> 
      </div>
      <?php
    }
      ?>
  
            </div>       
            
        </div>       
    

    </div>       

</div>


</main>
          <!--FOOTER  -->
      <footer class="page-footer font-small cyan darken-3">

          <!-- Footer Elements -->
          <div class="container">

            <!-- Grid row-->
            <div class="row">
              <div class="col-md-12 text-center mt-4">
                <img src="img/white.png">
                <h3 class="mt-4 h3">Let's Talk.</h3>

              </div>
              <!-- Grid column -->
              <div class="col-md-8 offset-md-2 mt-3 text-center">
                <div class="mb-3 ml-5">

                  <!-- Twitter -->
                  <a class="tw-ic socialIcon" href="https://twitter.com/_angelachung">
                    <i class="fab fa-twitter fa-lg white-text mr-5 fa-2x"> </i>
                  </a>

                  <!--Linkedin -->
                  <a class="li-ic socialIcon" href="https://www.linkedin.com/in/angelamchung/">
                    <i class="fab fa-linkedin-in fa-lg white-text mr-5 fa-2x"> </i>
                  </a>
                  <!--Instagram-->
                  <a class="ins-ic socialIcon" href="https://www.instagram.com/angela.jung/">
                    <i class="fab fa-instagram fa-lg white-text mr-5 fa-2x"> </i>
                  </a>

                </div>
                <div class="mt-5">
                  <a href="mailto:mini.cchung@gmail.com" id="mailMe">Mail me</a>
                </div>
                <p class="text-muted mt-5">Website coded by Angela Chung</p>
              </div>
              <!-- Grid column -->

            </div>
           
              </div>
          </div>
          <!-- Footer Elements -->

          <!-- Copyright -->
          <div class="text-center py-3">

          </div>
          <!-- Copyright -->

        </footer>
        <!-- Footer -->
        <script src="https://unpkg.com/scrollreveal"></script>
      <script src="js/main.js"></script>

      </body>
      </html>
