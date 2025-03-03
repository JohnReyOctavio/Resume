<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Portfolio</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }
        .title {
            padding-bottom: 5px;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="text-center">
        <img src="Id.jpg">
        <h1>John Rey Octavio</h1>
    </div>

    <div class="row">
        <div >
            <h1 class="title">Contact Information</h1>
            <?php
                $email = "octaviojohnrey675@gmail.com@gmail.com";
                $address = "Brgy. Nandong, Nueva, Valencia, Guimaras";
                $number = "090569643832";
            ?>
            <p>Email: <?php echo $email; ?></p>
            <p>Address:<?php echo $address; ?></p>
            <p>Contact Number: <?php echo $number; ?></p>
        </div>

        <div class="col-md-6">
            <h1 class="title">About Me</h1>
            <?php
                $birthDate = "March 28,2004";
                $status = "Single";
                $age = "20";
                $gender = "Male";
                $religion = "Roman Catholic";
                $language = "Tagalog";
                $birthPlace = "Napandong Nueva Valencia Guimaras";
             
            ?>
            <p>Birthdate:<?php echo $birthDate; ?></p>
            <p>Status:<?php echo $status; ?></p>
            <p>Age: <?php echo $age; ?></p>
            <p>Gender:<?php echo $gender; ?></p>
            <p>Religion:<?php echo $religion; ?></p>
            <p>Language: <?php echo $language; ?></p>
            <p><BirthPlace: <?php echo $birthPlace; ?></p>
        </div>
    </div>

    <h1 class="title">Hobbies</h1>
    <ul>
        <?php
            $hobbies = [ "Playing Mobile Games", "Playing basketball "];
            foreach ($hobbies as $hobby) {
                echo "<li>$hobby</li>";
            }
        ?>
    </ul>

    <h1 class="title">Education</h1>
    <?php
        $education = [
            "Bachelor of Science in Information Technology" => "Guimaras State University - Mosqueda Campus (3rd Year)",
            "Secondary Education" => "Simeon J Jabasa National High School, 2020",
            "Primary Education" => "Calaya Elementary School, 2012"
        ];
    ?>
    <ul>
        <?php
            foreach ($education as $level => $school) {
                echo "<li>$level:$school</li>";
            }
     
        ?>
    </ul>
</div>
     
   

</body>
</html>