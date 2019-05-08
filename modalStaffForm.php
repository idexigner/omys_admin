<div class="row form-group">
              <div class="col col-md-3">
                 <label for="text-input" class=" form-control-label">User Id:</label>
               </div>
              <div class="col-12 col-md-9">
              <input type="text" id="uid" name="uid"  class="form-control" disabled>
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                </div>
</div>


<div class="row form-group">
              <div class="col col-md-3">
                 <label for="text-input" class=" form-control-label">Name</label>
               </div>
              <div class="col-12 col-md-9">
              <input type="text" id="uname" name="uname" class="form-control">
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                </div>
        </div>


        <div class="row form-group">
              <div class="col col-md-3">
                 <label for="text-input" class=" form-control-label">Khundi</label>
               </div>
              <div class="col-12 col-md-9">
              <input type="text" id="ukhundi" name="ukhundi"  class="form-control">
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                </div>
        </div>



        <div class="row form-group">
              <div class="col col-md-3">
                 <label for="text-input" class=" form-control-label">Contact</label>
               </div>
              <div class="col-12 col-md-9">
              <input type="text" id="ucontact" name="ucontact" class="form-control">
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                </div>
        </div>


        <div class="row form-group">
              <div class="col col-md-3">
                 <label for="text-input" class=" form-control-label">Username</label>
               </div>
              <div class="col-12 col-md-9">
              <input type="text" id="uusername" name="uusername"   class="form-control">
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                </div>
        </div>


        <div class="row form-group" style="display:none">
              <div class="col col-md-3">
                 <label for="text-input" class=" form-control-label">Password</label>
               </div>
              <div class="col-12 col-md-9">
              <input type="text" id="upass" name="upass" class="form-control">
                                                  
                </div>
        </div>



        <div class="row form-group">
              <div class="col col-md-3">
                 <label for="text-input" class=" form-control-label">Enter Old Password</label>
               </div>
              <div class="col-12 col-md-9">
              <input type="text" id="uoldPass" name="uoldPass" class="form-control">
                                                  
                </div>
        </div>


        <div class="row form-group">
              <div class="col col-md-3">
                 <label for="text-input" class=" form-control-label">Enter New Password</label>
               </div>
              <div class="col-12 col-md-9">
              <input type="text" id="unewPass" name="unewPass" class="form-control">
                                                  
                </div>
        </div>





        <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Role</label>
                                                </div>
                                                <div class="col-12 col-md-9">

                                                    <select name="urole" id="urole" class="form-control" >
                                                     
                                                         
                                                        <option value="Admin">Admin</option>
                                                        <option value="Staff">Staff</option>
                                                        <option value="worker">Worker</option>
                                                      
                                                    </select>
                                                    
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                                                </div>
                                                </div>


                                                <!-- updateStudentUser -->
            <div >   
                <button type="button" onclick="deleteStaff();" name="delete" class="btn btn-danger" >Delete</button>  
                <button type="button" onclick="updateStaff();" style="float:right;" name="udpate" class="btn btn-primary" >Update</button>  
            </div>





        