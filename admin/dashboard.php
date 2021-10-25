<?php include("../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/posts.php"); 
adminOnly()
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
            rel="stylesheet">

        <!-- Custom Styling -->
        <link rel="stylesheet" href="../assets/css/styles.css">
        <link rel="stylesheet" href="../assets/css/styling.css"> 

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../assets/css/adm.css">

        <title>Admin Section - Dashboard</title>
    </head>

    <body>
        
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>


            <!-- Admin Content -->
            <div class="admin-content">

                <div class="content">

                    <h2 class="page-title">Dashboard</h2>

                    <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>

                    <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Users</h3>
                                <div class="d-inline-block">
                                <h2 class="text-white">
                                        <?php
                                            $query="SELECT COUNT(*) FROM users";
                                            $result = mysqli_query($conn,$query);

                                            while($row = mysqli_fetch_assoc($result)){
                                                echo   $row['COUNT(*)'];
                                            }

                                        ?>
                                        </h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
                            </div>
                        </div>

                        
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Topics</h3>
                                <div class="d-inline-block">
                                <h2 class="text-white">
                                        <?php
                                            $query="SELECT COUNT(*) FROM topics  ";
                                            $result = mysqli_query($conn,$query);

                                            while($row = mysqli_fetch_assoc($result)){
                                                echo   $row['COUNT(*)'];
                                            }

                                        ?>
                                        </h2>
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fas fa-file"></i></span>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Posts</h3>
                                <div class="d-inline-block">
                                    <h2 class="text-white">
                                        <?php
                                             $query="SELECT COUNT(*) FROM posts";
                                             $result = mysqli_query($conn,$query);
 
                                             while($row = mysqli_fetch_assoc($result)){
                                                 echo   $row['COUNT(*)'];
                                             }

                                        ?>
                                    </h2>
                                   
                                </div>
                                <span class="float-right display-5 opacity-5"><i class="fas fa-newspaper"></i></span>
                            </div>
                        </div>
                    </div>
                </div>

                </div>

                <h2 class="page-title">All Posts</h2>

                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>

                    <table>
                        <thead>
                            <th>No.</th>
                            <th>Title</th>
                            
                        </thead>
                        <tbody>
                            <?php foreach ($posts as $key => $post): ?>
                                <tr>
                                    <td><?php echo $key + 1; ?></td>
                                    <td><?php echo htmlspecialchars($post['title']) ?></td>
                                    
                                </tr>
                            <?php endforeach; ?>

                        </tbody>
                    </table></br>

                    <h2 class="page-title">All Users</h2>

                        <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                        <table>
                        <thead>
                                <th>ID</th>
                                <th>Username</th>
                                <th>Email</th>
                                
                            </thead>
                            <tbody>

                        <?php

                        $sql = "SELECT id, username, email
                            from users";
                        $result = $conn-> query($sql);

                        if ($result-> num_rows > 0){
                            while ($row = $result-> fetch_assoc()){
                                echo "</td><td>" . $row["id"] ."</td><td>" . $row["username"] ."</td><td>". $row["email"]  . "</td>
                                </tr>";
                            }
                                echo "</table>" ;
                        }
                        else
                        {
                            echo "0 results";
                        }

                        ?>
                        </tbody>
                        </table>
                      
                </div>

               
                </div>

            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../assets/js/scripts.js"></script>

    </body>

</html>