<?php include 'connection.php'; ?>
<?php

include 'connection.php';

if(isset($_POST['done'])){
 $id = $_POST['id'];
 $bg = $_POST['bg'];
 $ld = $_POST['ld'];
 $btid = $_POST['btid'];


 $queryy = "INSERT INTO `blood_donation`(`blood_ID`, `blood_group`,`last_donation`,`bloodtype_id`) VALUES ('$id',' $bg','$ld','$btid')";

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
                <h1 class="text-dark text-center"> Blood Donation Details </h1>
                <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Blood Group ID!</h4>
                <p>1-> A+ <br>
                    2-> A- <br>
                    3-> B+ <br>
                    4-> B- <br>
                    5-> AB+ <br>
                    6-> AB- <br>
                    7-> O+ <br>
                    8-> O-</p>
                <hr>
                <p class="mb-0">Make sure you use the correct ID.</p>
                </div>
                <br>
                <a href = "home.php"> <button type="button" class="btn btn-dark">Home</button></a>
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModal1"
                    data-whatever="@mdo" style="float: right;" >Add Blood Donor</button>
                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                         <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Insert Student ID and Blood Group</h5>
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
                                            <label for="inputEmail4">Blood Group</label>
                                            <input name="bg" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Last Donation Date</label>
                                            <input name="ld" type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="inputEmail4">Blood Type ID</label>
                                            <input name="btid" type="text" class="form-control">
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
                

                    

                 <!-- A+-->

                    
                            
                            <div class="modal-body">
                                    <table id="tabledata" class=" table table-striped table-dark">
                                    

                                            <tr class="bg-dark text-white text-center">

                                                <th> Student ID </th>
                                                <th> Student Name </th>
                                                <th> Student Phone Number </th>
                                                <th> Last Donation Date </th> 
                                                <th> Blood Type </th>
                                                
                        
                        
                        
                                            </tr>
                        
                        
                                            <?php
                       
                        
                        $qq = "SELECT * FROM `student` s INNER JOIN blood_donation b on s.student_ID=b.blood_id HAVING bloodtype_id=1";
                        
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
                                                    <?php echo $res['last_donation'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['blood_group'];  ?>
                                                </td>
                                                
                        
                        
                        
                                            </tr>
                        
                                            <?php 
                        }
                        ?>
                        
                       
                                         
                                        
                        
                            </div>

                        </div>
                    </div>
                </div>
                
                <h3 class="text-bold text-left"> A+ Blood List: </h3>

                <!-- A- -->
                        
                    
                            <div class="modal-body">
                            <table id="tabledata" class=" table table-striped table-dark">

                                            <tr class="bg-dark text-white text-center">

                                                <th> Student ID </th>
                                                <th> Student Name </th>
                                                <th> Student Phone Number </th>
                                                <th> Last Donation Date </th> 
                                                <th> Blood Type </th>
                                                
                        
                        
                        
                                            </tr>
                        
                        
                                            <?php
                       
                        
                        $qq = "SELECT * FROM `student` s INNER JOIN blood_donation b on s.student_ID=b.blood_id HAVING bloodtype_id=2";
                        
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
                                                    <?php echo $res['last_donation'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['blood_group'];  ?>
                                                </td>
                                                
                        
                        
                        
                                            </tr>
                        
                                            <?php 
                        }
                        ?>
                        
                       
                                         
                                        
                        
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <br>
                <h3 class="text-bold text-left"> A- Blood List: </h3>
                 
                  <!-- B+ -->

                    
                            <div class="modal-body">
                            <table id="tabledata" class=" table table-striped table-dark">

                                            <tr class="bg-dark text-white text-center">

                                                <th> Student ID </th>
                                                <th> Student Name </th>
                                                <th> Student Phone Number </th>
                                                <th> Last Donation Date </th> 
                                                <th> Blood Type </th>
                                                
                        
                        
                        
                                            </tr>
                        
                        
                                            <?php
                       
                        
                        $qq = "SELECT * FROM `student` s INNER JOIN blood_donation b on s.student_ID=b.blood_id HAVING bloodtype_id=3";
                        
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
                                                    <?php echo $res['last_donation'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['blood_group'];  ?>
                                                </td>
                                                
                        
                        
                        
                                            </tr>
                        
                                            <?php 
                        }
                        ?>
                        
                       
                                         
                                        
                        
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <br>
                <h3 class="text-bold text-left"> B+ Blood List: </h3>
                
                <!-- B- -->

                    
                            <div class="modal-body">
                            <table id="tabledata" class=" table table-striped table-dark">

                                            <tr class="bg-dark text-white text-center">

                                                <th> Student ID </th>
                                                <th> Student Name </th>
                                                <th> Student Phone Number </th>
                                                <th> Last Donation Date </th> 
                                                <th> Blood Type </th>
                                                
                        
                        
                        
                                            </tr>
                        
                        
                                            <?php
                       
                        
                        $qq = "SELECT * FROM `student` s INNER JOIN blood_donation b on s.student_ID=b.blood_id HAVING bloodtype_id=4";
                        
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
                                                    <?php echo $res['last_donation'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['blood_group'];  ?>
                                                </td>
                                                
                        
                        
                        
                                            </tr>
                        
                                            <?php 
                        }
                        ?>
                        
                       
                                         
                                        
                        
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <br>
                <h3 class="text-bold text-left"> B- Blood List: </h3>
                
                <!-- AB+ -->

                   
                            <div class="modal-body">
                            <table id="tabledata" class=" table table-striped table-dark">

                                            <tr class="bg-dark text-white text-center">

                                                <th> Student ID </th>
                                                <th> Student Name </th>
                                                <th> Student Phone Number </th>
                                                <th> Last Donation Date </th> 
                                                <th> Blood Type </th>
                                                
                        
                        
                        
                                            </tr>
                        
                        
                                            <?php
                       
                        
                        $qq = "SELECT * FROM `student` s INNER JOIN blood_donation b on s.student_ID=b.blood_id HAVING bloodtype_id=5";
                        
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
                                                    <?php echo $res['last_donation'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['blood_group'];  ?>
                                                </td>
                                                
                        
                        
                        
                                            </tr>
                        
                                            <?php 
                        }
                        ?>
                        
                       
                                         
                                        
                        
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <br>
                <h3 class="text-bold text-left"> AB+ Blood List: </h3>
            
            <!-- AB- -->

                    
                            <div class="modal-body">
                            <table id="tabledata" class=" table table-striped table-dark">

                                            <tr class="bg-dark text-white text-center">

                                                <th> Student ID </th>
                                                <th> Student Name </th>
                                                <th> Student Phone Number </th>
                                                <th> Last Donation Date </th> 
                                                <th> Blood Type </th>
                                                
                        
                        
                        
                                            </tr>
                        
                        
                                            <?php
                       
                        
                        $qq = "SELECT * FROM `student` s INNER JOIN blood_donation b on s.student_ID=b.blood_id HAVING bloodtype_id=6";
                        
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
                                                    <?php echo $res['last_donation'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['blood_group'];  ?>
                                                </td>
                                                
                        
                        
                        
                                            </tr>
                        
                                            <?php 
                        }
                        ?>
                        
                       
                                         
                                        
                        
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <br>
                <h3 class="text-bold text-left"> AB- Blood List: </h3>


                <!-- O+ -->

                    
                            <div class="modal-body">
                            <table id="tabledata" class=" table table-striped table-dark">

                                            <tr class="bg-dark text-white text-center">

                                                <th> Student ID </th>
                                                <th> Student Name </th>
                                                <th> Student Phone Number </th>
                                                <th> Last Donation Date </th> 
                                                <th> Blood Type </th>
                                                
                        
                        
                        
                                            </tr>
                        
                        
                                            <?php
                       
                        
                        $qq = "SELECT * FROM `student` s INNER JOIN blood_donation b on s.student_ID=b.blood_id HAVING bloodtype_id=7";
                        
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
                                                    <?php echo $res['last_donation'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['blood_group'];  ?>
                                                </td>
                                                
                        
                        
                        
                                            </tr>
                        
                                            <?php 
                        }
                        ?>
                        
                       
                                         
                                        
                        
                            </div>

                        </div>
                    </div>
               </div>
               <br>
                <br>
                <h3 class="text-bold text-left"> O+ Blood List: </h3>
            
            
            <!-- O- -->

                    
                            <div class="modal-body">
                            <table id="tabledata" class=" table table-striped table-dark">

                                            <tr class="bg-dark text-white text-center">

                                                <th> Student ID </th>
                                                <th> Student Name </th>
                                                <th> Student Phone Number </th>
                                                <th> Last Donation Date </th> 
                                                <th> Blood Type </th>
                                                
                        
                        
                        
                                            </tr>
                        
                        
                                            <?php
                       
                        
                        $qq = "SELECT * FROM `student` s INNER JOIN blood_donation b on s.student_ID=b.blood_id HAVING bloodtype_id=8";
                        
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
                                                    <?php echo $res['last_donation'];  ?>
                                                </td>
                                                <td>
                                                    <?php echo $res['blood_group'];  ?>
                                                </td>
                                                
                        
                        
                        
                                            </tr>
                        
                                            <?php 
                        }
                        ?>
                        
                       
                                         
                                        
                        
                            </div>

                        </div>
                    </div>
                </div>
                <br>
                <br>
                <h3 class="text-bold text-left"> O- Blood List: </h3>
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