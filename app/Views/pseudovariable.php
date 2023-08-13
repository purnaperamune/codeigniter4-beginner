<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pseudo Variables</title> 
</head>
<body>
    <!-- Avoiding echo and php tags with the help of pseudo variables - parser class -->
    <p>
        {question}
    </p>
     
    {subjects_list}
    <h2>{subject}</h2>
    <p>{abbr}</p>
    {/subjects_list}

    {if $status}
        <p>Hello CI4!</p>   
    {endif}
</body>
</html>