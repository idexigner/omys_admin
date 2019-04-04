<?php
include 'DBConfig.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Create user</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <link href="css/style.css" rel="stylesheet" >
    <style>
        #camera {
            width: 100%;
            height: 550px;
        }
    </style>

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="images/icon/logo2.png" alt="Omys Admin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <?php include 'menuPrimary.php'?>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo2.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <?php include 'menuSecondary.php'?>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <!--<div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>-->
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">


                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Create</strong> User
                                    </div>
                                    <div class="card-body card-block">
                                        <!-- <form action="backend/bcreateUser.php" id="createUserForm" method="post" enctype="multipart/form-data" class="form-horizontal"> -->
                                        <!--<div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Static</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">Username</p>
                                                </div>
                                            </div>-->
                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Name <span class="requiredField">*</span></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="name" name="name" placeholder="Enter Name"
                                                    class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Date of
                                                    Birth <span class="requiredField">*</span></label>
                                            </div>
                                            <div class="col-4 col-md-3">

                                                <select name="day" id="day" class="form-control">
                                                    <option value="DD">DD</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    <option value="7">7</option>
                                                    <option value="8">8</option>
                                                    <option value="9">9</option>
                                                    <option value="10">10</option>
                                                    <option value="11">11</option>
                                                    <option value="12">12</option>
                                                    <option value="13">13</option>
                                                    <option value="14">14</option>
                                                    <option value="15">15</option>
                                                    <option value="16">16</option>
                                                    <option value="17">17</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                    <option value="23">23</option>
                                                    <option value="24">24</option>
                                                    <option value="25">25</option>
                                                    <option value="26">26</option>
                                                    <option value="27">27</option>
                                                    <option value="28">28</option>
                                                    <option value="29">29</option>
                                                    <option value="30">30</option>
                                                    <option value="31">31</option>

                                                </select>

                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>



                                            <div class="col-4 col-md-3">

                                                <select name="month" id="month" class="form-control">
                                                    <option value="MM">MM</option>
                                                    <option value="jan">January</option>
                                                    <option value="feb">February</option>
                                                    <option value="mar">March</option>
                                                    <option value="apr">April</option>
                                                    <option value="may">May</option>
                                                    <option value="jun">June</option>
                                                    <option value="july">July</option>
                                                    <option value="aug">August</option>
                                                    <option value="sep">September</option>
                                                    <option value="oct">October</option>
                                                    <option value="nov">November</option>
                                                    <option value="dec">December</option>
                                                </select>

                                            </div>

                                            <div class="col-4 col-md-3">

                                                <select name="year" id="year" class="form-control">
                                                    <option value="YY">YY</option>
                                                    <option value="1950">1950</option>
                                                    <option value="1951">1951</option>
                                                    <option value="1952">1952</option>
                                                    <option value="1953">1953</option>
                                                    <option value="1954">1954</option>
                                                    <option value="1955">1955</option>
                                                    <option value="1956">1956</option>
                                                    <option value="1957">1957</option>
                                                    <option value="1958">1958</option>
                                                    <option value="1959">1959</option>
                                                    <option value="1960">1960</option>
                                                    <option value="1961">1961</option>
                                                    <option value="1962">1962</option>
                                                    <option value="1963">1963</option>
                                                    <option value="1964">1964</option>
                                                    <option value="1965">1965</option>
                                                    <option value="1966">1966</option>
                                                    <option value="1967">1967</option>
                                                    <option value="1968">1968</option>
                                                    <option value="1969">1969</option>
                                                    <option value="1970">1970</option>
                                                    <option value="1971">1971</option>
                                                    <option value="1972">1972</option>
                                                    <option value="1973">1973</option>
                                                    <option value="1974">1974</option>
                                                    <option value="1975">1975</option>
                                                    <option value="1976">1976</option>
                                                    <option value="1977">1977</option>
                                                    <option value="1978">1978</option>
                                                    <option value="1979">1979</option>
                                                    <option value="1980">1980</option>
                                                    <option value="1981">1981</option>
                                                    <option value="1982">1982</option>
                                                    <option value="1983">1983</option>
                                                    <option value="1984">1984</option>
                                                    <option value="1985">1985</option>
                                                    <option value="1986">1986</option>
                                                    <option value="1987">1987</option>
                                                    <option value="1988">1988</option>
                                                    <option value="1989">1989</option>
                                                    <option value="1990">1990</option>
                                                    <option value="1991">1991</option>
                                                    <option value="1992">1992</option>
                                                    <option value="1993">1993</option>
                                                    <option value="1994">1994</option>
                                                    <option value="1995">1995</option>
                                                    <option value="1996">1996</option>
                                                    <option value="1997">1997</option>
                                                    <option value="1998">1998</option>
                                                    <option value="1999">1999</option>
                                                    <option value="2000">2000</option>
                                                    <option value="2001">2001</option>
                                                    <option value="2002">2002</option>
                                                    <option value="2003">2003</option>
                                                    <option value="2004">2004</option>
                                                    <option value="2005">2005</option>
                                                    <option value="2006">2006</option>
                                                    <option value="2007">2007</option>
                                                    <option value="2008">2008</option>
                                                    <option value="2009">2009</option>
                                                    <option value="2010">2010</option>
                                                    <option value="2011">2011</option>
                                                    <option value="2012">2012</option>
                                                    <option value="2013">2013</option>
                                                    <option value="2014">2014</option>
                                                    <option value="2015">2015</option>
                                                    <option value="2016">2016</option>
                                                    <option value="2017">2017</option>
                                                </select>

                                            </div>




                                        </div>



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label">Gender <span class="requiredField">*</span></label>
                                            </div>
                                            <div class="col col-md-9">
                                                <div class="form-check">
                                                    <div class="row">

                                                        <div class="col col-md-6">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="gender1" name="gender"
                                                                        value="male" class="form-check-input">Male
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-6">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="gender2" name="gender"
                                                                        value="female" class="form-check-input">Female
                                                                </label>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <!--row-->



                                                </div>
                                            </div>
                                        </div>





                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">CNIC <span class="requiredField">*</span></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" id="cnic" name="cnic"  placeholder="Enter CNIC"
                                                    class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Khundi <span class="requiredField">*</span></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="khundi" name="khundi" placeholder="Enter Khundi"
                                                    class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Group</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="group" name="group" placeholder="Enter Group"
                                                    class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>




                                        <!-- <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Age</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="age" name="age" placeholder="Enter Age"
                                                    class="form-control">
                                                <--<small class="form-text text-muted">This is a help text</small>->
                                            </div>
                                        </div> -->





                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">OMJ Card No</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" id="omjCard" name="omjCard"
                                                    placeholder="Enter OMJ Card No"  class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>





                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Birth Place</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="birthPlace" name="birthPlace"
                                                    placeholder="Enter Birth Place" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>




                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">OMYS Card No</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" id="omysCard" name="omysCard"
                                                    placeholder="Enter OMYS Card No"  class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>




                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Email</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="email" id="email" name="email" placeholder="Enter Email"
                                                    class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Contact No <span class="requiredField">*</span></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" id="contact" name="contact"
                                                    placeholder="Enter Contact"  class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>


                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Whatsapp No</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" id="whatsapp" name="whatsapp"
                                                    placeholder="Enter Whatsapp"  class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Residential
                                                    Address</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="residentialAddress" name="residentialAddress"
                                                    placeholder="Enter Residential Address" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Area</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="area" name="area" placeholder="Enter Area"
                                                    class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>




                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label">Maritual Status</label>
                                            </div>
                                            <div class="col col-md-9">
                                                <div class="form-check">
                                                    <div class="row">

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="maritualStatus1"
                                                                        name="maritualStatus" value="single"
                                                                        class="form-check-input">Single
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="maritualStatus2"
                                                                        name="maritualStatus" value="married"
                                                                        class="form-check-input">Married
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="maritualStatus3"
                                                                        name="maritualStatus" value="divorced"
                                                                        class="form-check-input">Divorced
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <br>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="maritualStatus4"
                                                                        name="maritualStatus" value="widow"
                                                                        class="form-check-input">Widow
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="maritualStatus5"
                                                                        name="maritualStatus" value="widower"
                                                                        class="form-check-input">Widower
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <!--<div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  name="maritualStatus" value="divorced" class="form-check-input">Divorced
                                                            </label>
                                                        </div>

                                                            </div>-->

                                                    </div>
                                                    <!--row-->



                                                </div>
                                            </div>
                                        </div>






                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label">Occupation</label>
                                            </div>
                                            <div class="col col-md-9">
                                                <div class="form-check">
                                                    <div class="row">

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="checkbox" id="stu_occupation1"
                                                                        name="stu_occupation[]" value="student"
                                                                        class="form-check-input">Student
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="checkbox" id="stu_occupation2"
                                                                        name="stu_occupation[]" value="business"
                                                                        class="form-check-input">Business
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="checkbox" id="stu_occupation3"
                                                                        name="stu_occupation[]" value="houseWife"
                                                                        class="form-check-input">House Wife
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <br>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="checkbox" id="stu_occupation4"
                                                                        name="stu_occupation[]" value="retired"
                                                                        class="form-check-input">Retired
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="checkbox" id="stu_occupation5"
                                                                        name="stu_occupation[]" value="unemployed"
                                                                        class="form-check-input">Unemployed
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="checkbox" id="stu_occupation6"
                                                                        name="stu_occupation[]" value="govtEmployee"
                                                                        class="form-check-input">Govt. Employee
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <br>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="checkbox" id="stu_occupation7"
                                                                        name="stu_occupation[]" value="semiGovtEmployee"
                                                                        class="form-check-input">Semi Govt. Employee
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="checkbox" id="stu_occupation8"
                                                                        name="stu_occupation[]" value="selfEmployeed"
                                                                        class="form-check-input">Self Employeed
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="checkbox" id="stu_occupation9"
                                                                        name="stu_occupation[]" value="pvtService"
                                                                        class="form-check-input">Private Service
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <br>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="checkbox" id="stu_occupation10"
                                                                        name="stu_occupation[]" value="other"
                                                                        class="form-check-input">Other
                                                                </label>
                                                            </div>



                                                        </div>


                                                    </div>
                                                    <!--row-->



                                                </div>
                                            </div>
                                        </div>




                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Father/Husband
                                                    Name <span class="requiredField">*</span></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="fatherHusbandName" name="fatherHusbandName"
                                                    placeholder="Enter Father/Husband Name" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>


                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Father/Husband
                                                    CNIC</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" id="fatherHusbandCnic"  name="fatherHusbandCnic"
                                                    placeholder="Enter Father/Husband CNIC" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>




                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Father/Husband
                                                    Contact</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" id="fatherHusbandContact"  name="fatherHusbandContact"
                                                    placeholder="Enter Father/Husband Contact" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Father/Husband
                                                    OMJ Card No</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" id="fatherHusbandOmjCard"  name="fatherHusbandOmjCard"
                                                    placeholder="Enter Father/Husband OMJ Card No" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>








                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label">Father/Husband Occupation</label>
                                            </div>
                                            <div class="col col-md-9">
                                                <div class="form-check">
                                                    <div class="row">

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="father_occupation1"
                                                                        name="father_occupation" value="student"
                                                                        class="form-check-input">Student
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="father_occupation2"
                                                                        name="father_occupation" value="business"
                                                                        class="form-check-input">Business
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <!-- <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="father_occupation3"
                                                                        name="father_occupation" value="houseWife"
                                                                        class="form-check-input">House Wife
                                                                </label>
                                                            </div>

                                                        </div> -->


                                                        <br>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="father_occupation3"
                                                                        name="father_occupation" value="retired"
                                                                        class="form-check-input">Retired
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="father_occupation4"
                                                                        name="father_occupation" value="unemployed"
                                                                        class="form-check-input">Unemployed
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="father_occupation5"
                                                                        name="father_occupation" value="govtEmployee"
                                                                        class="form-check-input">Govt. Employee
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <br>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="father_occupation6"
                                                                        name="father_occupation"
                                                                        value="semiGovtEmployee"
                                                                        class="form-check-input">Semi Govt. Employee
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="father_occupation7"
                                                                        name="father_occupation" value="selfEmployeed"
                                                                        class="form-check-input">Self Employeed
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="father_occupation8"
                                                                        name="father_occupation" value="pvtService"
                                                                        class="form-check-input">Private Service
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <br>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="father_occupation9"
                                                                        name="father_occupation" value="other"
                                                                        class="form-check-input">Other
                                                                </label>
                                                            </div>



                                                        </div>


                                                    </div>
                                                    <!--row-->



                                                </div>
                                            </div>
                                        </div>




                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Mother Name</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="motherName" name="motherName"
                                                    placeholder="Enter Mother Name" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>


                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Mother CNIC</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" id="motherCnic" name="motherdCnic"
                                                    placeholder="Enter Mother CNIC"  class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>




                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Mother
                                                    Contact</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number " id="motherContact" name="motherContact"
                                                    placeholder="Enter Mother Contact"  class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>








                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label">Mother Occupation</label>
                                            </div>
                                            <div class="col col-md-9">
                                                <div class="form-check">
                                                    <div class="row">

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="mother_occupation1"
                                                                        name="mother_occupation" value="student"
                                                                        class="form-check-input">Student
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="mother_occupation2"
                                                                        name="mother_occupation" value="business"
                                                                        class="form-check-input">Business
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="mother_occupation3"
                                                                        name="mother_occupation" value="houseWife"
                                                                        class="form-check-input">House Wife
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <br>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="mother_occupation4"
                                                                        name="mother_occupation" value="retired"
                                                                        class="form-check-input">Retired
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="mother_occupation5"
                                                                        name="mother_occupation" value="unemployed"
                                                                        class="form-check-input">Unemployed
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="mother_occupation6"
                                                                        name="mother_occupation" value="govtEmployee"
                                                                        class="form-check-input">Govt. Employee
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <br>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="mother_occupation7"
                                                                        name="mother_occupation"
                                                                        value="semiGovtEmployee"
                                                                        class="form-check-input">Semi Govt. Employee
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="mother_occupation8"
                                                                        name="mother_occupation" value="selfEmployeed"
                                                                        class="form-check-input">Self Employeed
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="mother_occupation9"
                                                                        name="mother_occupation" value="pvtService"
                                                                        class="form-check-input">Private Service
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <br>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="mother_occupation10"
                                                                        name="mother_occupation" value="other"
                                                                        class="form-check-input">Other
                                                                </label>
                                                            </div>



                                                        </div>


                                                    </div>
                                                    <!--row-->



                                                </div>
                                            </div>
                                        </div>






                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Select Academic
                                                    Qualification</label>
                                            </div>
                                            <div class="col-4 col-md-3">

                                                <select name="aq1" id="aq1" class="form-control" onchange="aqChange()">
                                                    <option>Select Academic Qualification</option>
                                                    <option value="Primary">Primary</option>
                                                    <option value="Secondary">Secondary</option>
                                                    <option value="Matric">Matric</option>
                                                    <option value="Intermediate">Intermediate</option>
                                                    <option value="Graduate">Graduate</option>
                                                    <option value="Post Graduate">Post Graduate</option>
                                                    <option value="Ph. D">Ph. D</option>
                                                    <option value="Aalim/Aalima">Aalim/Aalima</option>
                                                    <option value="Hafiz/Hafiza">Hafiz/Hafiza </option>
                                                    <option value="Diploma">Diploma</option>
                                                    <option value="Uneducated">Uneducated</option>
                                                    <option value="Other">Other</option>

                                                </select>

                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>



                                            <div class="col-4 col-md-3">
                                                <input type="text" id="admYear1" name="admYear1"
                                                    placeholder="Admission Year" class="form-control">


                                            </div>

                                            <div class="col-4 col-md-3">

                                                <input type="text" id="comYear1" name="comYear1"
                                                    placeholder="Completion Year" class="form-control">

                                            </div>

                                        </div>
<!-- 
                                        <div id="aqContainer">



                                        </div> -->


                                        <!--<div style="float:right">
                                                        
                                                        </div>-->



                                        <!-- <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-5"><input type="button" class="btn btn-default" value="+"
                                                    onclick="addAcademic();">
                                            </div>
                                            <div class="col-md-4">

                                                <input type="button" style="float:right;" class="btn btn-default"
                                                    value="-" onclick="removeAcademic();">
                                            </div>
                                        </div> 
                                        <br>-->












                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label">Blood Group</label>
                                            </div>
                                            <div class="col col-md-9">
                                                <div class="form-check">
                                                    <div class="row">

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="bloodGroup1"
                                                                        name="bloodGroup" value="Aplus"
                                                                        class="form-check-input">A+
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="bloodGroup2"
                                                                        name="bloodGroup" value="Aneg"
                                                                        class="form-check-input">A-
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="bloodGroup3"
                                                                        name="bloodGroup" value="ABplus"
                                                                        class="form-check-input">AB+
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <br>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="bloodGroup4"
                                                                        name="bloodGroup" value="ABneg"
                                                                        class="form-check-input">AB-
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="bloodGroup5"
                                                                        name="bloodGroup" value="Bplus"
                                                                        class="form-check-input">B+
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="bloodGroup6"
                                                                        name="bloodGroup" value="Bneg"
                                                                        class="form-check-input">B-
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <br>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="bloodGroup7"
                                                                        name="bloodGroup" value="Oplus"
                                                                        class="form-check-input">O+
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="bloodGroup8"
                                                                        name="bloodGroup" value="Oneg"
                                                                        class="form-check-input">O-
                                                                </label>
                                                            </div>

                                                        </div>







                                                    </div>
                                                    <!--row-->



                                                </div>
                                            </div>
                                        </div>












                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Select Professional
                                                    Qualification</label>
                                            </div>
                                            <div class="col-4 col-md-3">

                                                <select name="pq1" id="pq1" class="form-control" onChange="pqChange();">
                                                    <option>Select Professional Qualification</option>
                                                    <option value="C.A">C.A</option>
                                                    <option value="A.C.C.A">A.C.C.A</option>
                                                    <option value="Doctor">Doctor</option>
                                                    <option value="Engineer">Engineer</option>
                                                    <option value="Advocate">Advocate (LLB/LLM)</option>
                                                    <option value="Masters">Masters</option>
                                                    <option value="Teacher">Teachers</option>
                                                    <option value="Nursing Course">Nursing Course</option>
                                                    <option value="Technician">Technician</option>
                                                    <option value="Journalist">Journalist</option>
                                                    <option value="I.T">I.T</option>
                                                    <option value="Other">Other</option>

                                                </select>

                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>



                                            <div class="col-4 col-md-3">
                                                <input type="text" id="admYearpq1" name="admYearpq1"
                                                    placeholder="Admission Year" class="form-control">


                                            </div>

                                            <div class="col-4 col-md-3">

                                                <input type="text" id="comYearpq1" name="comYearpq1"
                                                    placeholder="Completion Year" class="form-control">

                                            </div>

                                        </div>

                                        <!-- <div id="pqContainer">



                                        </div> -->


                                        <!--<div style="float:right">
                                                        
                                                        </div>-->


<!-- 
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-5"><input type="button" class="btn btn-default" value="+"
                                                    onclick="addProfessional();">
                                            </div>
                                            <div class="col-md-4">
                                                <input type="button" style="float:right;" class="btn btn-default"
                                                    value="-" onclick="removeProfessional();">
                                            </div>
                                        </div>
                                        <br> -->















                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label class=" form-control-label">Additional Skills</label>
                                            </div>
                                            <div class="col col-md-9">
                                                <div class="form-check">
                                                    <div class="row">

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="checkbox" id="additionalSkills1"
                                                                        name="additionalSkills[]" value="publicSpeaker"
                                                                        class="form-check-input">Public Speaker
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="checkbox" id="additionalSkills2"
                                                                        name="additionalSkills[]"
                                                                        value="graphicDesigner"
                                                                        class="form-check-input">Graphic Designer
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="checkbox" id="additionalSkills3"
                                                                        name="additionalSkills[]" value="WebDesigner"
                                                                        class="form-check-input">Web Designer
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <br>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="checkbox" id="additionalSkills4"
                                                                        name="additionalSkills[]" value="programmer"
                                                                        class="form-check-input">Programmer
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="checkbox" id="additionalSkills5"
                                                                        name="additionalSkills[]" value="animator"
                                                                        class="form-check-input">Animator
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="checkbox" id="additionalSkills6"
                                                                        name="additionalSkills[]"
                                                                        value="mobileRepairing"
                                                                        class="form-check-input">Mobile Repairing
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <br>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="checkbox" id="additionalSkills7"
                                                                        name="additionalSkills[]" value="mechanic"
                                                                        class="form-check-input">Mechanic
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="checkbox" id="additionalSkills8"
                                                                        name="additionalSkills[]" value="electrician"
                                                                        class="form-check-input">Electrician
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="checkbox" id="additionalSkills9"
                                                                        name="additionalSkills[]" value="carpenter"
                                                                        class="form-check-input">Carpenter
                                                                </label>
                                                            </div>

                                                        </div>

                                                        <br>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="checkbox" id="additionalSkills10"
                                                                        name="additionalSkills[]" value="plumber"
                                                                        class="form-check-input">Plumber
                                                                </label>
                                                            </div>



                                                        </div>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="checkbox" id="additionalSkills11"
                                                                        name="additionalSkills[]" value="acTechnician"
                                                                        class="form-check-input">AC Technician
                                                                </label>
                                                            </div>



                                                        </div>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="checkbox" id="additionalSkills12"
                                                                        name="additionalSkills[]"
                                                                        value="electronicRepairing"
                                                                        class="form-check-input">Electronic Repairing
                                                                </label>
                                                            </div>



                                                        </div>


                                                    </div>
                                                    <!--row-->

                                                    <br>





                                                </div>
                                                <input type="text" id="otherSkill" name="otherSkill"
                                                    placeholder="Enter other Additional Skill" class="form-control">
                                            </div>
                                        </div>


                                        <hr>
                                        <!--<h1>If Student</h1>-->
                                        <div class="card-header">
                                            <strong>If</strong> Student
                                        </div>

                                        <hr>





                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Institute
                                                    Name</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="instituteName" name="instituteName"
                                                    placeholder="Enter Institute Name" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Present
                                                    Class</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="presentClass" name="presentClass"
                                                    placeholder="Enter Present Class" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>

                                        <!-- <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Last
                                                    Achievement</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="lastAchievement" name="lastAchievement"
                                                    placeholder="Enter Last Achievement" class="form-control">
                                               
                                            </div>
                                        </div> -->



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Future
                                                    Interest</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="futureInterest" name="futureInterest"
                                                    placeholder="Enter Future Interest" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>




                                        <hr>
                                        <!--<h1>If Student</h1>-->
                                        <div class="card-header">
                                            <strong>If</strong> Employee/Business
                                        </div>

                                        <hr>





                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Company Name</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="companyName" name="companyName"
                                                    placeholder="Enter Company Name" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Office
                                                    Address</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="officeAddress" name="officeAddress"
                                                    placeholder="Enter Office Address" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Current
                                                    Designation</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="currentDesignation" name="currentDesignation"
                                                    placeholder="Enter Current Designation" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>

                                        <!-- <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Last
                                                    Achievement</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="lastAchievementemp" name="lastAchievementemp"
                                                    placeholder="Enter Last Achievement" class="form-control">
                                               
                                            </div>
                                        </div> -->



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Future
                                                    Interest</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="futureInterestemp" name="futureInterestemp"
                                                    placeholder="Enter Future Interest" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>




                                        <hr>
                                        <!--<h1>If Student</h1>-->
                                        <div class="card-header">
                                            <strong>Extra</strong> Curricular
                                        </div>

                                        <hr>





                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Hobbies</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="hobbies" name="hobbies"
                                                    placeholder="Enter Hobbies" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Professional
                                                    Acievement</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="professionalAchievement"
                                                    name="professionalAchievement"
                                                    placeholder="Enter Professional Acievement" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Personal
                                                    Achievement</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="personalAchievement" name="personalAchievement"
                                                    placeholder="Enter Personal Achievement" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>

                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Sports
                                                    Interest</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="sportInterest" name="sportInterest"
                                                    placeholder="Enter Sports Interest" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>



                                        <hr>
                                        <!--<h1>If Student</h1>-->
                                        <div class="card-header">
                                            <strong>If</strong> student has left the education for the following reason
                                        </div>

                                        <hr>





                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <!--<label class=" form-control-label">Father/Husband Occupation</label>-->
                                            </div>
                                            <div class="col col-md-9">
                                                <div class="form-check">
                                                    <div class="row">

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="ifStudent1" name="ifStudent"
                                                                        value="financialCrises"
                                                                        class="form-check-input">Financial Crises
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="ifStudent2" name="ifStudent"
                                                                        value="earlyMarriage"
                                                                        class="form-check-input">Early Marriage
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="ifStudent3" name="ifStudent"
                                                                        value="lostInterest"
                                                                        class="form-check-input">Lost Interest
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <br>

                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="ifStudent4" name="ifStudent"
                                                                        value="gotJob" class="form-check-input">Got A
                                                                    Job
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="ifStudent5" name="ifStudent"
                                                                        value="startedABusiness"
                                                                        class="form-check-input">Started A Business
                                                                </label>
                                                            </div>

                                                        </div>


                                                        <div class="col col-md-4">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="ifStudent6" name="ifStudent"
                                                                        value="joinedFamilyBusiness"
                                                                        class="form-check-input">Joined Family Business
                                                                </label>
                                                            </div>

                                                        </div>





                                                    </div>
                                                    <!--row-->



                                                </div>
                                            </div>
                                        </div>



                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Other Reason</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="text" id="otherReason" name="otherReason"
                                                    placeholder="Enter Other Reason" class="form-control">
                                                <!--<small class="form-text text-muted">This is a help text</small>-->
                                            </div>
                                        </div>





                                        <hr>
                                        <!--<h1>If Student</h1>-->
                                        <div class="card-header">
                                            <strong>Are</strong> you an OMYS Member?
                                        </div>

                                        <hr>





                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <!--<label class=" form-control-label">Father/Husband Occupation</label>-->
                                            </div>
                                            <div class="col col-md-9">
                                                <div class="form-check">
                                                    <div class="row">

                                                        <div class="col col-md-6">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="omysMember1"
                                                                        name="omysMember" value="yes"
                                                                        class="form-check-input">Yes
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-6">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="omysMember2"
                                                                        name="omysMember" value="no"
                                                                        class="form-check-input">No
                                                                </label>
                                                            </div>

                                                        </div>





                                                    </div>
                                                    <!--row-->



                                                </div>
                                            </div>
                                        </div>



                                        <hr>
                                        <!--<h1>If Student</h1>-->
                                        <div class="card-header">
                                            <strong>Is</strong> your father/husband member of OMYS?
                                        </div>

                                        <hr>





                                        <div class="row form-group">
                                            <div class="col col-md-3">
                                                <!--<label class=" form-control-label">Father/Husband Occupation</label>-->
                                            </div>
                                            <div class="col col-md-9">
                                                <div class="form-check">
                                                    <div class="row">

                                                        <div class="col col-md-6">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio1" class="form-check-label ">
                                                                    <input type="radio" id="fatherMember1"
                                                                        name="fatherMember" value="yes"
                                                                        class="form-check-input">Yes
                                                                </label>
                                                            </div>



                                                        </div>
                                                        <div class="col col-md-6">
                                                            <div class="radio" style="display:inline;">
                                                                <label for="radio2" class="form-check-label ">
                                                                    <input type="radio" id="fatherMember2"
                                                                        ame="fatherMember" value="no"
                                                                        class="form-check-input">No
                                                                </label>
                                                            </div>

                                                        </div>





                                                    </div>
                                                    <!--row-->



                                                </div>
                                            </div>
                                        </div>

                                        <hr>

                                        <form action="backend/bphotoUpload.php" id="uploadImageIdForm" method="post"
                                            enctype="multipart/form-data" class="form-horizontal">
                                            <input type="hidden" name="imageNameUpload" id="imageNameUpload">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Image
                                                        Upload</label>
                                                </div>
                                                <div class="col-8 col-md-6">
                                                    <input type="file" id="imageUpload" name="imageUpload"
                                                        class="form-control-file ">
                                                </div>
                                                <!--<div class="col-4 col-md-3"></div>-->
                                                <div class="col-4 col-md-3">

                                                    <button type="button" class="btn btn-secondary" name="captureImage"
                                                        onclick="captureImageCustom();">
                                                        Capture
                                                    </button>

                                                </div>
                                            </div>

                                        </form>






                                        <input type="hidden" name="aqDummyCount" id="aqDummyCount" value="0">
                                        <input type="hidden" name="pqDummyCount" id="pqDummyCount" value="0">
                                        <input type="hidden" name="imageChecking" id="imageChecking" value="1">

                                    </div>
                                    <div class="card-footer">
                                        <button type="button" onClick="createUserStudent()" name="submit"
                                            class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submits
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>

                            </div>





                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 OMYS. All rights reserved.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>





    <div class="modal fade" id="modalCapture" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Capture Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="backend/storeImage.php" id="uploadImageIdForm2">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="my_camera"></div>
                                <br />
                                <input type="hidden" name="imageNameUpload2" id="imageNameUpload2">
                                <input type=button value="Take Snapshot" class="btn btn-primary"
                                    onClick="take_snapshot()">
                                <input type="hidden" name="image" id="imageCaptureTag" class="image-tag">
                            </div>
                            <div class="col-md-6">
                                <div id="results">Your captured image will appear here...</div>
                            </div>
                            <div class="col-md-12 text-center">
                                <br />
                                <!-- <button class="btn btn-success">Submit</button> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary">Confirm</button>
						</div>-->
        </div>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
    <!-- <script src="js/webcam.min.js"></script> -->
    <script language="JavaScript">
    // Webcam.set({
    //     width: 490,
    //     height: 390,
    //     image_format: 'jpeg',
    //     jpeg_quality: 100
    // });

    // Webcam.attach( '#my_camera' );

    // function take_snapshot() {
    //     Webcam.snap( function(data_uri) {
    //         $(".image-tag").val(data_uri);
    //         document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';
    //     } );
    // }
    </script>


    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>
    <script src="js/app.js"></script>

    <script>
        window.onload = onLoadFunction('createUser');
    </script>

</body>

</html>
<!-- end document-->