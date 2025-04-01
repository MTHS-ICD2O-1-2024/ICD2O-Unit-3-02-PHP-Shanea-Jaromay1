<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Volume of a Pyramid, in PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Shanea Jaromay" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-yellow.min.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Volume of a Pyramid, in PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <script src="./js/script.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Volume of a Pyramid, in PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/pyramid.png" alt="pyramid image" />
      </div>
      <br />
      <div class="name">Formula</div>
      <div class="formula">A = [ ( a + b ) / 2] x h</div>
      <div class="page-content">Please enter your employement information.</div>
      <div class="page-content-answer"></div>
      <form action="answer.php" method="GET">
        <label>Length: </label>
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="length-of-pyramid" step="0.01" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="length-of-pyramid">Length here.. (mm)</label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a number.</span>
        </div>
        <label>mm</label>
        <br />
        <label>Width: </label>
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="width-of-pyramid" step="0.01" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="width-of-pyramid">Width here.. (mm)</label>
          <!-- class "mdl-textfield__error" -->
          <span class="mdl-textfield__error">Input is not a number.</span>
        </div>
        <label>mm</label>
        <br />
        <label>height: </label>
        <div class="mdl-textfield mdl-js-textfield">
          <!-- input pattern attribute -->
          <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="height-of-pyramid" step="0.01" />
          <!-- mdl-textfield__label -->
          <label class="mdl-textfield__label" for="height-of-pyramid">Height here.. (mm)</label>
          <span class="mdl-textfield__error">Input is not a number.</span>
        </div>
        <label>mm</label>
        <br />
        <!-- Accent-colored raised button with ripple -->
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          Calculate
        </button>
      </form>
  </div>
  </main>
  </div>
</body>

</html>