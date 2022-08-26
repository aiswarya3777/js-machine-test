<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        led = [16, 17, 4, 3, 5, 2, 1, 2, 3, 4, 0];
        for (i = 0; i < led.length; i++) {
            for (j = i + 1; j < led.length; j++) {
                if (led[j] > led[i]) {
                    break;
                }
                if (j == led.length - 1) {
                    console.log(led[i]);
                }
            }
            if (i == led.length - 1) {
                console.log(led[i]);
            }
        }



    </script>
</body>

</html>