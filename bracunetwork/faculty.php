<?php include 'connection.php'; ?>
<?php

include 'connection.php';

if(isset($_POST['done'])){
 $fi = $_POST['fi'];
 $fn = $_POST['fn'];
 $cid = $_POST['cid'];
 $s = $_POST['s'];
 
 


 $queryy = "INSERT INTO `faculty`(`faculty_in`, `Faculty_name`, `course_id`, `section_num`) VALUES ('$fi','$fn','$cid','$s')";

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
            <br> <br> <br>
            <h1 class="display-6 text-center">BRACU Network (BUN)</h1>
            <h1 class="text-dark text-center"> Faculty Details </h1>
            </div>
        </div>
        
                <br>
                <a href = "home.php"> <button type="button" class="btn btn-dark">Home</button></a>
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal1"
                    data-whatever="@mdo">Add Faculty</button>
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
                                            <label for="inputEmail4">Faculty Initial</label>
                                            <input name="fi" type="text" class="form-control">
                                        </div>
                                        
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Faculty Name</label>
                                            <input name="fn" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Course Code</label>
                                            <input name="cid" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Course Section</label>
                                            <input name="s" type="number" class="form-control">
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
                

                    
                   
                
                            
                            <div class="modal-body">
                                    <table id="tabledata" class=" table table-striped table-dark">
                                    

                                            <tr class="bg-dark text-white text-center">

                                                <th> Faculty Intial </th>
                                                <th> Faculty Name </th>
                                                <th> Course Code </th>
                                                <th> Section Number </th> 
                                            
                        
                        
                        
                                            </tr>
                        
                        
                                            <?php
                       
                        
                        $qq = "SELECT * FROM `faculty` f  JOIN coursecode c on f.course_id=c.course_ID AND f.section_num=c.section_num";
                        
                        $show5 = mysqli_query($connection,$qq);
                        
                        while($res = mysqli_fetch_array($show5)){
                        ?>
                                            <tr class="text-center">
                                                <td>
                                                    <?php echo $res['faculty_in'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['Faculty_name'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['course_id']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['section_num'];  ?>
                                                </td>
                                            </tr>
                        
                                            <?php 
                        }
                        ?>
                        
                       
                                         
                                        
                        
                            </div>

                        </div>
                    </div>
                </div>
                
                
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