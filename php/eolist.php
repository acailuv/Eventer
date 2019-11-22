<?php function createCard(array $rows) { ?>

  <div class="col-sm" style="padding-top:50px">
    <div class="container animated fadeInDown">
      <div class="card" style="width: 18rem;">
        <img src="/img/placeholder.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> <?php echo $rows ['company_name'] ?> </h5>
          <p class="card-text">  <?php echo $rows['description'] ?> </p>
          <p class="card-text">  <?php echo $rows['price'] ?> </p>
          <a href="#" class="btn btn-primary">Hire Now</a>
        </div>
        </div>
      </div>
    </div>

<?php } ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/js/main.js"></script>
    </head>

    <body>
        <div data-include-php="navbar"></div>

        <div class="container main-container">
            <div class="row" style="padding-top:100px; padding-left:25px; padding-bottom:50px">
            <?php
                session_start();

                $type = $_GET['type'];
                if ($type == 'category_search') {
                    // Category search
                    $conn = mysqli_connect('localhost','root','root','eventer');
                    if(isset($_POST['category_search'])) {
                        $category_search = $_POST['category_search'];
                        $query = "SELECT * FROM vendor WHERE org_type  = '$category_search'";
                        $result = mysqli_query($conn, $query);
                        if($result->num_rows > 0 ) {
                            while($rows = mysqli_fetch_array($result)) {
                                createCard($rows);
                            }
                        } else {
                            echo "NOTHING FOUND";
                        }
                    }
                } else {
                    // Name search
                    $conn = mysqli_connect('localhost','root','root','eventer');
                    $get = $_POST['search'];
                    if($get) {
                        $show = "SELECT * FROM vendor WHERE company_name = '$get'";
                        $result = mysqli_query($conn, $show);
                        if($result->num_rows > 0) {
                            while ($rows = mysqli_fetch_array($result)){
                                createCard($rows);
                            }
                        }
                    } else {
                        echo "NOTHING FOUND";
                    }
                }
                $conn->close();
            ?>
            </div>
        </div>

    <body>
</html>
