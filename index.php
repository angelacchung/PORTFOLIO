<?php include 'nav.php'?>
<!--  -->
<main>
    <div class="container mb-4">
        <div id="header">
            <div class="row pitchMargin">
               <div class="col-sm-7">
               <h1 class="headline outlineTitle">
                    <span class="outline">Hi, I'm </span>
                    <span>Angela <span role="image" aria-label="wave hand">👋</span></span>
                </h1>
                <p class="mb-4 tagline" id="tagline">
                    I’m a UX/UI designer early in my design career, who nutures digital products from start to finish. 
                    I am based outside of Toronto, Canada.</p>
                    </div>
                    <div class="col-sm-5">
                    <img class="img-fluid punchline" src="img/me.gif">
                    </div>
            </div>
        </div>
        <!-- END HEADER -->
        <div class="mt-5" id="projects">
            <p id="work">WORK</p>
            <?php
while ($row = $stmt->fetch()) {
    ?>
            <div>

                <div class="row mb-5">
                    <div class="col-sm-6">
                        <img alt="Responsive image" src="img/<?php echo ($row['photo']); ?>" class="img-fluid headline">
                    </div>
                    <div class="col-sm-6 tagline">
                        <h3 class="mt-0 mb-0"><?php echo ($row['title']); ?></h3>
                        <h5 class='projCat mt-2'><?php echo ($row['tag']); ?></h5>
                        <!-- <p class="projCat ">UX/UI</p> -->
                        <p><?php echo ($row['description']); ?></p>
                        <a href="project-<?php echo ($row['id']); ?>.php">
                            <h6 class="readProj mt-2">Read Project
                                <i class="material-icons">
                                    arrow_forward</i>
                            </h6>
                        </a>
                    </div>
                </div>
                <?php
}
?>
            </div>
        </div>

        <!-- END CONTAINER -->
    </div>
</main>
<?php include 'footer.php'?>