<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title>VEDA|2K17</title>
    <link rel="stylesheet" href="../../assets/libs/materialize/css/materialize.min.css">
    <link href="../../assets/stylesheets/event.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../assets/libs/materialize/js/materialize.min.js"></script>
    <script type="text/javascript" src="../../assets/scripts/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="../../assets/scripts/jquery.touchSwipe.js"></script>
    <script type="text/javascript" src="../../assets/scripts/jquery.horizonScroll.js"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

</head>

<?php
    include("../config.php");
    $ce = $_GET['event'];
    $id = $_GET['id'];
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
        <div class="row" id="event_description">
            <div class="col s6 m6 l6">
                <?php
                    $query = "select * from event where id='".$id."' ";
                    $result = mysqli_query($con, $query);
                    $fetch = mysqli_fetch_assoc($result);
                ?>
                <div class="card " id="event_total">
                    <div class="card-content black-text">
                        <span class="card-title"><?php echo $fetch['event_name']; ?></span>
                        <hr>

                        <!-- Overview -->
                        <h6><b>OVERVIEW:</b></h6>
                        <p style="text-align: justify">
                            <?php echo $fetch['event_overview']; ?>
                        </p><br/>
                        <!-- Overview end -->

                        <!-- Rules and Regulations -->
                        <h6><b>Rules & Regulations:</b></h6>
                        <p><?php echo $fetch['event_rules']; ?></p>
                        <!-- Rules and Regulations end-->

                        <!--<?php
                            //$result = mysqli_query($con, "select * from ordinator where submittedby='".$ce."' ");
                            //$mail = mysqli_fetch_assoc($result);
                        ?>--><br/>

                        <!-- Registration and other conditions -->
                            <h6><b>Registeration fees :</b></h6>
                            <p><?php echo $fetch['event_registration']; ?></p>
                            <!--<p><b>Mail-id to which entries to be sent :</b> <?php echo $mail['femail']; ?></p>-->
                            <!--<p><b>Last date for receiving entries : </b>25-09-2016 </p>
                            <p><b>Shortlisting of Entries and Intimation : </b>27-09-2016</p>-->
                            <h6><b>Other Conditions : </b></h6>
                            <p><?php echo $fetch['other_conditions']; ?> </p>
                        <!-- Registration and other conditions end-->
                    </div>

                </div>
            </div>
            <div class="col s6 m6 l6">
                <div class="card" id="co-Ordinator_total">

                    <div class="card-content black-text">
                        <span class="card-title">Co-ordinators</span>
                        <hr>
                        <h6><b>Faculty Co-ordinators:</b></h6>

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
                            </div>


                        </p><br><br>
                        <h6><b>Student Co-ordinators:</b></h6>

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

                        </p>
                    </div>

                </div>
            </div>
            <div class="col s6 m6 l6">
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
                                        <a href="eventdetails.php?event=<?php echo $ce; ?>&id=<?php echo $events['id']; ?>"><?php echo $events['event_name']; ?></a><br/>
                                    <?php
                                }
                                }
                                else {
                                    ?>
                                        <span style="text-align: center; font-size: 18px; color: #f00;">No More Events found.
                                    <?php
                                }
                            ?>
                        </p>
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
