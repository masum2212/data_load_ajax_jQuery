<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/cdn/boorstrap/boorstrap.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="bg-primary">Data Loading with Ajax</h1>
        <h1 class="bg-primary">Data Loading with Ajax</h1>
    </div>
    
    <button class="btn btn-primary">Submit</button>
    <div class="">

    </div>
    <!-- <p>gffghjfruytukgfgj</p> -->



<script>
    $(document).ready(function(){
        $.ajax({
            url: "https://jsonplaceholder.typicode.com/posts/1",
            type: "GET",
            dataType: "json",
            success: function(data) {
                alert("Get Successfully");
                console.log(data);
            }
        });
    })
    
</script>
<script src="/cdn/jquery.js"></script>
<script src="/cdn/boorstrap.js"></script>
</body>
</html>