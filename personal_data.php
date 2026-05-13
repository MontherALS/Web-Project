<?php

include 'db.php';

$sql = "SELECT * FROM info LIMIT 1";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    $row = $result->fetch_assoc();

    echo "
        <h1>Hi, I'm <span class='highlight'>{$row['name']}</span></h1>

        <p class='home-subtitle'>
            {$row['major']}
        </p>

        <section id='about' class='about-section'>
            <h2>About Me</h2>

            <div class='about-card'>
                <p>{$row['aboutme']}</p>
            </div>

        </section>
    ";

} else {
    echo "No data found";
}

$conn->close();

?>