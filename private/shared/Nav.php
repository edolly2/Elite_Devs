<div class="navigation-cont">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav mr-auto nav-pills">
        <li class="nav-item home-item">
          <a class="nav-link nav-tabs home-tab" href="<?php echo url_for('./index.php'); ?>">Home <span class="sr-only">(current)</span></a>
        </li>

        
        <li class="nav-item dropdown resources-item">
          <a class="nav-link dropdown-toggle resources-tab nav-tabs" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Resources</a>
          <div class="dropdown-menu resources-dropdown">
            <a class="dropdown-item" href="<?php echo url_for('/resources/cheatsheets/index.php'); ?>">Cheatsheets</a>
            <a class="dropdown-item" href="<?php echo url_for('/resources/helper_links/index.php'); ?>">Helper Links</a>
            <a class="dropdown-item" href="<?php echo url_for('/resources/videos/index.php'); ?>">Videos</a>
          </div>
        </li>

        
        <li class="nav-item dropdown community-item">
          <a class="nav-link dropdown-toggle community-tab nav-tabs" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Community</a>
          <div class="dropdown-menu community-dropdown">
            <a class="dropdown-item" href="<?php echo url_for('/community/chat/index.php'); ?>">Chat</a>
            <a class="dropdown-item" href="<?php echo url_for('/community/forum/index.php'); ?>">Forum</a>
          </div>
        </li>

        <li class="nav-item contact-item">
          <a class="nav-link nav-tabs contact-tab" href="<?php echo url_for('/contact/index.php'); ?>">Contact</a>
        </li>

        <li class="nav-item nav-tabs go-pro-item">
          <a class="nav-link go-pro-tab" href="<?php echo url_for('/go-pro/index.php'); ?>">Go Pro</a>
        </li>

        
        <li class="nav-item dropdown courses-item">
          <a class="nav-link dropdown-toggle courses-tab nav-tabs" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
          <div class="dropdown-menu courses-dropdown">
            <a class="dropdown-item" href="<?php echo url_for('/courses/html_courses/index.php'); ?>">HTML</a>
            <a class="dropdown-item" href="<?php echo url_for('/courses/css_courses/index.php'); ?>">CSS</a>
            <a class="dropdown-item" href="<?php echo url_for('/courses/javascript_courses/index.php'); ?>">JavaScript</a>
            <a class="dropdown-item" href="<?php echo url_for('/courses/jquery_courses/index.php'); ?>">jQuery</a>
            <a class="dropdown-item" href="<?php echo url_for('/courses/php_courses/index.php'); ?>">PHP</a>
            <a class="dropdown-item" href="<?php echo url_for('/courses/index.php'); ?>">See All</a>
          </div>
        </li>


        
        <li class="nav-item dropdown paths-item">
          <a class="nav-link dropdown-toggle paths-tab nav-tabs" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Learning Paths</a>
          <div class="dropdown-menu paths-dropdown">
            <a class="dropdown-item" href="<?php echo url_for('/paths/front_end_dev/index.php'); ?>">Front-end Development</a>
            <a class="dropdown-item" href="<?php echo url_for('/paths/back_end_dev/index.php'); ?>">Back-end Development</a>
            <a class="dropdown-item" href="<?php echo url_for('/paths/full_stack_dev/index.php'); ?>">Full-stack Development</a>
            <a class="dropdown-item" href="<?php echo url_for('/paths/index.php'); ?>">See All Learning Paths</a>
            <a class="dropdown-item disabled" href="#!">More Soon!</a>
          </div>
        </li>
      </ul>

      <form class="form-inline my-2 my-lg-0 search-bar">
        <input class="form-control mr-sm-2" type="text" placeholder="Search Courses" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </form>
      <ul class="navbar-nav mr-auto">
      <a class="nav-link login-link" href="#">
        <li class="nav-item login-item">
          Log-in
        </li>
        </a>
    </div>
  </nav>
</div>