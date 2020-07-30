<?php


$input_name = $_POST['name'];
$post_form = $_POST['submit'];
$extension = $_POST['extension'];
$url = "https://www.dropbox.com/s/y2m1azgp1dptoqn/";
$part1 = $input_name . "." . $extension . "?dl=1 -o " . $input_name . "." . $extension; 

$front_clip = "fmpeg -i " . $input_name . ".$extension" . " -ss 0:20:00 -c:v copy -c:a copy" . $input_name . "-clipped" . ".$extension";

$rear_clip = "ffmpeg -i " . $input_name . "-clipped" . "." . $extension . " -ss 0:00:00 -to 0:00:30 -c:v copy -c:a copy " . $input_name . "-clipped" . $extension . " clipped-again" . $extension;

$clippings = array($front_clip, $rear_clip);

$final = $url . $part1; 
exec("wget $final");
//echo $final;
echo "<br><br>";
echo $front_clip;
echo "<br><br>";
echo $rear_clip;
echo "<br><br>";



?>

<html>
<title>POST</title>

<head>
    <script>


    </script>

</head>

<body>
    <p>Video that is downloading:</p>
    <p><?php echo $final;  ?></p>
</body>

</html>