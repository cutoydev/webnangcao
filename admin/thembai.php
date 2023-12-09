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
        <form action="" method="post">
            <div class="container text-center">
                <div class="row align-items-start">
                  <div class="col-md-2">
                  <?php
            include("division_admin/sidebar.php");
            include("division_admin/connection.php");
            ?>
                  </div>
                  <div class="col-md-10">
                    <h4>Thêm mới bài đăng</h4>
                    
                    <div class="input-group mb-3">
                        <span class="input-group-text fw-bold" id="inputGroup-sizing-default">Tiêu đề</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="tieude">
                      </div>
                      <div class="input-group mb-3">
                        <label class="input-group-text fw-bold" for="inputGroupSelect01" >Danh mục</label>
                        <select class="form-select" id="inputGroupSelect01" name="danhmuc">
                          <option value=1 >Tin Tức</option>
                          <option value=2 >Xã Hội</option>
                          <option value=3 >Giải trí</option>
                        </select>
                   
                     </div>
                      <div class="input-group mb-3">
                        <span class="input-group-text fw-bold" id="inputGroup-sizing-default">Tên tác giả</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" name="tacgia">
                      </div>
                      <h4>Nội dung</h4>
                      
                      <textarea rows="20" cols="120" name="noidung">
                          
                          </textarea>
                      
                        
                        <br>
                      
                      <button type="submit" class="btn btn-secondary" name="btnthem">Thêm</button>
                      <?php
                    


                if ($_SERVER["REQUEST_METHOD"] == "POST"){
              
                 if(!empty($_POST["tieude"])&&!empty( $_POST["tacgia"])&&!empty( $_POST["danhmuc"])){
                  $_tieude = $_POST["tieude"];
              
                  
                     // Tương tự cho các biến khác
                     $_tacgia = $_POST["tacgia"];
                     $_noidung = $_POST["noidung"];
                     $_danhmuc = $_POST["danhmuc"];
                $currentDate = date("Y-m-d");
                
                 
                $sql_add = "INSERT INTO new (ntitle, ncontent, ndate, caid,nauthor)
                   VALUES ('".$_tieude."', '".$_noidung."', '".$currentDate."', '".$_danhmuc."', '".$_tacgia."')";
                 if ($conn->query($sql_add)===TRUE) {
                    echo "Thêm dữ liệu thành công";
                 } else {
                        echo "Error: " . $sql . "<br>" ;
                        }
              
                }else{ 
                  echo" Yêu cầu ghi đầy đủ thông tin";
                }
                 
                }
                ?>  
                </div>
                     </form>
        </section>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>