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

  <title>SwinWork | Apply</title>
  <link rel="stylesheet" href="./styles/style.css" />
</head>
<!--Body-->

<body class="apply-page">
  <?php include 'navbar.inc'; ?>

  <header class="header">
    <div class="header__heading-container">
      <h1 class="header__heading">Application</h1>
    </div>
  </header>

  <?php include 'navbar-solid.inc'; ?>

  <div class="divider"></div>

  <!--Form-->
  <section class="apply-form">
    <form method="post" action="processEOI.php" novalidate="novalidate">
      <!--Job preference number-->
      <label for=" jpre">Job preference number</label><br />
      <input type="text" id="jpre" name="jpre" maxlength="5" pattern="[a-zA-Z0-9]+" required /><br /><br />

      <!--First name-->
      <label for="fname">First name</label><br />
      <input type="text" id="fname" name="fname" maxlength="20" required /><br /><br />

      <!--Last name-->
      <label for="lname">Last name</label><br />
      <input type="text" id="lname" name="lname" maxlength="20" required /><br /><br />

      <!--Date of birth-->
      <label for="bday">Date of birth</label><br />
      <input type="date" id="bday" name="bday" required /><br /><br />

      <!--Gender-->
      <!--The requirements are using grouped and legend so you shouldn't change it into other type but better style it-->
      <fieldset>
        <legend>Gender</legend>
        <input type="radio" id="male" name="gender" value="Male" required />
        <label for="male">Male</label><br />
        <input type="radio" id="female" name="gender" value="Female" required />
        <label for="female">Female</label><br />
      </fieldset>
      <br />

      <!--Street address-->
      <label for="st-address">Street address</label><br />
      <input type="text" id="st-address" name="st-address" maxlength="40" required /><br /><br />

      <!--Suburb/town-->
      <label for="su-to">Suburb/town</label><br />
      <input type="text" id="su-to" name="su-to" maxlength="40" required /><br /><br />

      <!--State-->
      <label for="state">Choose your State</label><br />
      <select name="states" id="states" required>
        <option value="VIC">VIC</option>
        <option value="NSW">NSW</option>
        <option value="QLD">QLD</option>
        <option value="NT">NT</option>
        <option value="WA">WA</option>
        <option value="SA">SA</option>
        <option value="TAS">TAS</option>
        <option value="ACT">ACT</option>
      </select>
      <br /><br />

      <!--Postcode-->
      <label for="postcode">Postcode</label><br />
      <input type="text" name="postcode" maxlength="4" id="postcode" pattern="\d{4}" required /><br /><br />

      <!--Email-->
      <label for="email">Email</label><br />
      <input type="email" id="email" name="email" required /><br /><br />

      <!--Phone number-->
      <label for="phone">Phone number</label><br />
      <input type="tel" id="phone" name="phone" maxlength="12" required /><br /><br />

      <!--Skill-->

      <label class="checkbox">
        Problem solving
        <div>
            <input type="checkbox" id="skill" name="skills[]" value="Problem solving" class="checkbox__input" />
            <span class="checkbox__checkmark"></span>
        </div>
      </label>

      <label class="checkbox">
        Deep learning
        <div>
            <input type="checkbox" id="skill" name="skills[]" value="Deep learning" class="checkbox__input" />
            <span class="checkbox__checkmark"></span>
        </div>
     </label>

      <label class="checkbox">
        Critical thinking
        <div>
            <input type="checkbox" id="skill" name="skills[]" value="Critical thinking" class="checkbox__input" />
            <span class="checkbox__checkmark"></span>
        </div>
      </label>

      <label class="checkbox">
        Data engineering
        <div>
            <input type="checkbox" id="skill" name="skills[]" value="Data engineering" class="checkbox__input" />
            <span class="checkbox__checkmark"></span>
        </div>
      </label>

      <label class="checkbox">
        Machine learning
        <div>
            <input type="checkbox" id="skill" name="skills[]" value="Machine learning" class="checkbox__input" />
            <span class="checkbox__checkmark"></span>
        </div>
      </label>

      <label class="checkbox">
        Communication
        <div>
            <input type="checkbox" id="skill" name="skills[]" value="Communication" class="checkbox__input" />
            <span class="checkbox__checkmark"></span>
        </div>
      </label>

     <label class="checkbox">
        Big data analytics
        <div>
            <input type="checkbox" id="skill" name="skills[]" value="Big data analytics" class="checkbox__input" />
            <span class="checkbox__checkmark"></span>
        </div>
     </label>

     <label class="checkbox">
        Neural network architectures
        <div>
            <input type="checkbox" id="skill" name="skills[]" value="Neural network architectures" class="checkbox__input" />
            <span class="checkbox__checkmark"></span>
        </div>
     </label>

     <label class="checkbox">
        Natural language processing
        <div>
            <input type="checkbox" id="skill" name="skills[]" value="Natural language processing" class="checkbox__input" />
            <span class="checkbox__checkmark"></span>
        </div>
     </label>

     <label class="checkbox">
        Cloud knowledge
        <div>
            <input type="checkbox" id="skill" name="skills[]" value="Cloud knowledge" class="checkbox__input" />
            <span class="checkbox__checkmark"></span>
        </div>
     </label>

     <label class="checkbox">
        Teamwork
        <div>
            <input type="checkbox" id="skill" name="skills[]" value="Teamwork" class="checkbox__input" />
            <span class="checkbox__checkmark"></span>
        </div>
     </label>

     <label class="checkbox">
        Data visualization
        <div>
            <input type="checkbox" id="skill" name="skills[]" value="Data visualization" class="checkbox__input" />
            <span class="checkbox__checkmark"></span>
        </div>
     </label>

     <label class="checkbox">
        Linear algebra and Statistics
        <div>
            <input type="checkbox" id="skill" name="skills[]" value="Linear algebra and Statistics" class="checkbox__input" />
            <span class="checkbox__checkmark"></span>
        </div>
     </label>

     <label class="checkbox">
        Other
        <div>
            <input type="checkbox" id="skill" name="skills[]" value="Other" class="checkbox__input" />
            <span class="checkbox__checkmark"></span>
        </div>
     </label>

     <label for="other_skills">Other skills</label><br />
     <input type="text" id="other_skills" name="other_skills" class="resizedTextbox"
        placeholder="Enter your other skill here" />

      <!--Apply button-->
      <!--The apply button require input not hyperlink or other type-->
      <button class="btn btn-secondary" type="submit" value="Apply">
        Submit
      </button>
    </form>
  </section>

  <!--Footer-->
  <div class="divider-sm"></div>

  <?php include 'footer.inc'; ?>
</body>

</html>
<!-- 
(●っゝω・)っ～☆HELLO☆ 
-->