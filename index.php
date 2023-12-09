<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>HUCES Times</title>
  </head>
  <body>
    <div class="container">
    <section class="myheader">
      <?php
      include("layout/division_layout/header.php");
      ?>

    </section>
    <section class="mymainmenu">
      <span class="border border-bottom-0"></span>
      <span class="border border-white"></span>
      <ul class="nav justify-content-center fs-4">
          <a class="nav-link active" aria-current="page" href="#">Trang Chủ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Giải Trí</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Xã Hội</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tin Tức</a>
      
        </li>
      </ul>
    </section>
    <section class="mymaincontent">
      <p class="text-start fw-bold fs-4">Tin mới</p>
      <div class="container text-center">
        <div class="row align-items-start">
          <div class="col-md-8 d-flex">
            <div class="row row-cols-1 row-cols-md-2 g-4">
              <div class="col">
                <div class="card">
                  <img src="img/DC2DB2A5-BD34-492C-A8B2-B939D3389513_1_105_c.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="img/DC2DB2A5-BD34-492C-A8B2-B939D3389513_1_105_c.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="img/DC2DB2A5-BD34-492C-A8B2-B939D3389513_1_105_c.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
              <div class="col">
                <div class="card">
                  <img src="img/DC2DB2A5-BD34-492C-A8B2-B939D3389513_1_105_c.jpeg" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex">
            <div class="d-flex flex-column mb-3">
              <p class="text-center fw-bold fs-4">Tin nổi bật</p>
              <div class="p-2"><div class="card" style="width: 18rem;">
                <img src="img/D9809ED6-E3CD-4A04-99A5-AA0852C260F7_4_5005_c.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div></div>
              <div class="p-2"><div class="card" style="width: 18rem;">
                <img src="img/D9809ED6-E3CD-4A04-99A5-AA0852C260F7_4_5005_c.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div></div>
              <div class="p-2"><div class="card" style="width: 18rem;">
                <img src="img/D9809ED6-E3CD-4A04-99A5-AA0852C260F7_4_5005_c.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div></div>
            </div>
          </div>
        </div>
    </section>
    <section class="myfooter">
    <?php
      include("layout/division_layout/footer.php");
      ?>
    </section>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
  </body>
</html>