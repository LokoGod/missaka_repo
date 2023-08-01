<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Css file -->
    <link rel="stylesheet" href="styles/style.css" />

    <!-- Bootstrap -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous" />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
      crossorigin="anonymous"></script>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lexend:wght@300;400;700&display=swap"
      rel="stylesheet" />

    <!-- Fontawesome cdn link -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />

    <title>Feedback</title>
  </head>

  <body>
    <nav>
      <label for="name" id="logo-text">
        <a href="#">Grinny</a>
      </label>

      <input type="checkbox" id="check" />
      <label for="check" class="toggle">
        <i class="fa-solid fa-bars-staggered"></i>
      </label>

      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="features.html">Features</a></li>
        <li><a href="pricing.html">Pricing</a></li>
        <li><a href="contactUs.html">Contact</a></li>
        <li><a href="aboutUs.html">About</a></li>
        <li><a href="feedback.php" class="active">Features</a></li>
      </ul>

      <div id="account-container">
        <a href="register.php">Register</a>
        <a href="logIn.php">Login</a>
      </div>
    </nav>

    <br><br>
    <h2 class="text-center">Tell us what you think of our product</h2>
    <p class="text-center">We could use your feedback to make our LLM better for everyone</p>

    <div class="container text-center">
      <form id="feedback-form" action="feedback.php" method="post">
      <br><br><br><br>
        <textarea class="form-control" id="feedback-text" name="feedback"
          rows="4" cols="50" placeholder="We'd love to hear your feedback!"></textarea><br>
        <input class='btn btn-primary' type="submit" value="Submit">
      </form>

      <style>
        .container {
        display: flex;
        justify-content: center;
      }

      #feedback-form {
        max-width: 400px; /* Adjust the maximum width to your preference */
      }

    </style>
    </div>
    <br><br>

    <h3 class="text-center">Our Testimonials</h3><br>

    <div class="row justify-content-center text-center">
      <div class="col-sm-3 mb-3 mb-sm-0 mx-auto">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Secure User Authentication</h5>
            <p class="card-text">
              Verification of user identity using robust and encrypted methods.
            </p>
            <i class="fa-solid fa-user fa-2xl" style="color: #5A4FDC;"></i>
          </div>
        </div>
      </div>
      <div class="col-sm-3 mb-3 mb-sm-0 mx-auto">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Data Encryption</h5>
            <p class="card-text">
              Converting plaintext into ciphertext to secure sensitive information.
            </p>
            <i class="fa-solid fa-user fa-2xl" style="color: #5A4FDC;"></i>
          </div>
        </div>
      </div>
      <div class="col-sm-3 mb-3 mb-sm-0 mx-auto">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Firewalls and Network Security</h5>
            <p class="card-text">
              Network protection through filtering and monitoring to prevent unauthorized access.
            </p>
            <i class="fa-solid fa-user fa-2xl" style="color: #5A4FDC;"></i>
          </div>
        </div>
      </div>
    </div>
  </body>
  <br /><br />

  <footer>
    <div id="footer-name">
      <h2>Grinny</h2>
      <p>
        Your Safety is Our Priority: Discover the Secure World of Our LLM
        Program!
      </p>
      <div id="footer-social-icon">
        <i class="fa-brands fa-instagram"></i>
        <i class="fa-brands fa-twitter"></i>
        <i class="fa-brands fa-linkedin"></i>
        <i class="fa-brands fa-facebook"></i>
      </div>
    </div>

    <div class="footer-link"></div>

    <div class="footer-link">
      <h4>About Us</h4>
      <div>
        <a href="aboutUs.html">Projects</a>
        <a href="aboutUs.html">Strategies</a>
        <a href="aboutUs.html">Press</a>
        <a href="aboutUs.html">Mission</a>
      </div>
    </div>
    <div class="footer-link">
      <h4>Support</h4>
      <div>
        <a href="contactUs.html">Developer</a>
        <a href="contactUs.html">Support</a>
        <a href="contactUs.html">Customer Service</a>
        <a href="contactUs.html">Get started</a>
        <a href="contactUs.html">Guide</a>
      </div>
    </div>
  </footer>





    <?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the data from the textarea
    $feed = $_POST["feed"];

    // Validate and sanitize the data (optional but recommended)
    // htmlspecialchars() helps prevent XSS (Cross-Site Scripting) attacks
    $feed = htmlspecialchars($feed);

    // Include the database connection file
    require_once "db_connection.php";

    // Insert the data into the database
    try {
    // Prepare the SQL statement with a placeholder
    $stmt = $conn->prepare("INSERT INTO feedback (idfeedback, feedback) VALUES (:feed)");

    // Bind the data to the placeholder
    $stmt->bindParam(':feed', $feed);

    // Execute the SQL statement
    $stmt->execute();

    // Display a success message
    echo "Feedback recieved successfully.";
    } catch (PDOException $e) {
    // Display an error message if something went wrong
    echo "Error: " . $e->getMessage();
    }

    // Close the database connection
    $conn = null;
    }
    ?>

  </body>
</html>