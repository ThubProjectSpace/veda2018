<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>VEDA|2K17</title>
    <!--<link rel="stylesheet" href="../assets/libs/materialize/css/materialize.min.css">-->
    <link href="../../assets/stylesheets/event.css" rel="stylesheet" type="text/css">
    <!-- bootstrap css link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- animation css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" >
    <!-- font awesome icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!--jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--<script src="../assets/libs/materialize/js/materialize.min.js"></script>-->
    <script type="text/javascript" src="../../assets/scripts/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="../../assets/scripts/jquery.touchSwipe.js"></script>
    <script type="text/javascript" src="../../assets/scripts/jquery.horizonScroll.js"></script>
    <!--bootstrap js-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Boogaloo|Lobster|Ubuntu+Condensed" rel="stylesheet">

</head>

<style>
    h4{
        font-family: 'Ubuntu Condensed', sans-serif;
    }
</style>

<?php
    include("../config.php");
    $ce = mysqli_real_escape_string($con, $_GET['event']);
    $id = mysqli_real_escape_string($con, base64_decode($_GET['id']));
?>

<body>
    <header data-role="header" id="header">
        <navbar class="menu">
            <ul>

                <li>
                    <a href="../home.php#section-event"><span>EVENTS</span></a>
                </li>
                <li>
                    <a href="../events.php?event=<?php echo $ce; ?>#section-events"><span style="text-transform: uppercase;"><?php echo $ce; ?> EVENTS</span></a>
                </li>

                <li>
                    <a href="../home.php#section-register"><span>REGISTER</span></a>
                </li>
            </ul>
        </navbar>
    </header>

    <!--
    <div class="horizon-prev"><img src="images/l-arrow.png"></div>
    <div class="horizon-next"><img src="images/r-arrow.png"></div>-->



    <section data-role="section" id="section-section2">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-6 col-xs-6 radius" id="event_total">
                    <?php
                        $query = "select * from event where id='".$id."' ";
                        $result = mysqli_query($con, $query);
                        $fetch = mysqli_fetch_assoc($result);
                    ?>
                    <div class="card" >
                        <div class="card-content black-text">
                            <span class="card-title"><?php echo $fetch['event_name']; ?></span>
                            <hr>

                            <!-- Overview -->
                            <h4><b>OVERVIEW:</b></h4>
                            <p style="text-align: justify">
                                <?php echo $fetch['event_overview']; ?>
                            </p>
                            <!-- Overview end -->

                            <!-- Rules and Regulations -->
                            <h4><b>Rules & Regulations:</b></h4>
                            <p><?php echo $fetch['event_rules']; ?></p>
                            <!-- Rules and Regulations end-->

                            <!--<?php
                                //$result = mysqli_query($con, "select * from ordinator where submittedby='".$ce."' ");
                                //$mail = mysqli_fetch_assoc($result);
                            ?>-->

                            <!-- Registration and other conditions -->
                                <h4><b>Registeration fees :</b></h4>
                                <p><?php echo $fetch['event_registration']; ?></p>
                                <!--<p><b>Mail-id to which entries to be sent :</b> <?php echo $mail['femail']; ?></p>-->
                                <!--<p><b>Last date for receiving entries : </b>25-09-2016 </p>
                                <p><b>Shortlisting of Entries and Intimation : </b>27-09-2016</p>-->
                                <h4><b>Other Conditions : </b></h4>
                                <p><?php echo $fetch['other_conditions']; ?> </p>
                            <!-- Registration and other conditions end-->
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-xs-6" >
                    <div class="col-md-12 color radius" >
                        <div class="" id="co-Ordinator_total">

                            <div class="card-content black-text">
                                <span class="card-title">Co-ordinators</span>
                                <hr>
                                <h4><b>Faculty Co-ordinators:</b></h4>

                                    <?php
                                      $result = mysqli_query($con, "select * from `co` where event_name='".$fetch['event_name']."' and co_type='Faculty Co-Ordinator' and submittedby='".$ce."' ");
                                    ?>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <td>S.NO</td>
                                                    <td>Name</td>
                                                    <td>Phone</td>
                                                    <td>Mail</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                    $sno = 1;
                                                    if(mysqli_num_rows($result)>0){
                                                    while ($co = mysqli_fetch_array($result)) {
                                                        ?>
                                                        <tr>
                                                            <td><?php echo $sno; ?></td>
                                                            <td><?php echo $co['cname']; ?></td>
                                                            <td><?php echo $co['cno']; ?></td>
                                                            <td><?php echo $co['cemail']; ?></td>
                                                        </tr>
                                                        <?php
                                                        $sno++;
                                                    }
                                                    }
                                                    else {
                                                        ?>
                                                            <tr>
                                                                <td colspan="4" style="text-align: center; font-size: 18px; color: #f00;">No data found.</td>
                                                            </tr>
                                                        <?php
                                                    }
                                                    ?>
                                            </tbody>
                                        </table>
                                    </div><br><br>


                                <h4><b>Student Co-ordinators:</b></h4>

                                <?php
                                    $result = mysqli_query($con, "select * from `co` where event_name='".$fetch['event_name']."' and co_type='Student Co-Ordinator' and submittedby='".$ce."' ");
                                ?>

                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <td>S.NO</td>
                                                <td>Name</td>
                                                <td>Phone</td>
                                                <td>Mail</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sno = 1;
                                                if(mysqli_num_rows($result)>0){
                                                while ($co = mysqli_fetch_array($result)) {
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $sno; ?></td>
                                                        <td><?php echo $co['cname']; ?></td>
                                                        <td><?php echo $co['cno']; ?></td>
                                                        <td><?php echo $co['cemail']; ?></td>
                                                    </tr>
                                                    <?php
                                                    $sno++;
                                                }
                                                }
                                                else {
                                                    ?>
                                                        <tr>
                                                            <td colspan="4" style="text-align: center; font-size: 18px; color: #f00;">No data found.</td>
                                                        </tr>
                                                    <?php
                                                }

                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div><div class="clearfix"></div><br/>
                    <div class="col-md-12 color radius">
                        <div class="card" id="relatedevents_total">
                            <div class="card-content black-text re">
                                <span class="card-title">Related Events</span>
                                <hr>
                                <p>
                                    <?php
                                        $result = mysqli_query($con, "select * from event where submittedby='".$ce."' and id!='".$id."' ");
                                        if(mysqli_num_rows($result)>0){
                                        while ($events = mysqli_fetch_array($result)) {
                                            ?>
                                                <a href="eventdetails.php?event=<?php echo $ce; ?>&id=<?php echo base64_encode($events['id']); ?>"><?php echo $events['event_name']; ?></a><br/>
                                            <?php
                                        }
                                        }
                                        else {
                                            ?>
                                                <span style="text-align: center; font-size: 18px; color: #f00;">No More Events found.
                                                </span>
                                            <?php
                                        }
                                    ?>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer data-role="footer" id="footer"></footer>

    <script type="text/javascript">
        // By default, swipe is enabled.
        $('section').horizon();

        // If you do not want to include another plugin, TouchSwipe, you can set it to false in the default options by passing in the option as false.
        //$('section').horizon({swipe: false});

        $(document).on('click', '.go-to-2', function() {
            $(document).horizon('scrollTo', 'section-section2');
        });

    </script>

</body>

</html>
