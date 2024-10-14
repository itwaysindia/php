<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time</title>

</head>
<body>
    <div id="time"></div>

    <?php $var = "Hello"; ?>
    <?= $var; ?>
    <script>
        function getTime(){
            const now = new Date();
            return now.toLocaleTimeString();
        }

        setInterval(function(){
            document.getElementById("time").innerHTML = getTime();
        }, 1000);

    </script>
</body>
</html>