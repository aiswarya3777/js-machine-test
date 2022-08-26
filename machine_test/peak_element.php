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
    nos = [1,2,3,2,1,9,8];
    nos_length = nos.length;
    for(i=0;i<=nos_length;i++){
        if(nos[i+1]>nos[i] && nos[i+1]>nos[i+2]){
            console.log(nos[i+1]);
        }
    }
</script>
</body>
</html>