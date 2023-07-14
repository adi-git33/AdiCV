<?php
include "db.php";

$projID = $_POST['projID'];

$query = 'SELECT * FROM portfolioSh.portfolio_AdiLevi where proj_id="' . $projID . '"';
$result = mysqli_query($connection, $query);
if ($result) {
    $row = mysqli_fetch_assoc($result);
} else {
    die("DB quary failed.");
}

if ($row["img_path"] != 'None') {
    echo '<img src="' . $row["img_path"] . '" alt="' . $row["proj_title"] . '">';
}
echo '<section>
        <h3> ' . $row["proj_title"] . '</h3>
        <p> ' . $row["proj_inner_desc"] . '</p>
        <p><b>Languages:</b> ' . $row["proj_lang"] . '</p>';

if ($row["proj_url"] != 'None') {
    echo '<p><b>URL: </b> <a href="$row["proj_url"]">Link</a></p>';
}

echo '<p><b>Github: </b> <a href=" $row["proj_git"]">Link</a></p>
</section>
</div>';

mysqli_free_result($result);
mysqli_close($connection);
?>