<?php
   include('session.php');
?>

<?php include 'connection.php'; ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">


        <link rel="stylesheet" href="styles.css">
    <title>BRACU Network (BUN)</title>

</head>

<body>


    
    <div class="container mt-5">
    <div class="row">
            <div class="col-sm-5 offset-3">
                <img src="bracu.png" class="img-thumbnail" alt="Cinque Terre">
                <br><br>
                <h2 class="text-center font-weight-bold border-danger display-22">BRACU Network(BUN)</h2>
                <br>
            </div>
        </div>
        <a href="student.php"><button type="button"  class="btn btn-primary btn-md btn-block">Student Information</button></a>
        <a href="taken_course.php"><button type="button" class="btn btn-disabled primary btn-md btn-block">Course Information</button></a>
        <a href="faculty.php"><button type="button" class="btn btn-primary btn-md btn-block">Faculty Information</button></a>
        <a href="club.php"><button type="button" class="btn btn-disabled primary btn-md btn-block">Club Information</button></a>
        <a href="blood_donation.php"><button type="button" class="btn btn-primary btn-md btn-block">Blood Donation Information</button></a>
        <a href="ridesharing.php"><button type="button" class="btn btn-disabled primary btn-md btn-block">Ride Sharing Information</button></a>
        <a href="skill_search.php"><button type="button" class="btn btn-primary btn-md btn-block">Skill Search</button></a><br>
    </div>

     <?php


?> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>