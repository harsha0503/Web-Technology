<?php
$user = "Harsha angadi";
?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="prog6_a.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Tourney:ital,wght@1,900&display=swap" rel="stylesheet">
    <title> program 6_a </title>
</head>

<body>
    <h2><?php echo $user; ?>,Welcome to Sample PHP Script </h2>
    <?php
    print "<h3> REFRESH PAGE </h3>";
    $name = "counter_a.txt";
    $file = fopen($name, "r");
    $hits = fscanf($file, "%d");
    fclose($file);
    $hits[0]++;
    $file = fopen($name, "w");
    fprintf($file, "%d", $hits[0]);
    fclose($file);
    print "Total number of views: " . $hits[0];
    ?>
    <div class="profile">
        <img src="Harsha.jpg" alt="profile picture"></img>
        <div class="container">
            <h4><b><?php echo $user; ?></b></h4>
            <p>6th Sem Computer Science Department</p>
        </div>
    </div>

</body>

</html>
