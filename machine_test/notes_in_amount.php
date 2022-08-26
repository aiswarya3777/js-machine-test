<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<p id="notes"></p>

<body>
    <script>
        var money = [500, 100, 50, 20, 10, 5, 2, 1];
        var input = parseInt(prompt("Enter Amount"));
        count = input;
        for (i = 0; i < 8; i++) {
            a = Math.floor(count / money[i]);
            console.log(money[i],"no of notes are",a)
            count = count % money[i];
        }
        
    </script>
</body>

</html>