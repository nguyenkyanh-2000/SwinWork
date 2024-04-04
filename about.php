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

  <link rel="stylesheet" href="./styles/style.css" />

  <title>SwinWork | About</title>
</head>

<!--Body-->

<body>
  <?php include 'navbar.inc'; ?>

  <header class="header2">
    <div class="header2__heading-container">
      <h1 class="header2__heading">About us</h1>
    </div>
  </header>

  <?php include 'navbar-solid.inc'; ?>
  <div class="divider"></div>

  <!--Team info-->
  <dl>
    <h1 class="sub-heading">SwinWORK Team</h1>
    <br />
    <div class="placeholder-container">
      <img class="profile-img" src="./images/Ky Anh.jpg" />
      <dt class="paragraph">
        <b>Nguyen Ky Anh</b>
        <h6 class="sub-heading">SWS01168</h6>
      </dt>
      <dd class="paragraph">
        Provide 1-1 support to at least 10 learners per week. The support
        includes live coding sessions, progress checking, personalized study
        plans, and teaching abstract concepts. VEX-IQ participant, VRC
        participant, Vietnam Science and Engineering Fair (ViSEF) participant.
      </dd>
      <img class="profile-img" src="./images/Duy An.jpg" />
      <dt class="paragraph">
        <b>Nguyen Duy An</b>
        <h6 class="sub-heading">SWS01032</h6>
      </dt>
      <dd class="paragraph">
        Created own website for a pharmacy. To maintain inventory of
        medications and to advertise the pharmacy. Used Python to construct a
        number of features. The bot used to graph, answer math problems,
        create charts, and show the Covid in each nation. Supporting students
        with the use of MongoDB, ExpressJS, ReactJS, Redux, MaterialUI,
        NodeJS.
      </dd>
      <div class="team-img">
        <img src="./images/Team.jpg" alt="5 Terre" style="width: 100%" />
        <div class="container">
          <p>SwinWORK Team</p>
        </div>
      </div>
      <a href="mailto:nguyenduyan28062005@gmail.com" class="btn btn-outline btn-sm">Contact Us</a>
    </div>
  </dl>

  <div class="divider-sm"></div>

  <!--Tutor-->
  <dl>
    <h2 class="sub-heading">Our Tutor</h2>
    <br />
    <div class="placeholder-container">
      <dt class="paragraph"><b>Mr Eric Le</b></dt>
      <dd class="paragraph">
        Great lecturer. One of the lecturer that we admire the most. Hilarious
        and handsome person, taught us tons of things not only coding but also
        life experience and career.
      </dd>
    </div>
  </dl>

  <!--Course name-->
  <div class="placeholder-container">
    <h2 class="sub-heading">Our Course</h2>
    <p class="sub-heading">COS10026</p>
  </div>

  <div class="divider"></div>

  <!--Time table-->
  <div class="placeholder-container" id="timetable-hyperlink">
    <h2 class="sub-heading">Our Schedule</h2>
    <br />
  </div>
  <div class="timetable">
    <div class="week-names">
      <div>monday</div>
      <div>tuesday</div>
      <div>wednesday</div>
      <div>thursday</div>
      <div>friday</div>
      <div class="weekend">saturday</div>
      <div class="weekend">sunday</div>
    </div>
    <div class="time-interval">
      <div>8:00 - 10:00</div>
      <div>10:00 - 12:00</div>
      <div>12:00 - 14:00</div>
      <div>14:00 - 16:00</div>
      <div>16:00 - 18:00</div>
      <div>18:00 - 20:00</div>
    </div>
    <div class="content">
      <!--8:00-10:00-->
      <div></div>
      <div></div>
      <div>
        <div class="accent-pink-gradient"></div>
      </div>
      <div></div>
      <div>
        <div class="accent-purple-gradient"></div>
      </div>
      <div class="weekend">
        <div class="accent-pink-gradient"></div>
      </div>
      <div class="weekend"></div>
      <!--10:00-12:00-->
      <div></div>
      <div></div>
      <div>
        <div class="accent-pink-gradient"></div>
      </div>
      <div></div>
      <div>
        <div class="accent-purple-gradient"></div>
      </div>

      <div class="weekend">
        <div class="accent-pink-gradient"></div>
      </div>
      <div class="weekend"></div>
      <!--12:00-14:00-->
      <div></div>
      <div>
        <div class="accent-purple-gradient"></div>
      </div>
      <div></div>
      <div></div>
      <div></div>

      <!--14:00-16:00-->
      <div class="weekend"></div>
      <div class="weekend"></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>

      <!--16:00-18:00-->
      <div class="weekend"></div>
      <div class="weekend"></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>

      <!--18:00-20:00-->
      <div class="weekend"></div>
      <div class="weekend"></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div></div>
      <div class="weekend"></div>
      <div class="weekend"></div>
    </div>
  </div>

  <div class="divider"></div>

  <!-- MAP -->

  <h2 class="sub-heading">Our Location</h2>

  <br />

  <div class="map-container">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.936033811077!2d106.66413508480598!3d10.816207230976504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752ff6c51d5ebd%3A0x4403e126c229b92b!2sSwinburne%20Vietnam%20-%20HCMC%20Campus!5e0!3m2!1sen!2s!4v1708652413341!5m2!1sen!2s"
      style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>

  <div class="divider-sm"></div>

  <!--Footer-->
  <?php include 'footer.inc'; ?>
</body>

</html>
<!--
(●っゝω・)っ～☆HELLO☆
-->