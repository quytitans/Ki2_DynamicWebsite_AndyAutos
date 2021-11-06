<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./library/bootstrap.css">
    <?php include 'library.php'; ?>
    <link rel="stylesheet" href="./css/home.css">
    <title>Home Page</title>
</head>
<body class="container-fluid">
<?php include 'navBar.php'; ?>
<div class="row">
    <div class="col-md-12 col-lg-8 center">
        <div class="form-bg">
            <form class="form">
                <div class="form-group"> <label class="sr-only">Name</label> <input type="text" class="form-control" required="" id="nameNine" placeholder="Your Name"> </div>
                <div class="form-group"> <label class="sr-only">Email</label> <input type="email" class="form-control" required="" id="emailNine" placeholder="Email Address"> </div>
                <div class="form-group"> <label class="sr-only">Name</label> <textarea class="form-control" required="" rows="7" id="messageNine" placeholder="Write message"></textarea> </div> <button type="submit" class="btn text-center btn-blue">Send Message</button>
            </form>
        </div>
    </div>
</div>
</body>
<div class="row footer1">
    <h5>&copy;Copy right 2021 NVQ</h5>
</div>
</html>