<?php
include("../DucHung-PNV-Club-Application/header.php");

if (isset($_POST["skill"])) {
    $skills = $_POST["skill"];
}

echo '<img id="huanchuon" src="https://huychuongchaybo.com/Uploads/origin/20220225/huy-chuong-champion-2022-1-20220225181231522.jpg">';
echo '<br>';

if (isset($_POST["name"])) {
    echo '<h1>Thank you ' . $_POST["name"] . '!</h1>';
}
echo '<br>';

if (isset($_POST['club'])) {
    echo "We received your application for the " . $_POST["club"];
}
echo "<br>";

if (isset($_POST['skill'])) {
    if (count($skills) == 1) {
        echo "You have the skill: $skills[0]";
    } else {
        $out = "You have skills: " . implode(" and ", $skills);
        echo $out . "<br><br>";
    }
} else {
    echo "No skills selected.";
}

echo "<br>";

if (isset($_POST["time"])) {
    echo "You will be available on " . $_POST["time"];
}

echo "<br>";
?>
