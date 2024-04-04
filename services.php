<!DOCTYPE html>
<html lang="en">
<!--Head-->

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,300..900;1,300..900&display=swap"
    rel="stylesheet" />
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700'
    rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="./styles/style.css" />

  <title>SwinWork | Services</title>
</head>
<!--Body-->

<body>
  <?php include 'navbar.inc'; ?>

  <!--Header-->
  <header class="header2">
    <div class="header2__heading-container">
      <h1 class="header2__heading">
        Services | Pricing
      </h1>
    </div>
  </header>

  <?php include 'navbar-solid.inc'; ?>
  <div class="divider"></div>

  <!--Short About-->
  <div class="placeholder-container">
    <h1 class="sub-heading">Why us?</h1>
    <p class="paragraph">
      In today's fast-paced educational environments,
      keeping track of student attendance can be a daunting task for educators.
      However, with the advent of Artificial Intelligence (AI),
      attendance tracking is undergoing a revolutionary transformation.
      The Absent Student App harnesses the power of
      AI to streamline the attendance process,
      making it more efficient and accurate than ever before.</p>
  </div>

  </br></br>

  <!--Services-->
  <div class="placeholder-container">
    <h1 class="sub-heading">Services</h1>
    <p class="paragraph">
      Absent Student App represents a paradigm shift in
      how attendance tracking is approached in educational settings.
      By leveraging the power of AI,
      this innovative solution not only simplifies administrative tasks
      but also empowers educators to make data-driven
      decisions that positively impact student outcomes.
      With its emphasis on efficiency, accuracy, and personalized support,
      the Absent Student App is poised to
      revolutionize the way schools manage attendance in the digital age.
    </p>
  </div>

  <!--Pricing-->
  <section class="plans__container">
    <div class="plans">
      <div class="plansHero">
        <h1 class="plansHero__title">Simple, transparent pricing</h1>
        <p class="plansHero__subtitle">No contracts. No suprise fees.</p>
      </div>
      <div class="planItem__container">
        <!--free plan starts -->
        <div class="planItem planItem--free">

          <div class="card">
            <div class="card__header">
              <div class="card__icon symbol symbol--rounded"></div>
              <h2>Free</h2>
            </div>
            <div class="card__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</div>
          </div>

          <div class="price">$0<span>/ month</span></div>

          <ul class="featureList">
            <li>Smart Facial Recognition</li>
            <li>Predictive Analytics</li>
            <li class="disabled">Enhanced Security and Privacy Measures</li>
            <li class="disabled">Personalized Insights</li>
            <li class="disabled">Continuous Improvement</li>
          </ul>

          <button class="button2 button2--black">Get Started</button>
        </div>
        <!--free plan ends -->

        <!--pro plan starts -->
        <div class="planItem planItem--pro">
          <div class="card">
            <div class="card__header">
              <div class="card__icon symbol"></div>
              <h2>Pro</h2>
              <div class="card__label label">Best Value</div>
            </div>
            <div class="card__desc">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</div>
          </div>

          <div class="price">$18<span>/ month</span></div>

          <ul class="featureList">
            <li>Smart Facial Recognition</li>
            <li>Predictive Analytics</li>
            <li>Enhanced Security and Privacy Measures</li>
            <li class="disabled">Personalized Insights</li>
            <li class="disabled">Continuous Improvement</li>
          </ul>

          <button class="button2 button2--black">Get Started</button>
        </div>
        <!--pro plan ends -->

        <!--entp plan starts -->
        <div class="planItem planItem--entp">
          <div class="card">
            <div class="card__header">
              <div class="card__icon"></div>
              <h2>Enterprise</h2>
            </div>
            <div class="card__desc2">Nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor</div>
          </div>

          <div class="price">Let's Talk</div>

          <ul class="featureList">
            <li>Smart Facial Recognition</li>
            <li>Predictive Analytics</li>
            <li>Enhanced Security and Privacy Measures</li>
            <li>Personalized Insights</li>
            <li>Continuous Improvement</li>
            <li>Customize Panel</li>
          </ul>

          <button class="button2 button2--white">Get Started</button>
        </div>
        <!--entp plan ends -->

      </div>
    </div>
  </section>

  <div class="divider-sm"></div>

  <!--Footer-->
  <?php include 'footer.inc'; ?>
</body>

</html>
<!--
(●っゝω・)っ～☆HELLO☆
-->