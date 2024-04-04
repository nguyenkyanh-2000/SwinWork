<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="./styles/style.css" />

  <title>SwinWork | Homepage</title>
</head>

<body>


  <?php include 'navbar.inc'; ?>

  <header class="header">
    <div class="header__heading-container">
      <h1 class="header__heading">
        Introducing SwinAI: No more absent students.
      </h1>
      <a href="#" class="btn btn-outline btn-sm">Discover now</a>
    </div>
  </header>

  <?php include 'navbar-solid.inc'; ?>

  <div class="divider"></div>

  <h2 class="sub-heading">Latest news</h2>

  <section class="section-news">
    <!-- News Item 1 -->
    <div class="news-item">
      <div class="news-item__image-container">
        <img src="./images/news-1.jpg" alt="news-1" />
      </div>
      <div class="news-item__content">
        <h3>AI breakthrough in medical diagnosis</h3>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p>
      </div>
    </div>

    <!-- News Item 2 -->
    <div class="news-item">
      <div class="news-item__image-container">
        <img src="./images/news-2.jpg" alt="news-2" />
      </div>
      <div class="news-item__content">
        <h3>New AI-powered robot assists in household chores</h3>
        <p>
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
          nisi ut aliquip ex ea commodo consequat.
        </p>
      </div>
    </div>

    <!-- News Item 3 -->
    <div class="news-item">
      <div class="news-item__image-container">
        <img src="./images/news-3.jpg" alt="news-3" />
      </div>
      <div class="news-item__content">
        <h3>AI technology revolutionizes transportation industry</h3>
        <p>
          Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur.
        </p>
      </div>
    </div>

    <!-- News Item 4 -->
    <div class="news-item">
      <div class="news-item__image-container">
        <img src="./images/news-4.jpg" alt="news-4" />
      </div>
      <div class="news-item__content">
        <h3>AI advancements lead to improved customer service experiences</h3>
        <p>
          Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
          officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
  </section>

  <div class="divider"></div>

  <h2 class="sub-heading">Responsibility</h2>

  <div class="placeholder-container">
    <p class="paragraph">
      Our work to create safe and beneficial AI requires a deep understanding
      of the potential risks and benefits, as well as careful consideration of
      the impact.
    </p>
    <a href="#" class="btn btn-outline btn-sm">How we do it</a>
  </div>

  <section class="section-placeholder">
    <div class="section-placeholder__image-container">
      <img src="./images/placeholder-1.jpg" alt="placeholder" />
    </div>
  </section>

  <div class="divider"></div>

  <h2 class="sub-heading">Company</h2>

  <div class="placeholder-container">
    <p class="paragraph">
      We research generative models and how to align them with human values.
    </p>
    <a href="about.php" class="btn btn-outline btn-sm">Learn about us</a>
  </div>

  <section class="section-placeholder">
    <div class="section-placeholder__image-container">
      <img src="./images/placeholder-2.jpg" alt="placeholder" />
    </div>
  </section>

  <div class="divider"></div>

  <div class="placeholder-container">
    <h2 class="sub-heading">Join us in shaping the future of technology.</h2>
    <a href="jobs.php" class="btn btn-outline btn-sm">Career</a>
  </div>

  <div class="divider-sm"></div>
  <?php include 'footer.inc'; ?>

</body>

</html>