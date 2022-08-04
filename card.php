

    <?php

    $image = "https://images.unsplash.com/photo-1453728013993-6d66e9c9123a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8Zm9jdXN8ZW58MHx8MHx8&w=1000&q=80";

    $string = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and mo
re recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum";

    $array = array(
        array($image, "course 1", $string, "5$"),
        array($image, "course 2", $string, "6$")
    );

    foreach ($array as $course) {
        echo
        "<div class='course-card'> 
        <img src={$course[0]}></img>
        <div class='card-content'>
            <h5>{$course[1]}</h5>    
            <p>{$course[2]}</p>    
            <div>{$course[3]}</div>    
        </div>
    </div>";
    }
