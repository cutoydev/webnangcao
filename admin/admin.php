<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Huces Times</title>
</head>
<body>
    <div class="container">
        <section class="myheader">
            <?php
            include("division_admin/headerql.php");
            ?>
        </section>
        <section class="main">
            <div class="container text-center">
                <div class="row align-items-start">
                  <div class="col-md-2">
                    <?php
                    include("division_admin/sidebar.php");
                    ?>

                  </div>
                  <div class="col-md-10">
                    <h4>Danh sách quản trị viên <a href="themadmin.php"><button type="button" class="btn btn-info">Thêm</button></a></h4>
                    <table class="table">
                      
                      <thead>
                        <tr>
                          <th scope="col">Stt</th>
                          <th scope="col">Id</th>
                          <th scope="col">Usedname</th>
                          <th scope="col">Password</th>
                          <th scope="col">Hành động</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        require("division_admin/connection.php");
                        $sql_hien ="SELECT * FROM users WHERE urole='1'";
                        $result =mysqli_query($conn,$sql_hien);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            $i=1;
                            while($row = $result->fetch_assoc()) {
                             
                                
                        ?>
                        <tr>
                          <th scope="row"><?php   echo $i++ ?></th>
                          <td><?php   echo $row["uid"] ?></td>
                          <td><?php   echo $row["uname"] ?></td>
                          <td><?php   echo $row["upassword"] ?></td>
                          <td><div class="d-grid gap-2 d-md-block">
                            <a href="funtion_admin/xoa_admin.php?id=<?php echo $row['uid'];?>" ><button class="btn btn-primary" type="button">Xoá</button></a>
                          </div></td>
                        </tr>
                        <?php
                          
                            } }
                        ?>
                        
                        
                          </div></td>
                        </tr>
                      </tbody>
                    </table>
                    
                  </div>
                </div>
        </section>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>