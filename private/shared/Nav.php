<div class="navigation-cont">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="nav navbar-nav mr-auto nav-pills">
        <li class="nav-item home-item">
          <a class="nav-link nav-tabs home-tab" href="<?php echo url_for("./index.php"); ?>">Home <span class="sr-only">(current)</span></a>
        </li>

        
        <li class="nav-item dropdown resources-item">
          <a class="nav-link dropdown-toggle resources-tab nav-tabs" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Resources</a>
          <div class="dropdown-menu resources-dropdown">
            <a class="dropdown-item" href="#!">Cheatsheets</a>
            <a class="dropdown-item" href="#!">Videos</a>
          </div>
        </li>

        
        <li class="nav-item dropdown community-item">
          <a class="nav-link dropdown-toggle community-tab nav-tabs" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Community</a>
          <div class="dropdown-menu community-dropdown">
            <a class="dropdown-item" href="#!">Chat</a>
            <a class="dropdown-item" href="#!">Forum</a>
          </div>
        </li>

        <li class="nav-item contact-item">
          <a class="nav-link nav-tabs contact-tab" href="<?php echo url_for("/contact/index.php"); ?>">Contact</a>
        </li>

        <li class="nav-item nav-tabs go-pro-item">
          <a class="nav-link go-pro-tab" href="<?php echo url_for("/go-pro/index.php"); ?>">Go Pro</a>
        </li>

        
        <li class="nav-item dropdown courses-item">
          <a class="nav-link dropdown-toggle courses-tab nav-tabs" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Courses</a>
          <div class="dropdown-menu courses-dropdown">
            <a class="dropdown-item" href="#!">HTML</a>
            <a class="dropdown-item" href="#!">CSS</a>
            <a class="dropdown-item" href="#!">JavaScript</a>
            <a class="dropdown-item" href="#!">jQuery</a>
            <a class="dropdown-item" href="#!">PHP</a>
            <a class="dropdown-item" href="#!">See All</a>
          </div>
        </li>


        
        <li class="nav-item dropdown paths-item">
          <a class="nav-link dropdown-toggle paths-tab nav-tabs" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Learning Paths</a>
          <div class="dropdown-menu paths-dropdown">
            <a class="dropdown-item" href="#!">Front-end Development</a>
            <a class="dropdown-item" href="#!">Back-end Development</a>
            <a class="dropdown-item" href="#!">Full-stack Development</a>
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