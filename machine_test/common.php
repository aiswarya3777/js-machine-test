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
        var arr1 = [1, 2, 3, 4, 5, 6];
        var arr2 = [10,2, 3, 8, 9];
        var arr3 = [20,2, 3, 7];
        var data = [arr1, arr2, arr3];
        for (i = 0; i < data.length; i++) {
            for (j = 0; j < data.length; j++) {
                for (k = 0; k < data.length; k++) {
                    if (arr1[i] == arr2[j] && arr2[j] == arr3[k]) {
                        console.log(arr1[i])
                    }
                }
            }
        }
    </script>
</body>

</html>