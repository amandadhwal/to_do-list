<?php include('header.php');?>
<?php include('dbcon.php');?>

        <div class="box1">
            <h2>All Student</h2>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                ADD STUDENTS
            </button>
            <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">ADD STUDENTS</button> -->
        </div>
                        
            <table class="table table-hover table-bordered table-striped">
                        <thead> 
                            <tr class="bg-primary">
                                <th>ID</th>
                                <th>first_name</th>
                                <th>last_name</th>
                                <th>age</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                            $query = "select * from `students`";
                            $result = mysqli_query($connection,$query);
                            if(!$result)
                            {
                                die("query failed".mysqli_error());
                            }
                            else
                            {
                                while($row = mysqli_fetch_assoc($result))
                                {
                                    ?>
                                    <tr >
                                        <td><?php echo $row['id'];?></td>
                                        <td><?php echo $row['first_name'];?></td>
                                        <td><?php echo $row['last_name'];?></td>
                                        <td><?php echo $row['age'];?></td>
                                    </tr>
                                    
                                    <?php
                                }
                            }
                        ?>    
                        </tbody>
             </table>

             <?php
                    if(isset($_GET['message'])){
                        echo "<h6>".$_GET['message']."</h6>";
                    }
            ?>





<form action="insert_data.php" method="post">
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add STUDENTS</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
        <div class="modal-body">
       
            
            <div class="form-group">
                <label for="f_name" class="form-label">First name</label>
                <input type="text" name="f_name" class="form-control">
            </div><br>

            <div class="form-group">
                <label for="l_name">Last name</label>
                <input type="text" name="l_name" class="form-control">
            </div><br>

            <div class="form-group">
                <label for="age">age</label>
                <input type="number" name="age" class="form-control">
        </div>
        
      </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-success" name="add_Students" value="ADD"></button>
            </div>
    </div>
  </div>
</div>
</form>

 
<?php include('footer.php');?>

        