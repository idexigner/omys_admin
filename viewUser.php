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
    <title>Dashboard</title>

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
<style>
.pagination li:hover{
    cursor: pointer;
}


.pagination{display:inline-block;padding-left:0;margin:20px 0;border-radius:4px}.pagination>li{display:inline}.pagination>li>a,.pagination>li>span{position:relative;float:left;padding:6px 12px;margin-left:-1px;line-height:1.42857143;color:#337ab7;text-decoration:none;background-color:#fff;border:1px solid #ddd}.pagination>li:first-child>a,.pagination>li:first-child>span{margin-left:0;border-top-left-radius:4px;border-bottom-left-radius:4px}.pagination>li:last-child>a,.pagination>li:last-child>span{border-top-right-radius:4px;border-bottom-right-radius:4px}.pagination>li>a:focus,.pagination>li>a:hover,.pagination>li>span:focus,.pagination>li>span:hover{z-index:2;color:#23527c;background-color:#eee;border-color:#ddd}.pagination>.active>a,.pagination>.active>a:focus,.pagination>.active>a:hover,.pagination>.active>span,.pagination>.active>span:focus,.pagination>.active>span:hover{z-index:3;color:#fff;cursor:default;background-color:#337ab7;border-color:#337ab7}.pagination>.disabled>a,.pagination>.disabled>a:focus,.pagination>.disabled>a:hover,.pagination>.disabled>span,.pagination>.disabled>span:focus,.pagination>.disabled>span:hover{color:#777;cursor:not-allowed;background-color:#fff;border-color:#ddd}.pagination-lg>li>a,.pagination-lg>li>span{padding:10px 16px;font-size:18px;line-height:1.3333333}.pagination-lg>li:first-child>a,.pagination-lg>li:first-child>span{border-top-left-radius:6px;border-bottom-left-radius:6px}.pagination-lg>li:last-child>a,.pagination-lg>li:last-child>span{border-top-right-radius:6px;border-bottom-right-radius:6px}.pagination-sm>li>a,.pagination-sm>li>span{padding:5px 10px;font-size:12px;line-height:1.5}.pagination-sm>li:first-child>a,.pagination-sm>li:first-child>span{border-top-left-radius:3px;border-bottom-left-radius:3px}.pagination-sm>li:last-child>a,.pagination-sm>li:last-child>span{border-top-right-radius:3px;border-bottom-right-radius:3px}




</style>
</head>
<?php
// if(@$_GET['studentIdd']){

//     echo "<body class=\"animsition\" onLoad=\"loadModal();\">";

// }
// else{
//     echo "<body class=\"animsition\" >";
//     //onLoad=\"loadModalnot();\"
// }



?>

<body class="animsition" >
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
                <?php include 'menuPrimary.php'?>
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
                                       <h3> View All User</h3>
                                    </div> 


                                    <!-- <div class="col-lg-12">
                                            <select name="numRecord" id="numRecord" class="form-control" onchange="studentTableLoad()">
                                                        <option value="999">Select Number of Records to show</option>
                                                        <option value="1000">Whole Record</option>
                                                        <option value="100">100 Record</option>
                                            </select>
                                    </div> -->
                                    <div class="row form-group">
                                        <div class="col-md-4"><input type="text" class="form-control" id="startFrom" placeholder="Starting Value"></div>
                                        <div class="col-md-4"><input type="text" class="form-control" id="endFrom" placeholder="Ending Value"></div>
                                        <div class="col-md-4"><input type="button" class="btn btn-primary form-control" onclick="functionClick('pagin')" value="Refresh"></div>
                                    </div>
                                        <!-- <input type="text" id="startFrom" placeholder="Ready">
                                            <input type="text" id="end" placeholder="End"> -->
                                            
                                    <div class="row form-group">
                                        <!-- <form action="viewUser.php"> -->
                                            
                                        <!-- </form> -->
                                        <div class="col-md-4">
                                        <select name="columnName" id="columnName" class="form-control">
                                                        <option value="999">Select Column Name</option>
                                                        <option value="name">Name</option>
                                                        <option value="khundi">Khundi</option>
                                                        <option value="contact">Contact</option>
                                                        <option value="fh_name">Father Name</option>
                                                        <option value="address">Address</option>
                                                        <option value="area">Area</option>
                                                        <!-- <option value="100">100</option>
                                                        <option value="250">250</option>
                                                        <option value="1000">1000</option> -->
                                                    </select>
                                        </div>
                                        
                                                
                                                <div class="col-md-4">

                                                    <!-- <form method="POST" id="showNumberForm" action="#">

                                                        <!-action="javascript:void(0)">->

                                                    <select name="showNumber" id="maxRows" class="form-control">
                                                        <option value="999">Select Number</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                        <option value="250">250</option>
                                                        <option value="1000">1000</option>
                                                    </select>

                                                    <!-<input type="submit" name="showSubmit" id="showSubmit" value="submit">->

                                                    </form> -->

                                                    <!-- <input type="text" id="searchInput" placeholder="Search any Text" class="form-control" > -->
                                                    <input type="text" id="searchText" placeholder="Search any Text" class="form-control" >

                                                  </div>

                                                  <div class="col-md-4">
                                                  <input type="button" class="btn btn-primary form-control" onclick="functionClick('search')" value="Search">

                                                    </div>      


                                      </div>
                                </div>
                             </div>

                            <div class="col-lg-12">
                                <!-- <div class="table-responsive table--no-card m-b-30"> -->
                                
                                <div class="table-responsive" id="pagination_data">
                                    <table id="tableStudent2" class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>Stu ID</th>
                                                <th>Name</th>
                                                <th>Dob</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody id="userTable">


                                        </tbody>
                                    </table>

 
                                     
                                        
                                   
                                </div>

                                </div>
                               




                              
                                <div class='pagination-container' >
				<nav>
				  <ul class="pagination">
            
            <li data-page="prev" >
								     <span> < <span class="sr-only">(current)</span></span>
								    </li>
				   <!--	Here the JS Function Will Add the Rows -->
        <li data-page="next" id="prev">
								       <span> > <span class="sr-only">(current)</span></span>
								    </li>
				  </ul>
				</nav>
			</div>
                                <!-- <ul class="pagination pagination-lg pager" id="myPager"></ul> -->
                                
                            </div>
                            <!-- exportTableToExcel('tableStu') -->
                            <button onclick="exportTableToExcel('tableStu')" class="btn btn-success" style="margin:0 0 0 80%">Exports to Excel</button>
                            <!-- <button id="buttonId" class="btn btn-success" style="margin:0 0 0 80%">Export to Excel2</button> -->
                        </div>



                        <!-- <h4>New Pagination</h4> -->
                        <div id="paginationHassaan">

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


    <div id="ajaxphp"></div>
    <!-- <a href="http://omysstudent.com/census.zip" id="zipFileDownload"> Click me </a> -->
   <!-- <button onclick="window.location.href = 'http://localhost/omys_admin/census.zip';" id="zipFileDownload" style="display:none;">..</button>-->

     <button onclick="window.location.href = 'http://omysstudent.com/omys_admin/census.zip';" id="zipFileDownload" style="display:none;">..</button> 




    

<!-- modal medium -->
			<div class="modal" style="z-index:100" id="userStudentModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
				<div class="modal-dialog modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">

                            <?php include 'modalStudentForm.php'; ?>

                            

							<p>
								
							</p>
						</div>
						<div class="modal-footer">
							<!--<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary">Confirm</button>-->
						</div>
					</div>
				</div>
			</div>
			<!-- end modal medium -->



            <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.25/webcam.min.js"></script>
            <!-- <script src="js/webcam.min.js"></script> -->



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
    <script src="js/pagerJs.js"></script>
    <script src="js/app.js"></script>
    <script src="js/main.js"></script>
    <script>
    window.onload=onLoadFunction('viewUser');


    $("[id$=buttonId]").click(function(e) {
    window.open('data:application/vnd.ms-excel,' + encodeURIComponent( $('div[id$=tableStudent3]').html()));
    e.preventDefault();
});
    </script>



   






</body>

</html>
<!-- end document-->
