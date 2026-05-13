<?php

include 'db.php';

$sql = "SELECT * FROM projects";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

        echo "

        <div class='project-card'>

            <h3>{$row['title']}</h3>

            <p>{$row['description']}</p>

            <a href='{$row['client_link']}' class='btn small-btn'>
                View Project (Client)
            </a>

            <a href='{$row['server_link']}' class='btn small-btn'>
                View Project (Server)
            </a>

        </div>

        ";

    }

} else {

    echo 'No projects found';

}

?>