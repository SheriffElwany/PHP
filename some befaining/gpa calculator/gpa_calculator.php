<?php


if (isset($_POST['calculate_grade'])) {
  // code...
  $grade = $_POST['grade'];
  if (isset($_POST['grade'])) {

    if ($grade > 90 && $grade < 101) {
      // code...
      echo "Excllent";
    }
    if ($grade < 90 && $grade >= 80) {
      // code...
      echo "very good";
    }

    if ($grade < 80 && $grade >= 70) {
      // code...
      echo "Good";
    }

    if ($grade < 70 && $grade >= 60) {
      // code...
      echo "Pass";
    }


    if ($grade < 60 && $grade > 0) {
      // code...
      echo "Faild";

    }
    if ($grade == 0) {
      // code...
      echo "oh my god didn't you rmember any thing at the exam :o  ";
      echo "it's seem that you were very busy";
    }

    if ($grade < 0 or $grade > 100) {
      // code...
      echo "Are you kidding me did you really get how it come " . $grade;
    }

    // code...
  }
  else {

    echo "enter your grade";
  }







}
else {
  echo "please enter your grade";
}



 ?>

<html>

<head> <title> gpa_calculator </title>
  <link rel="stylesheet" href="gpa_calculator.css">

</head>
<body>

<div class="gpa_form">

 <form action="gpa_calculator.php" method="POST">

    <center>
     grade: <br> <br>

      <input type="text" name="grade" placeholder="what is your grade" >
     <br> <br> <br>
     <input type="submit" name="calculate_grade" value="calculate">
  </center>



 </form>
</div>
</body>
 </html>
