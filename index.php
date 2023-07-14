<?php
include "db.php";

$query = 'SELECT * FROM portfolioSh.portfolio_AdiLevi ORDER BY "proj_id"';
$result = mysqli_query($connection, $query);


if (!$result) {
    die("DB quary failed.");
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    <!-- BootStraps -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!-- JQuary -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Icons -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title>Adi Levi</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/proj.js"></script>
</head>

<body>
    <main>
        <div class="container">
            <div class="flipper" id="target">
                <div class="front">
                    <a href="#target" class="home button">Projects</a>
                    <section>
                        <h1>Adi Levi</h1>
                        <p>I'm a second-year B.Sc. Software Engineering student at Shenkar College. I'm a passionate and
                            dedicated worker and looking forward to enrich myself with new knowledge. I thrive on
                            learning and experiencing new things while striving
                            for personal growth.
                        </p>
                        <div class="contact">
                            <h5>Contact Me</h5>
                            <span>adile019@gmail.com</span>
                        </div>
                        <div class="social">
                            <a href="https://www.linkedin.com/in/adi-levi-150917260/"><i class="fa fa-linkedin"></i></a>
                            <a href="https://github.com/adi-git33"><i class="fa fa-github"></i></a>
                        </div>
                        <a href='https://se.shenkar.ac.il/software-engineers/AdiLevi/files/AdiLeviResume.pdf' class='cv' target="_blank">CV</a>
                        <a href='https://www.shenkar.ac.il/he/departments/engineering-software-department'
                            class='shenkar'>תואר ראשון בהנדסת תוכנה בשנקר</a>
                    </section>
                </div>
                <div class="back" data-bs-spy="scroll">
                    <a href="#close" class="close button"><i class="fa fa-home"></i></a>
                    <section class="innerCon">
                        <h2>My Projects</h2>
                        <ul id="projList">
                            <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<li class="card">
                                <div class="face face1">
                                <div class="content">
                                    <h3>' . $row["proj_title"] . '</h3>
                                </div>
                            </div>
                            <div class="face face2">
                                <div class="content">
                                    <p>
                                    ' . $row["proj_desc"] . '
                                    </p>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" data-id="' . $row["proj_id"] . '" id="btn">
                                        Read More
                                    </button>
                                </div>
                            </div>
                            </li>';
                            }
                            ?>
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </main>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Project</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="dropRes">
                </div>
            </div>
        </div>
    </div>
    <?php
    mysqli_free_result($result);
    ?>
</body>

</html>

<?php
mysqli_close($connection);
?>