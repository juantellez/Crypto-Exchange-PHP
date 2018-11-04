  <header class="header">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-xl-3 col-lg-4 col-md-12">
                        <div class="logo">
                            <a href="/"><img src="../templates/exchange/assets/img/newlogo.png" height="80px" alt="logo"></a>
                        </div>
                        <div class="menu-button d-block d-xl-none d-lg-block d-md-block d-sm-block">
                            <i class="icofont-navigation-menu"></i>
                        </div>
                    </div>
                    <div class="col-xl-7 d-flex align-items-center col-lg-8 col-md-12">
                        <div class="main-menu">
                            <ul>
                                <li><a href="/">Home</a></li>
                                <li><a href="/about">About</a></li>
                                <li><a href="/help">Help</a></li>

                                <?php if(isset($_SESSION['username'])){ echo ' <li><a href="/conta">My account</a></li>'; } ?>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-2 d-flex align-items-center">
                        <div class="sign-in">
                            <?php if(isset($_SESSION['username'])){ ?>
                            
                            <a href="/logout">logout</a>

                            <?php }else{ ?>    
                                
                            <a href="/login">log in</a>
                            
                            <?php } ?>
                        </div>
                    </div>

                </div>
            </div>
        </header>
