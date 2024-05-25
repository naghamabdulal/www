<?php                
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){
    $connection = mysqli_connect('localhost','root','','joinus');
    $name = $_POST["name"];
    $email = $_POST["email"];
    $course = $_POST["course"];
    $rating = $_POST["rating"];
    $review = $_POST["review"];
    $sql = "INSERT INTO `rateus` (`name`,`email`,`course`,`rating`,`review`) VALUES ('$name','$email','$course','$rating','$review')";
        $result = mysqli_query($connection,$sql);
        if($result){
            echo "Data inserted successfully";
        }
        else{
            echo "Data not inserted";
        }
}



if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["joinus"])){
    $connection = mysqli_connect('localhost','root','','joinus');
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $sql = "INSERT INTO `user info` (`name`,`email`,`password`) VALUES ('$name','$email','$password')";
        $result = mysqli_query($connection,$sql);
        if($result){
            echo "Data inserted successfully";
        }
        else{
            echo "Data not inserted";
        }
}







?>