<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>VEDA|2K17</title>

    <link href="../assets/stylesheets/home.css" rel="stylesheet" type="text/css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" >
    <!-- font awesome icons -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- touch swipe js -->    
    <script type="text/javascript" src="../assets/scripts/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="../assets/scripts/jquery.touchSwipe.js"></script>
    <script type="text/javascript" src="../assets/scripts/jquery.horizonScroll.js"></script>
    <!-- bootstrap and jquery links
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- My js -->
    <script src="../assets/scripts/styles.js"></script>

    <!-- Google Captcha js -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<?php
    include("config.php");
?>

<body>
    
    <header data-role="header" id="header">
        <navbar class="menu">
            <ul>

                <li>
                    <a href="http://aec.edu.in/veda/"><span>HOME</span></a>
                </li>
                <li>
                    <a href="#section-about"><span>ABOUT</span></a>
                </li>
                <li>
                    <a href="#section-event"><span>EVENT</span></a>
                </li>
                <li>
                    <a href="#section-coordinator"><span>CO-ORDINATOR</span></a>
                </li>
                <li>
                    <a href="#section-register"><span>REGISTER</span></a>
                </li>
                <li>
                    <a href="#section-contact"><span>CONTACT US</span></a>
                </li>
                <li>
                    <a href="#section-partner"><span>PARTNERS</span></a>
                </li>
            </ul>
        </navbar>
    </header>

    <!--
    <div class="horizon-prev"><img src="images/l-arrow.png"></div>-->
    <div class="horizon-next"><img src="../assets/imgs/r-arrow.png"></div>



    <section data-role="section" id="section-about">

        <div class="row">
            <div class="overlay">
                <p class="about">Veda is an annual National technological and entrepreneurial festival organized by the students of Aditya Educational Institute,Surampalem.Etymologically, the word 'Veda' is composed in Vedic Sanskrit, which stands for "not of a man, superhuman" and "impersonal, authorless".Hence, the word 'Veda' signifies Spirit of creation or innovation. The motto of this National Level Technical Symposium is to amalgamate the innovative ideas of young Engineers with experienced minds on the various latest technological trends. This symposium will bringabout a fusion of a large number of technocrats whose masterminds will have an opportunity to work as a team and forge their ideas into masterpieces. Veda was first held in 2010, and has since grown into one of the largest technical festivals in India. The festival is held over 2-3 days every September, attracting participants from every corner of the India.</p>
            </div>

            <div id="veda-poster-view" class="modal fade" role="dialog" >
                  <div class="modal-dialog"  style="width: 70%;">
                        <div class="container-fluid" >
                            <img src="../assets/imgs/veda-poster.jpg" class="img-responsive">
                        </div>
                  </div>
            </div>

            <div class="col-md-2 col-xs-6 col-md-offset-5 col-xs-offset-3">
                <img src="../assets/imgs/veda-poster.jpg"  class="img-responsive" draggable="false" data-toggle="modal" data-target="#veda-poster-view" />
            </div>
        </div>

    </section>
    <section data-role="section" id="section-event">
        <section class="eventbox1">

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-xs-12 col-sm-12 col-md-offset-2" style="margin-bottom: 10%;">
                    <div class="col-md-3 col-xs-3">
                        <center><h3>CSE & IT</h3></center>
                        <a href="events.php?event=digi"><img src="../assets/imgs/iconsforveda2017/digi.png"  class="img-responsive" id="digi"></a>
                    </div>
                    <div class="col-md-3 col-xs-3">
                        <center><h3 style="color: #00DAD9;">EEE</h3></center>
                        <a href="events.php?event=electrenz"><img src="../assets/imgs/iconsforveda2017/electrenz.png" class="img-responsive" id="electrenz"></a>
                    </div>
                    <div class="col-md-3 col-xs-3">
                        <center><h3 style="color: #FF6972;">MINE</h3></center>
                         <a href="events.php?event=excavation"><img src="../assets/imgs/iconsforveda2017/excavation.png" class="img-responsive" id="excavation" ></a>
                    </div>
                    <div class="col-md-3 col-xs-3">
                        <center><h3 style="color: #9CDDDF;">MECH</h3></center>
                        <a href="events.php?event=ignite"><img src="../assets/imgs/iconsforveda2017/ignite.png" class="img-responsive" id="ignite"></a>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>


            <div class="row">
                <div class="col-md-8 col-xs-12 col-sm-12 col-md-offset-2">
                    <div class="col-md-3 col-xs-3">
                        <center><h3 style="color: #4CAF50;">AGRI</h3></center>
                         <a href="events.php?event=krishi"><img src="../assets/imgs/iconsforveda2017/krishi.png" class="img-responsive"  id="krishi"></a>
                    </div>
                    <div class="col-md-3 col-xs-3">
                        <center><h3 style="color: #6C99AE; ">CE</h3></center>
                        <a href="events.php?event=opus"><img src="../assets/imgs/iconsforveda2017/opus.png" class="img-responsive" id="opus"></a>
                    </div>
                    <div class="col-md-3 col-xs-3">
                        <center><h3 style="color: #4479C5;">PT</h3></center>
                        <a href="events.php?event=petrospirit"><img src="../assets/imgs/iconsforveda2017/petrospirit.png" class="img-responsive" id="petrospirit"></a>
                    </div>
                    <div class="col-md-3 col-xs-3">
                        <center><h3 style="color: #C8006D;">ECE</h3></center>
                        <a href="events.php?event=spark"><img src="../assets/imgs/iconsforveda2017/spark.png" class="img-responsive" id="spark"></a>
                    </div>
                </div>
            </div>
        </div>


        </section>
    </section>

    <section data-role="section" id="section-coordinator">
       
        <div class="col-md-8 col-md-offset-2" style="text-align: center; margin-top: 2%;">
            <div class="table-responsive">
                <table class="table">
                    <thead >
                           <tr >
                               <th style="text-align: center">Department</th>
                               <th style="text-align: center">Name</th>
                               <th style="text-align: center">Phone Number</th>
                               <th style="text-align: center">Email</th>
                           </tr>
                       </thead>
                    <tbody>

                    <?php
                        $query = "select * from `ordinator` ORDER BY id ASC";
                        $result = mysqli_query($con, $query);

                        while ($fetch=mysqli_fetch_array($result)) {
                            ?>
                            <tr>
                                <td><img src="../assets/imgs/iconsforveda2017/<?php echo $fetch['submittedby'].'.png'; ?>" width="50px" height="50px" data-toggle="tooltip" data-placement="right" title="<?php echo ucfirst($fetch['submittedby']); ?>"></td>
                                <td><label><?php echo $fetch['fname']; ?></label></td>
                                <td><label><?php echo $fetch['fno']; ?></label></td>
                                <td><label><?php echo $fetch['femail']; ?></label></td>
                            </tr>

                            <?php
                        }
                    ?>
                    </tbody>
                        
                    </table>
        </div>
    </section>


    <section data-role="section" id="section-register">

    <!--<div class="alert alert-danger col-md-4 col-md-offset-4">
        <p>Please Enter Valid Roll Number to get Data.</p>
    </div>-->

        <div class="container">
            <form class="col s12" method="post" onsubmit="return validateEmail(email.value,2);">
                <div class="row">
                <center id="register_note">
                    <h3>NOTE : &nbsp;&nbsp;</h3>
                    <p>Team leader need to be register for team activity events.</p>
                </center>

                <div class="table-responsive" style="border: none;">
                    <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>
                                <div class="input col-md-9 col-md-offset-3">
                                    <label for="rollno">Roll Number</label>
                                    <input type="text" name="rollno" id="rollno" required autocomplete="off" maxlength="10" minlength="10" />
                                 <span class="spin"></span>
                                </div>
                            </td>
                            <td>
                                <div class="input col-md-8">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" required autocomplete="off">
                                 <span class="spin"></span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="input col-md-9 col-md-offset-3">
                                    <label for="dept">Department</label>
                                    <input type="text" name="dept" id="dept" required autocomplete="off">
                                 <span class="spin"></span>
                                </div>
                            </td>

                            <td>
                                <div class="input col-md-8">
                                    <label for="college">College</label>
                                    <input type="text" name="college" id="college" required autocomplete="off">
                                 <span class="spin"></span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="input col-md-9 col-md-offset-3">
                                    <label for="year">Year</label>
                                    <input type="text" name="year" id="year" required autocomplete="off">
                                 <span class="spin"></span>
                                </div>
                            </td>

                            <td>
                                <div class="input col-md-8">
                                    <label for="location">Location</label>
                                    <input type="text" name="location" id="location" required autocomplete="off">
                                 <span class="spin"></span>
                                </div>

                                <input type="hidden" id="gender" name="gender">
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="input col-md-9 col-md-offset-3">
                                    <label for="mobile">Phone No.</label>
                                    <input type="text" maxlength="10" minlength="10" name="mobile" id="mobile" required autocomplete="off">
                                 <span class="spin"></span>
                                </div>
                            </td>

                            <td>
                                <!--<div class="col-md-12">-->
                                    <b style="color: #FF2838; display: none;" class="col-md-8" id="email_erroinfo">Please Enter Valid email.</b>
                                <!--</div>-->
                                <div class="clearfix"></div>
                                <div class="input col-md-8">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" onblur="validateEmail(email.value,1)" required autocomplete="off">
                                 <span class="spin"></span>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="col-md-9 col-md-offset-3" style="margin-top: 4px;">
                                    <span id="acc">Accomodation (100/- Rs)</span>
                                </div>
                            </td>
                            <td>
                                <div class="col-md-7 col-xs-12">
                                    <div class="col-md-6 col-xs-6 pull-left">
                                        <div class="radio">
                                            <label style="font-size: 1.2em">
                                                <input type="radio" name="accomodation" value="Yes" required>
                                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                Yes
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6 col-xs-6 pull-right">
                                        <div class="radio">
                                            <label style="font-size: 1.2em">
                                                <input type="radio" name="accomodation" value="No" required>
                                                <span class="cr"><i class="cr-icon fa fa-circle"></i></span>
                                                No
                                            </label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <div class="col-md-8 col-md-offset-3">
                                    <select id="event_category" name="event_category" required class="form-control">
                                        <option value="" disabled selected>Select Event Category </option>
                                        <?php
                                            $query = "select * from users where username!='thub' ";
                                            $result = mysqli_query($con, $query);
                                            if (mysqli_num_rows($result)>0) {
                                                while ($fetch = mysqli_fetch_array($result)) {
                                                    ?>
                                                    <option value="<?php echo $fetch['username']; ?>"><?php echo $fetch['username']; ?></option>
                                                    <?php
                                                }
                                            }
                                        ?>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div class="col-md-8">
                                    <select id="category_events" name="category_events" required class="form-control">
                                        <option value="" disabled selected>Select Events </option>
                                    </select>
                                </div>
                            </td>
                        </tr>

                    </tbody>                    
                    </table>
                </div>

                <div class="col-md-12">
                    <div class="col-md-5 col-md-offset-2 col-xs-12" style="padding: 0;">
                        <span class="col-md-offset-5" id="captcha_error" style="color: #FF3244; display: none;">Please Check the captcha below...</span>
                        <div data-type="image" class="g-recaptcha pull-right" data-sitekey="6Lffwi8UAAAAAAWZeOv8EIVbnxi4gUejeShKvyjY"/></div>
                    </div>

                    <div class="col-md-3 col-md-offset-1  col-xs-12 col-xs-offset-4">
                        <button class="btn btn-primary btn-lg" name="register">Submit</button>
                    </div>
                </div>

            </div>
            </form>
            </div>
            <p id="ajax-load" style="display: none;"></p>
    </section>

    <section data-role="section" id="section-contact">
        <div class="container">
            <div class="row" style="margin-top: 2%;">
                <div class="col-md-12">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title text-center">
                                    <a data-toggle="collapse" href="#collapse1">CLICK HERE FOR ROUTE MAP DESCRIPTION</a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <div class="panel-body" style="padding: 0;">
                                    <div class="col-md-8 col-md-offset-2">
                                        <img src="../assets/imgs/route_map_thumb.jpg"  class="img-responsive" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3813.6732160683055!2d82.06463371543933!3d17.088629888258293!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a378165aaaaaaab%3A0x481e8b12b4b80715!2sAditya+Engineering+College!5e0!3m2!1sen!2sin!4v1503397282376" class="col-md-12 col-sm-12 col-xs-12" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    
    <section data-role="section" id="section-partner">
       <div class="row" style="margin-top: 1%;">
            <div class="row">
                <div class="col-md-1 col-md-offset-6 col-xs-4 col-xs-offset-4">
                    <a href="http://technicalhub.io/" target="_blank"><img src="../assets/imgs/partners/T-Hub_logo.png" class="img-responsive"></a>
                    <center><span>Technical-Hub</span></center>
                </div>
            </div>

            <div class="row" >
                <div class="col-md-1 col-md-offset-6 col-xs-4 col-xs-offset-4" >
                    <a href="http://seventeentech.com/" target="_blank"><img src="../assets/imgs/partners/17tech.png" class="img-responsive"></a>
                    <center><span>Seventeen tech</span></center>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 col-md-offset-6 col-xs-4 col-xs-offset-4" >
                    <a href="http://technicalhub.io/" target="_blank"><img src="../assets/imgs/partners/engineers.png" class="img-responsive"></a>
                    <center><span>Engineer's Mugshot</span></center>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1 col-md-offset-6 col-xs-4 col-xs-offset-4" >
                    <a href="http://technicalhub.io/" target="_blank"><img src="../assets/imgs/partners/sky.png" class="img-responsive"></a>
                    <center><span>Skylark</span></center>
                </div>
            </div>
       </div>
    </section>

    <script type="text/javascript">
        // By default, swipe is enabled.
        $('section').horizon();

        // If you do not want to include another plugin, TouchSwipe, you can set it to false in the default options by passing in the option as false.
        //$('section').horizon({swipe: false});

        $(document).on('click', '.go-to-2', function () {
            $(document).horizon('scrollTo', 'section-section2');
        });



        // Getting data to the fields
        $("#rollno").keyup(function(){
            $("#ajax-load").load('load-data.php?action=data&pin='+rollno.value);
        });

        // department change
        $("#event_category").change(function(){
           $("#category_events").load('load-data.php?action=event&dept='+event_category.value); 
        });


        //tooltip js
        $('[data-toggle="tooltip"]').tooltip();


        // phone number validation
        $("#mobile").keyup(function() {
            $("#mobile").val(this.value.match(/[0-9]*/));
        });


        // email validation
        function validateEmail(email,status) {
          var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
          if(re.test(email)==false){
            if (status==2) {
                    alert('Please enter valid email....');
                    return false;
            }
                document.getElementById("email_erroinfo").style.display='block';
          }
          else{
            if (status==2) {
                if (grecaptcha.getResponse() == ""){
                    document.getElementById('captcha_error').style.display='block';
                    alert('Please fill the Captcha....');
                    return false;
                }
                else {
                    //document.getElementById("email_erroinfo").style.display='none';
                    document.getElementById('captcha_error').style.display='none';
                }
            }
            document.getElementById('email_erroinfo').style.display='none';
          }
        }


        /* hover images */
        $("#digi").hover(
            function(){
            //alert('mouseover');
                $("#digi").attr({
                    "src" : "../assets/imgs/iconsforveda2017/digi1.png"
                });
            },function(){
              //alert('mouseleave');
                $("#digi").attr({
                    "src" : "../assets/imgs/iconsforveda2017/digi.png"
                });
        });

        $("#electrenz").hover(
            function(){
            //alert('mouseover');
                $("#electrenz").attr({
                    "src" : "../assets/imgs/iconsforveda2017/electrenz1.png"
                });
            },function(){
              //alert('mouseleave');
                $("#electrenz").attr({
                    "src" : "../assets/imgs/iconsforveda2017/electrenz.png"
                });
        });

        $("#excavation").hover(
            function(){
            //alert('mouseover');
                $("#excavation").attr({
                    "src" : "../assets/imgs/iconsforveda2017/excavation1.png"
                });
            },function(){
              //alert('mouseleave');
                $("#excavation").attr({
                    "src" : "../assets/imgs/iconsforveda2017/excavation.png"
                });
        });

        $("#ignite").hover(
            function(){
            //alert('mouseover');
                $("#ignite").attr({
                    "src" : "../assets/imgs/iconsforveda2017/ignite1.png"
                });
            },function(){
              //alert('mouseleave');
                $("#ignite").attr({
                    "src" : "../assets/imgs/iconsforveda2017/ignite.png"
                });
        });
        $("#krishi").hover(
            function(){
            //alert('mouseover');
                $("#krishi").attr({
                    "src" : "../assets/imgs/iconsforveda2017/krishi1.png"
                });
            },function(){
              //alert('mouseleave');
                $("#krishi").attr({
                    "src" : "../assets/imgs/iconsforveda2017/krishi.png"
                });
        });
        $("#petrospirit").hover(
            function(){
            //alert('mouseover');
                $("#petrospirit").attr({
                    "src" : "../assets/imgs/iconsforveda2017/petrospirit1.png"
                });
            },function(){
              //alert('mouseleave');
                $("#petrospirit").attr({
                    "src" : "../assets/imgs/iconsforveda2017/petrospirit.png"
                });
        });
        $("#opus").hover(
            function(){
            //alert('mouseover');
                $("#opus").attr({
                    "src" : "../assets/imgs/iconsforveda2017/opus1.png"
                });
            },function(){
              //alert('mouseleave');
                $("#opus").attr({
                    "src" : "../assets/imgs/iconsforveda2017/opus.png"
                });
        });
        $("#spark").hover(
            function(){
            //alert('mouseover');
                $("#spark").attr({
                    "src" : "../assets/imgs/iconsforveda2017/spark1.png"
                 
                });
            },function(){
              //alert('mouseleave');
                $("#spark").attr({
                    "src" : "../assets/imgs/iconsforveda2017/spark.png"
                });
        });
       
    </script>

</body>





<!-- student register php code -->
<?php
    if (isset($_POST['register'])) {

        $sel_query = "select * from `event_register` where regroll='".$_POST['rollno']."' and  regcategory='".$_POST['event_category']."' and regevent='".$_POST['category_events']."' ";

        $sel_result = mysqli_query($con, $sel_query);
        $sel_fetch = mysqli_fetch_array($sel_result);
        $sel_rows = mysqli_num_rows($sel_result);

        if ($sel_rows<=0) {
            $query = "insert into `event_register` set regroll='".$_POST['rollno']."', regname='".$_POST['name']."', regdept='".$_POST['dept']."', regclg='".$_POST['college']."', regyear='".$_POST['year']."', regloc='".$_POST['location']."', regph='".$_POST['mobile']."', regmail='".$_POST['email']."', regacc='".$_POST['accomodation']."', regcategory='".$_POST['event_category']."', regevent='".$_POST['category_events']."', reggender='".$_POST['gender']."' ";
            $result = mysqli_query($con, $query);

            if($result) {
                echo "<script>
                    alert('Your Event Registered Successfully....');
                    location.href='#section-register';
                </script>";
            }
            else {
             echo "<script>
                    alert('Registration failed....');
                    location.href='#section-register';
                </script>";
            }
        }
        else {
         echo "<script>
                alert('Already you Registered for this Event....');
                location.href='#section-register';
            </script>";
        }
    }
?>

</html>