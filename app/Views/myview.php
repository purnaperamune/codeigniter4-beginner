<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title> <!-- There are different alternative ways to echo this -->
</head>
<body>
    <h1>
        <?=$page_heading;?>
    </h1>

    <h3>Subjects List</h3>
    <ul>
        <?php

        if(!empty($subjects)){
            foreach($subjects as $sub){
                echo "<li>$sub</li>";
            }
        }
        else{
            echo "<p>Sorry, No records found!!!</p>";
        }
        ?>
    </ul>

     
</body>
</html>