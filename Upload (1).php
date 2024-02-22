<!DOCTYPE HTML>
<html>
    <head>
        <title>Upload your blog</title>
        <link rel = "stylesheet" type = "text/css" href = "Home.css">
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
        $title=$_POST["title"];
        $content=$_POST["content"];
        if (isset($_POST['submit'])){
            $filename=$_FILES["image1"]["name"];
            $img = basename($_FILES["image1"]["name"]);
            $tempname=$_FILES["image1"]["tmp_name"];
            $folder = "C:/Softwares/Xampp/htdocs/WT/images/".$title.".jpeg";
            $query = "INSERT INTO `blog`(`title`, `content`) VALUES ('$title','$content')";
            
            if (move_uploaded_file($tempname, $folder)) {

                echo("<h3> Blog uploaded successfully </h3>");

            }else{

                echo("Failed to upload blog");

            }
            $result = mysqli_query($db,$query);
        }
    ?>
    <p style = "padding: 0% 0.5%"> Click here to return to <a href = "home.html" style = "text-decoration: none; background-color: yellow; color: black"> Home</a> page</p>
</body>
</html>
