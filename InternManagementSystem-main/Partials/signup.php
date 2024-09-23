<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/signup.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <nav class="navbar">
        <div class="left-links">
            <a href="../index.php">Alpha Labs</a>
            <a href="internships.php">Internships</a>
            <a href="#">Courses</a>
            <a href="about.php">About us</a>
            <a href="certificateVal.php">Certificate Validator</a>
        </div>
        <div class="right-links">
            <a href="login.php">Signin</a>
            <a href="signup.php">Signup</a>
        </div>
    </nav>

    <div class="signup-section">
        <div class="signup-container">
          <div class="signup-box">
            <h1>Create an Account</h1>
            <form action="../Actions/signup.php" method="post" enctype="multipart/form-data">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>

                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone"><br>

                <label for="college">College:</label>
                <input type="text" id="college" name="college" required><br>

                <label for="current_year">Current Year of Studying:</label>
                <input type="number" id="current_year" name="current_year" required><br>

                <label for="passing_year">Year of Passing Out:</label>
                <input type="number" id="passing_year" name="passing_year" required><br>

                <label for="course">Course:</label>
                <input type="text" id="course" name="course" required><br>

                <label for="marks">Marks:</label>
                <input type="number" step="0.01" id="marks" name="marks" required><br>

                <label for="resume">Resume:</label>
                <input type="file" id="resume" name="resume" required accept=".pdf,.doc,.docx"><br>

                <input type="submit" value="Signup">
            </form>
            <div class="signup-options">
              <span>Already have an account?</span>
              <a href="./login.php">Login</a>
            </div>
          </div>
        </div>
      </div>
      
</body>
</html>