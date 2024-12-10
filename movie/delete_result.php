<?php
//movieDB데이터베이 연결
$conn=mysqli_connect("localhost","movie_user","1234","movieDB")or die("movieDB접속 실패!");
$title=$_POST["movieTitle3"];
?>