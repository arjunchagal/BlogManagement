<!DOCTYPE HTML>
<html>
    <head>
        <title>Read Blog</title>
        <link rel="stylesheet" type="text/css" href="Home.css">
    </head>
    <body>
        <?php
            include("DBConnection.php");
            $blogTitle = $_GET["title"]; // Assuming you are passing the title as a parameter in the URL

            $query = "SELECT title, content FROM blog WHERE title = '$blogTitle'";
            $result = mysqli_query($db, $query);

            if(mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        ?>
                <center><h1><?php echo $row['title']; ?></h1></center>
                <div class="content">
                    <p style = "color: yellow"><?php echo $row['content']; ?></p>
                </div>
        <?php
            } else {
                echo "<center>Blog not found</center>";
            }
        ?>
    </body>
</html>
