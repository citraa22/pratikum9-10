<!DOCTYPE html>
<html>
<head>
  <title>Student Registration</title>
</head>
<body>
  <h1>Register Student</h1>

  <form method="post" action="">
    <label>Name:</label><br>
    <input type="text" name="name" value="Citra"><br><br>

    <label>Age:</label><br>
    <input type="number" name="age"><br><br>

    <label>Major:</label><br>
    <input type="text" name="major"><br><br>

    <input type="submit" value="Register">
  </form>

  <hr>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $student = [
        "name" => htmlspecialchars($_POST["name"]),
        "age" => $_POST["age"],
        "major" => htmlspecialchars($_POST["major"])
      ];

      echo "<h3>Registration Successful!</h3>";
      echo "<p>Name: {$student['name']}</p>";
      echo "<p>Age: {$student['age']}</p>";
      echo "<p>Major: {$student['major']}</p>";
    }
  ?>
</body>
</html>
