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

  <title>SwinWork | Jobs</title>
</head>

<body>
  <?php include 'navbar.inc'; ?>
  <header class="header">
    <div class="header__heading-container">
      <h1 class="header__heading">Job postings</h1>
    </div>
  </header>

  <?php include 'navbar-solid.inc'; ?>

  <div class="divider"></div>

  <h2 class="sub-heading">Opening positions</h2>

  <div class="apply-here-btn">
    <a href="apply.php" class="btn btn-outline">Apply here</a>
  </div>

  <section class="jobs-board">
    <aside class="filters">
      <div class="slider-container">
        <label class="slider-container__label" for="slider_salary">Salary ($)</label>
        <input type="range" min="10000" max="200000" value="50000" class="slider slider-container__slider"
          id="slider-salary" />
        <p class="slider-container__salary--1">$10,000</p>
        <p class="slider-container__salary--2">$200,000</p>
      </div>

      <div class="checkboxes-container">
        <p class="checkboxes-container__title">Job Type:</p>

        <label class="checkbox">
          Full-time
          <div>
            <input type="checkbox" class="checkbox__input" checked="checked" />
            <span class="checkbox__checkmark"></span>
          </div>
        </label>

        <label class="checkbox">
          Part-time
          <div>
            <input type="checkbox" class="checkbox__input" checked="checked" />
            <span class="checkbox__checkmark"></span>
          </div>
        </label>

        <label class="checkbox">
          Remote
          <div>
            <input type="checkbox" class="checkbox__input" checked="checked" />
            <span class="checkbox__checkmark"></span>
          </div>
        </label>

        <label class="checkbox">
          Contract
          <div>
            <input type="checkbox" class="checkbox__input" checked="checked" />
            <span class="checkbox__checkmark"></span>
          </div>
        </label>

        <label class="checkbox">
          Internship
          <div>
            <input type="checkbox" class="checkbox__input" checked="checked" />
            <span class="checkbox__checkmark"></span>
          </div>
        </label>
      </div>

      <div class="toggle-container">
        <p class="toggle-container__text">Remote Work</p>
        <label class="toggle">
          <input type="checkbox" class="toggle__input" />
          <div class="toggle__control"></div>
        </label>
      </div>

      <div class="toggle-container">
        <p class="toggle-container__text">Flexible Hours</p>
        <label class="toggle">
          <input type="checkbox" class="toggle__input" />
          <div class="toggle__control"></div>
        </label>
      </div>

      <div class="toggle-container">
        <p class="toggle-container__text">Health Benefits</p>
        <label class="toggle">
          <input type="checkbox" class="toggle__input" />
          <div class="toggle__control"></div>
        </label>
      </div>

      <button class="btn btn-secondary">Search</button>
      <button class="btn btn-primary">Reset</button>
    </aside>

    <section class="job-postings">
      <ol>
        <li>
          <h2>Position 1: Frontend Developer</h2>
          <p><strong>Position Reference:</strong> ABC12</p>
          <p>
            <strong>Description:</strong> We are seeking a talented frontend
            developer to join our team. You will be responsible for creating
            beautiful and responsive user interfaces for our web applications.
          </p>
          <p><strong>Salary Range:</strong> $60,000 - $80,000 per year</p>
          <p><strong>Reports to:</strong> Head of Development</p>
          <h3>Key Responsibilities:</h3>
          <ul>
            <li>Develop user-friendly interfaces based on design mockups</li>
            <li>Optimize application for maximum speed and scalability</li>
            <li>
              Collaborate with backend developers and designers to improve
              usability
            </li>
            <li>Stay up-to-date on emerging technologies</li>
          </ul>
          <h3>Required Qualifications:</h3>
          <ul>
            <li>
              <strong>Essential:</strong> Proficiency in HTML, CSS, and
              JavaScript
            </li>
            <li>
              <strong>Essential:</strong> Experience with frontend frameworks
              such as React or Angular
            </li>
            <li>
              <strong>Preferable:</strong> Knowledge of UI/UX principles
            </li>
            <li>
              <strong>Preferable:</strong> Bachelor's degree in Computer
              Science or related field
            </li>
          </ul>
        </li>

        <div class="divider-sm"></div>

        <li>
          <h2>Position 2: Data Analyst</h2>
          <p><strong>Position Reference:</strong> XYZ34</p>
          <p>
            <strong>Description:</strong> We are looking for a detail-oriented
            data analyst to join our analytics team. You will be responsible
            for collecting, analyzing, and interpreting data to help drive
            business decisions.
          </p>
          <p><strong>Salary Range:</strong> $50,000 - $70,000 per year</p>
          <p><strong>Reports to:</strong> Head of Analytics</p>
          <h3>Key Responsibilities:</h3>
          <ul>
            <li>Collect and clean data from various sources</li>
            <li>Analyze data to identify trends and patterns</li>
            <li>Prepare reports and presentations for stakeholders</li>
            <li>Develop and maintain data visualization dashboards</li>
          </ul>
          <h3>Required Qualifications:</h3>
          <ul>
            <li>
              <strong>Essential:</strong> Proficiency in SQL and data analysis
              tools
            </li>
            <li>
              <strong>Essential:</strong> Strong analytical and
              problem-solving skills
            </li>
            <li><strong>Preferable:</strong> Experience with Python or R</li>
            <li>
              <strong>Preferable:</strong> Bachelor's degree in Statistics,
              Mathematics, or related field
            </li>
          </ul>
        </li>

        <div class="divider-sm"></div>

        <li>
          <h2>Position 3: AI Engineer</h2>
          <p><strong>Position Reference:</strong> AI123</p>
          <p>
            <strong>Description:</strong> We are seeking an experienced AI
            engineer to join our team. You will be responsible for developing
            and implementing machine learning models and algorithms to solve
            complex business problems.
          </p>
          <p><strong>Salary Range:</strong> $80,000 - $100,000 per year</p>
          <p><strong>Reports to:</strong> Head of AI Research</p>
          <h3>Key Responsibilities:</h3>
          <ul>
            <li>Design and develop machine learning models and algorithms</li>
            <li>Collect and preprocess data for training and testing</li>
            <li>
              Evaluate and fine-tune models for performance optimization
            </li>
            <li>
              Collaborate with cross-functional teams to integrate AI
              solutions into products
            </li>
          </ul>
          <h3>Required Qualifications:</h3>
          <ul>
            <li>
              <strong>Essential:</strong> Proficiency in Python and machine
              learning libraries (e.g., TensorFlow, PyTorch)
            </li>
            <li>
              <strong>Essential:</strong> Strong understanding of statistical
              concepts and algorithms
            </li>
            <li>
              <strong>Preferable:</strong> Experience with natural language
              processing or computer vision
            </li>
            <li>
              <strong>Preferable:</strong> Master's or PhD in Computer
              Science, Engineering, or related field
            </li>
          </ul>
        </li>
      </ol>
    </section>
  </section>

  <div class="divider"></div>

  <section class="placeholder-container">
    <p class="paragraph">
      At SwinWORK, we believe in providing equal opportunities for all,
      regardless of background, gender, or any other characteristic. Our
      transparent processes ensure that decisions regarding hiring, promotion,
      and compensation are based on merit and performance, fostering a
      workplace where every individual can thrive.
    </p>
    <a href="#" class="btn btn-outline btn-sm">Our policies</a>
  </section>

  <div class="divider-sm"></div>
  <?php include 'footer.inc'; ?>

</body>

</html>