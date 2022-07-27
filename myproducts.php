<?php include('db.php');?>

<!doctype html>
<head>
    <title>My Products</title>
    <!-- links  -->
</head>

<body>
    <?php include('navbar') ?>

<div class="container">
    <div class="row">
        <div class="col-mod-4">
            <p><img src="images/aakash.jpg" class="img-thumbnail" /></p>
            <h2 class="pro-title">title</h2>
            <p> price </p>
            
            <p> size </p>
        </div>
    </div>
</div>

<!--
            <?php 
            $qq = "select * from products"; //saman liyera aako, delete,insert
            $result= $conn->query($qq);
            $data = $result->$fetch_assoc(); //fetches data from db
            // print_r($data);   to print array(data in db) to check error
            // foreach($data as $single){
            while($data = $result->fetch_assoc()){ ?>
            
            <p><img src="uploads/<?php echo $data['pic']; ?>" class="img-thumbnail"/></p>

            }
            ?>

        -->
        