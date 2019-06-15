<?php include 'connection.php'; ?>
<?php

include 'connection.php';

if(isset($_POST['done'])){
 $id = $_POST['id'];
 $cid = $_POST['cid'];
 $dept = $_POST['dept'];
 $des = $_POST['des'];

 $queryy = "INSERT INTO `club_joins`(`student_ID`, `club_id`,`club_dept`,`club_designation`) VALUES ('$id',' $cid','$dept','$des')";

  $queryy2 = mysqli_query($connection,$queryy);


}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <title>BRACU Network (BUN)</title>
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
                <h1 class="text-dark text-center"> Club Details </h1>
                <div class="alert alert-warning" role="alert">
                <h4 class="alert-heading"><strong>Club IDs:</strong></h4> 
                    1.BUCUC <br>
                    2.BUCSE <br>
                    3.ROBU <br>
                    4.BUCC <br> 
                    
</div>
            
                <br>
                <a href = "home.php"> <button type="button" class="btn btn-dark">Home</button></a>
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal1"
                    data-whatever="@mdo" style="float: right;" >Add Student</button>
                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                         <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Insert Info</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form method="post">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Student ID</label>
                                            <input name="id" type="text" class="form-control">
                                        </div>
                                        
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Club ID</label>
                                            <input name="cid" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Club Department</label>
                                            <input name="dept" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Club Designation</label>
                                            <input name="des" type="text" class="form-control">
                                        </div>
                                    </div>
                                    
                                    <div class="modal-footer ml-auto">
                                        <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                

                    

                 <!--BUCUC-->

                    
                            
                            <div class="modal-body">
                                    <table id="tabledata" class=" table table-striped table-dark">
                                    

                                            <tr class="bg-dark text-white text-center">

                                                <th> Student ID </th>
                                                <th> Student Name </th>
                                                <th> Student Phone Number </th>
                                                <th> Student Email ID </th>
                                                <th> Club Department </th>
                                                <th> Club Designation </th> 
                        
                        
                        
                                            </tr>
                        
                        
                                            <?php
                       
                        
                        $qq = "SELECT * FROM `student` s INNER JOIN club_joins c on s.student_ID=c.student_ID HAVING club_id=1";
                        
                        $show5 = mysqli_query($connection,$qq);
                        
                        while($res = mysqli_fetch_array($show5)){
                        ?>
                                            <tr class="text-center">
                                                
                                                <td>
                                                    <?php echo $res['student_ID'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['Name'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['phone_number']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['email_id'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['club_dept'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['club_designation'];  ?>
                                                </td>
                        
                        
                        
                                            </tr>
                        
                                            <?php 
                        }
                        ?>
                        
                       
                                         
                                        
                        
                            </div>

                        </div>
                    </div>
                </div>
                
                <h3 class="text-bold text-left"> BUCuC: </h3>
<!--BUCSE-->

                    
                            
                    <div class="modal-body">
                                    <table id="tabledata" class=" table table-striped table-dark">
                                    

                                            <tr class="bg-dark text-white text-center">

                                                <th> Student ID </th>
                                                <th> Student Name </th>
                                                <th> Student Phone Number </th>
                                                <th> Student Email ID </th>
                                                <th> Club Department </th>
                                                <th> Club Designation </th> 
                        
                        
                        
                                            </tr>
                        
                        
                                            <?php
                       
                        
                        $qq = "SELECT * FROM `student` s INNER JOIN club_joins c on s.student_ID=c.student_ID HAVING club_id=2";
                        
                        $show5 = mysqli_query($connection,$qq);
                        
                        while($res = mysqli_fetch_array($show5)){
                        ?>
                                            <tr class="text-center">
                                                
                                                <td>
                                                    <?php echo $res['student_ID'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['Name'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['phone_number']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['email_id'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['club_dept'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['club_designation'];  ?>
                                                </td>
                        
                        
                        
                                            </tr>
                        
                                            <?php 
                        }
                        ?>
                        
                       
                                         
                                        
                        
                            </div>

                        </div>
                    </div>
                </div>
                
                <h3 class="text-bold text-left"> BUCSE: </h3>
               <!--ROBU-->

                    
                            
                    <div class="modal-body">
                                    <table id="tabledata" class=" table table-striped table-dark">
                                    

                                            <tr class="bg-dark text-white text-center">

                                                <th> Student ID </th>
                                                <th> Student Name </th>
                                                <th> Student Phone Number </th>
                                                <th> Student Email ID </th>
                                                <th> Club Department </th>
                                                <th> Club Designation </th> 
                        
                        
                        
                                            </tr>
                        
                        
                                            <?php
                       
                        
                        $qq = "SELECT * FROM `student` s INNER JOIN club_joins c on s.student_ID=c.student_ID HAVING club_id=3";
                        
                        $show5 = mysqli_query($connection,$qq);
                        
                        while($res = mysqli_fetch_array($show5)){
                        ?>
                                            <tr class="text-center">
                                                
                                                <td>
                                                    <?php echo $res['student_ID'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['Name'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['phone_number']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['email_id'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['club_dept'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['club_designation'];  ?>
                                                </td>
                        
                        
                        
                                            </tr>
                        
                                            <?php 
                        }
                        ?>
                        
                       
                                         
                                        
                        
                            </div>

                        </div>
                    </div>
                </div>
                
                <h3 class="text-bold text-left"> ROBU: </h3> 
                <!--BUCC-->

                    
                            
                    <div class="modal-body">
                                    <table id="tabledata" class=" table table-striped table-dark">
                                    

                                            <tr class="bg-dark text-white text-center">

                                                <th> Student ID </th>
                                                <th> Student Name </th>
                                                <th> Student Phone Number </th>
                                                <th> Student Email ID </th>
                                                <th> Club Department </th>
                                                <th> Club Designation </th> 
                        
                        
                        
                                            </tr>
                        
                        
                                            <?php
                       
                        
                        $qq = "SELECT * FROM `student` s INNER JOIN club_joins c on s.student_ID=c.student_ID HAVING club_id=4";
                        
                        $show5 = mysqli_query($connection,$qq);
                        
                        while($res = mysqli_fetch_array($show5)){
                        ?>
                                            <tr class="text-center">
                                                
                                                <td>
                                                    <?php echo $res['student_ID'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['Name'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['phone_number']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['email_id'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['club_dept'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['club_designation'];  ?>
                                                </td>
                        
                        
                        
                                            </tr>
                        
                                            <?php 
                        }
                        ?>
                        
                       
                                         
                                        
                        
                            </div>

                        </div>
                    </div>
                </div>
                
                <h3 class="text-bold text-left"> BUCC: </h3>
            </div>
        </div>


    </div>






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