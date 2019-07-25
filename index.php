<?php include 'nav.php' ?>
<main>
<div class="container">
    <div class="intro">
      <h1 class="h1 headline">Hi, I'm<span class="outline"> Angela</span><span role="image" aria-label="wave hand">👋</span></h1>
      <h3 class="grey pitch h3 mt-5 col-10 pl-0 tagline"><?php echo($row["title"]);?>I’m a UX/UI designer, illustrator, dog enthusiast and a fan of good storytelling. I currently reside outside of Toronto, Canada.</h3>
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
          <a href="project-<?php echo($row['id']);?>.php" class="button">Read more</a>
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
<?php include 'footer.php' ?>