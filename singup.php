<?php
require "common.php";
?>
<html>
    <head>
        <title>lifestyle store</title>
        <link href="css/style.css" rel="stylesheet" type="text/css" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajas/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <br><br><br>
    
        <div class="container">
                <div class="col-xs-offset-4 col-xs-4">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h4><center>Sign Up</center></h4>
                        </div>
                        <div class="panel-body">
                            
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
        </div>
        <br><br><br><br><br><br><br><br><br>
   
    </body>
    
</html>

