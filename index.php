<?php
    include 'connection.php';
?>


<html>
    <head>
        <title>user Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <style>
            .table-dsg{
                margin : 10% 15%;
            }
            .center {
                display: block;
                margin: 20px auto;
                width: 323px;
                height: 56px;
            }
            .form-control{
                margin: 10px 20px 10px 20px;
                width: 80%;
            }
        </style>
    </head>
    <body>
    <div class="container">
        <form action="" method="POST">
            <div class="table-dsg">
                <div style="width: 100%; height: 100px; border: 1px solid #DEE2E6;">
                    <tr>
                        <img class="center" src="https://tradewithmak.com/wp-content/uploads/2022/01/logo_banner_light_trans.png" alt="Trade with MAK logo">
                    </tr>
                </div>
                
                <table class="table table-hover table-responsive table-bordered">
                    <tr>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Address</th>
                        <th>Phone number</th>
                        <th>Email</th>
                        <th>Date of Birth</th>
                    </tr>
                    <?php
                        while($rows = $result->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?php echo $rows['fname'];?></td>
                        <td><?php echo $rows['usr_nm'];?></td>
                        <td><?php echo $rows['adr'];?></td>
                        <td><?php echo $rows['phn_no'];?></td>
                        <td><?php echo $rows['email'];?></td>
                        <td><?php echo $rows['dob'];?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </table>
            <div  align="right">
                <button type="button" class="btn btn-info" style="color:#fff;" id="add_new"> Add New </button>
            </div>
              
            
        </div>
        </form>

        <div class="modal fade" id="insertdata" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" style="font-size:30px">Add New row</h4>
                  </div>
                
                  
                <form action="insert.php" method="post">
                  <div>
                    <input class="form-control" type="text" placeholder="Name" id="uname" name="uname" required="">
                  </div>
                  <div>
                    <input class="form-control" type="text" placeholder="Username" id="usrnm" name="usrnm" required="">
                  </div>
                  <div>
                    <input class="form-control" type="text" placeholder="Address" id="addr" name="addr" required="">
                  </div>
                  <div>
                    <input class="form-control" type="text" placeholder="Phone no." id="phn" name="phn" required="">
                  </div>
                  <div>
                    <input class="form-control" type="text" placeholder="Email" id="email" name="email" required="">
                  </div>
                  <div>
                    <input class="form-control" type="text" placeholder="Date of Birth" id="dob" name="dob" required="">
                  </div>

                  <div>
                    <!-- button type="button" class="btn btn-success" id="addfrompopup">Add</button> -->
                    <input type="submit" class="btn btn-success" name="addfrompopup" class="button" value="Add" />
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
                  
                </form>
                </div>
             </div>
        
    </div>

        <script>
            $(document).ready(function(){
                $("#add_new").click(function(){
                    $("#insertdata").modal();
                });
            });
        </script>
    </body>
</html>
