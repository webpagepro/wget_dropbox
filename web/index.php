<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(-1);

?>

<html>
<title>Conferences Video Clip App</title>

<head>
    <script></script>
</head>

<body>
    <p>&nbsp;</p>
    <h3>Step One: Download Dropbox Video</h3>
    <form method="post" action="wget.php" name="getDropox">
        <div>Enter Dropbox Link:</div>


        <input type="text" name="download_url" value="" style="width:80%;height:60px;">
        <!-- select name="extension">
                <option>mp4</option>
                <option>other</option>
            </!-->
        </p:>
        <p><input type="submit" name="submit" value="Download" /></p>
    </form>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div>Example Dropbox Link:</div>
    <p style="width:80%;">
        https://www.dropbox.com/s/y2m1azgp1dptoqn/Workshop%3A%20Hyper-Realistic%20Multimedia%20for%20Enhanced%20Quality%20of%20Experience.mp4?dl=1
    </p>
    <script></script>
</body>

</html>