<?php
$rootUrl = '/inprogress/phalcon-ui/public';
?>
<nav class="navbar navbar-expand-sm navbar-light bg-light" style="box-shadow:   0 10px 20px #cecbcb; color: rgb(46, 61, 73); background: rgb(255, 255, 255);">
  <a class="navbar-brand" href="#">IBlogger</a>
  <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavId">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="<?= $rootUrl ?>/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $rootUrl ?>/blogpost/list.php">Admin</a>
      </li>
      <li class="nav-item">
        <span class="nav-link">|</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $rootUrl ?>/blogpost/new.php">Add Post</a>
      </li>
      <li class="nav-item">
        <span class="nav-link">|</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $rootUrl ?>/blogpost/edit.php">Edit Post</a>
      </li>
      <li class="nav-item">
        <span class="nav-link">|</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= $rootUrl ?>/blogpost/detail.php">Blog Detail</a>
      </li>

    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" />
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
        Search
      </button>
    </form>
  </div>
</nav>