<?php include 'connection.php'; ?>

<?php

include 'connection.php';

if(isset($_POST['done'])){


 $id = $_POST['inputID'];
 $name = $_POST['inputName'];
 $dep = $_POST['inputDepartment'];
 $gen = $_POST['inputGender'];
 $pn = $_POST['inputNumber'];
 $eid = $_POST['inputEmail'];
 
 

 $query1 = " INSERT INTO `student`(`student_ID`,`name`,`department`,`gender`,`phone_number`,`email_id`) VALUES ('$id','$name', '$dep', '$gen', '$pn',  '$eid')";

  $query = mysqli_query($connection,$query1);


}
?>

<!doctype html>
<html lang="en">

<head>

<style>
body  {
    background-image: url("paper.gif");
    background-color: #FFF6EB;
}
</style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <title>Student info</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-3">
            <img src="bracu.png" class="img-thumbnail" alt="Cinque Terre">
                <h1 class="display-6 text-center">BRACU Network (BUN)</h1>
            </div>
        </div>
        <div class="container">
            <div class="col-lg-12">
                <br><br>
                <h1 class="text-bold text-center"> Students Information </h1>
                <br>
                <a href = "home.php"> <button type="button" class="btn btn-dark">Home</button></a>
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal"
                    data-whatever="@mdo">Insert Student Data</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Insert Student Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                
                            </div>
                            <div class="modal-body">
                                <form method="post">
                                        
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Student ID</label>
                                            <input name="inputID" type="text" class="form-control" placeholder="Student ID">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Student name</label>
                                            <input name="inputName" type="text" class="form-control" placeholder="Student Name">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Department</label>
                                            <input name="inputDepartment" type="text" class="form-control" placeholder="Department">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Gender</label>
                                            <input name="inputGender" type="text" class="form-control" placeholder="Gender">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Phone Number</label>
                                            <input name="inputNumber" type="text" class="form-control" placeholder="Phone Number">
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="inputEmail4">Email ID</label>
                                            <input name="inputEmail" type="text" class="form-control" placeholder="Email ID">
                                        </div>
                                    
                                    <div class="modal-footer ml-auto">
                                        <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                



                <div class= container>
                <div class="col-sm-6 offset-9">
                
                <form class="form-inline" method="get" action="search.php">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputPassword2" class="sr-only">Search by ID</label>
                    <input type="text" class="form-control" name="searchFor" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-dark mb-2">Search by ID</button>
             </form>

                    
                

                                        </div>
                                    </div>





         </div>
</div>

                <table id="tabledata" class=" table table-striped table-dark">

                    <tr >
                        <th> ID </th>
                        <th> Name </th>
                        <th> Department </th>
                        <th> Gender </th>
                        <th> Phone Number</th>
                        <th> Email ID </th>
                        <th> Update </th>
                        <th> Delete </th>


                    </tr>


                    <?php


$q = "select * from student group by student_ID";

$show = mysqli_query($connection,$q);

while($res = mysqli_fetch_array($show)){
?>
                    <tr class="text-center">
                        
                        <td>
                            <?php echo $res['student_ID'];  ?>
                        </td>
                        <td>
                            <?php echo $res['Name'];  ?>
                        </td>
                        <td>
                            <?php echo $res['department'];  ?>
                        </td>
                        <td>
                            <?php echo $res['gender'];  ?>
                        </td>
                        <td>
                            <?php echo $res['phone_number'];  ?>
                        </td>
                        <td>
                            <?php echo $res['email_id'];  ?>
                        </td>
                        
                        <td> <button class="btn-warning btn"> <a href="update.php?id=<?php echo $res['student_ID']; ?>" class="text-dark">
                                    Update </a> </button> </td>
                        <td> <button class="btn-danger btn"> <a href="delete.php?id=<?php echo $res['student_ID']; ?>" class="text-dark">
                                    Delete </a> </button> </td>

                    </tr>

                    <?php 
}
?>

                </table>

            </div>
        </div>


    </div>





                <?php


?>




    <script type="text/javascript">
        $(document).ready(function () {
            $('#tabledata').DataTable();
        })
    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>