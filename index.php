<!DOCTYPE html>
<html lang="en">
<head>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/foundation.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/template.css" type="text/css" />
</head>
<body>

    <header>
        <!-- Toggle Click Trigger For Mobile Devices -->
        <div class="title-bar" data-responsive-toggle="main-menu" data-hide-for="medium">
          <button class="menu-icon" type="button" data-toggle class="float-right"></button>
          <div class="title-bar-title">Menu</div>
        </div>

        <!-- Top Navbar -->
            <div class="top-bar" id="main-menu">
                <!--a href="index.php"><h5 class="menu-text">My Foundation Template</h5></a-->
                <div class="top-bar-left show-for-medium">
                    <ul class="dropdown menu" data-dropdown-menu>
                        <li class="menu-text">Joomdation</li>
                    </ul>
                </div>
                <div class="top-bar-right overlay-menu">
                    <jdoc:include type="modules" name="topbarmenu" style="none" />
                </div>
            </div>
    </header>
    
    <main>
        <!-- Load 'Top-a' container if one exists -->
        <?php if ($this->countModules('top-a')) : ?>
            <div class="grid-container-fluid">
                <jdoc:include type="modules" name="top-a" style="none" />
            </div>
        <?php endif; ?>
        <!-- Load 'Top-b' container if one exists -->
        <?php if ($this->countModules('top-b')) : ?>
            <div class="grid-container-fluid">
                <jdoc:include type="modules" name="top-b" style="none" />
            </div>
        <?php endif; ?>
        <!-- Load sidebar on right if one exists -->
        <?php if($this->countModules('sidebar')):?>
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <!-- Load breadcrumbs module -->
                <?php if ($this->countModules('breadcrumbs')) : ?>
                    <div class="cell small-12">
                        <div class="breadcrumbs">
                            <jdoc:include type="modules" name="breadcrumbs" style="none" />
                            <hr>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="cell small-12 medium-8">
                    <jdoc:include type="component" />
                </div>
                <div class="cell small-12 medium-4">
                    <jdoc:include type="modules" name="sidebar" style="none" />
                </div>
            </div>
        </div>
        <?php else: ?>
        <!-- If no sidebar exists, only load the article content into the component -->
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <!-- Load breadcrumbs module -->
                <?php if ($this->countModules('breadcrumbs')) : ?>
                    <div class="cell small-12">
                        <div class="breadcrumbs">
                            <jdoc:include type="modules" name="breadcrumbs" style="none" />
                            <hr>
                        </div>
                    </div>
                <?php endif; ?>
                <div class="cell small-12">
                    <jdoc:include type="component" />
                </div>
            </div>
        </div>
        <?php endif; ?>
        <!-- Load 'Bottom-a' container if one exists -->
        <?php if ($this->countModules('bottom-a')) : ?>
            <div class="grid-container-fluid">
                <jdoc:include type="modules" name="bottom-a" style="none" />
            </div>
        <?php endif; ?>
        <!-- Load 'Bottom-b' container if one exists -->
        <?php if ($this->countModules('bottom-b')) : ?>
            <div class="grid-container-fluid">
                <jdoc:include type="modules" name="bottom-b" style="none" />
            </div>
        <?php endif; ?>
    </main>
    <footer>
        <div class="grid-container">
            <div class="grid-x grid-margin-x">
                <div class="cell small-12 medium-4">
                    <?php if ($this->countModules('footer-leftCol')) : ?>
                        <jdoc:include type="modules" name="footer-leftCol" style="none" />
                    <?php endif; ?>
                </div>
                <div class="cell small-12 medium-4">
                    <?php if ($this->countModules('footer-centerCol')) : ?>
                        <jdoc:include type="modules" name="footer-centerCol" style="none" />
                    <?php endif; ?>
                </div>
                <div class="cell small-12 medium-4">
                    <?php if ($this->countModules('footer-rightCol')) : ?>
                        <jdoc:include type="modules" name="footer-rightCol" style="none" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/jquery.min.js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/template/js"></script>
    <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/js/foundation.min.js"></script>
    <script>$(document).foundation();</script>
</body>
</html>
