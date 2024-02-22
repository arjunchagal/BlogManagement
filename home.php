<!DOCTYPE HTML>
<html>
    <head>
        <title>Simple Blog Page</title>
        <link rel="stylesheet" type="text/css" href="Home.css">
    </head>
    <body>
        <center><h1>Simple Blog Page</h1></center>
        <div class="nav">
            <a href="Home.php">Home</a>
            <a href="Search.html">Search</a>
            <a href="Upload.html">Upload</a>
        </div>

        <?php
            include("DBConnection.php");
            $query = "SELECT title, content FROM blog ORDER BY title DESC";
            $result = mysqli_query($db, $query);

            if(mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
        ?>
                    <div class="container">
                        <a href="read.php?title=<?php echo $row['title']; ?>">
                            <img src="./images/<?php echo $row['title']; ?>.jpeg" style="height:25%; width:25%;">
                        </a>
                        <div class="imgt"><?php echo $row['title']; ?></div> 
                    </div>
        <?php
                }
            } else {
                echo "<center>No articles found.</center>";
            }
        ?>
    </body>
</html>
