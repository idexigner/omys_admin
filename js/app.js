var Api='';


if(window.location.href.includes("localhost")){
    Api = "http://localhost/omys_admin/";
}
else{
    Api="http://omysstudent.com/omys_admin/";
}



var student_data = [];
var stu_id;

var aqcount = 1;
var pqcount = 1;

function view_info() {

    fetch(Api + 'omys_backend/view_info.php', {
        method: 'GET',
        headers: new Headers({
            'content-type': 'application/json',
            'Accept': 'application/json',
        })
    })
        .then((response) => response.json())
        .then((responseJson) => {
            console.log(responseJson);
            responseJson.map((tr) => {
                student_data = responseJson;
                document.getElementById("view_info").innerHTML += showData(tr);

            })
        })
        .catch((error) => {
            console.error(error);
        });

    view_stud();

}

function editData(data) {
    console.log(data);

    student_data.map((item) => {
        if (item.s_id == data) {
            document.getElementById("modall").innerHTML = ` 
            <div class="modal fade showit" id="scrollmodal" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="scrollmodalLabel">Update Student Record</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">










                    <input type="hidden" value="${item.s_id}" id="s_id">
                    <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="cc-exp" class="control-label mb-1">Name</label>
                            <input id="up_name" name="cc-exp" type="tel" class="form-control cc-exp" value="${item.name}" data-val="true" data-val-required="Please enter the card expiration"
                                data-val-cc-exp="Please enter a valid month and year"
                                autocomplete="cc-exp">
                            <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                        </div>
                    </div>
                    <div class="col-6">
                        <label for="x_card_code" class="control-label mb-1">Date Of Birth</label>
                        <div class="input-group">
                            <input id="dob" placeholder="MM / YY" name="x_card_code" type="tel" class="form-control cc-cvc" value="${item.dob}" data-val="true" data-val-required="Please enter the security code"
                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                    </div>
                                </div>
                            </div>
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="cc-exp" class="control-label mb-1">Gender</label>
                                                <input id="identification" name="cc-exp" type="tel" class="form-control cc-exp" value="${item.gender}" data-val="true" data-val-required="Please enter the card expiration"
                                                    data-val-cc-exp="Please enter a valid month and year"
                                                    autocomplete="cc-exp">
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="x_card_code" class="control-label mb-1">CNIC</label>
                                            <div class="input-group">
                                                <input id="dob" placeholder="MM / YY" name="x_card_code" type="tel" class="form-control cc-cvc" value="${item.cnic}" data-val="true" data-val-required="Please enter the security code"
                                                    data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="cc-exp" class="control-label mb-1">Khundi</label>
                                                <input id="identification" name="cc-exp" type="tel" class="form-control cc-exp" value="${item.khundi}" data-val="true" data-val-required="Please enter the card expiration"
                                                    data-val-cc-exp="Please enter a valid month and year"
                                                    autocomplete="cc-exp">
                                                <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <label for="x_card_code" class="control-label mb-1">Group</label>
                                            <div class="input-group">
                                                <input id="dob" placeholder="MM / YY" name="x_card_code" type="tel" class="form-control cc-cvc" value="${item.s_group}" data-val="true" data-val-required="Please enter the security code"
                                                    data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                            </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="cc-exp" class="control-label mb-1">Birth Place</label>
                                            <input id="identification" name="cc-exp" type="tel" class="form-control cc-exp" value="${item.birth_place}" data-val="true" data-val-required="Please enter the card expiration"
                                                data-val-cc-exp="Please enter a valid month and year"
                                                autocomplete="cc-exp">
                                            <span class="help-block" data-valmsg-for="cc-exp" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="x_card_code" class="control-label mb-1">OMYS Card No</label>
                                        <div class="input-group">
                                            <input id="dob" placeholder="MM / YY" name="x_card_code" type="tel" class="form-control cc-cvc" value="${item.omys_card}" data-val="true" data-val-required="Please enter the security code"
                                                data-val-cc-cvc="Please enter a valid security code" autocomplete="off">

                                        </div>
                                    </div>
                                </div>











                    













                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" onclick="updateStudent();">Update</button>
                    </div>
                </div>
            </div>
            </div>`
        }
    })

    console.log(document.getElementById("modall"));

}

function updateStudent() {
    console.log(document.getElementById("s_id").value, document.getElementById("up_name").value);

    fetch(Api + 'omys_backend/update_student.php', {
        method: 'POST',
        headers: new Headers({
            'content-type': 'application/json',
            'Accept': 'application/json',
        }),
        body: JSON.stringify({
            id: document.getElementById("s_id").value,
            name: document.getElementById("up_name").value
        })

    })
        .then((response) => response.json())
        .then((responseJson) => {
            console.log(responseJson);
        })
        .catch((error) => {
            console.error(error);
        });



}

function showData(data) {
    return `
            <tr onClick="editData(${data.s_id});" data-toggle="modal" data-target="#scrollmodal"s>
            <td>${data.s_id}</td>
            <td>${data.name}</td>
            <td>${data.dob}</td>
            <td>${data.gender}</td>
            <td>${data.cnic}</td>
            <td>${data.khundi}</td>
            <td>${data.s_group}</td>
            <td>${data.birth_place}</td>
            <td>${data.omys_card}</td>
            <td>${data.email}</td>
            <td>${data.contact}</td>
            <td>${data.address}</td>
            <td>${data.status}</td>
            <td>${data.fh_name}</td>
            <td>${data.fh_cnic}</td>
            <td>${data.fh_occupation}</td>
            <td>${data.m_name}</td>
            <td>${data.m_cnic}</td>
            <td>${data.m_occupation}</td>
            </tr>`;
}



function view_stud() {

    fetch(Api + 'omys_backend/view_info.php', {
        method: 'GET',
        headers: new Headers({
            'content-type': 'application/json',
            'Accept': 'application/json',
        })
    })
        .then((response) => response.json())
        .then((responseJson) => {
            console.log(responseJson);
            document.getElementById("dropdown_view_users").innerHTML = '<option>Select Student</option>';
            responseJson.map((tr) => {

                document.getElementById("dropdown_view_users").innerHTML += showStud(tr);

            })
        })
        .catch((error) => {
            console.error(error);
        });

}

function showStud(data) {
    return `
  <option value=${data.s_id}>${data.s_id}</option>
  `;
}


function generateReport() {

    var filter = document.getElementById("dropdown_view_users").value;

    window.location = "./invoice/invoice-db.php?s_id=" + filter;

}





function submitFunction() {
    // imageUpload();
    document.getElementById("createUserForm").submit();
}


// function aqChange() {
//     document.getElementById('aqDummyCount').value = 1;
// }
// function pqChange() {
//     document.getElementById('pqDummyCount').value = 1;
// }



function showNum() {
    // alert('Reacheddd');
    // var show=document.getElementById('showNumber').value;
    //var url="/omys_admin/viewUser.php?page=1%20&rec_per_page="+show;
    console.log(url);
    // window.location.href  = url;
    // viewUser.php?page=1%20&rec_per_page=25
    //  document.getElementById("showNumberForm").submit();
}


function submitStudentIdForm() {
    console.log("baba reached");
    var idd = document.getElementById("studentId").value;
    var pageId = document.getElementById("pageId").value;
    var recPerPageId = document.getElementById("recPerPageId").value;
    var url = "/omys_admin/viewUser.php?studentIdd=" + idd + "&page=" + pageId + "&rec_per_page=" + recPerPageId;
    window.location.href = url;
    // document.getElementById("formStudentId").submit();
}

// function loadModal(){
// // alert("basdasdsaasddsaba reached");
//      alert("modal a reached");
//         $('#mediumModal').modal('show');


// }

function loadModal() {
    // alert("basdasdsaasddsaba reached");
    var stuId = document.getElementById("studentId").value
    console.log("modalnot reached");
    console.log(stuId);
    // if(stuId === '0' || stuId === 0){

    // }
    // else{
    $('#mediumModal').modal('show');
    // }

    //  alert("modal a reached");



}

function captureImageCustom() {
    //console.log("Reached captre");
    document.getElementById("imageChecking").value = "2";
    webcamStart();
    $('#modalCapture').modal('show');
}


function scaptureImageCustom() {
    console.log("Reached captrecustom");
    swebcamStart();
    document.getElementById("captureImageUpdateDiv").style.display = "block";
    // $('#smodalCapture').modal('show');

}

function swebcamStart() {
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 100
    });

    Webcam.attach('#smy_camera');
}



function stake_snapshot() {
    Webcam.snap(function (data_uri) {
        $(".image-tag").val(data_uri);
        document.getElementById('sresults').innerHTML = '<img src="' + data_uri + '"/>';
    });
}

function webcamStart() {
    Webcam.set({
        width: 490,
        height: 390,
        image_format: 'jpeg',
        jpeg_quality: 100
    });

    Webcam.attach('#my_camera');
}



function take_snapshot() {
    Webcam.snap(function (data_uri) {
        $(".image-tag").val(data_uri);
        document.getElementById('results').innerHTML = '<img src="' + data_uri + '"/>';
    });
}



function imageUploadFunction() {
    console.log("Reached image upload");
}


function createUserStudent() {


    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
    // var p_id='2';
    //var p_id=document.getElementById('purchaseUserId').innerHTML;
    var date = new Date();

    var month = ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'july', 'aug', 'sept', 'oct', 'nov', 'dec'];

    date = date.getDate() + '/' + month[date.getMonth()] + '/' + date.getFullYear();
    var name = document.getElementById("name").value;

    var dayDrop = document.getElementById("day");
    var dayDropValue = dayDrop.options[dayDrop.selectedIndex].value;

    var monthDrop = document.getElementById("month");
    var monthDropValue = monthDrop.options[monthDrop.selectedIndex].value;

    var yearDrop = document.getElementById("year");
    var yearDropValue = yearDrop.options[yearDrop.selectedIndex].value;

    var dateOfBirth = dayDropValue + "/" + monthDropValue + "/" + yearDropValue;


    var gender = '';

    for (var i = 1; i < 3; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("gender" + i).checked) {
            gender = document.getElementById("gender" + i).value;
            // radioTypeFlag=true;
        }
    }

    var cnic = document.getElementById("cnic").value;
    var khundi = document.getElementById("khundi").value;

    // alert(khundi);

    var group = document.getElementById("group").value;

    //var age=document.getElementById("age").value;
    var omjCard = document.getElementById("omjCard").value;
    var birthPlace = document.getElementById("birthPlace").value;
    var omysCard = document.getElementById("omysCard").value;
    var email = document.getElementById("email").value;
    var contact = document.getElementById("contact").value;

    var whatsapp = document.getElementById("whatsapp").value;
    var residentialAddress = document.getElementById("residentialAddress").value;
    var area = document.getElementById("area").value;



    var maritualStatus = '';

    for (var i = 1; i < 6; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("maritualStatus" + i).checked) {
            maritualStatus = document.getElementById("maritualStatus" + i).value;
            // radioTypeFlag=true;
        }
    }
    var stu_occupation = [];


    for (var i = 1; i < 11; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("stu_occupation" + i).checked) {
            stu_occupation.push(document.getElementById("stu_occupation" + i).value);
            // radioTypeFlag=true;
        }
    }

    stu_occupation = JSON.stringify(stu_occupation);


    var fatherHusbandName = document.getElementById("fatherHusbandName").value;
    var fatherHusbandCnic = document.getElementById("fatherHusbandCnic").value;
    var fatherHusbandContact = document.getElementById("fatherHusbandContact").value;
    var fatherHusbandOmjCard = document.getElementById("fatherHusbandOmjCard").value;

    var father_occupation = '';

    for (var i = 1; i < 10; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("father_occupation" + i).checked) {
            father_occupation = document.getElementById("father_occupation" + i).value;
            // radioTypeFlag=true;
        }
    }


    var motherName = document.getElementById("motherName").value;
    var motherCnic = document.getElementById("motherCnic").value;
    var motherContact = document.getElementById("motherContact").value;

    var mother_occupation = '';

    for (var i = 1; i < 11; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("mother_occupation" + i).checked) {
            mother_occupation = document.getElementById("mother_occupation" + i).value;
            // radioTypeFlag=true;
        }
    }


    var bloodGroup = '';

    for (var i = 1; i < 9; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("bloodGroup" + i).checked) {
            bloodGroup = document.getElementById("bloodGroup" + i).value;
            // radioTypeFlag=true;
        }
    }


    var additionalSkills = [];


    for (var i = 1; i < 13; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("additionalSkills" + i).checked) {
            additionalSkills.push(document.getElementById("additionalSkills" + i).value);
            // radioTypeFlag=true;
        }
    }

    additionalSkills = JSON.stringify(additionalSkills);
    otherSkill = document.getElementById("otherSkill").value;



    var instituteName = document.getElementById("instituteName").value;
    var presentClass = document.getElementById("presentClass").value;
    //var lastAchievement=document.getElementById("lastAchievement").value;
    var futureInterest = document.getElementById("futureInterest").value;
    var companyName = document.getElementById("companyName").value;
    var officeAddress = document.getElementById("officeAddress").value;
    var currentDesignation = document.getElementById("currentDesignation").value;
    // var lastAchievementemp=document.getElementById("lastAchievementemp").value;
    var futureInterestemp = document.getElementById("futureInterestemp").value;
    var hobbies = document.getElementById("hobbies").value;
    var professionalAchievement = document.getElementById("professionalAchievement").value;
    var personalAchievement = document.getElementById("personalAchievement").value;
    var sportInterest = document.getElementById("sportInterest").value;

    var ifStudent = '';

    for (var i = 1; i < 7; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("ifStudent" + i).checked) {
            ifStudent = document.getElementById("ifStudent" + i).value;
            // radioTypeFlag=true;
        }
    }


    var otherReason = document.getElementById("otherReason").value;

    var omysMember = '';

    for (var i = 1; i < 3; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("omysMember" + i).checked) {
            omysMember = document.getElementById("omysMember" + i).value;
            // radioTypeFlag=true;
        }
    }

    var fatherMember = '';

    for (var i = 1; i < 3; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("fatherMember" + i).checked) {
            fatherMember = document.getElementById("fatherMember" + i).value;
            // radioTypeFlag=true;
        }
    }



    // aqDummyCount;

    var aqId = document.getElementById("aq1");
    //  var yearDropValue = ;


    var academicStr = '', s1, s2, s3, aq, admYear, comYear;
  
    if (aqId.selectedIndex != 0) {
       
        academicStr = '[';

       

        for (var i = 0; i < aqcount; i++) {
            s1 = 'aq' + (i + 1);
            s2 = 'admYear' + (i + 1);
            s3 = 'comYear' + (i + 1);

            // console.log("s1:"+s1+"\ns2:"+s2)
            aq = document.getElementById(s1).value;
            admYear = document.getElementById(s2).value;
            comYear = document.getElementById(s3).value;




            academicStr = academicStr + "{aq:\"" + aq + "\",admYear:\"" + admYear + "\",comYear:\"" + comYear + "\"}";

                   

        }

        academicStr += "]";


    }
    var pqId = document.getElementById("pq1");

    var professionalStr = '', ps1, ps2, ps3, pq, padmYear, pcomYear;

  
    if (pqId.selectedIndex != 0) {
        // if(pqcount !== '0')
        // {
        professionalStr = '[';

        // $_POST['day']."/". $_POST['month']."/".$_POST['year'];

        for (var i = 0; i < pqcount; i++) {
            ps1 = 'pq' + (i + 1);
            ps2 = 'admYearpq' + (i + 1);
            ps3 = 'comYearpq' + (i + 1);

            // console.log("s1:"+s1+"\ns2:"+s2)
            pq = document.getElementById(ps1).value;
            padmYear = document.getElementById(ps2).value;
            pcomYear = document.getElementById(ps3).value;


            professionalStr = professionalStr + "{pq:\"" + pq + "\",admYear:\"" + padmYear + "\",comYear:\"" + pcomYear + "\"}";

           

        }

        professionalStr += "]";


    }

    var min = 1000, max = 100000000;
    var randomNum = Math.floor(Math.random() * (max - min + 1) + min);
    var imgName = name + randomNum;


    if (document.getElementById("imageUpload").value !== '') {
        document.getElementById("imageNameUpload").value = imgName;
        document.getElementById("uploadImageIdForm").submit();
    }

    else if (document.getElementById("imageCaptureTag").value !== '') {
        document.getElementById("imageNameUpload2").value = imgName;
        document.getElementById("uploadImageIdForm2").submit();
    }
    else {
        imgName = '';
    }


    var cmin = 1000000, cmax = 10000000;
    var cardNumber = Math.floor(Math.random() * (cmax - cmin + 1) + cmin);




    var checkRequired = true;

    if (name === '' && checkRequired) {
        alert("Kindly Fill the Name Field");
        checkRequired = false;
    }
    else if (gender === '' && checkRequired) {
        alert("Kindly Fill the Gender Field");
        checkRequired = false;
    }
    else if (cnic === '' && checkRequired) {
        alert("Kindly Fill the Cnic Field");
        checkRequired = false;
    }
    else if (khundi === '' && checkRequired) {
        alert("Kindly Fill the Khundi Field");
        checkRequired = false;
    }
    else if (contact === '' && checkRequired) {
        alert("Kindly Fill the Contact Field");
        checkRequired = false;
    }
    else if (fatherHusbandName === '' && checkRequired) {
        alert("Kindly Fill the FatherHusbandName Field");
        checkRequired = false;
    }
    else if (dateOfBirth === 'DD/MM/YY' && checkRequired) {
        alert("Kindly Fill the Date of birth Field");
        checkRequired = false;
    }
    else if (academicStr === '' && checkRequired) {
        alert("Kindly Fill the Academic Qualification Field");
        checkRequired = false;
    }
    else if (imgName === '' && checkRequired && gender === 'male') {
        alert("Kindly Upload the Image");
        checkRequired = false;
    }


    // var user_id = localStorage.getItem('user');

    var user_id = accessCookie("user");


    if (checkRequired) {
        fetch(Api + 'backend/bcreateUserJava.php', {
            method: 'POST',
            body: JSON.stringify({
                date: date,
                name: name,
                dateOfBirth: dateOfBirth,
                gender: gender,
                cnic: cnic,
                khundi: khundi,
                group: group,
                // age:age,
                omjCard: omjCard,
                birthPlace: birthPlace,
                omysCard: omysCard,
                email: email,
                contact: contact,
                whatsapp: whatsapp,
                residentialAddress: residentialAddress,
                area: area,
                maritualStatus: maritualStatus,
                stu_occupation: stu_occupation,
                fatherHusbandName: fatherHusbandName,
                fatherHusbandCnic: fatherHusbandCnic,
                fatherHusbandContact: fatherHusbandContact,
                fatherHusbandOmjCard: fatherHusbandOmjCard,
                father_occupation: father_occupation,
                motherName: motherName,
                motherCnic: motherCnic,
                motherContact: motherContact,
                mother_occupation: mother_occupation,
                bloodGroup: bloodGroup,
                additionalSkills: additionalSkills,
                otherSkill: otherSkill,
                instituteName: instituteName,
                presentClass: presentClass,
                //    lastAchievement:lastAchievement,
                futureInterest: futureInterest,
                companyName: companyName,
                officeAddress: officeAddress,
                currentDesignation: currentDesignation,
                //  lastAchievementemp:lastAchievementemp,
                futureInterestemp: futureInterestemp,
                hobbies: hobbies,
                professionalAchievement: professionalAchievement,
                personalAchievement: personalAchievement,
                sportInterest: sportInterest,
                ifStudent: ifStudent,
                otherReason: otherReason,
                omysMember: omysMember,
                fatherMember: fatherMember,
                academicStr: academicStr,
                professionalStr: professionalStr,
                imgName: imgName,
                cardNumber: cardNumber,
                user_id:user_id

                // pass: pass,
                // fullname: fullname,
            }),
            headers: new Headers({
                'Content-Type': 'application/json',
            })

        })
            .then((response) => response.json())
            .then((responseJson) => {

                alert("Successfully Inserted");
                //     if(imgName!=='')
                // {
                //     document.getElementById("imageNameUpload").value=imgName;
                //     document.getElementById("uploadImageIdForm").submit();
                // }

                // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
                window.location.href = "/omys_admin/createUser.php";


                // console.log(responseJson);
            })
            .catch((error) => {
                console.error(error);
                alert("Not Inserted");
                window.location.href = "/omys_admin/createUser.php";

            });

    }//Check Required if Condition




}




function blogin() {
    //console.log("reached");
    var username = document.getElementById("username").value;
    var pass = document.getElementById("password").value;



    fetch(Api + 'backend/blogin.php', {
        method: 'POST',
        body: JSON.stringify({
            username: username,
            pass: pass
        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })
    })
        .then((response) => response.json())
        .then((responseJson) => {
            if (responseJson === "Wrong Details") {
                alert("Wrong Details");
                window.location.href = "/omys_admin/index.php";
            }
            else {
                // console.log(responseJson[0]);
                // alert(responseJson[0]);
                // alert(responseJson);
                // alert("farazedit"+ responseJson[0].role);
                createCookie("role",responseJson.role,1);
                createCookie("user",responseJson.u_id,1);
                createCookie("username",responseJson.name,1);




                // localStorage.setItem("role", responseJson.role);
                // localStorage.setItem("user", responseJson.u_id);
                // localStorage.setItem("username", responseJson.name);

                
                logStatus('in',responseJson.u_id,responseJson.name);
                window.location.href = "/omys_admin/dashboard.php";
            }
            // alert(responseJson);

        })
        .catch((error) => {
            // console.error(error);
            alert('Failed');

            window.location.href = "/omys_admin/index.php";
        });


}

function logStatus(status,u_id,u_name){

    var d = new Date();
    d= d.getDate() + "/" + (d.getMonth()+1) + "/" + d.getFullYear() + "---" + d.getHours() +":"+ d.getMinutes();
    fetch(Api + 'backend/logStatus.php', {
        method: 'POST',
        body: JSON.stringify({
            status: status,
            u_id: u_id,
            date: d,
            u_name: u_name
        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })
    })
        .then((response) => response.json())
        .then((responseJson) => {
            
        })
        .catch((error) => {
            // console.error(error);
            alert(error);

            //window.location.href = "/omys_admin/index.php";
        });

}

function enterPressLogin(e) {
    //See notes about 'which' and 'key'
    if (e.keyCode == 13) {
        // var tb = document.getElementById("scriptBox");
        // eval(tb.value);
        document.getElementById("submitLogin").click();
        return false;
    }
}

function loadStudentMod2(a) {
    console.log("reached modalllll");
    console.log(a);
}

function loadStudentMod(data) {
    // console.log("reached stuasdent modal")
    // purchaseTable();
    // sremoveAcademic();
    // sremoveProfessional();
   // console.log("reached student modal")
    $('#userStudentModal').modal('show');
    //var purchaseIdd=purc_id;
    stu_id = data;
    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');

    // console.log("asd "+purchaseIdd);


    fetch(Api + 'backend/bshowUser.php', {
        method: 'POST',
        body: JSON.stringify({
            id: stu_id,
            // pass: pass,
            // fullname: fullname,
        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })

    })
        .then((response) => response.json())
        .then((responseJson) => {
            var obj = responseJson[0];
            document.getElementById("sid").value = obj.s_id;
            
            document.getElementById("sStaffName").value = obj.staff_name;
            document.getElementById("sname").value = obj.student_name;
            var sdob = obj.dob;

            var date = sdob.substr(0, (sdob.indexOf("/")));
            var month = sdob.substr((sdob.indexOf("/") + 1), (sdob.lastIndexOf("/") - (sdob.indexOf("/") + 1)));
            var year = sdob.substr((sdob.lastIndexOf("/") + 1));



            var arrayDay = ['DD', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31'];

            // var dayUnit=obj.areaUnit;
            var indexDay = arrayDay.indexOf(date);

            document.getElementById("sday").selectedIndex = indexDay;

            var arrayMonth = ['MM', 'jan', 'feb', 'mar', 'apr', 'may', 'jun', 'july', 'aug', 'sept', 'oct', 'nov', 'dec'];

            var indexMonth = arrayMonth.indexOf(month);

            document.getElementById("smonth").selectedIndex = indexMonth;

            var arrayYear = ['YY', '1950', '1951', '1952', '1953', '1954', '1955', '1956', '1957', '1958', '1959', '1960', '1961', '1962', '1963', '1964', '1965', '1966', '1967', '1968', '1969', '1970', '1971', '1972', '1973', '1974', '1975', '1976', '1977', '1978', '1979', '1980', '1981', '1982', '1983', '1984', '1985', '1986', '1987', '1988', '1989', '1990', '1991', '1992', '1993', '1994', '1995', '1996', '1997', '1998', '1999', '2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007', '2008', '2009', '2010', '2011', '2012', '2013', '2014', '2015', '2016', '2017'];


            var indexYear = arrayYear.indexOf(year);

            document.getElementById("syear").selectedIndex = indexYear;

            var radiogender = obj.gender;
            if (radiogender !== null) {
                for (var i = 1; i < 3; i++) {
                    // var valueId="ptypeRadio"
                    if (document.getElementById("sgender" + i).value === radiogender) {
                        document.getElementById("sgender" + i).checked = true;

                    }
                }
            }

            document.getElementById("scnic").value = obj.cnic;

            


            document.getElementById("skhundi").value = obj.khundi;



            document.getElementById("sgroup").value = obj.s_group;
            // document.getElementById("sage").value=obj.age;
            document.getElementById("somjCard").value = obj.omj_card;
            document.getElementById("sbirthPlace").value = obj.birth_place;
            document.getElementById("somysCard").value = obj.omys_card;
            document.getElementById("semail").value = obj.email;
            document.getElementById("scontact").value = obj.contact;
            document.getElementById("swhatsapp").value = obj.whatsapp;
            document.getElementById("sresidentialAddress").value = obj.address;
            document.getElementById("sarea").value = obj.area;



            var radioMaritualStatus = obj.status;
            if (radioMaritualStatus !== null) {
                for (var i = 1; i < 6; i++) {
                    // var valueId="ptypeRadio"
                    if (document.getElementById("smaritualStatus" + i).value === radioMaritualStatus) {
                        document.getElementById("smaritualStatus" + i).checked = true;

                    }
                }
            }
            var stu_occupation = obj.occupation;
            // console.log(checkRoom)
            //  var checkRoomFlag=false;
            if (stu_occupation !== null) {
                for (var i = 1; i < 11; i++) {
                    // var valueId="ptypeRadio"
                    if (stu_occupation.includes(document.getElementById("sstu_occupation" + i).value)) {
                        document.getElementById("sstu_occupation" + i).checked = true;

                    }
                }
            }



            document.getElementById("sfatherHusbandName").value = obj.fh_name;
            document.getElementById("sfatherHusbandCnic").value = obj.fh_cnic;
            document.getElementById("sfatherHusbandContact").value = obj.fh_contact;
            document.getElementById("sfatherHusbandOmjCard").value = obj.fh_omjCard;

            var sfather_occupation = obj.fh_occupation;
            if (sfather_occupation !== null) {
                for (var i = 1; i < 10; i++) {
                    // var valueId="ptypeRadio"
                    if (document.getElementById("sfather_occupation" + i).value === sfather_occupation) {
                        document.getElementById("sfather_occupation" + i).checked = true;

                    }
                }
            }

            document.getElementById("smotherName").value = obj.m_name;
            document.getElementById("smotherCnic").value = obj.m_cnic;
            document.getElementById("smotherContact").value = obj.m_contact;

            var smother_occupation = obj.m_occupation;
            if (smother_occupation !== null) {
                for (var i = 1; i < 11; i++) {
                    // var valueId="ptypeRadio"
                    if (document.getElementById("smother_occupation" + i).value === smother_occupation) {
                        document.getElementById("smother_occupation" + i).checked = true;

                    }
                }
            }


            var sbloodGroup = obj.bloodGrp;
            if (sbloodGroup !== null) {
                for (var i = 1; i < 9; i++) {
                    // var valueId="ptypeRadio"
                    if (document.getElementById("sbloodGroup" + i).value === sbloodGroup) {
                        document.getElementById("sbloodGroup" + i).checked = true;

                    }
                }
            }



            var checkaddSkills = obj.addSkills;
            // console.log(checkRoom)
            //  var checkRoomFlag=false;
            if (checkaddSkills !== null) {
                for (var i = 1; i < 13; i++) {
                    // var valueId="ptypeRadio"
                    if (checkaddSkills.includes(document.getElementById("sadditionalSkills" + i).value)) {
                        document.getElementById("sadditionalSkills" + i).checked = true;

                    }
                }
            }
            document.getElementById("sotherSkill").value = obj.otherSkill;

            document.getElementById("sinstituteName").value = obj.insName;
            document.getElementById("spresentClass").value = obj.presClass;
            // document.getElementById("slastAchievement").value=obj.lastAch;
            document.getElementById("sfutureInterest").value = obj.futInt;
            document.getElementById("scompanyName").value = obj.cmpName;
            document.getElementById("sofficeAddress").value = obj.offAdd;
            document.getElementById("scurrentDesignation").value = obj.currDesg;
            // document.getElementById("slastAchievementemp").value=obj.ebLastAch;
            document.getElementById("sfutureInterestemp").value = obj.ebfutInt;
            document.getElementById("shobbies").value = obj.hobbies;
            document.getElementById("sprofessionalAchievement").value = obj.profAch;
            document.getElementById("spersonalAchievement").value = obj.persAch;
            document.getElementById("ssportInterest").value = obj.sportsInt;

          
            if (obj.edit == 'edited') {
                document.getElementById('sedit').checked = true;
            }

            if (obj.print == 'printed') {
                document.getElementById('sprint').checked = true;
            }


            var imgDb = obj.imgName;
            document.getElementById("imgFromDb").value = imgDb;

            document.getElementById("imageStudent").src = Api + "../omys_backend/uploads/images/" + imgDb + ".jpeg";


            var sifStudent = obj.leftEdu;
            if (sifStudent !== null) {
                for (var i = 1; i < 7; i++) {
                    // var valueId="ptypeRadio"
                    if (document.getElementById("sifStudent" + i).value === sifStudent) {
                        document.getElementById("sifStudent" + i).checked = true;

                    }
                }
            }

            document.getElementById("sotherReason").value = obj.otherReason;

            var somysMember = obj.omysMember;
            if (somysMember !== null) {
                for (var i = 1; i < 3; i++) {
                    // var valueId="ptypeRadio"
                    if (document.getElementById("somysMember" + i).value === somysMember) {
                        document.getElementById("somysMember" + i).checked = true;

                    }
                }
            }


            var sfatherMember = obj.fh_omysMember;
            if (sfatherMember !== null) {
                for (var i = 1; i < 3; i++) {
                    // var valueId="ptypeRadio"
                    if (document.getElementById("sfatherMember" + i).value === sfatherMember) {
                        document.getElementById("sfatherMember" + i).checked = true;

                    }
                }
            }



            var academicQualification = eval(obj.AQ);


            aqcount = 1;



            if (academicQualification !== undefined) {

                var arrayAQ = ["Select Academic Qualification", "Primary", "Secondary", "Matric", "Intermediate", "Graduate", "Post Graduate", "Ph. D", "Aalim/Aalima", "Diploma", "Uneducated", "Other"];

                var indexAQ = arrayAQ.indexOf(academicQualification[0].aq);
                document.getElementById("saq1").selectedIndex = indexAQ;

                document.getElementById("sadmYear1").value = academicQualification[0].admYear;
                document.getElementById("scomYear1").value = academicQualification[0].comYear;

                console.log(academicQualification[0].aq + "  " + academicQualification[0].admYear + "   " + academicQualification[0].comYear + "   " + 0);

            }

            var professionalQualification = eval(obj.PQ);
            pqcount = 1;

            console.log(academicQualification);
            console.log(professionalQualification);


            if (professionalQualification !== undefined) {

                var arrayPQ = ["Select Professional Qualification", "C.A", "A.C.C.A", "Doctor", "Engineer", "Advocate", "Masters", "Teacher", "Nursing Course", "Technician", "Journalist", "I.T", "Other"];

                var indexPQ = arrayPQ.indexOf(professionalQualification[0].pq);
                document.getElementById("spq1").selectedIndex = indexPQ;

                document.getElementById("sadmYearpq1").value = professionalQualification[0].admYear;
                document.getElementById("scomYearpq1").value = professionalQualification[0].comYear;

                //console.log(professionalQualification[0].pq + "  " + professionalQualification[0].admYear + "   " + professionalQualification[0].comYear + "   " + 0);

            }

            




            // console.log(responseJson[0]);
        })
        .catch((error) => {
            console.error(error);
        });





    function newFunction() {
        return JSON.parse;
    }
}


function updateStudentUser() {


    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
    // var p_id='2';
    var updateS_id = document.getElementById('sid').value;
    var sname = document.getElementById("sname").value;


    var sday = document.getElementById("sday");
    var sdayValue = sday.options[sday.selectedIndex].value;

    var smonth = document.getElementById("smonth");
    var smonthValue = smonth.options[smonth.selectedIndex].value;

    var syear = document.getElementById("syear");
    var syearValue = syear.options[syear.selectedIndex].value;

    var updateDateOfBirth = sdayValue + "/" + smonthValue + "/" + syearValue;

    var sgender = '';

    for (var i = 1; i < 3; i++) {
        if (document.getElementById("sgender" + i).checked) {
            sgender = document.getElementById("sgender" + i).value;
        }
    }

    var scnic = document.getElementById("scnic").value;
    var skhundi = document.getElementById("skhundi").value;
    var sgroup = document.getElementById("sgroup").value;
    // var sage=document.getElementById("sage").value;
    var somjCard = document.getElementById("somjCard").value;
    var sbirthPlace = document.getElementById("sbirthPlace").value;
    var somysCard = document.getElementById("somysCard").value;
    var semail = document.getElementById("semail").value;
    var scontact = document.getElementById("scontact").value;
    var swhatsapp = document.getElementById("swhatsapp").value;
    var sresidentialAddress = document.getElementById("sresidentialAddress").value;
    var sarea = document.getElementById("sarea").value;



    var smaritualStatus = '';

    for (var i = 1; i < 6; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("smaritualStatus" + i).checked) {
            smaritualStatus = document.getElementById("smaritualStatus" + i).value;
            // radioTypeFlag=true;
        }
    }

    var stu_occupation = [];

    for (var i = 1; i < 11; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("sstu_occupation" + i).checked) {
            stu_occupation.push(document.getElementById("sstu_occupation" + i).value);
            // radioTypeFlag=true;
        }
    }
    stu_occupation = JSON.stringify(stu_occupation);



    var sfatherHusbandName = document.getElementById("sfatherHusbandName").value;
    var sfatherHusbandCnic = document.getElementById("sfatherHusbandCnic").value;
    var sfatherHusbandContact = document.getElementById("sfatherHusbandContact").value;
    var sfatherHusbandOmjCard = document.getElementById("sfatherHusbandOmjCard").value;

    var sfather_occupation = '';

    for (var i = 1; i < 10; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("sfather_occupation" + i).checked) {
            sfather_occupation = document.getElementById("sfather_occupation" + i).value;
            // radioTypeFlag=true;
        }
    }



    var smotherName = document.getElementById("smotherName").value;
    var smotherCnic = document.getElementById("smotherCnic").value;
    var smotherContact = document.getElementById("smotherContact").value;

    var smother_occupation = '';

    for (var i = 1; i < 11; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("smother_occupation" + i).checked) {
            smother_occupation = document.getElementById("smother_occupation" + i).value;
            // radioTypeFlag=true;
        }
    }




    var sbloodGroup = '';

    for (var i = 1; i < 9; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("sbloodGroup" + i).checked) {
            sbloodGroup = document.getElementById("sbloodGroup" + i).value;
            // radioTypeFlag=true;
        }
    }



    var sadditionalSkills = [];

    for (var i = 1; i < 13; i++) {
        // var valueId="ptypeRadio"
        if (document.getElementById("sadditionalSkills" + i).checked) {
            sadditionalSkills.push(document.getElementById("sadditionalSkills" + i).value);
            // radioTypeFlag=true;
        }
    }

    var sotherSkill = document.getElementById("sotherSkill").value;


    var sinstituteName = document.getElementById("sinstituteName").value;
    var spresentClass = document.getElementById("spresentClass").value;
    // var slastAchievement=document.getElementById("slastAchievement").value;
    var sfutureInterest = document.getElementById("sfutureInterest").value;
    var scompanyName = document.getElementById("scompanyName").value;
    var sofficeAddress = document.getElementById("sofficeAddress").value;
    var scurrentDesignation = document.getElementById("scurrentDesignation").value;
    // var slastAchievementemp=document.getElementById("slastAchievementemp").value;
    var sfutureInterestemp = document.getElementById("sfutureInterestemp").value;
    var shobbies = document.getElementById("shobbies").value;
    var sprofessionalAchievement = document.getElementById("sprofessionalAchievement").value;
    var spersonalAchievement = document.getElementById("spersonalAchievement").value;
    var ssportInterest = document.getElementById("ssportInterest").value;

    var imgStudentCheck = document.getElementById("imgFromDb").value;

    var min = 1000, max = 100000000;
    var randomNum = Math.floor(Math.random() * (max - min + 1) + min);
    var imgName = sname + randomNum;
    

    if (imgStudentCheck !== '' || imgStudentCheck !== null || imgStudentCheck !== undefined) {
        if (document.getElementById("simageUpload").value !== '') {
            document.getElementById("simageNameUpload").value = imgName;
            document.getElementById("suploadImageIdForm").submit();
        }

        else if (document.getElementById("simageCaptureTag").value !== '') {
            document.getElementById("simageNameUpload2").value = imgName;
            document.getElementById("suploadImageIdForm2").submit();
        }
        else {
            imgName = imgStudentCheck;
        }

    }







    var sifStudent = '';

    for (var i = 1; i < 7; i++) {

        if (document.getElementById("sifStudent" + i).checked) {
            sifStudent = document.getElementById("sifStudent" + i).value;

        }
    }

    var sotherReason = document.getElementById("sotherReason").value;

    var somysMember = '';

    for (var i = 1; i < 3; i++) {
        if (document.getElementById("somysMember" + i).checked) {
            somysMember = document.getElementById("somysMember" + i).value;

        }
    }

    var sfatherMember = '';

    for (var i = 1; i < 3; i++) {

        if (document.getElementById("sfatherMember" + i).checked) {
            sfatherMember = document.getElementById("sfatherMember" + i).value;

        }
    }

    sadditionalSkills = JSON.stringify(sadditionalSkills);



    var academicStr = '', s1, s2, s3, aq, admYear, comYear;
    // aqcount=1

    // $aqDummyCount =  $_POST['aqDummyCount']; 
    //console.log(document.getElementById('admYear1').value);
    if (document.getElementById('saq1').selectedIndex != 0) {
        academicStr = '[';
        // $_POST['day']."/". $_POST['month']."/".$_POST['year'];
        //for (var i = 0; i < aqcount; i++) {
        s1 = 'saq1';
        s2 = 'sadmYear1';
        s3 = 'scomYear1';

        // console.log("s1:"+s1+"\ns2:"+s2)
        aq = document.getElementById(s1).value;
        admYear = document.getElementById(s2).value;
        comYear = document.getElementById(s3).value;

        academicStr = academicStr + "{aq:\"" + aq + "\",admYear:\"" + admYear + "\",comYear:\"" + comYear + "\"}";

        // if ((i + 1) !== aqcount && aqcount !== 1) {
        //     academicStr = academicStr + ",";
        // }

        // echo "<script type='text/javascript'>console.log($s2);</script>";          

        //  }

        academicStr += "]";


    }
    else {
        academicStr = "";
    }




    var professionalStr = '', ps1, ps2, ps3, pq, padmYear, pcomYear;

    // $aqDummyCount =  $_POST['aqDummyCount']; 
    //console.log(document.getElementById('admYear1').value);
    if (document.getElementById('spq1').selectedIndex != 0) {
        //if (pqcount !== '0') {
        professionalStr = '[';
        // for (var i = 0; i < pqcount; i++) {
        ps1 = 'spq1';
        ps2 = 'sadmYearpq1';
        ps3 = 'scomYearpq1';

        // console.log("s1:"+s1+"\ns2:"+s2)
        pq = document.getElementById(ps1).value;
        padmYear = document.getElementById(ps2).value;
        pcomYear = document.getElementById(ps3).value;

        professionalStr = professionalStr + "{pq:\"" + pq + "\",admYear:\"" + padmYear + "\",comYear:\"" + pcomYear + "\"}";

        // if ((i + 1) !== pqcount && pqcount !== 1) {
        //     professionalStr = professionalStr + ",";
        // }
        //   }

        professionalStr += "]";

        // }


    }
    else {
        professionalStr = "";
    }

    //alert(professionalStr);
    var edit = '';
    if (document.getElementById('sedit').checked) {
        edit = 'edited';
    }

    var print = '';
    if (document.getElementById('sprint').checked) {
        print = 'printed';
    }

    

    var checkUpdateRequired = true;

    if (sname === '' && checkUpdateRequired) {
        alert("Kindly update the Name");
        checkUpdateRequired = false;
    }
    else if (sgender === '' && checkUpdateRequired) {
        alert("Kindly update the Gender");
        checkUpdateRequired = false;
    }
    else if (scnic === '' && checkUpdateRequired) {
        alert("Kindly update the CNIC");
        checkUpdateRequired = false;
    }
    else if (skhundi === '' && checkUpdateRequired) {
        alert("Kindly update the Khundi");
        checkUpdateRequired = false;
    }
    else if (scontact === '' && checkUpdateRequired) {
        alert("Kindly update the Contact");
        checkUpdateRequired = false;
    }
    else if (sfatherHusbandName === '' && checkUpdateRequired) {
        alert("Kindly update the Father/Husband name");
        checkUpdateRequired = false;
    }
    else if (updateDateOfBirth === 'DD/MM/YY' && checkUpdateRequired) {
        alert("Kindly update the Date of Birth");
        checkUpdateRequired = false;
    }
    else if (sgender === 'male' && imgName === '' && checkUpdateRequired) {
        alert("Kindly upload the picture");
        checkUpdateRequired = false;
    }


    // console.log(proom);
    if (checkUpdateRequired) {

        fetch(Api + 'backend/bupdateUserJava.php', {
            method: 'POST',
            body: JSON.stringify({
                s_id: updateS_id,
                updateDateOfBirth: updateDateOfBirth,
                sname: sname,
                sgender: sgender,
                scnic: scnic,
                skhundi: skhundi,
                sgroup: sgroup,
                somjCard: somjCard,
                sbirthPlace: sbirthPlace,
                somysCard: somysCard,
                semail: semail,
                scontact: scontact,
                swhatsapp: swhatsapp,
                sresidentialAddress: sresidentialAddress,
                sarea: sarea,
                smaritualStatus: smaritualStatus,
                stu_occupation: stu_occupation,
                sfatherHusbandName: sfatherHusbandName,
                sfatherHusbandCnic: sfatherHusbandCnic,
                sfatherHusbandContact: sfatherHusbandContact,
                sfatherHusbandOmjCard: sfatherHusbandOmjCard,
                sfather_occupation: sfather_occupation,
                smotherName: smotherName,
                smotherCnic: smotherCnic,
                smotherContact: smotherContact,
                smother_occupation: smother_occupation,
                sbirthPlace: sbirthPlace,
                sbloodGroup: sbloodGroup,
                sadditionalSkills: sadditionalSkills,
                sotherSkill: sotherSkill,
                sinstituteName: sinstituteName,
                spresentClass: spresentClass,
                sfutureInterest: sfutureInterest,
                scompanyName: scompanyName,
                sofficeAddress: sofficeAddress,
                scurrentDesignation: scurrentDesignation,
                sfutureInterestemp: sfutureInterestemp,
                shobbies: shobbies,
                sprofessionalAchievement: sprofessionalAchievement,
                spersonalAchievement: spersonalAchievement,
                ssportInterest: ssportInterest,
                sifStudent: sifStudent,
                sotherReason: sotherReason,
                somysMember: somysMember,
                sfatherMember: sfatherMember,
                academicStr: academicStr,
                professionalStr: professionalStr,
                imgName: imgName,
                edit: edit,
                print: print
                // pass: pass,
                // fullname: fullname,
            }),
            headers: new Headers({
                'Content-Type': 'application/json',
            })

        })
            .then((response) => response.json())
            .then((responseJson) => {

                alert("Successfully Updated");

                // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
                window.location.href = "/omys_admin/viewUser.php";
                // console.log(responseJson);
            })
            .catch((error) => {
                alert("Not Updated");
                window.location.href = "/omys_admin/viewUser.php";
                // console.error(error);
            });
    }
}

function deleteStudentUser() {
    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
    // var p_id='2';
    var s_id = document.getElementById('sid').value;

    //alert(s_id);


    fetch(Api + 'backend/bdeleteUser.php', {
        method: 'POST',
        body: JSON.stringify({
            s_id: s_id,
        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })
    })
        .then((response) => response.json())
        .then((responseJson) => {
            alert("Successfully Deleted");
            // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
            window.location.href = "/omys_admin/viewUser.php";
            // console.log(responseJson);
        })
        .catch((error) => {
            alert("Not Deleted");
            window.location.href = "/omys_admin/viewUser.php";
            // console.error(error);
        });
}


// function exportTableToExcel(tableID, filename){
//     var downloadLink;
//     var dataType = 'application/vnd.ms-excel';
//     var tableSelect = document.getElementById(tableID);
//     var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');

//     // Specify file name
//     // filename = filename?filename+'.xls':'excel_data.xls';

//     // Create download link element
//     downloadLink = document.createElement("a");

//     document.body.appendChild(downloadLink);

//     if(navigator.msSaveOrOpenBlob){
//         //alert("Reached if");
//         var blob = new Blob(['\ufeff', tableHTML], {
//             type: dataType
//         });
//         navigator.msSaveOrOpenBlob( blob, filename);
//     }else{
//         //alert("Reached else");
//         // Create a link to the file
//         downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
//         downloadLink.name="fa";
//         // Setting the file name
//         // downloadLink.download = filename;
//         // downloadLink.download = 'fa';

//         //triggering the function
//         downloadLink.click();
//     }
// }


function exportTableToExcel(tableID, filename = '') {

    var downloadLink;
    //var dataType = 'application/octet-stream';
    var dataType = 'application/vnd.ms-excel';
    //var dataType = 'application/pdf';
    var tableSelect = document.getElementById(tableID);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20').replace(/#/g, ':');

    // Specify file name
    filename = filename ? filename + '.xls' : 'excel_data.xls';

    // Create download link element
    downloadLink = document.createElement("a");

    document.body.appendChild(downloadLink);

    if (navigator.msSaveOrOpenBlob) {
        var blob = new Blob(['\ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob(blob, filename);
    } else {
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;

        // Setting the file name
        downloadLink.download = filename;

        //triggering the function
        downloadLink.click();
        setTimeout(function () {
            //do what you need here
            imageDownload();
        }, 2000);

    }
}



$(document).ready(function () {
    $("#searchInput").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tableStudent tr.trRow").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});

$(document).ready(function () {
    $("#searchInputStaff").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tableStaff tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});


$(document).ready(function () {
    $("#searchInputAdd").on("keyup", function () {
        var value = $(this).val().toLowerCase();
        $("#tableAdd tr").filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
});



function createStaff() {


    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
    // var p_id='2';
    //var p_id=document.getElementById('purchaseUserId').innerHTML;
    var name = document.getElementById("tname").value;
    var khundi = document.getElementById("tkhundi").value;
    var contact = document.getElementById("tcontact").value;
    var username = document.getElementById("tusername").value;
    var pass = document.getElementById("tpass").value;

    var sroleDrop = document.getElementById("srole");
    var sroleDropValue = sroleDrop.options[sroleDrop.selectedIndex].value;





    fetch(Api + 'backend/bcreateStaffJava.php', {
        method: 'POST',
        body: JSON.stringify({
            name: name,
            khundi: khundi,
            contact: contact,
            username: username,
            pass: pass,
            sroleDropValue: sroleDropValue

            // pass: pass,
            // fullname: fullname,
        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })

    })
        .then((response) => response.json())
        .then((responseJson) => {

            alert("Successfully Inserted");

            // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
            window.location.href = "/omys_admin/createStaff.php";


            // console.log(responseJson);
        })
        .catch((error) => {
            console.error(error);
            alert("Not Inserted");
            window.location.href = "/omys_admin/createStaff.php";

        });




}







function staffTableLoad() {
    fetch(Api + 'backend/bshowStaffTable.php', {
        method: 'GET',
        headers: new Headers({
            'content-type': 'application/json',
            'Accept': 'application/json',
        })
    })
        .then((response) => response.json())
        .then((responseJson) => {
            console.log(responseJson);
            // alluserdata = responseJson;
            responseJson.map((tr) => {

                document.getElementById("staffTable").innerHTML += showStaffTable(tr);

            })
        })
        .catch((error) => {
            console.error(error);
        });
}

function showStaffTable(data) {



    return `
            <tr onClick="loadStaffMod(${data.u_id})">
               <td>${data.u_id}</td>
               <td>${data.name}</td>
               <td>${data.khundi}</td>
               <td>${data.contact}</td>
               <td>${data.username}</td>
               <td>${data.pass}</td>
               <td>${data.role}</td>
              
               
           </tr>
           
           `;
}



function loadStaffMod(data) {
    // purchaseTable();

    console.log("reached student modal")
    $('#staffModal').modal('show');
    //var purchaseIdd=purc_id;
    u_id = data;
    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');

    // console.log("asd "+purchaseIdd);


    fetch(Api + 'backend/bshowStaff.php', {
        method: 'POST',
        body: JSON.stringify({
            id: u_id,
            // pass: pass,
            // fullname: fullname,
        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })

    })
        .then((response) => response.json())
        .then((responseJson) => {
            var obj = responseJson[0];
            document.getElementById("uid").value = obj.u_id;

            document.getElementById("uname").value = obj.name;
            document.getElementById("ukhundi").value = obj.khundi;
            document.getElementById("ucontact").value = obj.contact;
            document.getElementById("uusername").value = obj.username;
            document.getElementById("upass").value = obj.pass;

            var role = obj.role;


            var arrayRole = ['Admin', 'Staff'];

            // var dayUnit=obj.areaUnit;
            var indexRole = arrayRole.indexOf(role);

            document.getElementById("urole").selectedIndex = indexRole;

        })
        .catch((error) => {
            console.error(error);
        });





    function newFunction() {
        return JSON.parse;
    }
}



function updateStaff() {
    console.log("reached update");


    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
    // var p_id='2';
    var updateU_id = document.getElementById('uid').value;
    var uname = document.getElementById("uname").value;
    var ukhundi = document.getElementById("ukhundi").value;
    var ucontact = document.getElementById("ucontact").value;
    var uusername = document.getElementById("uusername").value;
    var upass = document.getElementById("upass").value;



    var urole = document.getElementById("urole");
    var uroleValue = urole.options[urole.selectedIndex].value;

    console.log(updateU_id + "   " + uname + "   " + ukhundi + "   " + ucontact + "   " + uusername + "   " + upass + "   " + uroleValue);

    fetch(Api + 'backend/bupdateStaffJava.php', {
        method: 'POST',
        body: JSON.stringify({
            updateU_id: updateU_id,
            uname: uname,
            ukhundi: ukhundi,
            ucontact: ucontact,
            uusername: uusername,
            upass: upass,
            uroleValue: uroleValue

        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })

    })
        .then((response) => response.json())
        .then((responseJson) => {

            alert("Successfully Updated");

            // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
            window.location.href = "/omys_admin/createStaff.php";


            // console.log(responseJson);
        })
        .catch((error) => {
            alert("Not Updated");
            window.location.href = "/omys_admin/createStaff.php";
            // console.error(error);
        });



}



function deleteStaff() {
    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
    // var p_id='2';
    var updateU_id = document.getElementById('uid').value;

    //alert(s_id);


    fetch(Api + 'backend/bdeleteStaffJava.php', {
        method: 'POST',
        body: JSON.stringify({
            updateU_id: updateU_id,

        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })

    })
        .then((response) => response.json())
        .then((responseJson) => {

            alert("Successfully Deleted");

            // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
            window.location.href = "/omys_admin/createStaff.php";


            // console.log(responseJson);
        })
        .catch((error) => {
            alert("Not Deleted");
            window.location.href = "/omys_admin/createStaff.php";
            // console.error(error);
        });
}





function createAdd() {


    var title = document.getElementById("addTitle").value;
    var discount = document.getElementById("addDiscount").value;
    var address = document.getElementById("addAddress").value;
    var expire = document.getElementById("dateExpire").value;
    var sCatDrop = document.getElementById("sCat");
    var sCatDropValue = sCatDrop.options[sCatDrop.selectedIndex].value;

    var min = 1000, max = 100000000;
    var randomNum = Math.floor(Math.random() * (max - min + 1) + min);
    var imgName = title + randomNum;


    if (document.getElementById("imageAddUpload").value !== '') {
        document.getElementById("imageAddNameUpload").value = imgName;
        document.getElementById("uploadAddImageIdForm").submit();
    }
    else {
        imgName = '';
    }

    fetch(Api + 'backend/bcreateAddJava.php', {
        method: 'POST',
        body: JSON.stringify({
            title: title,
            discount: discount,
            address: address,
            expire: expire,
            sCatDropValue: sCatDropValue,
            imgName: imgName
        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })

    })
        .then((response) => response.json())
        .then((responseJson) => {

            alert("Successfully Inserted");
            // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
            window.location.href = "/omys_admin/createAdd.php";


            // console.log(responseJson);
        })
        .catch((error) => {
            console.error(error);
            alert("Not Inserted s");
            window.location.href = "/omys_admin/createAdd.php";

        });




}


function addTableLoad() {
    fetch(Api + 'backend/bshowAddTable.php', {
        method: 'GET',
        headers: new Headers({
            'content-type': 'application/json',
            'Accept': 'application/json',
        })
    })
        .then((response) => response.json())
        .then((responseJson) => {
            console.log(responseJson);
            // alluserdata = responseJson;
            responseJson.map((tr) => {

                document.getElementById("addTable").innerHTML += showAddTable(tr);

            })
        })
        .catch((error) => {
            console.error(error);
        });
}

function showAddTable(data) {

    return `
            <tr onClick="loadAddMod(${data.a_id})">
               <td>${data.a_id}</td>
               <td>${data.title}</td>
               <td>${data.category}</td>
               <td>${data.discount}</td>
               <td>${data.address}</td>
               <td>${data.expire}</td>
              
               
           </tr>
           
           `;
}



function loadAddMod(data) {
    
    $('#addModal').modal('show');
   
    var a_id = data;
  
    fetch(Api + 'backend/baddStaff.php', {
        method: 'POST',
        body: JSON.stringify({
            id: a_id,
            // pass: pass,
            // fullname: fullname,
        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })

    })
        .then((response) => response.json())
        .then((responseJson) => {
            var obj = responseJson[0];
            document.getElementById("addid").value = obj.a_id;

            document.getElementById("uaddTitle").value = obj.title;
            document.getElementById("uaddDiscount").value = obj.discount;
            document.getElementById("uaddAddress").value = obj.address;
            document.getElementById("udateExpire").value = obj.expire;


            var category = obj.category;
            var arrayCat = ['Food','LifeStyle','Health','E-Stores','Services','Home-Decor'];           
            var indexCat = arrayCat.indexOf(category);
            document.getElementById("usCat").selectedIndex = indexCat;

            var imgDb = obj.image;
            document.getElementById("imgFromDbAdvertise").value = imgDb;

            document.getElementById("imageAdvertise").src = Api + "../omys_backend/advertise/" + imgDb + ".jpeg";


        })
        .catch((error) => {
            console.error(error);
        });





    function newFunction() {
        return JSON.parse;
    }
}



function updateAdd() {
   
    var updateA_id = document.getElementById('addid').value;
    var uTitle = document.getElementById("uaddTitle").value;
    var uDiscount = document.getElementById("uaddDiscount").value;
    var uAddress = document.getElementById("uaddAddress").value;
    var uDate = document.getElementById("udateExpire").value;
    


    var uCat = document.getElementById("usCat");
    var uCatValue = uCat.options[uCat.selectedIndex].value;

    
    var min = 1000, max = 100000000;
    var randomNum = Math.floor(Math.random() * (max - min + 1) + min);
    var imgName = uTitle + randomNum;
    
    var imgAddCheck = document.getElementById("imgFromDbAdvertise").value;


    if (imgAddCheck !== '' || imgAddCheck !== null || imgAddCheck !== undefined) {
        if (document.getElementById("simageUploadAdd").value !== '') {
            document.getElementById("simageNameUploadAdd").value = imgName;
            document.getElementById("suploadImageIdFormAdd").submit();
        }

       
        else {
            imgName = imgAddCheck;
        }

    }


    fetch(Api + 'backend/bupdateAddJava.php', {
        method: 'POST',
        body: JSON.stringify({
            updateA_id: updateA_id,
            uTitle: uTitle,
            uDiscount: uDiscount,
            uAddress: uAddress,
            uDate: uDate,
            uCatValue: uCatValue,
            imgName: imgName
            

        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })

    })
        .then((response) => response.json())
        .then((responseJson) => {

            alert("Successfully Updated");

            // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
            window.location.href = "/omys_admin/createAdd.php";


            // console.log(responseJson);
        })
        .catch((error) => {
            alert("Not Updated");
            window.location.href = "/omys_admin/createAdd.php";
            // console.error(error);
        });



}



function deleteAdd() {
    // var purchaseIdd = localStorage.getItem('purchaseIdJavascript');
    // var p_id='2';
    var updateA_id = document.getElementById('addid').value;

    //alert(s_id);


    fetch(Api + 'backend/bdeleteAddJava.php', {
        method: 'POST',
        body: JSON.stringify({
            updateA_id: updateA_id,

        }),
        headers: new Headers({
            'Content-Type': 'application/json',
        })

    })
        .then((response) => response.json())
        .then((responseJson) => {

            alert("Successfully Deleted");

            // var url="/onesource_admin/viewDetails.php?purchaseIdd="+idd;//+"&page="+pageId+"&rec_per_page="+recPerPageId;
            window.location.href = "/omys_admin/createAdd.php";


            // console.log(responseJson);
        })
        .catch((error) => {
            alert("Not Deleted");
            window.location.href = "/omys_admin/createAdd.php";
            // console.error(error);
        });
}

var countReportStudent = 0;
var arrayReportStudent = [];
function reportNameMethod() {

    fetch(Api + 'backend/bshowUserTable.php', {
        method: 'GET',
        headers: new Headers({
            'content-type': 'application/json',
            'Accept': 'application/json',
        })
    })
        .then((response) => response.json())
        .then((responseJson) => {

            console.log(responseJson);
            var reportContainer = document.getElementById("reportPersonSelection");
            var parentRow = document.createElement("div");
            parentRow.className = "row";
            reportContainer.appendChild(parentRow);
            for (var i = 0; i < responseJson.length; i++) {
                countReportStudent++;


                var columnDiv = document.createElement("div");
                columnDiv.className = "col-md-3 col-3";
                parentRow.appendChild(columnDiv);

                var inputDiv = document.createElement("input");
                inputDiv.type = "checkbox";
                inputDiv.id = "checkboxReport" + i;

                columnDiv.appendChild(inputDiv);
                document.getElementById("checkboxReport" + i).checked = true;

                var textId = document.createTextNode(responseJson[i].s_id + "  ");
                columnDiv.appendChild(textId);
                arrayReportStudent.push(responseJson[i].s_id);

                // var nameDb=responseJson[i].name;
                // console.log(nameDb)
                var textName = document.createTextNode(responseJson[i].name);
                columnDiv.appendChild(textName);
                if ((i + 1) % 4 === 0) {
                    var br = document.createElement("br");
                    parentRow.appendChild(br);
                }



            }

        })
        .catch((error) => {
            console.error(error);
        });
}
function finalizeStudent() {
    var text = '';
    // debugger;
    countFirstText = 0;

    for (var i = 0; i < countReportStudent; i++) {
        if (document.getElementById("checkboxReport" + i).checked === false) {
            countFirstText++;
            if (countFirstText === 1) {
                text += arrayReportStudent[i];
            }
            else {
                text += "," + arrayReportStudent[i];
            }


        }
    }
    document.getElementById("idText").value = text;
    // alert(document.getElementById("idText").value);

    // document.getElementById("reportPersonSelection").style.display="none";
    // document.getElementById("createPdfSubmit").style.display="block";
    // document.getElementById("createPdfSubmit").style.display="block";create_pdf
    document.getElementById("create_pdf").click();

}
var boolCheck = true;
function checkUncheckAll() {
    console.log("reached check");

    if (boolCheck) {
        for (var i = 0; i < countReportStudent; i++) {
            document.getElementById("checkboxReport" + i).checked = false;
        }
        boolCheck = false;
    }
    else {
        for (var i = 0; i < countReportStudent; i++) {
            document.getElementById("checkboxReport" + i).checked = true;
        }
        boolCheck = true;

    }




}

function imageDownload() {
    //console.log("Reached imageDownload");

    var countLoop = document.getElementById('countLoop').value;

    var arrImgLink = [];
    var arrImgName = [];
    // console.log()
    for (var i = 0; i < countLoop; i++) {


        arrImgLink.push(document.getElementById("imgLink" + i).value);
        arrImgName.push(document.getElementById("imgName" + i).value);


    }

    var jsonString = JSON.stringify(arrImgLink);
    var jsonString2 = JSON.stringify(arrImgName);

    console.log(jsonString);
    $(document).ready(function () {
        load_data();
        function load_data(page) {

            $.ajax({
                url: "ajaxphp.php",
                method: "POST",
                data: { imgLink: jsonString, imgName: jsonString2, countLoop: countLoop },
                success: function (data) {


                    setTimeout(function () {
                        //do what you need here
                        try {
                            document.getElementById("zipFileDownload").click();
                        } catch (error) {
                            alert(error);
                        }

                    }, 1000);

                    setTimeout(function () {
                        //do what you need here
                        $.ajax({
                            url: "deleteImage.php",
                            method: "POST",
                            success: function () {

                            }
                        })
                    }, 3000);


                    // $('#ajaxphp').html(data);  
                }
            })
        }

    });
}

function khundiListChange(){
    
    var khundiArray = ["ASWANI", "BARAI", "BHANWARIA", "DADWALA", "DARBAR", "DARIYA", "DAWRA", "DUROODWALA", "ESSANI", "GABA", "GABRANI", "GAGAI", "GANATRA", "GATTA", "GAZIANI", "JAFRANI", "JAKHURA HYD", "JAKHURA", "JIWANI", "KALANI", "KARAR", "KATH", "KHOSA", "LADHANI", "MAMDANI", "MANGRORIA", "MARKATIYA", "MOORAD", "MOOSANI", "MUHAMMADI", "MULLARA", "PANJWANI HYD", "PANJWANI", "PASTA", "PATEL", "POPATPOTRA", "SURIYA", "TOBERIA", "VAYANI", "OTHER" ];

    if(khundiArray.indexOf(document.getElementById("khundi").value) > -1){

    }
    else{
        alert("Kindly Select Khundi From the given Dropdown");
        document.getElementById("khundi").value = "";
        document.getElementById("khundi").focus();
    }
  //  console.log("reached khundi List");
}


function skhundiListChange(){
    
    var khundiArray = ["ASWANI", "BARAI", "BHANWARIA", "DADWALA", "DARBAR", "DARIYA", "DAWRA", "DUROODWALA", "ESSANI", "GABA", "GABRANI", "GAGAI", "GANATRA", "GATTA", "GAZIANI", "JAFRANI", "JAKHURA HYD", "JAKHURA", "JIWANI", "KALANI", "KARAR", "KATH", "KHOSA", "LADHANI", "MAMDANI", "MANGRORIA", "MARKATIYA", "MOORAD", "MOOSANI", "MUHAMMADI", "MULLARA", "PANJWANI HYD", "PANJWANI", "PASTA", "PATEL", "POPATPOTRA", "SURIYA", "TOBERIA", "VAYANI", "OTHER" ];

    if(khundiArray.indexOf(document.getElementById("skhundi").value) > -1){

    }
    else{
        alert("Kindly Select Khundi From the given Dropdown");
        document.getElementById("skhundi").value = "";
        document.getElementById("skhundi").focus();
    }
  //  console.log("reached khundi List");
}

function logout(){

    logStatus('out',accessCookie("user"),accessCookie("username"));

    
    alert("Thank you For using Census System");
    createCookie("role","",1);
    // localStorage.setItem("role", '');
    window.location.href  = "/omys_admin/index.php";
    

}
function createCookie(cookieName,cookieValue,daysToExpire)
{
          var date = new Date();
          date.setTime(date.getTime()+(daysToExpire*24*60*60*1000));
          document.cookie = cookieName + "=" + cookieValue + "; expires=" + date.toGMTString();
}

function accessCookie(cookieName)
{
    var name = cookieName + "=";
    var allCookieArray = document.cookie.split(';');
    for(var i=0; i<allCookieArray.length; i++)
    {
    var temp = allCookieArray[i].trim();
    if (temp.indexOf(name)==0)
    return temp.substring(name.length,temp.length);
    }
    return "";
}
function onLoadFunction(page) {
    // var role = localStorage.getItem("role");

    var role = accessCookie("role");

    if(role!=="Staff" && role!=="Admin" && role!=="worker"){
       
        // console.log(role);
        alert("Please Login First");
        window.location.href  = "/omys_admin/index.php";

    }
    if (role === "worker") {
        document.getElementById("createStaffId").style.display = 'none';
        document.getElementById("createStaffId2").style.display = 'none';
        
        document.getElementById("viewUserId").style.display = 'none';
        document.getElementById("viewUserId2").style.display = 'none';

        document.getElementById("createAddId").style.display = 'none';
        document.getElementById("createAddId2").style.display = 'none';

        document.getElementById("ReportId").style.display = 'none';
        document.getElementById("ReportId2").style.display = 'none';
    }

    if (role === "Staff") {
        document.getElementById("createStaffId").style.display = 'none';
        document.getElementById("createStaffId2").style.display = 'none';

        document.getElementById("createAddId").style.display = 'none';
        document.getElementById("createAddId2").style.display = 'none';

        document.getElementById("ReportId").style.display = 'none';
        document.getElementById("ReportId2").style.display = 'none';
    }
   // console.log(role);
    if (page === 'dashboard') {
        document.getElementById("dashboardId").className = "active has-sub";
        document.getElementById("dashboardId2").className = "active has-sub";
    }
    else if (page === 'viewUser') {
        if(role == "Admin" || role == "Staff"){
            document.getElementById("viewUserId").className = "active has-sub";
            document.getElementById("viewUserId2").className = "active has-sub";

        }
        else{
            alert("You dont have enough rights");
        window.location.href  = "/omys_admin/dashboard.php";
        }
      

    }
    else if (page === 'createUser') {
        document.getElementById("createUserId").className = "active has-sub";
        document.getElementById("createUserId2").className = "active has-sub";
    }

    else if (page === 'createStaff') {
        if(role == "Admin"){
        document.getElementById("createStaffId").className = "active has-sub";
        document.getElementById("createStaffId2").className = "active has-sub";
        staffTableLoad();
        }
        else{
            alert("You dont have enough rights");
           window.location.href  = "/omys_admin/dashboard.php";
        }
    }
    else if (page === 'createAdd') {
        if(role == "Admin"){
        document.getElementById("createAddId").className = "active has-sub";
        document.getElementById("createAddId2").className = "active has-sub";
        addTableLoad();
        }
        else{
            alert("You dont have enough rights");
           window.location.href  = "/omys_admin/dashboard.php";
        }
    }
    else if (page === 'reportPrctc') {
        if(role == "Admin"){
            document.getElementById("ReportId").className = "active has-sub";
            document.getElementById("ReportId2").className = "active has-sub";
            reportNameMethod();
        }
        else{
            alert("You dont have enough rights");
        window.location.href  = "/omys_admin/dashboard.php";
        }


    }
}


$(document).ready(function () {
    load_data();
    function load_data(page) {
        $.ajax({
            url: "pagination.php",
            method: "POST",
            data: { page: page,role:accessCookie("role") },
            success: function (data) {
                $('#pagination_data').html(data);
            }
        })
    }
    $(document).on('click', '.pagination_link', function () {
        var page = $(this).attr("id");
        console.log(page);
        load_data(page);
    });
});

function functionClick(param) {

    if (param === 'pagin') {

        var start = document.getElementById('startFrom').value;
        var end = document.getElementById('endFrom').value;
        $(document).ready(function () {
            load_data();
            function load_data(page) {
                $.ajax({
                    url: "paginationLimit.php",
                    method: "POST",
                    data: { page: page, start: start, record: end, receive: param,role:accessCookie("role") },
                    success: function (data) {
                        $('#pagination_data').html(data);
                    }
                })
            }
            $(document).on('click', '.pagination_link', function () {
                var page = $(this).attr("id");
                console.log(page);
                load_data(page);
            });
        });
    }
    else {

        var column = document.getElementById('columnName').value;
        var search = document.getElementById('searchText').value;

        // data:{page:page,start:start,record:end-start}, 
        $(document).ready(function () {
            load_data();
            function load_data(page) {
                $.ajax({
                    url: "paginationLimit.php",
                    method: "POST",
                    data: { page: page, column: column, search: search, receive: param,role:accessCookie("role") },
                    success: function (data) {
                        $('#pagination_data').html(data);
                    }
                })
            }
            $(document).on('click', '.pagination_link', function () {
                var page = $(this).attr("id");
                console.log(page);
                load_data(page);
            });
        });

    }

}










