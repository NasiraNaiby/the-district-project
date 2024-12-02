<?php 
//include 'header.php'?>
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Contact</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
      <link rel="stylesheet" href="../CSS/style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMzEmz5nHS3caZJ53qxR7Iq9D8lUP8dI4wYhoJ" crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
      
    </head>
  <body class="parallax">
      <!-- navbar starts -->
  
     
           <!-- navbar ends -->
            <!-- header starts -->
            <div class="header">
              <!-- <img src="../../src/images_the_district/bg2.jpeg" alt="Background Image"> -->
              <div class="header-text">
                <h1 class="text-center fw-bold display-1 m-2 p-5 text-white">
                    Customers<span class="text-warning">Feedback</span> 
              </h1>
              </div>
            </div>
           <section class="fb">
                <div class="container">
                <table class="table  table-dark table-hover ">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        function showfeedbacks(){
                        $lines = file('contactdata.txt');
                            $i = 1;
                            foreach ($lines as $row) { // Split the row into fields 
                                $fields = explode(',', $row); // Display each row in the table 
                                echo '<tr>'; 
                                echo '<td>' . $i++ . '</td>'; 
                                foreach ($fields as $field) { 
                                    
                                    echo '<td>' . htmlspecialchars($field) . '</td>';
                                   
                                } 
                                echo '</tr>'; 
                                }
                            } 
                            showfeedbacks();

                        ?>
                    </tbody>
                    </table>
                </div>
           </section>
              
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="../JS/javascript.js"></script>  
        <?php //include 'footer.php'?>
      </body>
</html>



