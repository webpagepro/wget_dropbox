<?php


//"https://www.dropbox.com/s/y2m1azgp1dptoqn/Workshop%3A%20Hyper-Realistic%20Multimedia%20for%20Enhanced%20Quality%20of%20Experience.mp4?dl=1";  

$input_url = $_POST['download_url'];
echo "****************";
echo $input_url;
echo "<br><br>";
$dropbox_url = "https://www.dropbox.com/s/y2m1azgp1dptoqn/";
$strip_suffix = str_replace("?dl=1", "", $input_url);
$remove_prefix = str_replace($dropbox_url, "", $strip_suffix);
$remove_mp4 = str_replace("mp4", "", $remove_prefix);
$strip_space = str_replace("%3A%20", "-", $remove_prefix);
$remove_colon = str_replace("%20", "_", $strip_space);
echo "<br><br>******remove_colon*********";

echo $remove_colon;
echo "<br><br>";

$part1 = $input_url . " -O " . $remove_colon; 
$clippings = array($strip_space, $remove_colon);

//--------DOWNLOAD----------------
exec("wget -q -O -c $part1");

$remove_mp4 = str_replace("mp4", "", $remove_colon);
echo "<br>REMOVE MP4<br>";
echo $remove_mp4 . "<br><br>";
$rename_mp4 = str_replace(".", "-clipped.mp4", $remove_mp4);
$front_clip = "ffmpeg -i " . $remove_colon . " -ss 0:20:00 -c:v copy -c:a copy " . $rename_mp4;

$rename_mp4_again = str_replace("-clipped.mp4", "-clipped-again.mp4", $rename_mp4);
$rear_clip = "ffmpeg -i " . $rename_mp4 . " -ss 0:00:00 -to 0:00:30 -c:v copy -c:a copy " . $rename_mp4_again;

$clippings = array($front_clip, $rear_clip);


echo "<br><br>";
echo $front_clip;
//exec("wget -q -O -c $front_clip");

echo "<br><br>";
echo $rear_clip;
echo "<br><br>";

?>

<html>
<title>POST</title>

<head>
    <script> </script>

</head>

<body>
    <p>Video that is downloading:</p>
    <p><?php echo $part1;  ?></p>
</body>

</html>