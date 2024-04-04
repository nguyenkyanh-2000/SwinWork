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

  <title>SwinWork | Enhancements</title>
  <link rel="stylesheet" href="./styles/style.css" />
</head>
<!--Body-->

<body>
  <?php include 'navbar.inc'; ?>

  <header class="header">
    <div class="header__heading-container">
      <h1 class="header__heading">Enhancements</h1>
    </div>
  </header>

  <?php include 'navbar-solid.inc'; ?>

  <div class="divider"></div>

  <!--Enhancements-->

  <section class="enhancements">
    <section class="job-postings">
      <ol>
        <li>
          <h2>Enhancement 1: Sliding navigation menu.</h2>
          <h3>What:</h3>
          <ul>
            <li>A sliding menu using pure HTML and CSS.</li>
            <li>Optimized for smaller devices.</li>
            <li>Has an animated button.</li>
            <li>Has (animated) hyperlinks to other sites on the website.</li>
          </ul>
          <h3>How:</h3>
          <ul>
            <li>
              <p>
                "navigation__checkbox": This is a hidden checkbox input
                element. Its purpose is to control the state of the navigation
                menu. When checked, it indicates that the menu should be open.
              </p>
            </li>
            <li>
              <p>
                "navigation__button": This is a button element that is used to
                toggle the navigation menu. It's typically a button that users
                can click or tap to open or close the menu.
              </p>
            </li>
            <li>
              <p>
                "navigation__nav": This represents the navigation menu itself.
                It's initially hidden (opacity: 0 and width: 0) and positioned
                fixed to cover the entire viewport (height: 100vh). When the
                checkbox is checked, it transitions to become visible
                (opacity: 1) and takes up the full width of the viewport
                (width: 100%).
              </p>
              <ul>
                <li>
                  <p>
                    "navigation__list": This is the list of navigation items
                    within the menu. It's positioned absolutely at the center
                    of the menu and styled to be centered both horizontally
                    and vertically.
                  </p>
                </li>
              </ul>
            </li>
            <li>
              <p>
                "navigation__checkbox:checked ~ .navigation__nav": This
                selector applies styles to the navigation menu when the
                checkbox is checked. It sets the opacity to 1 and the width to
                100%, effectively making the menu visible and taking up the
                entire viewport.
              </p>
            </li>
            <li>
              <p>
                "navigation__icon": This represents the icon used for the
                toggle button. It consists of three horizontal lines (commonly
                known as a "hamburger" icon).
              </p>
              <ul>
                <li>
                  <p>
                    "navigation__icon::before": These pseudo-elements create
                    additional lines to form the hamburger icon. They are
                    positioned above and below the main icon and styled to
                    create the desired appearance of the icon.
                  </p>
                </li>
                <li>
                  <p>
                    "navigation__checkbox:checked + .navigation__button
                    .navigation__icon": This selector applies styles to the
                    icon within the toggle button when the checkbox is
                    checked. It removes the background color of the icon.
                  </p>
                </li>
                <li>
                  <p>
                    "navigation__checkbox:checked + .navigation__button
                    .navigation__icon::before": These selectors adjust the
                    rotation of the pseudo-elements to transform the hamburger
                    icon into a close icon when the checkbox is checked.
                  </p>
                </li>
              </ul>
            </li>
          </ul>
          <h3>Where:</h3>
          <ul>
            <li>Resize the browser to smaller devices.</li>
            <li>
              Click on the hamburger icon on the navigation bar (on all
              sites).
            </li>
            <li>Enjoy!</li>
          </ul>
          <div class="divider-sm"></div>
        </li>

        <li>
          <h2>Enhancement 2: Timetable</h2>
          <h3>What:</h3>
          <ul>
            <li>A time table using pure HTML and CSS.</li>
            <li>Optimized for smaller devices.</li>
            <li>Hoverable.</li>
          </ul>
          <h3>How:</h3>
          <ul>
            <li>
              <p>
                .timetable: This class is applied to the container element for the timetable.
                display: grid;: Sets the display property to grid, indicating that the container will use CSS Grid
                layout.
                grid-template-areas: Defines the layout of the grid areas within the timetable container. It specifies
                two rows and two columns: an empty cell in the top-left corner, a row for displaying week names, a
                column for displaying time intervals, and the main content area.
                grid-template-columns: Sets the width of the columns in the grid. In this case, it specifies a width of
                120px for the week column.
                grid-template-rows: Sets the height of the rows in the grid. In this case, it specifies a height of 60px
                for the time row.
                width, padding, height, resize, overflow-x: Various properties for controlling the size, padding, and
                scrolling behavior of the timetable container.
              </p>
            </li>
            <li>
              <p>
                ".timetable .accent-pink-gradient and .timetable .accent-purple-gradient: These classes are applied to
                elements within the timetable to give them a gradient background with a transition effect on hover.
                display: flex;: Sets the display property to flex, allowing for flexible layout of child elements.
                width and height: Sets the dimensions of the elements to 100% of their container.
                background: Applies a linear gradient background color.
                transition: Defines the transition effect for the box shadow and transform properties, making them
                animate smoothly over a duration of 0.2 seconds when the element is hovered.
                :hover: Specifies the styles to apply when the element is hovered, including a box shadow and a scaling
                effect.
              </p>
            </li>
            <li>
              <p>
                ".timetable .weekend: This class is applied to elements representing weekends within the timetable and
                defines their background and text color.
              </p>
              <ul>
                <li>
                  <p>
                    ".timetable .week-names and .timetable .time-interval: These classes are applied to grid areas
                    within the timetable for displaying week names and time intervals, respectively.
                    grid-area: Specifies which grid area the element occupies within the timetable.
                    display: grid;: Sets the display property to grid for nested grids.
                    grid-template-columns and grid-template-rows: Defines the number and size of columns and rows in the
                    nested grids.
                  </p>
                </li>
              </ul>
            </li>
            <li>
              <p>
                ".timetable .content: This class is applied to the main content area of the timetable.
                grid-area: Specifies the grid area for the content.
                display: grid;: Sets the display property to grid for the content grid.
                grid-template-rows and grid-template-columns: Defines the number and size of rows and columns in the
                content grid.
              </p>
            </li>
            <li>
              <p>
                ".timetable .content > div: This selector targets the div elements within the content area and applies
                box shadow styles to create borders between cells.
              </p>
            </li>
          </ul>
          <h3>Where:</h3>
          <ul>
            <li>About/Sechedule</li>
            </br>
            <li>
              <a class="btn btn-outline" href="about.php#timetable-hyperlink">Go there</a>
            </li>
          </ul>
        </li>
      </ol>
    </section>
  </section>
  <!--Footer-->
  <div class="divider-sm"></div>

  <?php include 'footer.inc'; ?>
</body>

</html>