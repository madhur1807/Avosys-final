<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- TITLE -->
      <title>Emi Calculator</title>
      <!-- FAVICON -->
      <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />      
      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!--FONT AWESOME -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-- MENU -->
      <link rel="stylesheet" href="css/menuzord.css">       
      <!-- STROKE GAP ICON -->
      <link href="css/stroke-icon.css" rel="stylesheet">
      <link href="css/demo.css" rel="stylesheet">
      <link href="css/ie7.css" rel="stylesheet">
      <!-- Portfolio Filter -->
      <link rel="stylesheet" href="css/bootFolio.css">
      <!-- Popup -->
      <link rel="stylesheet" href="css/magnific-popup.css">      
      <!-- JQUERY UI STYLE -->
      <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">       
      <!-- OWL CSS -->
      <link href="css/owl.theme.default.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">  
      <!-- RS5.0 Main Stylesheet -->
      <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">    
      <!-- RS5.0 Layers and Navigation Styles -->
      <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
      <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">           
      <!-- MAIN STYLE -->
      <link rel="stylesheet" href="css/style.css">
      <link rel="stylesheet" href="css/emi.css">
      <!-- GOOGLE FONT -->
      <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
         
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
   </head>
   <body>

      <!-- =========================
        START PRELOADER
      ============================== -->
      <div class="outslider_loading">
         <div class="outslider_loader"></div>
      </div>

      <!-- =========================
        END PRELOADER
      ============================== -->

      <!-- =========================
        START HEADER SECTION
      ============================== -->  
      <?php include 'header.php';?>
      <!-- =========================
        START HEADER SECTION
      ============================== -->

      <!-- =========================
        START PAGE TITLE SECTION
      ============================== -->
      <div class="page-title-area header-v-area">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-md-6">
                  <div class="page-title-left">
                     <h2>EMI CALCULATOR</h2>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6">
                  <div class="page-bredcrumbs-area text-right">
                     <ul  class="page-bredcrumbs">
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Project Financing</a></li>
                        <li><a href="#">Emi Calculator</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- =========================
        END PAGE TITLE SECTION
      ============================== -->      

      <!-- =========================
        START FEATURE TYPOGRAPHY SECTION
      ============================== -->         
      <section class="feature-typo" style="padding:50px 0">
           <div class="container">
               <div class="row">
                   <div class="col-md-7 main-emi list-group">
                    <div id="main_bot" class="list-group-item">
                        <h4>Loan Amount</h4>
                        <div id="slider_1" class="col-md-6">
                            <div id="textarea_three">0</div>
                            <div id="textarea_four">20L</div>
                        </div> 
                        <div class="col-md-6" style="text-align:right;">
                          <div class="input-group" style="width: 65%;float:right;">
                            <input type="number" class="form-control" onChange="amountChanged(this)" id="valueL" style="display: inline-block;">
                            <span class="input-group-addon" id="basic-addon2">Lakhs</span>
                          </div>
                        </div>
                    </div>
                    <div id="main_bot1" class="list-group-item">
                        <h4>Interest Rate</h4>
                        <div id="slider_2" class="col-md-6">
                            <div id="textarea_three">0</div>
                            <div id="textarea_four">15p.a.</div>
                            
                        </div> 
                        <div class="col-md-6 " style="text-align:right;">
                          <div class="input-group" style="width: 65%;float:right;">
                            <input type="number" class="form-control" id="valueP" style="display: inline-block;" max="15">
                            <span class="input-group-addon" id="basic-addon2">p.a</span>
                          </div>
                        </div>
                    </div>
                    <div id="main_bot2" class="list-group-item">
                        <h4>Loan Term</h4>
                        <div id="slider_3" class="col-md-6">
                            <div id="textarea_three">0</div>
                            <div id="textarea_four">30Yrs</div>
                        </div> 
                        <div class="col-md-6 " style="text-align:right;overflow:auto">
                          <div class="input-group" style="width: 65%;float:right;">
                            <input type="number" class="form-control" id="valueY" style="display: inline-block;" max="30">
                            <span class="input-group-addon" id="basic-addon2">Years</span>
                          </div>
                        </div>
                    </div>
                   
                       <!-- <div class="f-h1-head">
                           <h1>What is EMI?</h1>
                           <p>Equated Monthly Installment – EMI for short – is the amount payable every month to the bank or any other financial institution until the loan amount is fully paid off. It consists of the interest on loan as well as part of the principal amount to be repaid. The sum of principal amount and interest is divided by the tenure, i.e., number of months, in which the loan has to be repaid. This amount has to be paid monthly. The interest component of the EMI would be larger during the initial months and gradually reduce with each payment. The exact percentage allocated towards payment of the principal depends on the interest rate. Even though your monthly EMI payment won’t change, the proportion of principal and interest components will change with time. With each successive payment, you’ll pay more towards the principal and less in interest.<br><br><span style="font-weight: bold;font-size: 14px;"
                            >Here’s the formula to calculate EMI:</span><br><br>
                            <img src="images/emiformula.png"><br>
                            <b>where</b><br>
                            <b>E</b> is EMI<br>
                            <b>P</b> is Principal Loan Amount<br>
                            
                            <b>r</b> is s rate of interest calculated on monthly basis. (i.e., r = Rate of Annual interest/12/100. If rate of interest is 10.5% per annum, then r = 10.5/12/100=0.00875)<br>
                            <b>n</b> is loan term / tenure / duration in number of months<br><br>
                            Whether you obtain a secured loan (home loan or car loan) or an unsecured loan (personal loan), you have to repay the loan through Equated Monthly Installments (EMIs) over a specified period of time called the loan tenure. The cost of your loan is calculated in terms of monthly payments. Loan EMI calculation can help you find out the monthly cost of your loan. Accordingly, you can create a monthly budget to balance your income and expense.<br><br>
                            To ensure your loan EMI payments are within your repayment capacity, you can either adjust the loan tenure or the loan amount, or both. You can’t adjust the loan interest rate and processing fee levied by a bank. However, you can compare various loan offers and choose one with a low interest rate and zero processing fee to lower the cost of your loan.

                            
                          </p>
                       </div> -->
                   </div>
                   <div class="right-emi" >
                        <h3>Monthly EMI:</h3>
                        <h3 class="emi-result"></h3>
                    </div>
               </div>                                             
           </div>
           
      </section>
      <!-- =========================
        END FEATURE TYPOGRAPHY SECTION
      ============================== --> 

      <!-- =========================
        START FOOTER SECTION
      ============================== -->
     <?php include 'footer.php';?>
      <!-- =========================
        END FOOTER SECTION
      ============================== -->

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="js/jquery-1.11.3.min.js"></script>        
      <!-- RS5.0 Core JS Files -->
      <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
      <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>          
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/menuzord.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.counterup.js"></script> 
      <script src="js/waypoints.min.js"></script> 
      <script src="js/countdown.js"></script> 
      <script src="js/parallax.min.js"></script>      
      <script src="js/jquery.bootFolio.js"></script>
      <script src="js/jquery.magnific-popup.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js"></script>       
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
      <script src="js/rev-function.js"></script>     
      <script src="js/smoothscroll.js"></script>      
      <script src="js/jquery.matchHeight.js"></script>       
      <script src="js/main.js"></script>        
      
      <script>
      
        $(function () {
          
          var slider = $("#slider_1").slider({
          range: "min",     
            value: 0,
            min: 0,
            max: 2000000,
            step: 1,
            animate: "fast",
              
              slide:function(event,ui){
                $('#valueL').val(ui.value);
                calEMI();
              },
              change: function(event, ui) {
                        $('#hidden_bottom').attr('value', ui.value);
                        }
                        
          });

          var slider = $("#slider_2").slider({
          range: "min",     
            value: 0,
            min: 0,
            max: 15,
            step: 1,
            animate: "fast",
              slide:function(event,ui){
                $('#valueP').val(ui.value);
                calEMI();
              },
              change: function(event, ui) {
                        $('#hidden_bottom').attr('value', ui.value);
                        }
                        

          });

          var slider = $("#slider_3").slider({
          range: "min",     
            value: 0,
            min: 0,
            max: 30,
            step: 1,
            animate: "fast",
              
              slide:function(event,ui){
                $('#valueY').val(ui.value);
                calEMI();
              },
              change: function(event, ui) {
                        $('#hidden_bottom').attr('value', ui.value);
                        }
                        
          });
         
          $("#valueL").bind('keyup mouseup', function () {
              var changedvalue = $(this).val();  
              
              $("#slider_1").slider({
                value: changedvalue
              });        
              calEMI();  
          });
          $("#valueP").bind('keyup mouseup', function () {
              var changedvalue = $(this).val();  
          
              $("#slider_2").slider({
                value: changedvalue
              });  
              calEMI();        
          });
          $("#valueY").bind('keyup mouseup', function () {
              var changedvalue = $(this).val();  
              $("#slider_3").slider({
                value: changedvalue
              });  
              calEMI();        
          });
          function calEMI(){
            var loanAmount = $("#valueL").val();
            var numberOfMonths = $("#valueP").val();
            var rateOfInterest = $("#valueY").val();
            var monthlyInterestRatio = (rateOfInterest/100)/12;
              
            var top = Math.pow((1+monthlyInterestRatio),numberOfMonths);
            var bottom = top -1;
            var sp = top / bottom;
            var emi = ((loanAmount * monthlyInterestRatio) * sp);
            var rEmi = (emi).toFixed(2);
      
            var lastThree = rEmi.substring(rEmi.length-6);
            var otherNumbers = rEmi.substring(0,rEmi.length-6);
            if(otherNumbers != '')
                lastThree = ',' + lastThree;
            var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
            if(res == "NaN"){
              res = "-";
            }
            $('.emi-result').html(" "+res);
          }
          
        });


      </script>
      
 
   </body>
</html>