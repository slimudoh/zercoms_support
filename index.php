<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="zercom systems support">
    <meta name="keywords" content="zercom, osTicket, Customer support system, support ticket system">
    <meta name="author" content="Uwem slim Udoh">    
    
    <title>Zercom Support</title>
   
    <!-- favicon -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">

    <!-- style -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="logo">
                        <a href="index.php">
                            <img src="images/logo.png">
                        </a>                        
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="headline">
                        Client and Application Support Ticketing System
                        <br>
                        (CASTS)
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="head-text">
                        In order to streamline support requests and better serve you, we utilize a support ticket system. Every support request is assigned a unique ticket number which you can use to track the progress and responses online. For your reference we provide complete archives and history of all your support requests. A valid email address is required to submit a ticket. 
                    </div>
                </div>

                <div class="col-md-12">                    
                    <div style="width:200px;height:40px;margin:0 auto;">
                        <a href="faq.php">
                            <div class="help">
                                <div class="help-left">
                                    NEED HELP?
                                </div>
                                <div class="help-right">
                                    <img src="images/help.png">
                                </div>
                            </div>
                        </a>                        
                    </div>                    
                </div>

            </div>
        </div>
    </div>
  

    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="section-item">
                        <div class="item-icon">
                            <img src="images/open.png">
                        </div>
                        <div class="item-head">
                            OPEN A TICKET
                        </div>
                        <div class="item-body">
                            <p>
                                Create a new ticket. please provide as much detail as possible so we can best assist you.
                            </p>
                        </div>
                        <div class="item-btn" onclick="openTicket()">
                            <img src="images/arrow.png">
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="section-item">
                        <div class="item-icon">
                            <img src="images/status.png">
                        </div>
                        <div class="item-head">
                            CHECK TICKET STATUS
                        </div>
                        <div class="item-body">
                            <p>
                                We provide archives and history of all your current and past support requests complete with responses.
                            </p>
                        </div>
                        <div class="item-btn" onclick="statusTicket()">
                            <img src="images/arrow.png">
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="section-item">
                        <div class="item-icon">
                            <img src="images/faq.png">
                        </div>
                        <div class="item-head">
                            KNOWLEDGE BASE
                        </div>
                        <div class="item-body">
                            <p>
                                Click on the category to browse FAQs and get easy access to our support team.
                            </p>
                        </div> 
                        <div style="width: 100px;height: 40px;margin: 0 auto;"> 
                            <a href="faq.php">  
                                <div class="item-btn">
                                    <img src="images/arrow.png">
                                </div> 
                            </a>                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="step">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="topic">
                        HOW IT WORKS
                    </div>
                    <div class="bar"></div>
                    <div class="sup">
                        Steps to create ticket and check status
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="step-icon" onclick="openTicket()">
                        <img src="images/1.png">
                    </div>                    
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="step-text">
                        <div class="step-head">OPEN A TICKET</div>
                        <div class="line"></div>
                        <div style="font-weight: normal;">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and  scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and  scrambled it to make a type specimen book.
                            </p>
                        </div>
                        <div class="step-btn" onclick="openTicket()">
                            CREATE A NEW TICKET
                        </div> 
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="step-icon" onclick="statusTicket()">
                        <img src="images/2.png">
                    </div>                    
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6">
                    <div class="step-text">
                        <div class="step-head">CHECK TICKET STATUS</div>
                        <div class="line"></div>
                        <div style="font-weight: normal;">
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and  scrambled it to make a type specimen book. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and  scrambled it to make a type specimen book.
                            </p>
                        </div>
                        <div class="step-btn" onclick="statusTicket()">
                            CHECK YOUR TICKET STATUS
                        </div>                     
                    </div>
                </div>
            </div>
            
        </div>
    </div>


    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    Copyright &copy;2017 Zercom Support - All rights reserved.
                </div>
            </div>
        </div>
    </div>


    <div class="open-div" id="openticket">
        <div class="open-content" id="opencont">
            <div class="banner">
                <div class="col-xs-6 col-sm-11 col-md-11">
                    <div class="banner-left">
                        OPEN A NEW TICKET
                    </div>
                </div>
                <div class="col-xs-6 col-sm-1 col-md-1">
                    <div class="banner-right" onclick="closeMdl()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </div>
                </div>        
            </div>
            <div class="status-body">

                <form>



                    <!-- help input -->
                    <div class="col-md-12">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="col-md-12">
                                <i class="fa fa-info-circle"></i> Please fill in the form below to open a new ticket. Fields marked in red (<span style="color: red;">*</span>) are important.
                            </div>

                            <div class="col-md-12" style="margin: 20px 0 10px 0;">
                                <div class="col-md-4" style="font-weight: 600;height: 40px;padding: 0;">
                                    SELECT A TOPIC:
                                    <div class="line"></div>
                                </div>
                                <div class="col-md-8" style="padding:0;">
                                    <div class="sts-div">
                                        <select class="input">
                                            <option>SELECT A TOPIC</option>
                                            <option value="">FEEDBACK</option>
                                            <option value="">GENERAL ENQUIRY</option>
                                            <option value="">OMNIDOCS</option>                                
                                            <option value="">OMNISCAN</option>
                                            <option value="">TANGERINE LMS</option>
                                            <option value="">TANGERINE MOBILE</option>
                                            <option value="">TANGERINE MOBILE/ACCESS ISSUE</option>
                                        </select>                                        
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div> 
                    </div>

                    <!-- name input -->
                    <div class="col-md-12">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">                            

                            <div class="col-md-12" style="margin: 20px 0 10px 0;">
                                <div class="col-md-3" style="padding:0;font-size: 16px;">
                                    CONTACT DETAIL                                    
                                </div>
                                <div class="col-md-9" style="padding:0;">
                                    <div class="long-line"></div>
                                </div>
                            </div>


                            <div class="col-md-12" style="margin: 10px 0 10px 0;">
                                <div class="col-md-4" style="font-weight: 600;height: 40px;padding: 0;">
                                    FULL NAME:<span style="color: red;">*</span>
                                    <div class="line"></div>
                                </div>
                                <div class="col-md-8" style="padding:0;">
                                    <div class="sts-div">
                                        <input type="text" name="" class="input" id="full-name" onblur="validateFullname()">
                                        <div class="msg" id="name-err"></div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div> 
                    </div>

                    <!-- company input -->
                    <div class="col-md-12">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">                        
                            <div class="col-md-12" style="margin: 20px 0 10px 0;">
                                <div class="col-md-4" style="font-weight: 600;height: 40px;padding: 0;">
                                    COMPANY NAME:
                                    <div class="line"></div>
                                </div>
                                <div class="col-md-8" style="padding:0;">
                                    <div class="sts-div">
                                        <input type="text" name="" class="input"">
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div> 
                    </div>


                    <!-- email input -->
                    <div class="col-md-12">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">                        
                            <div class="col-md-12" style="margin: 20px 0 10px 0;">
                                <div class="col-md-4" style="font-weight: 600;height: 40px;padding: 0;">
                                    EMAIL ADDRESS:<span style="color: red;">*</span>
                                    <div class="line"></div>
                                </div>
                                <div class="col-md-8" style="padding:0;">
                                    <div class="sts-div">
                                        <input type="text" name="" class="input" id="mail-add" onblur="validateMail()">
                                        <div class="msg" id="mail-err"></div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div> 
                    </div>

                    <!-- phone input -->
                    <div class="col-md-12">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">                        
                            <div class="col-md-12" style="margin: 20px 0 10px 0;">
                                <div class="col-md-4" style="font-weight: 600;height: 40px;padding: 0;">
                                    PHONE NUMBER:
                                    <div class="line"></div>
                                </div>
                                <div class="col-md-8" style="padding:0;">
                                    <div class="sts-div">
                                        <input type="text" name="" class="input" id="phone">
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div> 
                    </div>


                    <!--ISSUE SUMMARY input -->
                    <div class="col-md-12">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">                            

                            <div class="col-md-12" style="margin: 20px 0 10px 0;">
                                <div class="col-md-3" style="padding:0;font-size: 16px;">
                                    TICKET DETAIL:
                                </div>
                                <div class="col-md-9" style="padding:0;">
                                    <div class="long-line"></div>
                                </div>
                            </div>


                            <div class="col-md-12" style="margin: 10px 0 10px 0;">
                                <div class="col-md-4" style="font-weight: 600;height: 40px;padding: 0;">
                                    ISSUE SUMMARY:<span style="color: red;">*</span>
                                    <div class="line"></div>
                                </div>
                                <div class="col-md-8" style="padding:0;">
                                    <div class="sts-div">
                                        <input type="text" name="" class="input" id="issue-sum" onblur="validateSum()">
                                        <div class="msg" id="sum-err"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div>
                    </div>


                    <!-- issue detail input -->
                    <div class="col-md-12">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">                        
                            <div class="col-md-12" style="margin: 20px 0 10px 0;">
                                <div class="col-md-4" style="font-weight: 600;height: 40px;padding: 0;">
                                    ISSUE DETAIL:<span style="color: red;">*</span>
                                    <div class="line"></div>
                                </div>
                                <div class="col-md-8" style="padding:0;">
                                    <!-- <div class="sts-div">
                                        <textarea></textarea>
                                    </div> -->

                                    <textarea class="sts-text" id="issue-det" onblur="validateDet()"></textarea></textarea>
                                    <div class="msg" id="det-err"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div> 
                    </div>

                    <!-- UPLOAD input -->
                    <div class="col-md-12">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">                        
                            <div class="col-md-12" style="margin: 20px 0 10px 0;">
                                <div class="col-md-4" style="font-weight: 600;height: 40px;padding: 0;">
                                    ATTACH FILE:
                                    <div class="line"></div>
                                </div>
                                <div class="col-md-8" style="padding:0;">
                                    <div class="inputfile-box">
                                        <input type="file" id="file" class="input-file" onchange='uploadFile(this)'>
                                        <label for="file" style="width: 100%;">
                                            <span id="file-name" class="file-box">
                                                DROP YOUR FILE HERE
                                            </span>
                                            <!-- <span class="file-button">
                                                <i class="fa fa-upload" aria-hidden="true"></i>
                                                Select File
                                            </span> -->
                                        </label>
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div> 
                    </div>


                    <!-- submit button -->
                    <div class="col-md-12">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">                        
                            <div class="col-md-12" style="margin: 20px 0 10px 0;">
                                <div class="col-md-4"></div>
                                <div class="col-md-8" style="padding:0;">
                                    <div class="sts-btn">
                                        <input type="submit" value="SUBMIT" name="" class="input-btn">
                                    </div>                                  
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div> 
                    </div>

                    <!-- other button -->
                    <div class="col-md-12">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">                        
                            <div class="col-md-12" style="margin: 20px 0 10px 0;">
                                <div class="col-md-4"></div>
                                <div class="col-md-8" style="padding:0;">
                                    <div class="col-xs-6 col-sm-6 col-md-6" style="padding-left:0;">
                                        <div class="other-btn" onclick="resetBtn()">
                                            RESET                                            
                                        </div> 
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6" style="padding-right:0;">
                                        <div class="other-btn" onclick="closeMdl()">
                                            CLOSE                                            
                                        </div> 
                                    </div>                                                                     
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div> 
                    </div>

                </form>            
            </div>
           
            
        </div>        
    </div>

    <div class="status-div" id="statusticket">
        <div class="status-content" id="statuscont">
            <div class="banner">
                <div class="col-xs-6 col-sm-11 col-md-11">
                    <div class="banner-left">
                        CHECK TICKET STATUS
                    </div>
                </div>
                <div class="col-xs-6 col-sm-1 col-md-1">
                    <div class="banner-right" onclick="closeMdl()">
                        <i class="fa fa-times" aria-hidden="true"></i>
                    </div>
                </div>        
            </div>
            <div class="status-body">

                <form>

                    <!-- email input -->
                    <div class="col-md-12">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">
                            <div class="col-md-12">
                                <i class="fa fa-info-circle"></i> Please provide your email address and a ticket number. An access link will be emailed to you.
                            </div>

                            <div class="col-md-12" style="margin: 20px 0 10px 0;">
                                <div class="col-md-4" style="font-weight: 600;height: 40px;padding: 0;">
                                    EMAIL ADDRESS:
                                    <div class="line"></div>
                                </div>
                                <div class="col-md-8" style="padding:0;">
                                    <div class="sts-div">
                                        <input type="text" name="" class="input" id="email-add" onblur="validateEmail()" required>
                                        <div class="msg" id="email-err"></div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div> 
                    </div>


                    <!-- ticket number input -->
                    <div class="col-md-12">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">                        
                            <div class="col-md-12" style="margin: 20px 0 10px 0;">
                                <div class="col-md-4" style="font-weight: 600;height: 40px;padding: 0;">
                                    TICKET NUMBER:
                                    <div class="line"></div>
                                </div>
                                <div class="col-md-8" style="padding:0;">
                                    <div class="sts-div">
                                        <input type="text" name="" class="input" id="tktnum"  onblur="validateTicket()" required>
                                        <div class="msg" id="tkt-err"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div> 
                    </div>


                    <!-- buttons -->
                    <div class="col-md-12">
                        <div class="col-md-1"></div>
                        <div class="col-md-10">                        
                            <div class="col-md-12" style="margin: 20px 0 10px 0;">
                                <div class="col-md-4"></div>
                                <div class="col-md-8" style="padding:0;">
                                    <div class="sts-btn">
                                        <input type="submit" value="SUBMIT" name="" class="input-btn">
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <div class="col-md-1"></div> 
                    </div>

                </form>            
            </div>
        </div>
    </div>
    
    <!-- script -->
    <script type="text/javascript">
        function uploadFile(target) {
            document.getElementById("file-name").innerHTML = target.files[0].name;
    }
    </script>
    <script type="text/javascript" src="js/custom.js"></script>  
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>