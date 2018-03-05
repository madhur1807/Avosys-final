
<header class="header-area navbar-fixed-top">
        <div class="container custom-header">
        <div class="row">
            <div id="menuzord" class="menuzord">
                <a href="home.html" class="menuzord-brand"><img src="images/logo.png" width="150" alt=""></a>
                    <div class="header-search">                       
                    </div>                   
                    <ul class="menuzord-menu menuzord-menu-bg">
                    <li class="active"><a href="index.php">Home</a>                        
                    </li>
                    <li><a href="about-us.php">About Us</a>     
                    </li>
                    <li><a href="#">Retail Mortgage</a>
                        <ul class="dropdown">
                            <li><a href="#">Services</a>
                                <ul class="dropdown">
                                    <li><a href="home-loan.php">Home Loan</a></li>
                                    <li><a href="loan-against-property.php">Loan Against Property</a></li>
                                    <li><a href="purchase-of-commercial-property.php">Purchase of Commercial Property</a></li>
                                    <li><a href="lease-rental-discounting.php">Lease Rental Discounting</a></li>
                                    <li><a href="bussiness-loan.php">Business Loan</a></li>
                                    <li><a href="balance-transfer-retail.php">Balance Transfer</a></li>
                                    <li><a href="emi.php">EMI Calculator</a></li>
                                </ul>
                            </li>
                            <li><a href="#">List of Documents</a>
                                <ul class="dropdown">
                                    <li><a href="salaried.php">For Salaried</a></li>
                                    <li><a href="business.php">For Business</a></li>
                                </ul>
                            </li>                            
                        </ul>
                    </li>
                    <li id="project-financing"><a href="#">Project Financing</a>
                        <ul class="dropdown">
                            <li><a href="working-capital.php">Working Capital</a></li>
                            <li><a href="term-loan.php">Term Loan</a></li>
                            <li><a href="balance-transfer-project.php">Balance Transfer</a></li>      
                        </ul>
                    </li>                  
                                            
                    <li id="get-associated"><a href="get-associated.php">Get Associated With Us </a>
                    </li>       
                    <li id="contact"><a href="contact.php">Contact Us</a></li>
                    </ul>
                                        
            </div>
        </div>
        </div>
    </header>
    <script src="js/jquery-1.11.3.min.js"></script> 
    <script>
    $(document).ready(function(){
        var current_path = window.location.pathname.split('/').pop();
        if(current_path == "index.php"){
            $(".menuzord-menu li").removeClass("active");
            $(".menuzord-menu li").eq(0).addClass("active");
        } else if(current_path == "about-us.php"){
            $(".menuzord-menu li").removeClass("active");
            $(".menuzord-menu li").eq(1).addClass("active");
        } else if(current_path == "get-associated.php"){
            $(".menuzord-menu li").removeClass("active");
            $("#get-associated").addClass("active");
        } else if(current_path == "contact.php"){
            $(".menuzord-menu li").removeClass("active");
            $("#contact").addClass("active");
        } else if(current_path == "home-loan.php" || current_path == "loan-against-property.php" || current_path == "purchase-of-commercial-property.php" || current_path == "lease-rental-discounting.php" || current_path == "Business-loan.php" || current_path == "balance-transfer-retail.php" || current_path == "salaried.php" || current_path == "business.php"){
                $(".menuzord-menu li").removeClass("active");
                $(".menuzord-menu li").eq(2).addClass("active");
        } else if(current_path == "working-capital.php" || current_path == "term-loan.php" || current_path == "balance-transfer-project.php" || current_path == "emi.php"){
            $(".menuzord-menu li").removeClass("active");
            $("#project-financing").addClass("active");
        }
        if(current_path == "privacy-policy.php"){
            $(".menuzord-menu li").removeClass("active");
        }
    });       
    </script>