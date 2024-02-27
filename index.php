<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Awesome CSS Responsive Navigation Menus</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.2-web">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <input type="checkbox" name="" id="chk1">
        <div class="logo"><h1>Web Master</h1></div>
        <div class="search-box">
            <form action="">
                <input type="text" name="search" id="srch" placeholder="Search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>-
        </div>
        <ul>
            <!-- script menu -->
            <li><a href="index.php?modul=home">Home</a></li>
            <li><a href="index.php?modul=product">Product</a></li>
            <li><a href="index.php?modul=blog">Blog</a></li>
            <li><a href="index.php?modul=contact">Contact</a></li>
            <li>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="https://www.instagram.com/hnybng_/"><i class="fab fa-instagram"></i></a>
            </li>
        </ul>
        <div class="menu">
            <label for="chk1">
                <i class="fa fa-bars"></i>
            </label>
        </div>
    </header>

    <!-- content -->
    <div class="main-content">
        <?php
            if(isset($_GET['modul'])){
                $pages = $_GET['modul'];
            }else{
                $pages = "home";
            }

            if(!isset($_GET['modul']) || $pages == "home"){
        ?>
        <div id="content-home">
        <h1>TITLE HOME</h1><br>
        <p>Selamat diwebsite 11 rpl 1 kelas kami adalah kelas yang paling baik dan rajin. <br>
        Dikelas kami juga orangnya ganteng ganteng cantik cantik manis manis pokonya semua ada. <br>
        Dan kelas kami juga kompak kok kadang kadang ajasi tapi hehe. <br>
        Tapi mudah mudahan kedepannya lebih kompak dan solid ya teman teman. 
    </p>
        </div>

        <?php
            }
            if($pages == "product"){
        ?>
        <div id="content-product">
             <h1>PRODUCT</h1><br>
             <p>Dibawah ini adalah product kami
             </p>
            <ul>
             <li><a href="index.php?modul=produk1">Produk 1</a></li>
             <li><a href="index.php?modul=produk2">Produk 2</a></li>
             <li><a href="index.php?modul=produk3">Produk 3</a></li>
            
            </ul>
        </div>

        <?php
            }
            if($pages == "produk1"){
        ?>
    <div id="content-produk1">
            <h1>PRODUK OLAHRAGA</h1><br>
            <ul><li>Bola Volly</li>
            <li>Tenis Meja</li>
            <li>Raket</li>
            </ul><br>
            <a href="index.php?modul=product"><i class="fa-solid fa-backward"></i>
        </div>

        <?php
            }
            if($pages == "produk2"){
        ?>
    <div id="content-produk2">
            <h1>PRODUK ELEKTRONIK</h1><br>
            <ul><li>Televisi</li>
            <li>Handphone</li>
            <li>Kulkas</li>
            </ul><br>
            <a href="index.php?modul=product"><i class="fa-solid fa-backward"></i>
        </div>

        <?php
            }
            if($pages == "produk3"){
        ?>
    <div id="content-produk3">
            <h1>PRODUK FURNITURE</h1><br>
            <ul><li>Meja</li>
            <li>Kursi</li>
            <li>Lemari</li>
            </ul><br>
            <a href="index.php?modul=product"><i class="fa-solid fa-backward"></i>
            </p>
        </div>

        <?php
            }
            if($pages == "blog"){
        ?>
        <div id="content-blog">
         <h1>TITLE BLOG</h1><br>
         <p>Selamat diwebsite 11 rpl 1 kelas kami adalah kelas yang paling baik dan rajin. <br>
        Dikelas kami juga orangnya ganteng ganteng cantik cantik manis manis pokonya semua ada. <br>
        Dan kelas kami juga kompak kok kadang kadang ajasi tapi hehe. <br>
        Tapi mudah mudahan kedepannya lebih kompak dan solid ya teman teman. 
    </p>
        </div>

        <?php
            }
            if($pages == "contact"){
        ?>

        <div id="content-contact">

            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>

    <title>CRUD Application</title>
</head>
<body style="color: white; background-color: #1d2630;">
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-5 mb-5"><strong>CRUD Application</strong></h1>
        </div>
        <div class="main row justify-content-center">
            <form action="" id="student-form" class="main row justify-content-center mb-4" autocomplate="off">
                <div class="col-10 col-md-8  mb-3">
                    <label for="firstName">First Name</label>
                    <input class="form-control" id="firstName" type="text" placeholder="Enter first Name" onkeyup="validatefirstName()">
                    <span id="firstname-error"></span>
                    </div>

                <div class="col-10 col-md-8 mb-3">
                    <label for="firstName">Last Name</label>
                    <input class="form-control" id="lastName" type="text" placeholder="Enter last Name" onkeyup="validatelastName()">
                    <span id="lastname-error"></span>
                    </div>

                    <div class="col-10 col-md-8 mb-3">
                        <label for="firstName">Roll No</label>
                        <input class="form-control" id="rollNo" type="text" placeholder="Enter roll No" onkeyup="validaterollNo()">
                        <span id="no-error"></span>
                        </div>
                        
                    <div class="col-10 col-md-8">
                        <input class="btn btn-success add-btn" type="submit" value="submit">
                        </div>

                    <div class="col-12 col-md-10 mt-5">
                        <table class="table table-striped table-dark">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Roll No</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="student-list">
                                <tr>
                                    <td>Dear</td>
                                    <td>Progammer</td>
                                    <td>25</td>
                                    <td>
                                        <a href="#" class="btn btn-warning btn-sm edit">Edit</a>
                                        <a href="#" class="btn btn-danger btn-sm delete">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

            </form>
        </div>
    </div>
    <script src="script.js"></script>
</body>   
</html>
        </div>


        <?php
            } 
            ?>

</body>
</html>