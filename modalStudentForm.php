

        <!-- <form method="post" enctype="multipart/form-data" class="form-horizontal"> -->

        <input type="hidden"  name="studentIdInput" id="studentIdInput">

        <div class="row form-group">
              <div class="col col-md-3">
                 <label for="text-input" class=" form-control-label">Data Put By:</label>
               </div>
              <div class="col-12 col-md-9">
              <input type="text" id="sStaffName" name="sStaffName"  placeholder="" class="form-control" disabled>
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                </div>
        </div>

        <div class="row form-group">
              <div class="col col-md-3">
                 <label for="text-input" class=" form-control-label">Student Id:</label>
               </div>
              <div class="col-12 col-md-9">
              <input type="text" id="sid" name="sid"  placeholder="" class="form-control" disabled>
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                </div>
        </div>
        <div class="row form-group">
              <div class="col col-md-3">
                 <label for="text-input" class=" form-control-label">Picture</label>
               </div>
              <div class="col-12 col-md-9">

              <img width="200px" height="200px" id="imageStudent">
              <!-- <input type="text" id="sname" name="sname"  placeholder="Enter Name" class="form-control"> -->
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                </div>
        </div>

        <div class="row form-group">
              <div class="col col-md-3">
                 <label for="text-input" class=" form-control-label">Name<span class="requiredField">*</span></label>
               </div>
              <div class="col-12 col-md-9">
              <input type="text" id="sname" name="sname"  placeholder="Enter Name" class="form-control">
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                </div>
        </div>







                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Date of Birth<span class="requiredField">*</span></label>
                                                </div>
                                                <div class="col-4 col-md-3">

                                                    <select name="sday" id="sday" class="form-control" >
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

                                                    <select name="smonth" id="smonth" class="form-control">
                                                        
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
                                                    <!--<?php echo $mon ?>-->

                                                    <div class="col-4 col-md-3">

                                                    <select name="syear" id="syear" class="form-control">
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
                                                    <label class=" form-control-label">Gender<span class="requiredField">*</span></label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="row">
                                                            
                                                            <div class="col col-md-6">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio" id="sgender1" name="sgender" value="male" class="form-check-input">Male
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-6">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio" id="sgender2" name="sgender" value="female" class="form-check-input">Female
                                                            </label>
                                                        </div>

                                                            </div>
                                                        </div><!--row-->
                                                        
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            




                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">CNIC<span class="requiredField">*</span></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="scnic" name="scnic" placeholder="Enter CNICs" class="form-control" >
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>

                                            


                                            <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Khundi <span class="requiredField">*</span></label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                            <input list="skhundi-datalist" type="text" id="skhundi" onchange="skhundiListChange()" class="form-control">
 
                                            <datalist id="skhundi-datalist" >
                                                <option value="ASWANI">ASWANI</option>
                                                <option value="BARAI">BARAI</option>
                                                <option value="BHANWARIA">BHANWARIA</option>
                                                <option value="DADWALA">DADWALA</option>
                                                <option value="DARBAR">DARBAR</option>
                                                <option value="DARIYA">DARIYA</option>
                                                <option value="DAWRA">DAWRA</option>
                                                <option value="DUROODWALA">DUROODWALA</option>
                                                <option value="ESSANI">ESSANI</option>
                                                <option value="GABA">GABA</option>
                                                <option value="GABRANI">GABRANI</option>
                                                <option value="GAGAI">GAGAI</option>
                                                <option value="GANATRA">GANATRA</option>
                                                <option value="GATTA">GATTA</option>
                                                <option value="GAZIANI">GAZIANI</option>
                                                <option value="JAFRANI">JAFRANI</option>
                                                <option value="JAKHURA HYD">JAKHURA HYD</option>
                                                <option value="JAKHURA">JAKHURA</option>
                                                <option value="JIWANI">JIWANI</option>
                                                <option value="KALANI">KALANI</option>
                                                <option value="KARAR">KARAR</option>
                                                <option value="KATH">KATH</option>
                                                <option value="KHOSA">KHOSA</option>
                                                <option value="LADHANI">LADHANI</option>
                                                <option value="MAMDANI">MAMDANI</option>
                                                <option value="MANGRORIA">MANGRORIA</option>
                                                <option value="MARKATIYA">MARKATIYA</option>
                                                <option value="MOORAD">MOORAD</option>
                                                <option value="MOOSANI">MOOSANI</option>
                                                <option value="MUHAMMADI">MUHAMMADI</option>
                                                <option value="MULLARA">MULLARA</option>
                                                <option value="PANJWANI HYD">PANJWANI HYD</option>
                                                <option value="PANJWANI">PANJWANI</option>
                                                <option value="PASTA">PASTA</option>
                                                <option value="PATEL">PATEL</option>
                                                <option value="POPATPOTRA">POPATPOTRA</option>
                                                <option value="SURIYA">SURIYA</option>
                                                <option value="TOBERIA">TOBERIA</option>
                                                <option value="VAYANI">VAYANI</option>
                                                <option value="OTHER">OTHER</option>
                                            </datalist>
                                                <!-- <input type="text" id="khundi" name="khundi" placeholder="Enter Khundi"
                                                    class="form-control"> -->
                                            </div>
                                        </div>

                                             <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Khundi<span class="requiredField">*</span></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="skhundi" name="skhundi" placeholder="Enter Khundi" class="form-control" >
                                                </div>
                                            </div> -->



 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Group</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sgroup" name="sgroup" placeholder="Enter Group" class="form-control">
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>




 <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Age</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sage" name="sage" placeholder="Enter Age" class="form-control" >
                                                </div>
                                            </div> -->





 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">OMJ Card No</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="somjCard" name="somjCard" placeholder="Enter OMJ Card No" class="form-control" >
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>





 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Birth Place</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sbirthPlace" name="sbirthPlace" placeholder="Enter Birth Place" class="form-control">
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>




 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">OMYS Card No</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="somysCard" name="somysCard" placeholder="Enter OMYS Card No" class="form-control" >
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>




 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="semail" name="semail" placeholder="Enter Email" class="form-control" >
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>



 <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Contact No<span class="requiredField">*</span></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="scontact" name="scontact" placeholder="Enter Contact" class="form-control" >
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>


                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Whatsapp No</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="swhatsapp" name="swhatsapp" placeholder="Enter Whatsapp" class="form-control" >
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>



                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Residential Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sresidentialAddress" name="sresidentialAddress" placeholder="Enter Residential Address" class="form-control">
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Area</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sarea" name="sarea" placeholder="Enter Area" class="form-control">
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
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio" id="smaritualStatus1" name="smaritualStatus" value="single" class="form-check-input" >Single
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  name="smaritualStatus" id="smaritualStatus2"  value="married" class="form-check-input" >Married
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio" id="smaritualStatus3" name="smaritualStatus" value="divorced" class="form-check-input" >Divorced
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <br>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio"  id="smaritualStatus4" name="smaritualStatus" value="widow" class="form-check-input">Widow
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="smaritualStatus5" name="smaritualStatus" value="widower" class="form-check-input">Widower
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

                                                        </div><!--row-->
                                                        
                                                        
                                                        
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
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="checkbox" id="sstu_occupation1" name="stu_occupation[]" value="student" class="form-check-input"  >Student
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="checkbox" id="sstu_occupation2" name="stu_occupation[]" value="business" class="form-check-input" >Business
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="checkbox" id="sstu_occupation3" name="stu_occupation[]" value="houseWife" class="form-check-input" >House Wife
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <br>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="checkbox" id="sstu_occupation4" name="stu_occupation[]" value="retired" class="form-check-input" >Retired
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="checkbox" id="sstu_occupation5" name="stu_occupation[]" value="unemployed" class="form-check-input">Unemployed
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="checkbox" id="sstu_occupation6" name="stu_occupation[]" value="govtEmployee" class="form-check-input" >Govt. Employee
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <br>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="checkbox" id="sstu_occupation7" name="stu_occupation[]" value="semiGovtEmployee" class="form-check-input" >Semi Govt. Employee
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="checkbox" id="sstu_occupation8"  name="stu_occupation[]" value="selfEmployeed" class="form-check-input" >Self Employeed
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="checkbox" id="sstu_occupation9" name="stu_occupation[]" value="pvtService" class="form-check-input" >Private Service
                                                            </label>
                                                        </div>

                                                            </div>

                                                            <br>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="checkbox" id="sstu_occupation10" name="stu_occupation[]" value="other" class="form-check-input" >Other
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            

                                                        </div><!--row-->
                                                        
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Father/Husband Name<span class="requiredField">*</span></label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sfatherHusbandName" name="sfatherHusbandName" placeholder="Enter Father/Husband Name" class="form-control"  >
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Father/Husband CNIC</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sfatherHusbandCnic" name="sfatherHusbandCnic" placeholder="Enter Father/Husband CNIC" class="form-control"  >
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>




                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Father/Husband Contact</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sfatherHusbandContact" name="sfatherHusbandContact" placeholder="Enter Father/Husband Contact" class="form-control" >
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                            <div class="col col-md-3">
                                                <label for="text-input" class=" form-control-label">Father/Husband
                                                    OMJ Card No</label>
                                            </div>
                                            <div class="col-12 col-md-9">
                                                <input type="number" id="sfatherHusbandOmjCard"  name="sfatherHusbandOmjCard"
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
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio" id="sfather_occupation1" name="sfather_occupation" value="student" class="form-check-input"   >Student
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="sfather_occupation2" name="sfather_occupation" value="business" class="form-check-input"  >Business
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <!-- <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio" id="sfather_occupation3" name="sfather_occupation" value="houseWife" class="form-check-input" >House Wife
                                                            </label>
                                                        </div>

                                                            </div> -->


                                                            <br>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio"  id="sfather_occupation3" name="sfather_occupation" value="retired" class="form-check-input" >Retired
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="sfather_occupation4" name="sfather_occupation" value="unemployed" class="form-check-input" >Unemployed
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="sfather_occupation5" name="sfather_occupation" value="govtEmployee" class="form-check-input"  >Govt. Employee
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <br>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio"  id="sfather_occupation6" name="sfather_occupation" value="semiGovtEmployee" class="form-check-input" >Semi Govt. Employee
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="sfather_occupation7" name="sfather_occupation" value="selfEmployeed" class="form-check-input"  >Self Employeed
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="sfather_occupation8" name="sfather_occupation" value="pvtService" class="form-check-input" >Private Service
                                                            </label>
                                                        </div>

                                                            </div>

                                                            <br>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio"  id="sfather_occupation9" name="sfather_occupation" value="other" class="form-check-input"  >Other
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            

                                                        </div><!--row-->
                                                        
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Mother Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="smotherName" name="smotherName" placeholder="Enter Mother Name" class="form-control" >
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>


                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Mother CNIC</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="smotherCnic" name="smotherdCnic" placeholder="Enter Mother CNIC" class="form-control">
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>




                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Mother Contact</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="smotherContact" name="smotherContact" placeholder="Enter Mother Contact" class="form-control">
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
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio" id="smother_occupation1" name="smother_occupation" value="student" class="form-check-input"   >Student
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="smother_occupation2" name="smother_occupation" value="business" class="form-check-input"  >Business
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio" id="smother_occupation3" name="smother_occupation" value="houseWife" class="form-check-input"  >House Wife
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <br>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio"  id="smother_occupation4" name="smother_occupation" value="retired" class="form-check-input">Retired
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="smother_occupation5" name="smother_occupation" value="unemployed" class="form-check-input"  >Unemployed
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="smother_occupation6" name="smother_occupation" value="govtEmployee" class="form-check-input" >Govt. Employee
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <br>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio"  id="smother_occupation7" name="smother_occupation" value="semiGovtEmployee" class="form-check-input"  >Semi Govt. Employee
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="smother_occupation8" name="smother_occupation" value="selfEmployeed" class="form-check-input"  >Self Employeed
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="smother_occupation9" name="smother_occupation" value="pvtService" class="form-check-input"  >Private Service
                                                            </label>
                                                        </div>

                                                            </div>

                                                            <br>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio"  id="smother_occupation10" name="smother_occupation" value="other" class="form-check-input" >Other
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            

                                                        </div><!--row-->
                                                        
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>






  <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Select Academic Qualification</label>
                                                </div>
                                                <div class="col-4 col-md-3">

                                                    <select name="saq1" id="saq1" class="form-control">
                                                        <option >Select Academic Qualification</option>
                                                        <option value="Primary">Primary</option>
                                                        <option value="Secondary">Secondary</option>
                                                        <option value="Matric">Matric</option>
                                                        <option value="Intermediate">Intermediate</option>
                                                        <option value="Graduate">Graduate</option>
                                                        <option value="Post Graduate">Post Graduate</option>
                                                        <option value="Ph. D">Ph. D</option>
                                                        <option value="Aalim/Aalima">Aalim/Aalima</option>
                                                        <option value="Diploma">Diploma</option>
                                                        <option value="Uneducated">Uneducated</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                    
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>



                                                 <div class="col-4 col-md-3">
                                                        <input type="text" id="sadmYear1" name="sadmYear1" placeholder="Admission Year" class="form-control">
                                                   

                                                    </div>

                                                    <div class="col-4 col-md-3">

                                                        <input type="text" id="scomYear1" name="scomYear1" placeholder="Completion Year" class="form-control">

                                                    </div>

                                                </div>
<!-- 
                                                    <div id="saqContainer">



                                                        </div> -->

                                                       
                                                        <!--<div style="float:right">
                                                        
                                                        </div>-->

                                          
<!-- 
                                             <div class="row">
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-5"><input type="button"  class="btn btn-default" value="+" onclick="saddAcademic();">
                                                            </div>
                                                            <div class="col-md-4">

                                                                <input type="button" style="float:right;" class="btn btn-default" value="-" onclick="sremoveAcademic();">
                                                                </div>
                                                        </div>
                                                        <br> -->
                                                        







                                                        











                                               <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Blood Group</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                        <div class="row">
                                                            
                                                            <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio" id="sbloodGroup1" name="sbloodGroup" value="Aplus" class="form-check-input"   >A+
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="sbloodGroup2" name="sbloodGroup" value="Aneg" class="form-check-input"  >A-
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio" id="sbloodGroup3" name="sbloodGroup" value="ABplus" class="form-check-input"  >AB+
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <br>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio"  id="sbloodGroup4" name="sbloodGroup" value="ABneg" class="form-check-input"  >AB-
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="sbloodGroup5" name="sbloodGroup" value="Bplus" class="form-check-input"  >B+
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="sbloodGroup6" name="sbloodGroup" value="Bneg" class="form-check-input" >B-
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <br>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio"  id="sbloodGroup7" name="sbloodGroup" value="Oplus" class="form-check-input"  >O+
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="sbloodGroup8" name="sbloodGroup" value="Oneg" class="form-check-input" >O-
                                                            </label>
                                                        </div>

                                                            </div>


                                                            

                                                            
                                                            

                                                        </div><!--row-->
                                                        
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>









                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Select Professional Qualification</label>
                                                </div>
                                                <div class="col-4 col-md-3">

                                                    <select name="spq1" id="spq1" class="form-control"  >
                                                      
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
                                                        <input type="text" id="sadmYearpq1" name="sadmYearpq1" placeholder="Admission Year" class="form-control">
                                                   

                                                    </div>

                                                    <div class="col-4 col-md-3">

                                                        <input type="text" id="scomYearpq1" name="scomYearpq1" placeholder="Completion Year" class="form-control">

                                                    </div>

                                                </div>

                                                    <!-- <div id="spqContainer">



                                                        </div> -->

                                                       
                                                        <!--<div style="float:right">
                                                        
                                                        </div>-->

                                          

                                             <!-- <div class="row">
                                                            <div class="col-md-3"></div>
                                                            <div class="col-md-5"><input type="button"  class="btn btn-default" value="+" onclick="saddProfessional();">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input type="button" style="float:right;"  class="btn btn-default" value="-" onclick="sremoveProfessional();">
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
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="checkbox" id="sadditionalSkills1" name="sadditionalSkills[]" value="publicSpeaker" class="form-check-input" >Public Speaker
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="checkbox"   id="sadditionalSkills2" name="sadditionalSkills[]" value="graphicDesigner" class="form-check-input" >Graphic Designer
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="checkbox"  id="sadditionalSkills3" name="sadditionalSkills[]" value="WebDesigner" class="form-check-input">Web Designer
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <br>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="checkbox"   id="sadditionalSkills4" name="sadditionalSkills[]" value="programmer" class="form-check-input" >Programmer
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="checkbox"   id="sadditionalSkills5" name="sadditionalSkills[]" value="animator" class="form-check-input" >Animator
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="checkbox"   id="sadditionalSkills6" name="sadditionalSkills[]" value="mobileRepairing" class="form-check-input">Mobile Repairing
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <br>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="checkbox"   id="sadditionalSkills7" name="sadditionalSkills[]" value="mechanic" class="form-check-input">Mechanic
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="checkbox"   id="sadditionalSkills8" name="additionalSkills[]" value="electrician" class="form-check-input" >Electrician
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="checkbox"   id="sadditionalSkills9" name="sadditionalSkills[]" value="carpenter" class="form-check-input" >Carpenter
                                                            </label>
                                                        </div>

                                                            </div>

                                                            <br>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="checkbox"   id="sadditionalSkills10" name="sadditionalSkills[]" value="plumber" class="form-check-input" >Plumber
                                                            </label>
                                                             </div>  



                                                            </div>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="checkbox"   id="sadditionalSkills11" name="sadditionalSkills[]" value="acTechnician" class="form-check-input" >AC Technician
                                                            </label>
                                                             </div>  



                                                            </div>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="checkbox"   id="sadditionalSkills12" name="sadditionalSkills[]" value="electronicRepairing" class="form-check-input" >Electronic Repairing
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            

                                                        </div><!--row-->
                                                        
                                                        
                                                        
                                                    </div>
                                                    <input type="text" id="sotherSkill" name="sotherSkill" placeholder="Enter other Additional Skill" class="form-control" >

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
                                                    <label for="text-input" class=" form-control-label">Institute Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sinstituteName" name="sinstituteName" placeholder="Enter Institute Name" class="form-control" >
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Present Class</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="spresentClass" name="spresentClass" placeholder="Enter Present Class" class="form-control" >
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>

                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Last Achievement</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="slastAchievement" name="slastAchievement" placeholder="Enter Last Achievement" class="form-control">
                                                </div>
                                            </div> -->



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Future Interest</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sfutureInterest" name="sfutureInterest" placeholder="Enter Future Interest" class="form-control" >
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
                                                    <input type="text" id="scompanyName" name="scompanyName" placeholder="Enter Company Name" class="form-control"   >
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Office Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sofficeAddress" name="sofficeAddress" placeholder="Enter Office Address" class="form-control" >
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>



                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Current Designation</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="scurrentDesignation" name="scurrentDesignation" placeholder="Enter Current Designation" class="form-control"  >
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>

                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Last Achievement</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="slastAchievementemp" name="slastAchievementemp" placeholder="Enter Last Achievement" class="form-control">
                                                </div>
                                            </div> -->



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Future Interest</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sfutureInterestemp" name="sfutureInterestemp" placeholder="Enter Future Interest" class="form-control" >
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
                                                    <input type="text" id="shobbies" name="shobbies" placeholder="Enter Hobbies" class="form-control">
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>



                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Professional Acievement</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sprofessionalAchievement" name="sprofessionalAchievement" placeholder="Enter Professional Acievement" class="form-control" >
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>



                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Personal Achievement</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="spersonalAchievement" name="spersonalAchievement" placeholder="Enter Personal Achievement" class="form-control"  >
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                            </div>

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Sports Interest</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="ssportInterest" name="ssportInterest" placeholder="Enter Sports Interest" class="form-control"  >
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
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio" id="sifStudent1" name="sifStudent" value="financialCrises" class="form-check-input" >Financial Crises
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="sifStudent2" name="sifStudent" value="earlyMarriage" class="form-check-input"  >Early Marriage
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio" id="sifStudent3" name="sifStudent" value="lostInterest" class="form-check-input"  >Lost Interest
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <br>

                                                             <div class="col col-md-4">
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio"  id="sifStudent4" name="sifStudent" value="gotJob" class="form-check-input">Got A Job
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="sifStudent5" name="sifStudent" value="startedABusiness" class="form-check-input"  >Started A Business
                                                            </label>
                                                        </div>

                                                            </div>


                                                            <div class="col col-md-4">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="sifStudent6" name="sifStudent" value="joinedFamilyBusiness" class="form-check-input"  >Joined Family Business
                                                            </label>
                                                        </div>

                                                            </div>


                                                           
                                                            

                                                        </div><!--row-->
                                                        
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>



                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Other Reason</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="sotherReason" name="sotherReason" placeholder="Enter Other Reason" class="form-control">
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
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio" id="somysMember1" name="somysMember" value="yes" class="form-check-input" >Yes
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-6">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="somysMember2" name="somysMember" value="no" class="form-check-input">No
                                                            </label>
                                                        </div>

                                                            </div>


                                                            
                                                            

                                                        </div><!--row-->
                                                        
                                                        
                                                        
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
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="radio" id="sfatherMember1" name="sfatherMember" value="yes" class="form-check-input" >Yes
                                                            </label>
                                                             </div>  



                                                            </div>
                                                            <div class="col col-md-6">
                                                                <div class="radio" style="display:inline;">
                                                            <label for="radio2" class="form-check-label ">
                                                                <input type="radio"  id="sfatherMember2" name="sfatherMember" value="no" class="form-check-input"  >No
                                                            </label>
                                                        </div>

                                                            </div>


                                                            
                                                            

                                                        </div><!--row-->
                                                        
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>


                                            <!-- <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Image Upload</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="simageUpload" name="simageUpload" class="form-control-file">
                                                </div>
                                            </div> -->

                                            <input type="hidden" id="imgFromDb" name="imgFromDb">



                                            <form action="backend/bphotoUpload.php" id="suploadImageIdForm" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                <input type="hidden" name="imageNameUpload" id="simageNameUpload">
                                                <div class="row form-group">
                                                    <div class="col col-md-3">
                                                        <label for="file-input" class=" form-control-label">Image Upload</label>
                                                    </div>
                                                    <div class="col-8 col-md-6">
                                                        <input type="file" id="simageUpload" name="imageUpload"  class="form-control-file ">
                                                    </div>
                                                    <!--<div class="col-4 col-md-3"></div>-->
                                                    <div class="col-4 col-md-3">
                                                    
                                                    <button type="button" class="btn btn-secondary" name="captureImage" onclick="scaptureImageCustom();">
                                                        Capture
                                                    </button>
                                                    
                                                    </div>
                                                </div>

                                            </form>


                                            <div style="display:none;" id="captureImageUpdateDiv">
                                                <form method="POST" action="backend/storeImage.php" id="suploadImageIdForm2">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div id="smy_camera"></div>
                                                            <br/>
                                                            <input type="hidden" name="imageNameUpload2" id="simageNameUpload2">
                                                            <input type=button value="Take Snapshot" class="btn btn-primary" onClick="stake_snapshot()">
                                                            <input type="hidden" name="image" id="simageCaptureTag" class="image-tag">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div id="sresults">Your captured image will appear here...</div>
                                                        </div>
                                                        <div class="col-md-12 text-center">
                                                            <br/>
                                                            <!-- <button class="btn btn-success">Submit</button> -->
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>  


                                            <hr>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Finalize the Student</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                       
                                                            
                                                            
                                                                    <div class="radio" style="display:inline;">
                                                            <label  for="radio1" class="form-check-label ">
                                                                <input type="checkbox" id="sedit" name="sedit[]" value="edit" class="form-check-input" style="width:20px; height:20px;margin:0;padding:0"  >
                                                            </label>
                                                             
                                                             </div>
                                                             </div>
                                                             </div>
                                                             </div>




                                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">Card Printed</label>
                                                </div>
                                                <div class="col col-md-9">
                                                    <div class="form-check">
                                                       
                                                            
                                                            
                                                                    <div class="radio" style="display:inline;">
                                                            <label for="radio1" class="form-check-label ">
                                                                <input type="checkbox" id="sprint" name="sprint[]" value="Print" class="form-check-input" style="width:20px; height:20px;margin:0;padding:0"  >
                                                            </label>
                                                             
                                                             </div>
                                                             </div>
                                                             </div>
                                                             </div>




                                                             <br><hr>

                                            <div >   
                                                <input type="button" onclick="deleteStudentUser();" name="delete" class="btn btn-danger" value="Delete">   
                                                <input type="button" onclick="updateStudentUser();" style="float:right;" name="udpate" class="btn btn-primary" value="Update">
                                            </div>








        











































