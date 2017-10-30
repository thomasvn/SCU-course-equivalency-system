<?php
  require 'library.php';

  if (!isset($_COOKIE["advisor"])) {
    redirect("advisorlogin.html");
  }
?>

<html lang="en">
<head>
  <title>SCU</title>
  <meta charset="utf-8"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>

<body>
  <header class="container">
    <div class="row">
      <h1 class="col-sm-16">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/a/ad/Santa_Clara_U_Seal.svg/1024px-Santa_Clara_U_Seal.svg.png" height="60" width="60" alt="SCU-Seal">
        Santa Clara University
      </h1>
      <nav class="col-sm-4 text-right">
        <a class="btn btn-nav" href="index.html" role="button"><b>HOME</b></a>
        <a class="btn btn-nav" href="about.html" role="button"><b>ABOUT</b></a>
        <a class="btn btn-nav" href="contact.html" role="button"><b>CONTACT</b></a>
      </nav>
    </div>
  </header>

  <section class="jumbotron">
    <div class="tranbox">
      <div class="container">
        <div class="row">
          <form class="col-sm-3" name="advisorsearchscu" method="post" action="advisorsearchscu.php">
            <h4>Show All Course Equivalencies</h4>
            <!-- <label> SCU Course Name Abbreviation: </label><br> -->
            <!-- <input name="SCUCourseAbbrv" id="SCUCourseAbbrv" type="text" placeholder="COEN12" required><br> -->
            <button name="submit" id="submit" class="btn btn-success" type="submit">SHOW</button>
          </form>

          <br><br>

          <form class="col-sm-3" name="addequivalency" method="post" action="addequivalency.php">
            <h4>Add Equivalency</h4>
            Course Title:
            <br>
            <input type="text" name="coursetitle" id="coursetitle" required><br>
            Course Abbreviation:
            <br>
            <input type="text" name="courseabbrv" id="courseabbrv" required><br>
            School Taken:
            <br>
            <input type="text" name="schooltaken" id="schooltaken" required><br>
            SCU Course Title:
            <br>
            <input type="text" name="scucoursetitle" id="scucoursetitle" required><br>
            SCU Course Abbreviation:
            <br>
            <input type="text" name="scucourseabbrv" id="scucourseabbrv" required><br>
            Equivalent?:
            <br>
            <input type="radio" name="gender" value="yes" id="gender" checked> Yes
            <input type="radio" name="gender" value="no"> No
            <br>
            Notes:
            <br>
            <input type="text" name="notes" id="notes" required>
            <br>
            <button name="Submit" id="submit" class="btn btn-success" type="submit">Submit</button>
          </form>

          <br><br>

          <form class="col-sm-3" name="modifyequivalency" method="post" action="modifyequivalency.php">
            <h4> Modify Existing Equivalency Record</h4>
            Equivalency ID<br>
            <input type="text" name="equivalencyid" id="equivalencyid" required><br>
            Equivalent:<br>
            <input type="radio" name="gender" value="1" id="gender" checked> Yes
            <input type="radio" name="gender" value="0"> No <br>
            Notes:<br>
            <input type="text" name="notes" id="notes" required><br>
            <button name="Submit" id="submit" class="btn btn-success" type="submit">Submit</button>
          </form>

          <br><br>

          <form class="col-sm-3" name="deleteequivalency" method="post" action="deleteequivalency.php">
            <h4> ID of course equivalency to be deleted</h4>
            <input name="courseid" id="courseid" type="text" placeholder="course id" required>
            <br/>
            <button name="Submit" id="submit" class="btn btn-success" type="submit">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <footer class = "container">
    <div class="row">
      <p class="col-sm-4">
        &copy; 2017 Santa Clara University
      </p>
      <ul class="col-sm-8">
        <li class="col-sm-1">
          <a href="https://twitter.com/SantaClaraUniv?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
            <img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/twitter.svg" alt="SCU Twitter">
          </a>
        </li>
        <li class="col-sm-1">
          <a href="https://www.facebook.com/SantaClaraUniversity/">
            <img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/facebook.svg" alt="SCU Facebook">
          </a>
        </li>
        <li class="col-sm-1">
          <a href="https://www.instagram.com/santaclarauniversity/?hl=en">
            <img src="https://s3.amazonaws.com/codecademy-content/projects/make-a-website/lesson-4/instagram.svg" alt="SCU Instagram">
          </a>
        </li>
      </ul>
    </div>
  </footer>
</body>
</html>
