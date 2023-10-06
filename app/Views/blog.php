<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>
        Home
    </title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>


    <!-- STYLES -->

    <style {csp-style-nonce}>
    * {
        transition: background-color 300ms ease, color 300ms ease;
    }

    *:focus {
        background-color: rgba(221, 72, 20, .2);
        outline: none;
    }

    html,
    body {
        color: rgba(33, 37, 41, 1);
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
        font-size: 16px;
        margin: 0;
        padding: 0;
        -webkit-font-smoothing: antialiased;
        -moz-osx-font-smoothing: grayscale;
        text-rendering: optimizeLegibility;
    }

    header {
        background-color: rgba(247, 248, 249, 1);
        padding: .4rem 0 0;
    }

    .menu {
        padding: .4rem 2rem;
    }

    header ul {
        border-bottom: 1px solid rgba(242, 242, 242, 1);
        list-style-type: none;
        margin: 0;
        overflow: hidden;
        padding: 0;
        text-align: right;
    }

    header li {
        display: inline-block;
    }

    header li a {
        border-radius: 5px;
        color: rgba(0, 0, 0, .5);
        display: block;
        height: 44px;
        text-decoration: none;
    }

    header li.menu-item a {
        border-radius: 5px;
        margin: 5px 0;
        height: 38px;
        line-height: 36px;
        padding: .4rem .65rem;
        text-align: center;
    }

    header li.menu-item a:hover,
    header li.menu-item a:focus {
        background-color: rgba(221, 72, 20, .2);
        color: rgba(221, 72, 20, 1);
    }

    header .logo {
        float: left;
        height: 50px;
        width: 50px;
        padding: .4rem .5rem;
    }

    header .menu-toggle {
        display: none;
        float: right;
        font-size: 2rem;
        font-weight: bold;
    }

    header .menu-toggle button {
        background-color: rgba(221, 72, 20, .6);
        border: none;
        border-radius: 3px;
        color: rgba(255, 255, 255, 1);
        cursor: pointer;
        font: inherit;
        font-size: 1.3rem;
        height: 36px;
        padding: 0;
        margin: 11px 0;
        overflow: visible;
        width: 40px;
    }

    header .menu-toggle button:hover,
    header .menu-toggle button:focus {
        background-color: rgba(221, 72, 20, .8);
        color: rgba(255, 255, 255, .8);
    }

    header .heroe {
        margin: 0 auto;
        max-width: 1100px;
        padding: 1rem 1.75rem 1.75rem 1.75rem;
    }

    header .heroe h1 {
        font-size: 2.5rem;
        font-weight: 500;
    }

    header .heroe h2 {
        font-size: 1.5rem;
        font-weight: 300;
    }



    .further {
        background-color: rgba(247, 248, 249, 1);
        border-bottom: 1px solid rgba(242, 242, 242, 1);
        border-top: 1px solid rgba(242, 242, 242, 1);
    }

    .further h2:first-of-type {
        padding-top: 0;
    }

    footer {
        background-color: rgba(221, 72, 20, .8);
        text-align: center;
    }

    footer .environment {
        color: rgba(255, 255, 255, 1);
        padding: 2rem 1.75rem;
    }

    footer .copyrights {
        background-color: rgba(62, 62, 62, 1);
        color: rgba(200, 200, 200, 1);
        padding: .25rem 1.75rem;
    }

    @media (max-width: 629px) {
        header ul {
            padding: 0;
        }

        header .menu-toggle {
            padding: 0 1rem;
        }

        header .menu-item {
            background-color: rgba(244, 245, 246, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
            margin: 0 15px;
            width: calc(100% - 30px);
        }

        header .menu-toggle {
            display: block;
        }

        header .hidden {
            display: none;
        }

        header li.menu-item a {
            background-color: rgba(221, 72, 20, .1);
        }

        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(221, 72, 20, .7);
            color: rgba(255, 255, 255, .8);
        }
    }

    .carousel-item {
        height: 450px;
    }
    </style>
</head>

<body>

    <!-- HEADER: MENU + HEROE SECTION -->
    <header>

        <div class="menu">
            <ul>
                <li class="logo">
                    <a href="<?=base_url('/')?>">
                        <img src="<?=base_url().'/uploads/jrlogo.jpg'?>" class="img-fluid rounded-top" alt="">
                    </a>
                </li>
                <li class="menu-toggle">
                    <button onclick="toggleMenu();">&#9776;</button>
                </li>
                <li class="menu-item hidden"><a href="<?=base_url('/')?>">Home</a></li>
                <li class="menu-item hidden"><a href="<?=base_url('/blogs') ?>">Blogs</a>
                </li>
                <li class="menu-item hidden"><a href="">Community</a></li>
                <li class="menu-item hidden"><a
                        href="">Contribute</a>
                </li>
            </ul>
        </div>



    </header>


    <div class="container-fluid" style="background-color: #85FFBD; background-image: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);" >
        <h3 class="pt-4 pb-4">BLOGS</h3>
        <?php
        if(!empty($article)): 
        
        ?>
        <?php foreach($article as $row):  ?>
        <div class="row">
            <div class="col-md-3">
                <img src="<?=base_url('/uploads/articles/'.$row['image']) ?>"  style=" height: 180px; width: 288px; " class="pb-4" alt="">

            </div>
            <div class="col-md-9" >
                <p class=" pt-2 pb-2">
                    <a href="" class="text-uppercase" ><?=$row['title'] ?></a>
                </p>
                <p class=" pt-2 pb-2">
                    <a href="" class="text-muted text-lowercase" ><?=$row['description'] ?></a>
                </p>
                <p class=" pt-2 pb-2">
                    Author: <span class="text-muted text-uppercase" ><?=$row['author'] ?></span>
                </p>

            </div>
        </div>
        <?php endforeach;  ?>
        <?php endif; ?>
    </div>















    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->
 

    <footer>
        <!-- <div class="environment">

        <p>Page rendered in {elapsed_time} seconds</p>

        <p>Environment: <?= ENVIRONMENT ?></p>

    </div> -->
    <div class="container-fluid" style="background-image: linear-gradient(135deg, #fdfcfb 0%, #e2d1c3 100%);" >
        <div class="row">
            <div class="col-md-3 pt-4 pb-4"  >
                <h5>LOGO</h5>
                <small class="text-muted">
                    <strong>Company Inc.</strong> <br>
                    Balkot, Bhaktapur<br>
                    +977 9818757631<br>
                    jeetu.ray39@gmail.com

                </small>
            </div>
            <div class="col-md-3 pt-4 pb-4 ">
            <h5>IMPORTANT LINKS</h5>
            <ul class="list-unstyled text-small">
                <li><a href="" class="text-muted">About us</a></li>
                <li><a href="" class="text-muted">Services</a></li>
                <li><a href="" class="text-muted">Blog</a></li>
                <li><a href="" class="text-muted">Categories</a></li>
            </ul>
                
            </div>
            <div class="col-md-3 pt-4 pb-4 ">
            <h5>MY ACCOUNT</h5>
            <ul class="list-unstyled text-small">
                <li><a href="" class="text-muted">Login</a></li>
                <li><a href="" class="text-muted">Register</a></li>
                <li><a href="" class="text-muted">My Articles</a></li>
                
            </ul>
                
            </div>
            <div class="col-md-3 pt-4 pb-4 ">
            <h5>SUPPORT</h5>
            <ul class="list-unstyled text-small">
                <li><a href="" class="text-muted">Contact us</a></li>
               
                
            </ul>
                
            </div>
            
        </div>
    </div>

        <div class="copyrights">

            <p>&copy; <?= date('Y') ?> Jeetu Foundation. This is the WebAPP project</p>

        </div>

    </footer>

    <!-- SCRIPTS -->

    <script>
    function toggleMenu() {
        var menuItems = document.getElementsByClassName('menu-item');
        for (var i = 0; i < menuItems.length; i++) {
            var menuItem = menuItems[i];
            menuItem.classList.toggle("hidden");
        }
    }
    </script>

    <!-- -->
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

</body>

</html>