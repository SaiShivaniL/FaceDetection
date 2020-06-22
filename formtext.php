<?php
require "common.php";
?>
<html>
    <head>
        
        <title>WHEELZ</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body style="background-color:#4A3600">
        <?php
        ?>
         <br><br><br>
        

                    <div class="popup_inner">
                         <div class="container">
                             <div class="jumbotron" style="background-color:lightcoral">
                                 <a href="index.php"><h1>WHEELZ</h1></a>
                             </div>
                         <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3>Make an Appointment</h3> 
                        </div>
                        
                        <form  method="POST" action="appointment_script.php">
                            <div class="row">
                                <div class="col-xl-6 col-md-6">
                                    <div class="form-group">
                                   <input type="date"  placeholder="Date" name="date"  >
                                    </div>

                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <div class="form-group">
                              <input type="time"  placeholder="Time" name="time" >
                                    </div>
                      
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <select class="form-select wide" id="default-select" name="services">
                                        <option data-display="Choose services">Choose Services</option>
                                        <option value="1">Oil and oil filter service</option>
                                        <option value="2">Cooling system service </option>
                                        <option value="3">Air conditioning services</option>
                                        <option value="4">Fuel or air induction cleanup</option>
                                    </select>
                                </div>
                                <div class="col-xl-6 col-md-6">
                                    <select class="form-select wide" id="default-select"name="technicians">
                                        <option data-display="Choose technicians">Choose technicians</option>
                                        <option value="1">Zaki</option>
                                        <option value="2">Ronky</option>
                                        <option value="3">kalu</option>
                                        <option value="4">Rona Dana</option>
                                    </select>
                                </div>
                               
                                <div class="col-xl-6 col-md-6">
                                    <br>
                                    <div class="form-group">
                                    <input type="text" placeholder="Your name" name="name">
                                    </div>
                                </div>
                                
                                <div class="col-xl-6 col-md-6">
                                     <br>
                                     <div class="form-group">
                                    <input type="text" placeholder="Phone no" name="contact">
                                     </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-group">
                                    <input type="email" placeholder="Your email" name="email">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="form-group">
                                    <button type="submit" class="boxed-btn3">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                         </div>
                         </div>
                    </div>
    </body>
</html>