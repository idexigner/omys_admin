<div class="row form-group">
    <div class="col col-md-3">
        <label for="text-input" class=" form-control-label">Advertise Id:</label>
    </div>
    <div class="col-12 col-md-9">
        <input type="text" id="addid" name="addid" class="form-control" disabled>
        <!--<small class="form-text text-muted">This is a help text</small>-->
    </div>
</div>


<div class="row form-group">
              <div class="col col-md-3">
                 <label for="text-input" class=" form-control-label">Logo</label>
               </div>
              <div class="col-12 col-md-9">

              <img width="200px" height="200px" id="imageAdvertise">
              <!-- <input type="text" id="sname" name="sname"  placeholder="Enter Name" class="form-control"> -->
                                                    <!--<small class="form-text text-muted">This is a help text</small>-->
                </div>
</div>




<div class="row form-group">
    <div class="col col-md-3">
        <label for="text-input" class=" form-control-label">Title</label>
    </div>
    <div class="col-12 col-md-9">
        <input type="text" id="uaddTitle" name="uaddTitle" class="form-control">
        <!--<small class="form-text text-muted">This is a help text</small>-->
    </div>
</div>

<div class="row form-group">
    <div class="col col-md-3">
        <label for="text-input" class=" form-control-label">Category</label>
    </div>
    <div class="col-12 col-md-9">

        <select name="usCat" id="usCat" class="form-control">
        
        <option value="Food">Food</option>
        <option value="LifeStyle">LifeStyle</option>
        <option value="Health">Health</option>
        <option value="E-Stores">E-Stores</option>
        <option value="Services">Services</option>
        <option value="Home-Decor">Home-Decor</option>

        </select>

        <!--<small class="form-text text-muted">This is a help text</small>-->
    </div>
</div>


<div class="row form-group">
    <div class="col col-md-3">
        <label for="text-input" class=" form-control-label">Discount</label>
    </div>
    <div class="col-12 col-md-9">
        <input type="text" id="uaddDiscount" name="uaddDiscount" class="form-control">
        <!--<small class="form-text text-muted">This is a help text</small>-->
    </div>
</div>



<div class="row form-group">
    <div class="col col-md-3">
        <label for="text-input" class=" form-control-label">Address</label>
    </div>
    <div class="col-12 col-md-9">
        <input type="text" id="uaddAddress" name="uaddAddress" class="form-control">
        <!--<small class="form-text text-muted">This is a help text</small>-->
    </div>
</div>


<div class="row form-group">
    <div class="col col-md-3">
        <label for="text-input" class=" form-control-label">Expires On</label>
    </div>
    <div class="col-12 col-md-9">
        <input type="date" id="udateExpire" name="udateExpire" class="form-control">
        <!--<small class="form-text text-muted">This is a help text</small>-->
    </div>
</div>



<!-- updateStudentUser -->
<div>
    <button type="button" onclick="deleteAdd();" name="delete" class="btn btn-danger">Delete</button>
    <button type="button" onclick="updateAdd();" style="float:right;" name="udpate"
        class="btn btn-primary">Update</button>
</div>