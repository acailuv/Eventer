<?php function createCard(array $rows) {
  echo '<div class="col-sm" style="padding-top:50px">
    <div class="container animated fadeInDown">
      <div class="card" style="width: 18rem;">
        <img src="/img/placeholder.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"> '.$rows['company_name'].' </h5>
          <p class="card-text">  '.$rows['description'].' </p>
          <p class="card-text">  Rp. '.$rows['price'].' </p>
          <a href="/php/shoppage.php?vendor='.$rows['id'].'" class="btn btn-primary">Hire Now</a>
        </div>
      </div>
    </div>
  </div>';
} ?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/js/main.js"></script>
    </head>

    <body>
        <div data-include-php="navbar"></div>

        <div class="container">
              <?php
                  session_start();

                  $type = $_GET['type'];
                  if ($type == 'category_search') {
                      // Category search
                      $conn = mysqli_connect('localhost','root','root','eventer');
                      if(isset($_POST['category_search']) && $_POST['category_search'] != '') {
                          $category_search = $_POST['category_search'];
                          $category_search_capitalized = ucfirst($category_search);
                          echo "<h1 class='mt-5'>You searched for Event Organizer(s) that handles: $category_search_capitalized</h1>";
                          if ($category_search == 'showall') {
                              $query = "SELECT * FROM vendor";
                          } else {
                              $query = "SELECT * FROM vendor WHERE $category_search = 1";
                          }
                          $result = mysqli_query($conn, $query);
                          echo "<div class='row p-5'>";
                          if($result->num_rows > 0 ) {
                              while($rows = mysqli_fetch_array($result)) {
                                  createCard($rows);
                              }
                          } else {
                              echo "<h3>No Result.</h3>";
                          }
                          echo "</div>";
                      } else {
                          header("location:/index.php");
                      }
                  } else {
                      // Name search
                      $conn = mysqli_connect('localhost','root','root','eventer');
                      if(isset($_POST['search'])) {
                          $name_search = $_POST['search'];
                          echo "<h1 class='mt-5'>You searched for '$name_search'</h1>";
                          $query = "SELECT * FROM vendor WHERE company_name LIKE '%$name_search%'";
                          $result = mysqli_query($conn, $query);
                          echo "<div class='row p-5'>";
                          if($result->num_rows > 0 ) {
                              while($rows = mysqli_fetch_array($result)) {
                                  createCard($rows);
                              }
                          } else {
                              echo "<h3>No Result.</h3>";
                          }
                          echo "</div>";
                    }
                }
                $conn->close();
              ?>
          </div>
    <body>
</html>
