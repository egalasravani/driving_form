<?php
require 'connection.php';

if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $age = $_POST["age"];
  $country = $_POST["country"];
  $gender = $_POST["gender"];

  $languages = $_POST["languages"];
  $language = "";
  foreach($languages as $row){
    $language .= $row . ",";
  }

  $query = "INSERT INTO tb_data VALUES('', '$name', '$age', '$country', '$gender', '$language')";
  mysqli_query($conn,$query);
  echo
  "
  <script> alert('Data Inserted Successfully'); </script>
  "
;}
?>