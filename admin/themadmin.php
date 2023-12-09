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
            require("division_admin//connection.php");
            
            ?>
                  </div>
                  <div class="col-md-8">
                 <form action="" method="post">
                 <h4>Thêm mới admin</h4>
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold" id="inputGroup-sizing-default">Id</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="id">
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text fw-bold" id="inputGroup-sizing-default">Username</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="username">
                      </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text fw-bold" id="inputGroup-sizing-default">Password</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="password">
                      </div>
                      <button type="submit" class="btn btn-secondary" name="them">Thêm</button>
                 </form>
                <?php
                $_id=$_POST["id"];
                $_username=$_POST["username"];
                $_password=$_POST["password"];
                $_role=0;




                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                 
                 if(!empty($_id)&&!empty($_username)&&!empty($_password)){
                 
                  $checkIdQuery = "SELECT COUNT(*) as count FROM users WHERE uid = '$_id'";
                  $resultIdCheck = mysqli_query($conn, $checkIdQuery);
                  $rowIdCheck = mysqli_fetch_assoc($resultIdCheck);
                  $checkUsernameQuery = "SELECT COUNT(*) as count FROM users WHERE uname = '$_username'";
                  $resultUsernameCheck = mysqli_query($conn, $checkUsernameQuery);
                  $rowUsernameCheck = mysqli_fetch_assoc($resultUsernameCheck);
                  if ($rowUsernameCheck['count'] > 0) {
                    // Username đã tồn tại, xử lý theo ý của bạn
                    echo "Username đã tồn tại.";
                }else if ($rowIdCheck['count'] > 0) {
                  // ID đã tồn tại, xử lý theo ý của bạn
                  echo "ID đã tồn tại.";
              } else{
                $sql_add = "INSERT INTO users (uid, uname, upassword, urole)
                   VALUES ('".$_id."', '".$_username."', '".$_password."', '".$_role."')";
                 if ($conn->query($sql_add)===TRUE) {
                    echo "Thêm dữ liệu thành công";
                 } else {
                        echo "Error: " . $sql . "<br>" ;
                        }
              }
                }else{ 
                  echo" Yêu cầu ghi đầy đủ thông tin";
                }
                 
                }
                ?>  
                 
                </div>
        </section>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>