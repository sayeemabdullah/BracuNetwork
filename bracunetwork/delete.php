<?php

include 'connection.php';

if(isset($_POST['done'])){
$id = $_POST['inputID'];

$q = " DELETE FROM `student` WHERE student_ID = '$id' ";

mysqli_query($connection, $q);



 header('location:student.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="col-lg-6 m-auto">



        <form method="post">
                                        
                                        
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Student id</label>
                                            <input name="inputID" type="text" class="form-control" placeholder="Student ID">
                                        </div>
                                        
            <div class="modal-footer ml-auto">
                <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
            </div>
        </form>




    </div>
</body>

</html>