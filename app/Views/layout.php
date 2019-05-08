<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="/favicon.ico">
  <title><?= SITE_NAME ?></title>
  <link href="/css/bootstrap.min.css?v=4.3.1" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="/"><?= SITE_NAME ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link text-muted" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3">
                <circle cx="10.5" cy="10.5" r="7.5"></circle>
                <line x1="21" y1="21" x2="15.8" y2="15.8"></line>
              </svg>
            </a>
          </li>
            <?php if( !empty(get_cookie('login')) ) : ?>
              <li class="nav-item mr-2">
                <a href="/logout" class="nav-link">Log out</a>
              </li>
            <?php else: ?>
              <li class="nav-item mr-2">
                <a href="/login" class="nav-link">Log in</a>
              </li>
              <li class="nav-item">
                <a href="/signup" class="nav-link">Sign up</a>
              </li>
            <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="alert-wrap container"><?php !empty($errors) ? view_r($errors) : ''; ?></div>

  <?= !empty($view) ? view($view) : ''; ?>


  <script src="/js/jquery-3.3.1.slim.min.js"></script>
  <script src="/js/bootstrap.bundle.min.js?v=4.3.1"></script>

</body>
</html>
