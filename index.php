<?php include 'nav.php'?>
<!--  -->
<main>
    <div class="container mb-4">
        <div id="header" class="row">
            <div class="col-sm-7 headline pitchMargin">
                <h1 class="outlineTitle">
                    <span class="outline">Hi, I'm </span>
                    <span style="display:block;">Angela <span role="image" aria-label="wave hand">👋</span></span>
                </h1>
                <p id="tagline" class="mb-4">
                    I’m a UX/UI designer and illustrator based
                    outside of Toronto, Canada.</p>
            </div>
            <div class="col-sm-5 pitchMargin tagline">
                <img src="img/me-5.jpg" class="img-fluid">
            </div>
        </div>
        <!-- END HEADER -->
        <div id="projects">
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
                        <h3 class="mt-0 mb-1"><?php echo ($row['title']); ?></h3>
                        <h5 class='projCat mt-3'><?php echo ($row['tag']); ?></h5>
                        <!-- <p class="projCat ">UX/UI</p> -->
                        <p><?php echo ($row['description']); ?></p>
                        <a href="project-<?php echo ($row['id']); ?>.php">
                            <h5 class="readProj mt-2">Read Project
                                <i class="material-icons">
                                    arrow_forward</i>
                            </h5>
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