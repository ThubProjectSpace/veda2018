<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>VEDA|2K17</title>
    <!--<link rel="stylesheet" href="../assets/libs/materialize/css/materialize.min.css">-->
    <link href="../assets/stylesheets/event.css" rel="stylesheet" type="text/css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" >
    <!-- font awesome icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--<script src="../assets/libs/materialize/js/materialize.min.js"></script>-->
    <script type="text/javascript" src="../assets/scripts/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="../assets/scripts/jquery.touchSwipe.js"></script>
    <script type="text/javascript" src="../assets/scripts/jquery.horizonScroll.js"></script>
    <!--bootstrap js-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
    .overlay h3{
        text-transform: uppercase;        
    }
</style>

</head>

<body>

<?php
    include("config.php");
    $ce = mysqli_real_escape_string($con, $_GET['event']);

       if ($ce!="") {
           $query = "select * from about where `submittedby`='".$ce."' ";
           $result = mysqli_query($con, $query);

           $about_cont = mysqli_fetch_assoc($result);
       }
?>


    <header data-role="header" id="header">
        <navbar class="menu">
            <ul>

                <li>
                    <a href="home.php#section-event"><span>EVENTS</span></a>
                </li>
                <li>
                    <a href="#section-about"><span>ABOUT</span></a>
                </li>
                <li>
                    <a href="#section-events"><span style="text-transform: uppercase;"><?php echo $ce; ?> EVENTS</span></a>
                </li>

                <li>
                    <a href="home.php#section-register"><span>REGISTER</span></a>
                </li>
            </ul>
        </navbar>
    </header>

    
    <div class="horizon-prev"><img src="../assets/imgs/l-arrow.png"></div>
    <div class="horizon-next"><img src="../assets/imgs/r-arrow.png"></div>



    <section data-role="section" id="section-about">
        <div class="overlay">
            <h3><?php echo $ce; ?></h3>
            <p class="about"><?php if ($about_cont['about']!="") {
                echo $about_cont['about'];
            } else { echo "No Content Available."; } ?></p>
        </div>
    </section>



    <section data-role="section" id="section-events">
        <div class="container-fluid">
            <div class="events clearfix" >

                    <?php
                       if ($ce!="") {
                           $query = "select * from event where `submittedby`='".$ce."' order by id asc";
                           $result = mysqli_query($con, $query);
                           $num_rows = mysqli_num_rows($result);

                           if ($num_rows>0) {
                           while($fetch = mysqli_fetch_array($result)){
                            ?>
                            <a href="events/eventdetails.php?event=<?php echo $ce; ?>&id=<?php echo base64_encode($fetch['id']); ?>">
                            <div class="col-md-3 col-xs-4" style="margin: 0px !important; padding: 0;">
                                <div class="card event-card"  style="margin: 4px;">
                                    <div class="card-content black-text">
                                        <h3 class="card-title"><?php echo $fetch['event_name']; ?></h3>
                                        <p><?php if(strlen($fetch['event_overview'])>30) { echo str_replace("<br/>", " ", substr($fetch['event_overview'], 0, 30))."....."; } else { str_replace("<br/>", " ", substr($fetch['event_overview'], 0, 50)); } ?></p>
                                    </div>
                                </div>
                            </div>
                            </a>
                           <?php
                            }
                          }
                          else {
                            echo "<p class='about' style='color: #fff;'>No Events Found.</p>";
                          }
                        }
                        else {

                        }
                    ?>

            </div>
        </div>
    </section>

    <footer data-role="footer" id="footer"></footer>

    <script type="text/javascript">
        // By default, swipe is enabled.
        $('section').horizon();

        // If you do not want to include another plugin, TouchSwipe, you can set it to false in the default options by passing in the option as false.
        //$('section').horizon({swipe: false});

        $(document).on('click', '.go-to-2', function () {
            $(document).horizon('scrollTo', 'section-section2');
        });
    </script>

</body>

</html>