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
    <p>Workshop%3A%20Hyper-Realistic%20Multimedia%20for%20Enhanced%20Quality%20of%20Experience</p>
    <form method="post" action="wget.php" name="getDropox">
        <p>Enter video name:
            <input type="text" name="name" value="">
            <select name="extension">
                <option>mp4</option>
                <option>other</option>
            </select>
        </p>
        <p><input type="submit" name="submit" value="Submit" /></p>
    </form>
    <script></script>
</body>

</html>