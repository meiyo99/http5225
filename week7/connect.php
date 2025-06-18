<?php
    $connect = mysqli_connect('localhost', 'mayureshnaidu', 'mydatabase', 'schools');
    
    if(!$connect){
        die("Connection Failed: " . mysqli_connect_error());
    }