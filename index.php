<?php require_once('includes/connection.php'); ?>
<!DOCTYPE html>

<html lang="en-US">
    <head>
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="ThemeStarz">
        <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
        <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" type="text/css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css" type="text/css">
        <link rel="stylesheet" href="assets/css/jquery.slider.min.css" type="text/css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
        <link rel="stylesheet" href="assets/css/style.css" type="text/css">
        <title>Property | Home Page</title>
        <style>
            body {
                max-width: 100% !important;
                overflow-x: hidden !important;
            }
        </style>
    </head>

    <body class="page-sub-page page-agencies-listing" id="page-top">
        <!-- Wrapper -->
        <div class="wrapper">
            <!-- Navigation -->
            <div class="navigation"> </div>
            <!-- /.navigation -->
            <!-- end Navigation -->
            <!-- Page Content -->
            <div id="page-content">
                <!-- Agent Detail -->
                <section id="banner">
                    <div class="block has-dark-background background-color-default-darker center text-banner">
                        <div class="container">
                            <h1 class="no-bottom-margin no-border">
                                <div class=" col-md-offset-2 col-md-8 col-sm-4">
                                    <style>
                                        #banner .feature-box
                                        {
                                            height: 450px !important;
                                            background-color: #fff;
                                            color: #073855;
                                            padding: 20px;
                                        }
                                        .cite-title1
                                        {
                                            font-size: 36px;
                                            font-weight:700;
                                            text-transform:uppercase;
                                        }
                                        .btn
                                        {
                                            height: 50px;
                                        }
                                        .pickertitle
                                        {
                                            font-size: 16px;
                                            font-weight: 700;
                                            text-align: left;
                                            margin-bottom: 8px;
                                        }
                                        .pickerstart
                                        {
                                            margin-top: 0px;
                                            margin-bottom:20px;
                                        }
                                        .boxfooter
                                        {
                                            font-size:13px;
                                            clear:both;
                                        }
                                        #sidebar aside {
                                            margin-bottom:0px;
                                        }
                                        .col-md-6 img
                                        {
                                            width: 100%;
                                        }
                                        @media (max-width: 767px){
                                            .cite-title1 {
                                                line-height: normal !important;
                                                font-size: 20px;
                                                font-weight:100;
                                            }
                                            .feature-box h3 {
                                                font-size: 12px;
                                            }
                                            .pickerstart
                                            {
                                                margin-top: 30px;
                                            }
                                            .pickertitle
                                            {
                                                font-size: 12px;
                                                font-weight: 100;
                                                text-align: left;
                                                margin-bottom: 5px;
                                            }
                                            .boxfooter {
                                                font-size: 6px;
                                                clear: both;
                                                line-height: initial;
                                            }
                                            .howwork {
                                                padding:2px 5px
                                            }

                                        }
                                    </style>
                                    <div class="feature-box" style="height: 250px;">
                                        <header class="center">
                                            <div class="cite-title1">Find a Broker Now</div>
                                        </header>
                                        <h3> Enter your property information and have top Brokers* compete for your business! </h3>
                                        <div class="col-md-offset-3 col-md-6 col-sm-6 pickerstart">
                                            <section id="sidebar">
                                                <aside id="edit-search">
                                                    <div class="pickertitle" style="text-align:center;">Select Your Property Type</div>
                                                    <form role="form" id="form-sidebar" class="" action="seller-questions.php" method="post" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <select name="property_type" id="property_type" required/>

                                                            <option>Office</option>
                                                            <option>Multifamily</option>
                                                            <option>Retail</option>
                                                            <option>Industrial</option>
                                                            <option>Land</option>
                                                            </select>
                                                        </div>
                                                        <!-- /.form-group -->
                                                        <div class="form-group">
                                                            <button type="submit" class="btn btn-default">Get Started Now</button>
                                                        </div>
                                                    </form>
                                                    <!-- /#form-map -->

                                                </aside>
                                                <!-- /#edit-search -->
                                            </section>
                                            <!-- /#sidebar -->
                                        </div>
                                        <div class="boxfooter">Once you submit your preperty information local brokers will review and submit their best offer to list your property. There is <span style="text-transform:uppercase"><strong>no obligation</strong></span> to hire these brokers</div>
                                    </div>
                                    <!-- /.feature-box -->
                                </div>
                            </h1>
                        </div>
                    </div>
                </section>
                <section id="our-services" class="block">
                    <div class="container">
                        <header class="section-title">
                            <h2>Our Services</h2>
                        </header>
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class="feature-box equal-height" style="height: 159px;">
                                    <figure class="icon"><i class="fa fa-folder"></i></figure>
                                    <aside class="description">
                                        <header>
                                            <h3>Competition for Your Listing</h3>
                                        </header>
                                        <p>When brokers compete for your listing you are able to get the best terms from the broker that can most effectively maximize the value in your property</p>
                                        <!--  <a href="#" class="link-arrow">Start as a Broker</a>-->
                                    </aside>
                                </div>
                                <!-- /.feature-box -->
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="feature-box equal-height" style="height: 159px;">
                                    <figure class="icon"><i class="fa fa-users"></i></figure>
                                    <aside class="description">
                                        <header>
                                            <h3>The Most Verified Brokers</h3>
                                        </header>
                                        <p>Every broker goes through a license verification before they can use the site. You will only receive offers from brokers with active licenses. </p>
                                        <!--   <a href="#" class="link-arrow">List your Property</a>-->
                                    </aside>
                                </div>
                                <!-- /.feature-box -->
                            </div>
                            <!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-4">
                                <div class="feature-box equal-height" style="height: 159px;">
                                    <figure class="icon"><i class="fa fa-money"></i></figure>
                                    <aside class="description">
                                        <header>
                                            <h3>You Are in Control </h3>
                                        </header>
                                        <p>Brokers can only contact you through the site unless you give them your contact information. Also exact property location can only be shared by you, ensuring you don’t receive unsolicited phone calls. </p>
                                        <!--    <a href="#" class="link-arrow">Sign Up Now</a>-->
                                    </aside>
                                </div>
                                <!-- /.feature-box -->
                            </div>
                            <!-- /.col-md-4 -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container -->
                </section>
                <style>
                    .featureList, .featureList ul {
                        margin-top: 0;
                        padding-left: 2em;
                        list-style-type: none;
                        font-size:14px;
                    }
                    .featureList li:before {
                        position: absolute;
                        margin-left: -1.3em;
                        font-weight: bold;
                    }
                    .featureList li.tick:before {
                        content: "\2713";
                        color: darkgreen;
                    }
                    .featureList li.cross:before {
                        content: "\2717";
                        color: crimson;
                    }
                    .workingtitle
                    {
                        font-size: 36px;
                        font-weight: 300;
                        color: #000;
                    }
                    .howwork {
                        margin: 50px auto;
                        background-color: #F3FBF0; padding:20px 50px;
                        border-radius: 10px;
                        -webkit-box-shadow: 0px 0px 8px rgba(0,0,0,0.3);
                        -moz-box-shadow:    0px 0px 8px rgba(0,0,0,0.3);
                        box-shadow:         0px 0px 8px rgba(0,0,0,0.3);
                        position: relative;
                        z-index: 90;
                    }
                    .image100 img
                    {
                        width:100%;
                    }
                    .property-features-list li {
                        display:block;
                    }
                    .cite-title2
                    {
                        font-weight: 200;
                        margin-top: 30px;
                        margin-bottom: 18px;
                    }
                    .feature-box .list-unstyled
                    {
                        font-size: 20px;
                    }
                    .agent .wrapper aside
                    {
                        height: 70px;

                    }
                </style>
                <section id="our-services" class="block">
                    <div class="container">
                        <div class="feature-box equal-height">
                            <header class="center">
                                <div class="cite-title1 cite-title2">Browse the Properties</div>
                            </header>
                            <div class="row">
                                <div class="col-md-6">
                                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras et dui vestibulum, bibendum purus sit amet, vulputate mauris. Ut adipiscing gravida tincidunt. Duis euismod placerat rhoncus. Phasellus mollis imperdiet placerat. Sed ac turpis nisl. Mauris at ante mauris. Aliquam posuere fermentum lorem, a aliquam mauris rutrum a. Curabitur sit amet pretium lectus, nec consequat orci. </p>
                                    <ul class="list-unstyled property-features-list">
                                        <li>Sauna</li>
                                        <li>Fireplace or fire pit</li>
                                        <li>Outdoor Kitchen</li>
                                        <li>Tennis Courts</li>
                                        <li>Concrete Flooring</li>
                                    </ul>
                                    <div class="form-group"> <a href="signup-broker.php">
                                            <button type="button" class="btn btn-default" id="form-contact-agent-submit">Join Our Network</button>
                                        </a> </div>
                                </div>
                                <div class="col-md-6 image100"> <img src="Sell-Property-Online.png"> </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section id="our-services" class="block">
                    <div class="container">
                        <div class="col-md-12 col-sm-12">
                            <section id="agents-listing">
                                <header>
                                    <h1>Top Brokers</h1>
                                </header>

                                <!-- mr maat work start here -->
                                <div class="row">
                                    <?php
                                    // $sql = "SELECT * FROM users where user_type='broker'  limit 4";
                                    $sql = "SELECT U.* ,COUNT(*) as total FROM users AS U LEFT JOIN bids AS B ON
                            U.`user_id`=B.`broker_id`
                            WHERE U.user_type='broker' GROUP BY U.user_id ORDER BY total DESC LIMIT 4";

                                    $res = mysqli_query($GLOBALS["___mysqli_ston"], $sql);
                                    while ($top_brokers = mysqli_fetch_object($res))
                                    {
                                        ?>
                                        <div class="col-md-12 col-lg-6">
                                            <div class="agent"> <a href="agent-detail.html" class="agent-image">
                                                    <?php if (!empty($top_brokers->profile_pic))
                                                    { ?>
                                                        <img class="padIMG" src="<?php echo IMG; ?><?php echo $top_brokers->profile_pic ?>" height="auto" width="100%">
    <?php } else
    { ?>
                                                        <img class="padIMG" src="<?php echo IMG; ?>avatar.png" height="auto" width="100%">
                                                                <?php } ?>
                                                </a>
                                                <div class="wrapper">
                                                    <header><a href="agent-detail.html">
                                                            <h2>
    <?php
    if (!empty($top_brokers->username))
    {
        echo $top_brokers->username;
    } else
    {
        echo "";
    }
    ?>
                                                            </h2>
                                                        </a></header>
                                                    <aside><?php echo $top_brokers->shortly_about_me; ?> </aside>
                                                    <dl>
                                                        <dt>Location:</dt>
                                                        <dd>Blaine</dd>
                                                        <dt>Rating:</dt>
                                                        <dd>
                                                            <div class="rating rating-individual" data-score="4" title="good" style="width: 100px;"><img src="assets/img/star-on.png" alt="1" title="good">&nbsp;<img src="assets/img/star-on.png" alt="2" title="good">&nbsp;<img src="assets/img/star-on.png" alt="3" title="good">&nbsp;<img src="assets/img/star-on.png" alt="4" title="good">&nbsp;<img src="assets/img/star-off.png" alt="5" title="good">
                                                                <input type="hidden" name="score" value="4" readonly="readonly">
                                                            </div>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                            <!-- /.agent -->
                                        </div>
<?php } ?>
                                </div>
                                <!-- /.row -->

                                <!-- mr maat work end here-->

                            </section>
                            <!-- /#agents-listing -->
                        </div>
                    </div>
                </section>
                <section id="our-services1" class="block" >
                    <div class="user-area" align="center">
                        <div class="actions"> <a href="#" class="signinnow">Find a Broker Now</a> </div>
                    </div>
                </section>
            </div>
            <!-- end Page Content -->
            <!-- Page Footer -->
            <footer id="page-footer">
                <!-- /.inner -->
            </footer>
            <!-- end Page Footer -->
        </div>
        <script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/smoothscroll.js"></script>
        <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="assets/js/icheck.min.js"></script>
        <script type="text/javascript" src="assets/js/retina-1.1.0.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
        <script type="text/javascript" src="assets/js/jshashtable-2.1_src.js"></script>
        <script type="text/javascript" src="assets/js/jquery.numberformatter-1.2.3.js"></script>
        <script type="text/javascript" src="assets/js/tmpl.js"></script>
        <script type="text/javascript" src="assets/js/jquery.dependClass-0.1.js"></script>
        <script type="text/javascript" src="assets/js/draggable-0.1.js"></script>
        <script type="text/javascript" src="assets/js/jquery.slider.js"></script>
        <script type="text/javascript" src="assets/js/custom.js"></script>

        <!--[if gt IE 8]>
        <script type="text/javascript" src="assets/js/ie.js"></script>
        <![endif]-->
        <script>
            $("#page-footer").load("footer.php");
            $(".navigation").load("header.php");
        </script>
    </body>
</html>