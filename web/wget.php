<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

$input_name = $_POST['name'];
$post_form = $_POST['submit'];
$extension = $_POST['extension'];

$prefix = "https://docs.google.com/spreadsheets/d/";
$suffix = "/edit?usp=sharing";

//echo exec('wget whomai');
//https://docs.google.com/spreadsheets/d/1OTYnjEBtmKWuOyRK8Ysch4z-mC54zvByj4JCwy8HDbw/edit?usp=sharing

$final = $prefix . $input_name . $suffix . "." . $extension; 

if(isset($post_form) )
{
    exec("wget $final");
    //exec("wget $front");
    //exec("wget ", $end);
}

   
?>

<html>
<title>POST</title>

<head>
    <script>


    </script>

</head>

<body>
    <p>File being downloaded:</p>
    <p><?php echo $final; ?></p>
</body>

</html>