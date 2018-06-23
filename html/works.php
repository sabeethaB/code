<?php
$name = $email = $gender = $comment = $website = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $website = test_input($_POST["website"]);
  $comment = test_input($_POST["comment"]);
  $gender = test_input($_POST["gender"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> 
<?php
echo "<h2>Your Inputs are validated</h2>";
echo $name"<br>";
echo $email"<br>";
echo $website"<br>";
echo $comment"<br>";
echo $gender;
?>


//script code//
function manageModel()
{
var Location=document.getElementById("company").value;
  if(location=="")
  {
    alert("name must be filled out");
    return false;
  }
  else
var Date=document.getElementById("date").value;
  if(date=="")
  {
    alert("date must be filled out");
    return false;
  }
var compliance=document.getElementById("complianceDrop").value;
  if(date=="")
  {
    alert("compliance must be filled out");
    return false;
  }
var version=document.getElementById("version_no").value;
  if(version=="")
  {
    alert("verson must be filled out");
    return false;
  }
var reviewdate=document.getElementById("review_date").value;
  if(reviewdate=="")
  {
    alert("reviewdate must be filled out");
    return false;
  }
var approvedby=document.getElementById("approved_by").value;
  if(approvedby=="")
  {
    alert("approvedby must be filled out");
    return false;
  }
var approvaldate=document.getElementById("approved_date").value;
  if(approvaldate=="")
  {
    alert("approvaldate must be filled out");
    return false;
  }
var reasonforupdate=document.getElementById("reason_for_update").value;
  if(reasonforupdate=="")
  {
    alert("reasonforupdate must be filled out");
    return false;
  } 
var confidentialitystatement=document.getElementById("confidentiality_statement").value;
  if(confidentialitystatement=="")
  {
    alert("confidentialitystatement must be filled out");
    return false;
  }
var footer=document.getElementById("bcpmfooter").value;
  if(footer=="")
  {
    alert("footer must be filled out");
    return false;
  }
var footer=document.getElementById("bcpmfooter").value;
  if(footer=="")
  {
    alert("footer must be filled out");
    return false;
  } 
var name=document.getElementById("update_name").value;
  if(name=="")
  {
    alert("name must be filled out");
    return false;
  }
var Phone=document.getElementById("update_phone").value;
  if(Phone=="")
  {
    alert("Phone must be filled out");
    return false;
  }
var officelocation=document.getElementById("update_office_location").value;
  if(Phone=="")
  {
    alert("officelocation must be filled out");
    return false;
  }
var dateissue=document.getElementById("update_date_issue").value;
  if(dateissue=="")
  {
    alert("dateissue must be filled out");
    return false;
  }
var dateupdate=document.getElementById("update_date_update").value;
  if(dateupdate=="")
  {
    alert("dateissue must be filled out");
    return false;
  } 
var updateby=document.getElementById("update_name").value;
  if(dateissue=="")
  {
    alert("dateissue must be filled out");
    return false;
  }                               
}
</script>
function manageModal()
{
var Location=document.getElementById("company").value;
  if(location=="")
  {
    alert("name must be filled out");
    return false;
  }
var Date=document.getElementById("date").value;
  if(date=="")
  {
    alert("date must be filled out");
    return false;
  }
var compliance=document.getElementById("complianceDrop").value;
  if(date=="")
  {
    alert("compliance must be filled out");
    return false;
  }
var version=document.getElementById("version_no").value;
  if(version=="")
  {
    alert("verson must be filled out");
    return false;
  }
var reviewdate=document.getElementById("review_date").value;
  if(reviewdate=="")
  {
    alert("reviewdate must be filled out");
    return false;
  }
var approvedby=document.getElementById("approved_by").value;
  if(approvedby=="")
  {
    alert("approvedby must be filled out");
    return false;
  }
var approvaldate=document.getElementById("approved_date").value;
  if(approvaldate=="")
  {
    alert("approvaldate must be filled out");
    return false;
  }
var reasonforupdate=document.getElementById("reason_for_update").value;
  if(reasonforupdate=="")
  {
    alert("reasonforupdate must be filled out");
    return false;
  } 
var confidentiality statement=document.getElementById("confidentiality_statement").value;
  if(confidentiality statement=="")
  {
    alert("confidentialitystatement must be filled out");
    return false;
  }
var footer=document.getElementById("bcpmfooter").value;
  if(footer=="")
  {
    alert("footer must be filled out");
    return false;
  }
var Name=document.getElementById("update_name").value;
  if(Name=="")
  {
    alert("name must be filled out");
    return false;
  }
var Phone=document.getElementById("update_phone").value;
  if(Phone=="")
  {
    alert("Phone must be filled out");
    return false;
  }
var Office Location=document.getElementById("update_office_location").value;
  if(Office Location=="")
  {
    alert("officelocation must be filled out");
    return false;
  }
var Dateissue=document.getElementById("update_date_issue").value;
  if(Dateissue=="")
  {
    alert("dateissue must be filled out");
    return false;
  }
var DateUpdate=document.getElementById("update_date_update").value;
  if(DateUpdate=="")
  {
    alert("dateissue must be filled out");
    return false;
  } 
var update by=document.getElementById("update_name").value;
  if(update by=="")
  {
    alert("updateby must be filled out");
    return false;
  }                               
}

//before location in head
<div class="row">
                  <div class="col-md-12">
                    <input type="hidden" value="<?php echo $companyId?>" id="company">
                  </div>
                </div>

//entire code

<?php 
require_once __DIR__.'/../header.php';
require_once __DIR__.'/../../php/company/companyManager.php';
$manager=new CompanyManager();
$id=$manager->getCompanyIdForUser($_SESSION['user_id']);

$companyId=$id[0]['id'];
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fresh GRC Admin</title>
  <base href="/freshgrc/">
    <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css" />
    <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css"/>
    <link href="metronic/theme/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <script src="metronic/theme/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>     
    <script src="assets/multiselectDropdown/bootstrap-multiselect.js" type="text/javascript"></script>  
    <link rel="stylesheet" type="text/css" href="assets/multiselectDropdown/bootstrap-multiselect.css">
    <script src="metronic/theme/assets/global/scripts/app.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
    <link href="assets/toggleButton/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="assets/toggleButton/bootstrap-toggle.min.js"></script>
    <script src="js/bcpm/bcpmPlanManagement.js"></script>
    <link href="assets/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="assets/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="assets/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="assets/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="assets/img/favicon.png" rel="icon" type="image/png">
    <link href="assets/img/favicon.ico" rel="shortcut icon">
     <link rel="stylesheet" href="assets/css/lib/font-awesome/font-awesome.min.css">
    <link href="metronic/theme/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="metronic/theme/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="metronic/theme/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>
<body  style="background-color: #f0f5f5">
    <?php 
        include '../siteHeader.php';
        $currentMenu = 'auditorAdmin';
        include '../common/leftMenu.php';
    ?>
  <body>
    <div class="page-content-wrapper" >
      <!-- BEGIN CONTENT BODY -->
      <div class="page-content" >
        <div class="panel">
          <div class="caption" style="color: #32c5d2; font-size: 16px;"> Create BCPM preplan</div>
          <div class="row">
            <div class="col-md-12">
              <form id="form1" style="margin: 2%">
                <div class="form-group">
                  <input type="hidden" class="form-control" id="loggedInUser" value="<?php echo $_SESSION['user_id'] ?>">
                  <input type="hidden" class="form-control" id="bcpmId">
                  <input type="hidden" class="form-control" id="action" value="create">
                </div>
                <div class="row" style="margin-top: 10px;">
                  <div class="col-md-4"  >
                     <div class="form-group " >
                     <label for="auditTitle">Location:</label>
                    <input  type="text" class="form-control" id="company" required>
                     <?php include '../common/locationDropDown.php';?> 
                     </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group" >
                      <label  for="auditTitle" >date:</label>
                      <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                      <input type="text" class="form-control datepickerClass notranslate" name="from" id="dateofapproval" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group ">
                    <label for="auditTitle">Compliance:</label>
                    <input  type="text" class="form-control" id="complianceDrop" required>
                    <?php include '../compliance/complianceDropDown.php';?>
                    </div>
                  </div>
                  </div>
              <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 form-group">
                  <div class="panel panel-default" style="margin-top: 20px;">
                     <div class="panel-heading"><b>Distribution List</b></div>
                    <div class="panel-body">
                      <div class="col-md-4" >
                        <div class="form-group " >
                        <div class="panel panel-default" style="margin-top: 20px;">
                            <label for="auditTitle">Version No:</label>
                            <input  type="text" class="form-control" id="version_no" required>
                          </div>         
                      </div>
                    <div class="col-md-4" >
                    <div class="form-group">
                    <label for="auditTitle">Implemented by:</label>
                    <input  type="text" class="form-control" id="implemented_by" required>
                    <?php include '../common/bcpmimplementby.php';?>
                    </div>         
                    </div>                    
                      <div class="col-md-4" >
                        <div class="form-group" >
                          <label class="control-label" >Review Date:</label>
                          <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                          <input type="text" id="review_date" class="form-control datepickerClass  notranslate" name="from" class="">
                        </div>
                          </div>        
                      </div>
                    <div class="col-md-4" style="margin-top: 10px;">
                      <div class="form-group" >
                      <label for="auditTitle">Approved By:</label>
                      <input  type="text" class="form-control" id="approved_by"  required>
                        <?php include '../common/bcpmapprovedby.php';?>
                      </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 10px;">
                      <div class="form-group">
                        <label class="control-label" >Approval Date:</label>
                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                        <input type="text" id="approved_date" class="form-control datepickerClass  notranslate" name="from" class="">
                       </div>
                      </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 10px;">
                      <div class="form-group">
                      <label for="auditTitle" >Reason for Update:</label>
                      <input  type="text" class="form-control" id="reason_for_update" required>
                      </div>          
                    </div>
                    </div>         
                  </div>
                </div>
              </div> 
                 <div class="row">
                   <div class="col-md-6" >
                    <div class="form-group " >
                      <label for="auditTitle" >Confidentiality Statement:</label>
                      <input  type="text" class="form-control" id="confidentiality_statement" required>
                    </div>          
                  </div>
                    <div class="col-md-6">
                      <div class="form-group">
                      <label for="auditTitle">Approved By:</label>
                      <input  type="text" class="form-control" id="bcpm_footer" required>
                         <?php include '../common/bcpmfooter.php';?>
                    </div>
                   </div>
                 </div>
                <div class="row">
                 <div class="col-xs-12 col-md-12 col-lg-12 form-group" style="margin-top: 20px;">
                  <div class="panel panel-default">
                   <div class="panel-heading"><b>Update List</b></div>
                  <div class="panel-body">
                    <div class="col-md-4" >
                    <div class="form-group " >
                      <label for="auditTitle" >Name:</label>
                      <input  type="text" class="form-control" id="update_name" required>
                    </div>          
                  </div>
                     <div class="col-md-4" >
                    <div class="form-group " >
                      <label for="auditTitle" >Phone:</label>
                      <input  type="text" class="form-control" id="update_phone" required>
                    </div>          
                  </div>
                    
                     <div class="col-md-4" >
                    <div class="form-group " >
                      <label for="auditTitle" >Office Location:</label>
                      <input  type="text" class="form-control" id="update_office_location" required>
                    </div>          
                  </div>
                     <div class="col-md-4" style="margin-top: 10px;">
                      <div class="form-group">
                        <label class="control-label" >Dateissue:</label>
                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                        <input type="text" id="update_date_issue" class="form-control datepickerClass  notranslate" name="from" class="">
                      </div>
                     </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 10px;">
                    <div class="form-group">
                    <label >DateUpdate:</label>
                    <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                    <input type="text" id="update_date_update" class="form-control datepickerClass  notranslate" name="from" class="">
                    </div>
                    </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 10px;" >
                    <div class="form-group ">
                    <label for="auditTitle" >Reason for Update:</label>
                    <input  type="text" class="form-control" id="update_name" required> 
                    <?php include '../common/bcpmupdatename.php';?>
                    </div>
                    </div>
                </div>
               </div>
               </div>
               </div>
              </form>
              <div class="modal-footer" style="border-top: 1px solid #eef1f5;">
              <button type="button" id="manageButton" onclick="manageModal()" data-dismiss="modal" class="btn btn-primary" style="background-color:#4285f4">plan</button>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>
</div>
</div>                               
</body> 
</html>
<script type="text/javascript">
 $(function() {
        $(".datepickerClass").datepicker();
        $('.ui-datepicker').addClass('notranslate');
    });
function manageModal()
{
var Location=document.getElementById("company").value;
  if(location=="")
  {
    alert("name must be filled out");
    return false;
  }
var date=document.getElementById("dateofapproval").value;
  if(date=="")
  {
    alert("Date must be filled out");
    return false;
  }

var Compliance=ocument.getElementById("complianceDrop").value;
  if(Compliance="")
  {
    alert("compliance must be filled out");
    return false;
  }
var version=document.getElementById("version_no").value;
  if(version=="")
  {
    alert("verson must be filled out");
    return false;
  }
var reviewdate=document.getElementById("review_date").value;
  if(reviewdate=="")
  {
    alert("reviewdate must be filled out");
    return false;
  }
var approvedby=document.getElementById("approved_by").value;
  if(approvedby=="")
  {
    alert("approvedby must be filled out");
    return false;
  }
var approvaldate=document.getElementById("approved_date").value;
  if(approvaldate=="")
  {
    alert("approvaldate must be filled out");
    return false;
  }
var reasonforupdate=document.getElementById("reason_for_update").value;
  if(reasonforupdate=="")
  {
    alert("reasonforupdate must be filled out");
    return false;
  } 
var confidentiality statement=document.getElementById("confidentiality_statement").value;
  if(confidentiality statement=="")
  {
    alert("confidentialitystatement must be filled out");
    return false;
  }
var footer=document.getElementById("bcpmfooter").value;
  if(footer=="")
  {
    alert("footer must be filled out");
    return false;
  }
var Name=document.getElementById("update_name").value;
  if(Name=="")
  {
    alert("name must be filled out");
    return false;
  }
var Phone=document.getElementById("update_phone").value;
  if(Phone=="")
  {
    alert("Phone must be filled out");
    return false;
  }
var Office Location=document.getElementById("update_office_location").value;
  if(Office Location=="")
  {
    alert("officelocation must be filled out");
    return false;
  }
var Dateissue=document.getElementById("update_date_issue").value;
  if(Dateissue=="")
  {
    alert("dateissue must be filled out");
    return false;
  }
var Dateupdate=document.getElementById("update_date_update").value;
  if(Dateupdate=="")
  {
    alert("dateissue must be filled out");
    return false;
  } 
var updateby=document.getElementById("update_name").value;
  if(dateissue=="")
  {
    alert("dateissue must be filled out");
    return false;
  }                               
}
</script>
<style type="text/css">
  .ui-datepicker-title {
    border: 1px solid #1c94c4;
    background: #ffffff !important url(images/ui-bg_gloss-wave_35_f6a828_500x100.png) 50% 50% repeat-x;
     color: black !important; 
    font-weight: bold;
};
    .ui-datepicker-header  {
    border: 1px solid #e78f08;
    background: #ffffff !important url(images/ui-bg_gloss-wave_35_f6a828_500x100.png) 50% 50% repeat-x;
    font-weight: bold;
}
.ui-datepicker .ui-datepicker-header {
    position: relative;
    padding: .2em 0;
    background: #1c94c4;
}
</style>

//lastly updated
<?php 
require_once __DIR__.'/../header.php';
require_once __DIR__.'/../../php/company/companyManager.php';
$manager=new CompanyManager();
$id=$manager->getCompanyIdForUser($_SESSION['user_id']);
$companyId=$id[0]['id'];
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fresh GRC Admin</title>
  <base href="/freshgrc/">
    <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css" />
    <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css"/>
    <link href="metronic/theme/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <script src="metronic/theme/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>     
    <script src="assets/multiselectDropdown/bootstrap-multiselect.js" type="text/javascript"></script>  
    <link rel="stylesheet" type="text/css" href="assets/multiselectDropdown/bootstrap-multiselect.css">
    <script src="metronic/theme/assets/global/scripts/app.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
    <link href="assets/toggleButton/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="assets/toggleButton/bootstrap-toggle.min.js"></script>
    <script src="js/bcpm/bcpmPlanManagement.js"></script>
    <link href="assets/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="assets/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="assets/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="assets/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="assets/img/favicon.png" rel="icon" type="image/png">
    <link href="assets/img/favicon.ico" rel="shortcut icon">
     <link rel="stylesheet" href="assets/css/lib/font-awesome/font-awesome.min.css">
    <link href="metronic/theme/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="metronic/theme/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="metronic/theme/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>
<body  style="background-color: #f0f5f5">
    <?php 
        include '../siteHeader.php';
        $currentMenu = 'auditorAdmin';
        include '../common/leftMenu.php';
    ?>
  <body>
    <div class="page-content-wrapper" >
      <!-- BEGIN CONTENT BODY -->
      <div class="page-content" >
        <div class="panel">
          <div class="caption" style="color: #32c5d2; font-size: 16px;"> Create BCPM preplan</div>
          <div class="row">
            <div class="col-md-12">
              <form id="form1" style="margin: 2%">
                <div class="form-group">
                  <input type="hidden" class="form-control" id="loggedInUser" value="<?php echo $_SESSION['user_id'] ?>">
                  <input type="hidden" class="form-control" id="bcpmId">
                  <input type="hidden" class="form-control" id="action" value="create">
                </div>
                <div class="row" style="margin-top: 10px;">
                  <div class="col-md-4"  >
                     <div class="form-group " >
                     <label for="auditTitle">Location:</label>
                    <input  type="text" class="form-control" id="company" required>
                     <?php include '../common/locationDropDown.php';?> 
                     </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group" >
                      <label  for="auditTitle" >date:</label>
                      <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                      <input type="text" class="form-control datepickerClass notranslate" name="from" id="dateofapproval" required>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group ">
                    <label for="auditTitle">Compliance:</label>
                    <input  type="text" class="form-control" id="complianceDrop" required>
                    <?php include '../compliance/complianceDropDown.php';?>
                    </div>
                  </div>
                  </div>
              <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 form-group">
                  <div class="panel panel-default" style="margin-top: 20px;">
                     <div class="panel-heading"><b>Distribution List</b></div>
                    <div class="panel-body">
                      <div class="col-md-4" >
                        <div class="form-group " >
                        <div class="panel panel-default" style="margin-top: 20px;">
                            <label for="auditTitle">Version No:</label>
                            <input  type="text" class="form-control" id="version_no" required>
                          </div>         
                      </div>
                    <div class="col-md-4" >
                    <div class="form-group">
                    <label for="auditTitle">Implemented by:</label>
                    <input  type="text" class="form-control" id="implemented_by" required>
                    <?php include '../common/bcpmimplementby.php';?>
                    </div>         
                    </div>                    
                      <div class="col-md-4" >
                        <div class="form-group" >
                          <label class="control-label" >Review Date:</label>
                          <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                          <input type="text" id="review_date" class="form-control datepickerClass  notranslate" name="from" class="">
                        </div>
                          </div>        
                      </div>
                    <div class="col-md-4" style="margin-top: 10px;">
                      <div class="form-group" >
                      <label for="auditTitle">Approved By:</label>
                      <input  type="text" class="form-control" id="approved_by"  required>
                        <?php include '../common/bcpmapprovedby.php';?>
                      </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 10px;">
                      <div class="form-group">
                        <label class="control-label" >Approval Date:</label>
                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                        <input type="text" id="approved_date" class="form-control datepickerClass  notranslate" name="from" class="">
                       </div>
                      </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 10px;">
                      <div class="form-group">
                      <label for="auditTitle" >Reason for Update:</label>
                      <input  type="text" class="form-control" id="reason_for_update" required>
                      </div>          
                    </div>
                    </div>         
                  </div>
                </div>
              </div> 
                 <div class="row">
                   <div class="col-md-6" >
                    <div class="form-group " >
                      <label for="auditTitle" >Confidentiality Statement:</label>
                      <input  type="text" class="form-control" id="confidentiality_statement" required>
                    </div>          
                  </div>
                    <div class="col-md-6">
                      <div class="form-group">
                      <label for="auditTitle">Approved By:</label>
                      <input  type="text" class="form-control" id="bcpm_footer" required>
                         <?php include '../common/bcpmfooter.php';?>
                    </div>
                   </div>
                 </div>
                <div class="row">
                 <div class="col-xs-12 col-md-12 col-lg-12 form-group" style="margin-top: 20px;">
                  <div class="panel panel-default">
                   <div class="panel-heading"><b>Update List</b></div>
                  <div class="panel-body">
                    <div class="col-md-4" >
                    <div class="form-group " >
                      <label for="auditTitle" >Name:</label>
                      <input  type="text" class="form-control" id="update_name" required>
                    </div>          
                  </div>
                     <div class="col-md-4" >
                    <div class="form-group " >
                      <label for="auditTitle" >Phone:</label>
                      <input  type="text" class="form-control" id="update_phone" required>
                    </div>          
                  </div>
                    
                     <div class="col-md-4" >
                    <div class="form-group " >
                      <label for="auditTitle" >Office Location:</label>
                      <input  type="text" class="form-control" id="update_office_location" required>
                    </div>          
                  </div>
                     <div class="col-md-4" style="margin-top: 10px;">
                      <div class="form-group">
                        <label class="control-label" >Dateissue:</label>
                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                        <input type="text" id="update_date_issue" class="form-control datepickerClass  notranslate" name="from" class="">
                      </div>
                     </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 10px;">
                    <div class="form-group">
                    <label >DateUpdate:</label>
                    <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                    <input type="text" id="update_date_update" class="form-control datepickerClass  notranslate" name="from" class="">
                    </div>
                    </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 10px;" >
                    <div class="form-group ">
                    <label for="auditTitle" >updateby</label>
                    <input  type="text" class="form-control" id="update_name" required> 
                    <?php include '../common/bcpmupdatename.php';?>
                    </div>
                    </div>
                </div>
               </div>
               </div>
               </div>
              </form>
              <div class="modal-footer" style="border-top: 1px solid #eef1f5;">
              <button type="button" id="manageButton" onclick="manageModal()" data-dismiss="modal" class="btn btn-primary" style="background-color:#4285f4">plan</button>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>
</div>
</div>                               
</body> 
</html>
<script type="text/javascript">
 $(function() {
        $(".datepickerClass").datepicker();
        $('.ui-datepicker').addClass('notranslate');
    });
function manageModal()
{
var Location=document.getElementById("company").value;
  if(Location="")
  {
    alert("name must be filled out");
    return false;
  }
var date=document.getElementById("dateofapproval").value;
  if(date=="")
  {
    alert("Date must be filled out");
    return false;
  }
var e=document.getElementById("complianceDrop").value;
var struser=e.option[e.selectedIndex].value;
  if(struser==""|| struser==0)
  {
    alert("compliance must be filled out");
    return false;
  }
var version=document.getElementById("version_no").value;
  if(version=="")
  {
    alert("verson must be filled out");
    return false;
  }
var reviewdate=document.getElementById("review_date").value;
  if(reviewdate=="")
  {
    alert("reviewdate must be filled out");
    return false;
  }
var approvedby=document.getElementById("approved_by").value;
  if(approvedby=="")
  {
    alert("approvedby must be filled out");
    return false;
  }
var approvaldate=document.getElementById("approved_date").value;
  if(approvaldate=="")
  {
    alert("approvaldate must be filled out");
    return false;
  }
var reasonforupdate=document.getElementById("reason_for_update").value;
  if(reasonforupdate=="")
  {
    alert("reasonforupdate must be filled out");
    return false;
  } 
var confidentiality statement=document.getElementById("confidentiality_statement").value;
  if(confidentiality statement=="")
  {
    alert("confidentialitystatement must be filled out");
    return false;
  }
var footer=document.getElementById("bcpmfooter").value;
  if(footer=="")
  {
    alert("footer must be filled out");
    return false;
  }
var Name=document.getElementById("update_name").value;
  if(Name=="")
  {
    alert("name must be filled out");
    return false;
  }
var Phone=document.getElementById("update_phone").value;
  if(Phone=="")
  {
    alert("Phone must be filled out");
    return false;
  }
var Office Location=document.getElementById("update_office_location").value;
  if(Office Location=="")
  {
    alert("officelocation must be filled out");
    return false;
  }
var Dateissue=document.getElementById("update_date_issue").value;
  if(Dateissue=="")
  {
    alert("dateissue must be filled out");
    return false;
  }
var Dateupdate=document.getElementById("update_date_update").value;
  if(Dateupdate=="")
  {
    alert("dateissue must be filled out");
    return false;
  } 
var updateby=document.getElementById("update_name").value;
  if(updateby==")
  {
    alert("dateissue must be filled out");
    return false;
  }                               
}
</script>
<style type="text/css">
  .ui-datepicker-title {
    border: 1px solid #1c94c4;
    background: #ffffff !important url(images/ui-bg_gloss-wave_35_f6a828_500x100.png) 50% 50% repeat-x;
     color: black !important; 
    font-weight: bold;
};
    .ui-datepicker-header  {
    border: 1px solid #e78f08;
    background: #ffffff !important url(images/ui-bg_gloss-wave_35_f6a828_500x100.png) 50% 50% repeat-x;
    font-weight: bold;
}
.ui-datepicker .ui-datepicker-header {
    position: relative;
    padding: .2em 0;
    background: #1c94c4;
}
</style>


//locationDropDown.php


<?php
    require_once __DIR__.'/../../php/risk/riskManager.php';
    $riskManager = new RiskManager();
    // 4 is auditor role
    $allLocation = $riskManager->getAllLocation();
?>


      <div class="form-group">
        <label for="multi-append" class="control-label" style="font-size: 13px;">Location</label>        
       <div class="input-group select2-bootstrap-append">
            

            <select  id="location" name="locationDropDown" class="form-control select2" multiple>
              <option></option>    

    <?php foreach($allLocation as $location){ ?>
    <option value="<?php echo $location['id'] ?>"><?php echo $location['name']; ?></option>
    <?php } ?>
</select>
          <span class="input-group-btn">
                <button class="btn btn-default" type="button" data-select2-open="multi-append">
                 <span class="glyphicon glyphicon-search"></span>
                </button>
              </span>
        </div>
        </div>

//complianceDropDown.php

<?php
    require_once __DIR__.'/../../php/common/metaData.php';
    require_once __DIR__.'/../../php/audit/auditManager.php';
    $riskManager = new AuditManager();
    
    $allCompliances = $riskManager->getAllCompliances($_SESSION['company']);
?>
   
   

        

<div class="form-group">
    <div class="col-md-12">
    <label >Compliance</label>        
        <div class="input-group select2-bootstrap-prepend">
            
            <select  id="compliance" name="complianceDropDown" class="form-control select2" onchange="getDepartment()" multiple>
                          <?php foreach($allCompliances as $compliance){ ?>
                                  <option value="<?php echo $compliance['id'] ?>"><?php echo $compliance['name'] ?></option>
                  <?php } ?>  
                </select>

 
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" data-select2-open="single-prepend-text">

                 <span class="fa fa-caret-down "></span>
                </button>
            </span> 
        </div>
    </div>
</div>
 <script src="metronic/theme/assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>

//bcpmimplementby.php

<?php
    require_once __DIR__.'/../../php/user/userManager.php';

    $userManager = new UserManager();
    // 4 is auditor role
    $allAuditors = $userManager->getAllUsersByRole(20);
    
?>




  <!-- <label style="margin-left:3%">auditor</label> -->
     <label >Implemented By:</label>               
        <div class="input-group select2-bootstrap-prepend">
            
            <select id="implemented_by1" class="form-control select2">
              <option></option>                                                                              
              <?php foreach($allAuditors as $auditor){ ?>
               <option value="<?php echo $auditor['userId'] ?>"><?php echo $auditor['lastName'] ?></option>
               <?php } ?>                                    
            </select> 
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" data-select2-open="single-prepend-text">
                 <span class="glyphicon glyphicon-search"></span>
                </button>
            </span> 
        </div>

//bcpmapprovedby.php

<?php
    require_once __DIR__.'/../../php/user/userManager.php';

    $userManager = new UserManager();
    // 4 is auditor role
    $allAuditors = $userManager->getAllUsersByRole(15);
    
?>




  <label>Approved By:</label>
        <div class="input-group select2-bootstrap-prepend">
            
            <select id="approved_by1" class="form-control select2">
              <option></option>                                                                              
              <?php foreach($allAuditors as $auditor){ ?>
               <option value="<?php echo $auditor['userId'] ?>"><?php echo $auditor['lastName'] ?></option>
               <?php } ?>                                    
            </select> 
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" data-select2-open="single-prepend-text">
                 <span class="glyphicon glyphicon-search"></span>
                </button>
            </span> 
    </div>

//bcpFooter.php

<?php
    require_once __DIR__.'/../../php/common/dashboard.php';

    $metaData = new dashboard();
    $bcpmFooter = $metaData->bcpmFooter();
    echo json_encode($bcpmFooter);
    
?>
<label>Footer:</label>
        <div class="input-group select2-bootstrap-prepend">
            
            <select id="footer" class="form-control select2">
              <option></option>                                                                              
              <?php foreach($bcpmFooter){ ?>
               <option value="<?php echo $bcpmFooter['userId'] ?>"></option>
               <?php } ?>                                    
            </select> 
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" data-select2-open="single-prepend-text">
                 <span class="glyphicon glyphicon-search"></span>
                </button>
            </span> 
    </div>

//bcpmupdatename.php

<?php
    require_once __DIR__.'/../../php/user/userManager.php';

    $userManager = new UserManager();
    // 4 is auditor role
    $allAuditors = $userManager->getAllUsersByRole(20);
    
?>




  <label>Updated by:</label>
        <div class="input-group select2-bootstrap-prepend">
            
            <select id="update_name1" class="form-control select2">
              <option></option>                                                                              
              <?php foreach($allAuditors as $auditor){ ?>
               <option value="<?php echo $auditor['userId'] ?>"><?php echo $auditor['lastName'] ?></option>
               <?php } ?>                                    
            </select> 
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" data-select2-open="single-prepend-text">
                 <span class="glyphicon glyphicon-search"></span>
                </button>
            </span> 
        </div>

// today work

function manageModal()
{
var Location=document.getElementById("location").value;
  if(Location=="")
  {
    alert("name must be filled out");
    return false;
  }
var date=document.getElementById("date").value;
  if(date=="")
  {
    alert("date must be filled out");
    return false;
  }
var Compliance=document.getElementById("compliance").value;
  if(Compliance=="")
  {
    alert("compliance must be filled out");
    return false;
  }
var version=document.getElementById("version_no").value;
  if(version=="")
  {
    alert("verson must be filled out");
    return false;
  }
var Implemented By=document.getElementById("Implemented_by1").value;
  if(Implemented By=="")
  {
    alert("verson must be filled out");
    return false;
  }
var ReviewDate=document.getElementById("review_date").value;
  if(ReviewDate=="")
  {
    alert("reviewdate must be filled out");
    return false;
  }
var Approved By=document.getElementById("approved_by1").value;
  if(Approved By=="")
  {
    alert("approvedby must be filled out");
    return false;
  }
var ApprovalDate=document.getElementById("approved_date").value;
  if(ApprovalDate=="")
  {
    alert("approvaldate must be filled out");
    return false;
  }
var ReasonforUpdate=document.getElementById("reason_for_update").value;
  if(ReasonforUpdate=="")
  {
    alert("reasonforupdate must be filled out");
    return false;
  } 
var Confidentiality Statement=document.getElementById("confidentiality_statement").value;
  if(Confidentiality Statement=="")
  {
    alert("confidentialitystatement must be filled out");
    return false;
  }
var Footer=document.getElementById("bcpmfooter").value;
  if(Footer=="")
  {
    alert("footer must be filled out");
    return false;
  }
var Name=document.getElementById("update_name").value;
  if(Name=="")
  {
    alert("name must be filled out");
    return false;
  }
var Phone=document.getElementById("update_phone").value;
  if(Phone=="")
  {
    alert("Phone must be filled out");
    return false;
  }
var Office Location=document.getElementById("update_office_location").value;
  if(Office Location=="")
  {
    alert("officelocation must be filled out");
    return false;
  }
var Dateissue=document.getElementById("update_date_issue").value;
  if(Dateissue=="")
  {
    alert("dateissue must be filled out");
    return false;
  }
var DateUpdate=document.getElementById("update_date_update").value;
  if(DateUpdate=="")
  {
    alert("dateissue must be filled out");
    return false;
  } 
var Updated by=document.getElementById("update_name1").value;
  if(Updated by=="")
  {
    alert("updateby must be filled out");
    return false;
  }                               
}                         
 
//15/05/18(that day work)

<?php 
require_once __DIR__.'/../header.php';
require_once __DIR__.'/../../php/company/companyManager.php';
$manager=new CompanyManager();
$id=$manager->getCompanyIdForUser($_SESSION['user_id']);
$companyId=$id[0]['id'];
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fresh GRC Admin</title>
  <base href="/freshgrc/">
    <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css" />
    <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css"/>
    <link href="metronic/theme/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <script src="metronic/theme/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>     
    <script src="assets/multiselectDropdown/bootstrap-multiselect.js" type="text/javascript"></script> 
    <link rel="stylesheet" type="text/css" href="assets/multiselectDropdown/bootstrap-multiselect.css">
    <script src="metronic/theme/assets/global/scripts/app.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
    <link href="assets/toggleButton/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="assets/toggleButton/bootstrap-toggle.min.js"></script>     
    <script src="js/bcpm/bcpmPlanManagement.js"></script>
    <link href="assets/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="assets/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="assets/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="assets/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="assets/img/favicon.png" rel="icon" type="image/png">
    <link href="assets/img/favicon.ico" rel="shortcut icon">
     <link rel="stylesheet" href="assets/css/lib/font-awesome/font-awesome.min.css">
    <link href="metronic/theme/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="metronic/theme/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="metronic/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="metronic/theme/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="metronic/theme/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>
<body  style="background-color: #f0f5f5">
    <?php 
        include '../siteHeader.php';
        $currentMenu = 'auditorAdmin';
        include '../common/leftMenu.php';
    ?>
    <div class="page-content-wrapper" >
      <!-- BEGIN CONTENT BODY -->
      <div class="page-content" >
        <div class="panel">
          <div class="caption" style="color: #32c5d2; font-size: 16px;"> Create BCPM preplan</div>
          <div class="row">
            <div class="col-md-12">
              <form id="form1" style="margin: 2%">
                <div class="form-group">
                  <input type="hidden" class="form-control" id="loggedInUser" value="<?php echo $_SESSION['user_id'] ?>">
                  <input type="hidden" class="form-control" id="bcpmId">
                  <input type="hidden" class="form-control" id="action" value="create">
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <input type="hidden" value="<?php echo $companyId?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4"  >
                     <div class="form-group " >
                     <?php include '../common/locationDropDown.php';?> 
                     </div>
                  </div>
                  <div class="col-md-4" >
                    <div class="form-group" >
                      <label class="control-label" for="auditTitle">Date</label>
                      <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                        <input type="text" id="dated" class="form-control datepickerClass  notranslate" name="from" class="">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                  <?php include '../compliance/complianceDropDown.php';?>
                  </div>
                  </div>
                </div>
              <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 form-group">
                  <div class="panel panel-default" style="margin-top: 20px;">
                     <div class="panel-heading"><b>Distribution List</b></div>
                    <div class="panel-body">

                      <div class="col-md-4" >
                        <div class="form-group " >
                            <label for="auditTitle">Version No</label>
                            <input  type="text" class="form-control" id="version_no" required>
                          </div>         
                      </div>
                      <div class="col-md-4" >
                       <div class="form-group">
                            <?php include '../common/bcpmimplementby.php';?>
                          </div>         
                      </div>                    
                      <div class="col-md-4" >
                        <div class="form-group" >
                          <label class="control-label" >Review Date</label>
                          <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                          <input type="text" id="review_date" class="form-control datepickerClass  notranslate" name="from" class="">
                        </div>
                          </div>        
                      </div>
                    <div class="col-md-4" style="margin-top: 10px;">
                      <div class="form-group">
                        <?php include '../common/bcpmapprovedby.php';?>
                      </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 10px;">
                      <div class="form-group">
                        <label class="control-label" >Approval Date</label>
                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                        <input type="text" id="approved_date" class="form-control datepickerClass  notranslate" name="from" class="">
                       </div>
                      </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 10px;">
                      <div class="form-group">
                      <label for="auditTitle" >Reason for Update</label>
                      <input  type="text" class="form-control" id="reason_for_update" required>
                      </div>          
                    </div>
                    </div>         
                  </div>
                </div>
              </div> 
                 <div class="row">
                   <div class="col-md-6" >
                    <div class="form-group " >
                      <label for="auditTitle" >Confidentiality Statement</label>
                      <input  type="text" class="form-control" id="confidentiality_statement" required>
                    </div>          
                  </div>
                    <div class="col-md-6">
                      <div class="form-group" id="bcpmfooter">
                    <?php include '../common/bcpmfooter.php';?>
                    </div>
                   </div>
                 </div>
                <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 form-group" style="margin-top: 20px;">
                <div class="panel panel-default">
                <div class="panel-heading"><b>Update List</b></div>
                <div class="panel-body">
                    <div class="col-md-4" >
                    <div class="form-group " >
                      <label for="auditTitle" >Name</label>
                      <input  type="text" class="form-control" id="update_name" required>
                    </div>          
                  </div>
                     <div class="col-md-4" >
                    <div class="form-group " >
                      <label for="auditTitle" >Phone</label>
                      <input  type="text" class="form-control" id="update_phone" required>
                    </div>          
                  </div>
                    
                     <div class="col-md-4" >
                    <div class="form-group " >
                      <label for="auditTitle" >Office Location</label>
                      <input  type="text" class="form-control" id="update_office_location" required>
                    </div>          
                  </div>
                     <div class="col-md-4" style="margin-top: 10px;">
                      <div class="form-group">
                      
                        <label class="control-label" >Date issue</label>
                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                        <input type="text" id="update_date_issue" class="form-control datepickerClass  notranslate" name="from" class="">
                      </div>
                     </div>
                     </div>
                     <div class="col-md-4">
                      <div class="form-group">
                        <label >Date Update</label>
                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                        <input type="text" id="update_date_update" class="form-control datepickerClass  notranslate" name="from" class="">
                        </div>
                     </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group ">
                        <?php include '../common/bcpmupdatename.php';?>
                      </div>
                    </div>
                </div>
               </div>
               </div>
               </div>
              </form>
              <div class="modal-footer" style="border-top: 1px solid #eef1f5;">
              <button type="button" id="manageButton" onclick="manageModal()" data-dismiss="modal" class="btn btn-primary" style="background-color:#4285f4">plan</button>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>
</div>
</div>                      
</body>
</html>
<script type="text/javascript">
$(function()
  { $(".datepickerClass").datepicker();
        $('.ui-datepicker').addClass('notranslate');
  });
function manageModal()
{
var Location=document.getElementById("location").value;
  if(Location=="")
  {
    alert("Location must be filled out");
    return false;
  }
var date=document.getElementById("dated").value;
  if(date=="")
  {
    alert("date must be filled out");
    return false;
  } 
var compliance=document.getElementById("compliance").value;
  if(compliance=="")
  {
    alert("compliance must be filled out");
    return false;
  }
var versionNo=document.getElementById("version_no").value;
  if(versionNo=="")
  {
    alert("verson  must be filled out");
    return false;
  }
var Implemented=document.getElementById("implemented_by1").value;
  if(Implemented=="")
  {
    alert("Implemented by must be filled out");
    return false;
  }
var reviewdate=document.getElementById("review_date").value;
  if(reviewdate=="")
  {
    alert("reviewdate must be filled out");
    return false;
  }
var approvedby=document.getElementById("approved_by1").value;
  if(approvedby=="")
  {
    alert("approvedby must be filled out");
    return false;
  }
var approvaldate=document.getElementById("approved_date").value;
  if(approvaldate=="")
  {
    alert("approvaldate must be filled out");
    return false;
  }
var reasonforupdate=document.getElementById("reason_for_update").value;
  if(reasonforupdate=="")
  {
    alert("reasonforupdate must be filled out");
    return false;
  } 
var confidentiality=document.getElementById("confidentiality_statement").value;
  if(confidentiality=="")
  {
    alert("confidentiality statement must be filled out");
    return false;
  }
var bcpmfooter=document.getElementById("bcpmfooter").value;
  if(bcpmfooter=="")
  {
    alert("footer must be filled out");
    return false;
  }
var Name=document.getElementById("update_name").value;
  if(Name=="")
  {
    alert("Name must be filled out");
    return false;
  }
var Phone=document.getElementById("update_phone").value;
  if(Phone=="")
  {
    alert("Phone must be filled out");
    return false;
  }
var officelocation=document.getElementById("update_office_location").value;
  if(officelocation=="")
  {
    alert("officelocation must be filled out");
    return false;
  }
var dateissue=document.getElementById("update_date_issue").value;
  if(dateissue=="")
  {
    alert("dateissue must be filled out");
    return false;
  }
var dateupdate=document.getElementById("update_date_update").value;
  if(dateupdate=="")
  {
    alert("dateissue must be filled out");
    return false;
  } 
var updateby=document.getElementById("update_name1").value;
  if(updateby=="")
  {
    alert("dateissue must be filled out");
    return false;
  }                               
}
</script>
<style type="text/css">
  .ui-datepicker-title {
    border: 1px solid #1c94c4;
    background: #ffffff !important url(images/ui-bg_gloss-wave_35_f6a828_500x100.png) 50% 50% repeat-x;
     color: black !important; 
    font-weight: bold;
};
    .ui-datepicker-header  {
    border: 1px solid #e78f08;
    background: #ffffff !important url(images/ui-bg_gloss-wave_35_f6a828_500x100.png) 50% 50% repeat-x;
    font-weight: bold;
}
.ui-datepicker .ui-datepicker-header {
    position: relative;
    padding: .2em 0;
    background: #1c94c4;
}
</style>           
           
//16/05/18 morning attached code

<?php 
require_once __DIR__.'/../header.php';
require_once __DIR__.'/../../php/company/companyManager.php';
$manager=new CompanyManager();
$id=$manager->getCompanyIdForUser($_SESSION['user_id']);
$companyId=$id[0]['id'];
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fresh GRC Admin</title>
  <base href="/freshgrc/">
    <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css" />
    <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css"/>
    <link href="metronic/theme/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <script src="metronic/theme/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>     
    <script src="assets/multiselectDropdown/bootstrap-multiselect.js" type="text/javascript"></script> 
    <link rel="stylesheet" type="text/css" href="assets/multiselectDropdown/bootstrap-multiselect.css">
    <script src="metronic/theme/assets/global/scripts/app.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
    <link href="assets/toggleButton/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="assets/toggleButton/bootstrap-toggle.min.js"></script>     
    <script src="js/bcpm/bcpmPlanManagement.js"></script>
    <link href="assets/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="assets/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="assets/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="assets/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="assets/img/favicon.png" rel="icon" type="image/png">
    <link href="assets/img/favicon.ico" rel="shortcut icon">
     <link rel="stylesheet" href="assets/css/lib/font-awesome/font-awesome.min.css">
    <link href="metronic/theme/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="metronic/theme/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="metronic/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="metronic/theme/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="metronic/theme/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>
<body  style="background-color: #f0f5f5">
    <?php 
        include '../siteHeader.php';
        $currentMenu = 'auditorAdmin';
        include '../common/leftMenu.php';
    ?>
    <div class="page-content-wrapper" >
      <!-- BEGIN CONTENT BODY -->
      <div class="page-content" >
        <div class="panel">
          <div class="caption" style="color: #32c5d2; font-size: 16px;"> Create BCPM preplan</div>
          <div class="row">
            <div class="col-md-12">
              <form id="form1" style="margin: 2%">
                <div class="form-group">
                  <input type="hidden" class="form-control" id="loggedInUser" value="<?php echo $_SESSION['user_id'] ?>">
                  <input type="hidden" class="form-control" id="bcpmId">
                  <input type="hidden" class="form-control" id="action" value="create">
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <input type="hidden" value="<?php echo $companyId?>">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4"  >
                     <div class="form-group " >
                     <?php include '../common/locationDropDown.php';?> 
                     </div>
                  </div>
                  <div class="col-md-4" >
                    <div class="form-group" >
                      <label class="control-label" for="auditTitle">Date</label>
                      <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                        <input type="text" id="dated" class="form-control datepickerClass  notranslate" name="from" class="">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                  <div class="form-group">
                  <?php include '../compliance/complianceDropDown.php';?>
                  </div>
                  </div>
                </div>
              <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 form-group">
                  <div class="panel panel-default" style="margin-top: 20px;">
                     <div class="panel-heading"><b>Distribution List</b></div>
                    <div class="panel-body">

                      <div class="col-md-4" >
                        <div class="form-group " >
                            <label for="auditTitle">Version No</label>
                            <input  type="text" class="form-control" id="version_no" required>
                          </div>         
                      </div>
                      <div class="col-md-4" >
                       <div class="form-group">
                            <?php include '../common/bcpmimplementby.php';?>
                          </div>         
                      </div>                    
                      <div class="col-md-4" >
                        <div class="form-group" >
                          <label class="control-label" >Review Date</label>
                          <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                          <input type="text" id="review_date" class="form-control datepickerClass  notranslate" name="from" class="">
                        </div>
                          </div>        
                      </div>
                    <div class="col-md-4" style="margin-top: 10px;">
                      <div class="form-group">
                        <?php include '../common/bcpmapprovedby.php';?>
                      </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 10px;">
                      <div class="form-group">
                        <label class="control-label" >Approval Date</label>
                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                        <input type="text" id="approved_date" class="form-control datepickerClass  notranslate" name="from" class="">
                       </div>
                      </div>
                    </div>
                    <div class="col-md-4" style="margin-top: 10px;">
                      <div class="form-group">
                      <label for="auditTitle" >Reason for Update</label>
                      <input  type="text" class="form-control" id="reason_for_update" required>
                      </div>          
                    </div>
                    </div>         
                  </div>
                </div>
              </div> 
                 <div class="row">
                   <div class="col-md-6" >
                    <div class="form-group " >
                      <label for="auditTitle" >Confidentiality Statement</label>
                      <input  type="text" class="form-control" id="confidentiality_statement" required>
                    </div>          
                  </div>
                    <div class="col-md-6">
                      <div class="form-group" id="bcpmfooter">
                    <?php include '../common/bcpmfooter.php';?>
                    </div>
                   </div>
                 </div>
                <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 form-group" style="margin-top: 20px;">
                <div class="panel panel-default">
                <div class="panel-heading"><b>Update List</b></div>
                <div class="panel-body">
                    <div class="col-md-4" >
                    <div class="form-group " >
                      <label for="auditTitle" >Name</label>
                      <input  type="text" class="form-control" id="update_name" required>
                    </div>          
                  </div>
                     <div class="col-md-4" >
                    <div class="form-group " >
                      <label for="auditTitle" >Phone</label>
                      <input  type="text" class="form-control" id="update_phone" required>
                    </div>          
                  </div>
                    <div class="col-md-4" >
                    <div class="form-group " >
                    <label for="auditTitle" >Office Location</label>
                    <input  type="text" class="form-control" id="update_office_location" required>
                    </div>          
                  </div>
                     <div class="col-md-4">
                      <div class="form-group">
                      <label class="control-label" >Date issue</label>
                      <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                        <input type="text" id="update_date_issue" class="form-control datepickerClass  notranslate" name="from" class="">
                      </div>
                     </div>
                     </div>
                     <div class="col-md-4">
                      <div class="form-group">
                      <label >Date Update</label>
                      <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 100% !important;">
                      <input type="text" id="update_date_update" class="form-control datepickerClass  notranslate" name="from" class="">
                      </div>
                     </div>
                    </div>
                    <div class="col-md-4">
                    <div class="form-group ">
                    <?php include '../common/bcpmupdatename.php';?>
                    </div>
                    </div>
                </div>
               </div>
               </div>
               </div>
              </form>
              <div class="modal-footer" style="border-top: 1px solid #eef1f5;">
              <button type="button" id="manageButton" onclick="manageModal()" data-dismiss="modal" class="btn btn-primary" style="background-color:#4285f4">plan</button>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>  
</div>
</div>
</div>                      
</body>
</html>
<script type="text/javascript">
$(function()
  { $(".datepickerClass").datepicker();
        $('.ui-datepicker').addClass('notranslate');
  });
function manageModal()
{
var Location=document.getElementById("location").value;
  if(Location=="")
  {
    alert("Location must be filled out");
    return false;
  }
var date=document.getElementById("dated").value;
  if(date=="")
  {
    alert("date must be filled out");
    return false;
  } 
var compliance=document.getElementById("compliance").value;
  if(compliance=="")
  {
    alert("compliance must be filled out");
    return false;
  }
var versionNo=document.getElementById("version_no").value;
  if(versionNo=="")
  {
    alert("verson  must be filled out");
    return false;
  }
var Implemented=document.getElementById("implemented_by1").value;
  if(Implemented=="")
  {
    alert("Implemented by must be filled out");
    return false;
  }
var reviewdate=document.getElementById("review_date").value;
  if(reviewdate=="")
  {
    alert("reviewdate must be filled out");
    return false;
  }
var approvedby=document.getElementById("approved_by1").value;
  if(approvedby=="")
  {
    alert("approvedby must be filled out");
    return false;
  }
var approvaldate=document.getElementById("approved_date").value;
  if(approvaldate=="")
  {
    alert("approvaldate must be filled out");
    return false;
  }
var reasonforupdate=document.getElementById("reason_for_update").value;
  if(reasonforupdate=="")
  {
    alert("reasonforupdate must be filled out");
    return false;
  } 
var confidentiality=document.getElementById("confidentiality_statement").value;
  if(confidentiality=="")
  {
    alert("confidentiality statement must be filled out");
    return false;
  }
var footer=document.getElementById("bcpmfooter").value;
  if(footer=="")
  {
    alert("footer must be filled out");
    return false;
  }
var Name=document.getElementById("update_name").value;
  if(Name=="")
  {
    alert("Name must be filled out");
    return false;
  }
var Phone=document.getElementById("update_phone").value;
  if(Phone=="")
  {
    alert("Phone must be filled out");
    return false;
  }
var office=document.getElementById("update_office_location").value;
  if(office=="")
  {
    alert("officelocation must be filled out");
    return false;
  }
var dateissue=document.getElementById("update_date_issue").value;
  if(dateissue=="")
  {
    alert("dateissue must be filled out");
    return false;
  }
var dateupdate=document.getElementById("update_date_update").value;
  if(dateupdate=="")
  {
    alert("dateupdate must be filled out");
    return false;
  } 
var updateby=document.getElementById("update_name1").value;
  if(updateby=="")
  {
    alert("updateby must be filled out");
    return false;
  }                               
}
</script>
<style type="text/css">
  .ui-datepicker-title {
    border: 1px solid #1c94c4;
    background: #ffffff !important url(images/ui-bg_gloss-wave_35_f6a828_500x100.png) 50% 50% repeat-x;
     color: black !important; 
    font-weight: bold;
};
    .ui-datepicker-header  {
    border: 1px solid #e78f08;
    background: #ffffff !important url(images/ui-bg_gloss-wave_35_f6a828_500x100.png) 50% 50% repeat-x;
    font-weight: bold;
}
.ui-datepicker .ui-datepicker-header {
    position: relative;
    padding: .2em 0;
    background: #1c94c4;
}
</style>

//17/05/18

function getDataFromRequestforPlan() {
  debugger
    var modalDetails = {
        'loggedInUser': $('#loggedInUser').val(),
        'bcpm_id':$('#bcpmId').val(),
        'action': $('#action').val(),
        'companyId': $('#company').val(),
        'overview': $('#overview').val(),
        'scope': $('#scope').val(),
        'policy': $('#policy').val(),
        'assumptions': $('#assumptions').val(),
        'objectives': $('#objectives').val(),
        'probability_scale': $('#probability_scale').val(),
        'business_impact_scale_view': $('#business_impact_scale_view').val(),
        'control_scale_view': $('#control_scale_view').val(),
        'threat':$('#threat').val(),
        'ideas_for_mitigation':$('#ideas_for_mitigation').val()

    }
    return modalDetails;
}
function manageModal1() {
    debugger
    
    var modalDetails = getDataFromRequestforPlan();
     
  $.ajax({
        type: "POST",
        url: "/freshgrc/php/bcpm/manageBCPM.php",
        data: modalDetails
    }).done(function (data) {
         swal({ 
           title:  'Plan Created Successfully!',
           confirmButtonColor: '#3085d6',
           confirmButtonText:'ok',
           timer: 1500
        });
 
    });
    // window.location="/freshgrc/view/bcpm/bcpmImplementAdmin.php";
} 

//19/05/18

function getDataFromRequestforexercise() {
  debugger
    var modalDetails = {
    'loggedInUser': $('#loggedInUser').val(),
        'bcpm_id': $('#bcpmId').val(),
         'action': $('#action').val(),
        'number': $('#number_exercise').val(),
        'exercise_type': $('#exercise_type').val(),
        'purpose': $('#purpose').val(),
        'participants': $('#participants').val(),
        'dates': $('#dates').val(),
        'revision_date_approver': $('#revision_date_approver').val()
     
      
    }
    return modalDetails;
}

function manageModal4() {
    debugger
    
    var modalDetails = getDataFromRequestforexercise();
     if(modalDetails.number_exercise==" "||modalDetails.exercise_type=="--select exercisetype-- "||modalDetails.purpose==" "||modalDetails.participants==" "||modalDetails.dates==" "||modalDetails.revision_date_approver==" "){
        swal({ 
           title:  'Please Fill all the form fields',
           confirmButtonColor: '#3085d6',
           confirmButtonText:'ok'
        });
    }
   else
   {
     
  $.ajax({
        type: "POST",
        url: "/freshgrc/php/bcpm/manageBCPM.php",
        data: modalDetails
    }).done(function (data) {
         swal({ 
           title:  'Reviewed Successfully!',
           confirmButtonColor: '#3085d6',
           confirmButtonText:'ok',
           timer: 1500
        });
 
    });
    //window.location="/freshgrc/view/bcpm/bcpmReport.php";
   }
}

// dynamic table creation using php

Hide   Copy Code
<html>
<head>

<script type="text/javascript">
function CreateTable()
{
    var tablecontents = "";
    tablecontents = "<table>";
    for (var i = 0; i < 5; i ++)
   {
      tablecontents += "<tr>";
      tablecontents += "<td>" + i + "</td>";
      tablecontents += "<td>" + i * 100 + "</td>";
      tablecontents += "<td>" + i * 1000 + "</td>";
      tablecontents += "</tr>";
   }
   tablecontents += "</table>";
   document.getElementById("tablespace").innerHTML = tablecontents;
}
</script>

</head>

<body  önload="CreateTable()">
<h1>My First Web Page</h1>
<p id="tablespace"></p>
</body>
</html>

//auditDashboard.php

<?php require_once __DIR__.'/../header.php';
$complianceWiseStatusGraph=false;
require_once __DIR__.'/../../php/common/dashboard.php';
$manager=new dashboard();
$noOfAudits=$manager->noOfAudits($_SESSION['company']);
$noOfAuditsPublished=$manager->noOfAuditsPublished($_SESSION['company']);
$noOfAuditsDue=$manager->noOfAuditsDue($_SESSION['company']);
$noOfAuditsDelayed=$manager->noOfAuditsDelayed($_SESSION['company']);
?>
<!DOCTYPE html>
<html>


  <head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fresh GRC Admin</title>
    <base href="/freshgrc/">
      
    <script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
    <script src="https://www.amcharts.com/lib/3/serial.js"></script>
    <script src="https://www.amcharts.com/lib/3/themes/light.js"></script>
    <script src="https://www.amcharts.com/lib/3/pie.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css" />
    <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>      
    <link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css" />    
    <script src="js/audit/auditManagement.js"></script> 
    <script src="js/audit/auditByCompliance.js"></script>
    <link href="assets/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="assets/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="assets/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="assets/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="assets/img/favicon.png" rel="icon" type="image/png">
    <link href="assets/img/favicon.ico" rel="shortcut icon">
    <link href="metronic/theme/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="metronic/theme/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="metronic/theme/assets/global/css/components-rounded.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="metronic/theme/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="metronic/theme/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="metronic/theme/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="assets/css/lib/font-awesome/font-awesome.min.css">      

    <style>
    .jqstooltip { 
      position: absolute;
      left: 0px;
      top: 0px;
      visibility: hidden;
      background: rgb(0, 0, 0) transparent;
      background-color: rgba(0,0,0,0.6);
      filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;
    }
     .jqsfield { 
        color: white;
        font: 10px arial, san serif;
        text-align: left;
      }
      .desc {
        padding-top: 25px;
      }
      #chartdiv1 {
        background-color: white;
        height: 345px;      
      }
      #chartdiv2 {
        height: 344px;
        background-color: white;
      }
      #chartdiv3{
        background-color: white;
        height: 345px;      
      }
       #chart_4 {
        height: 344px;
        background-color: white;
      }
      #chartdiv1 a, #chartdiv2 a, #chartdiv3 a, #chart_4 a{
      position: absolute;
      text-decoration: none;
      color: rgb(0, 0, 0);
      font-family: Verdana;
      font-size: 11px;
      opacity: 0.7;
      display: none !important;
      left: 5px;
      top: 5px;    
    }
      </style>
  </head>
  <body style="font-family: sans-serif !important;">
    <body>
      <?php 
        include '../siteHeader.php';
        $currentMenu = 'auditDashboard';
        include '../common/leftMenu.php';
        $userRole = $_SESSION['user_role'];
      ?>
      <body class="page-container-bg-solid page-header-fixed page-sidebar-closed-hide-logo">       
        <div class="page-content-wrapper">          
          <div class="page-content">
          <div id="onclickk" ondblclick="myFunction()"> 
            <div class="row">
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat dashboard-stat-v2 blue" >
                  <div class="visual">
                    <i class="fa fa-file-text"></i>
                  </div>
                  <div class="details">
                    <div class="desc">NO OF AUDITS</div>
                    <div class="number">
                      <span data-counter="counterup" data-value="<?php echo $noOfAudits[0]['count'] ?>"><?php echo $noOfAudits[0]['count'] ?></span>
                    </div>                  
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat dashboard-stat-v2 red">
                  <div class="visual">
                    <i class="fa fa-upload"></i>
                  </div>
                  <div class="details">
                    <div class="desc"> PUBLISHED </div>
                    <div class="number">
                      <span data-counter="counterup" data-value="<?php echo $noOfAuditsPublished[0]['count'] ?>"><?php echo $noOfAuditsPublished[0]['count'] ?></span></div>                  
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat dashboard-stat-v2 green" >
                  <div class="visual">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <div class="details">
                    <div class="desc"> DUE</div>
                    <div class="number">                    
                      <span data-counter="counterup" data-value="<?php echo $noOfAuditsDue[0]['count']?>"><?php echo $noOfAuditsDue[0]['count']?></span>
                    </div>                  
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat dashboard-stat-v2 purple" >
                  <div class="visual">
                    <i class="fa fa-hourglass-end"></i>
                  </div>
                  <div class="details">
                    <div class="desc"> DELAYED</div>
                    <div class="number"> 
                      <span data-counter="counterup" data-value="<?php echo $noOfAuditsDelayed[0]['count'] ?>"><?php echo $noOfAuditsDelayed[0]['count'] ?></span></div>                  
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>          
            <div class="row">
              <div class="col-lg-6 col-xs-12 col-sm-12">                  
                <div class="portlet light bordered">
                  <div class="portlet-title">
                    <div class="caption">
                      <i class="icon-bar-chart font-dark hide"></i>
                      <span class="caption-subject font-dark bold uppercase">Audit Frequency</span>   
                    </div>                 
                  </div>
                  <div class="portlet-body">                  
                    <div id="chartdiv1" class="display-none" style="display: block;text-transform: capitalize;">                   
                    </div>
                  </div>
                </div>                  
              </div>
              <div class="col-lg-6 col-xs-12 col-sm-12">                  
                <div class="portlet light bordered">
                  <div class="portlet-title">
                    <div class="caption">
                      <i class="icon-share font-red-sunglo hide"></i>
                      <span class="caption-subject font-dark bold uppercase">Status</span>         
                    </div>                 
                  </div>
                  <div class="portlet-body">                  
                    <div id="chartdiv2" class="display-none" style="display: block;text-transform: capitalize;">                     
                    </div>                  
                  </div>
                </div>                
              </div>
            </div>       
            <div class="row">   
              <div class="col-lg-6 col-xs-12 col-sm-12">                  
                <div class="portlet light bordered">
                  <div class="portlet-title">
                    <div class="caption">
                      <i class="icon-bar-chart font-dark hide"></i>
                      <span class="caption-subject font-dark bold uppercase">Compliance</span>            
                    </div>                 
                  </div>
                  <div class="portlet-body">                  
                    <div id="chartdiv3" class="display-none" style="display: block;">                   
                    </div>
                  </div>
                </div>                  
              </div>
              <div class="col-lg-6 col-xs-12 col-sm-12">                  
                <div class="portlet light bordered">
                  <div class="portlet-title">
                    <div class="caption">
                      <i class="icon-share font-red-sunglo hide"></i>
                      <span class="caption-subject font-dark bold uppercase">Checklist_wise Auditstatus</span>               
                    </div>                 
                  </div>
                  <div class="portlet-body">                  
                    <div id="chart_4" class="display-none" style="display: block;">      

                    </div>
                    <input type="hidden" id="company" value="<?php echo $_SESSION['company'] ?>">                                  
                  </div>
                </div>                
              </div>             
            </div>
          </div>
          </div> 
        </div>
        <script type="text/javascript">
          
          function myFunction() {
             location.href = "/freshgrc/view/audit/auditCreateAdmin.php";
          }
          var modalDetails={'company':$('#company').val()};
          $(document).ready( function() {
            $.ajax({
              type:"POST",
              dataType: "json",
              url: "php/common/auditfrequencydash.php",
              data:modalDetails,
              success: auditfrequency
            }); 
          });
            $.ajax({
              type:"POST",
              dataType: "json",
              url: "php/common/statuspie.php",
              data:modalDetails,
              success: statuspie
            }); 
             $.ajax({
              type:"POST",
              dataType: "json",
              url: "php/common/compliancepie.php",
              data:modalDetails,
              success: compliancepie
            });
            $.ajax({
              type:"POST",
              dataType: "json",
              url: "php/common/dashboardauditstatus.php",
              data:modalDetails,
              success: auditstatus3
            }); 
            function auditfrequency(data){
     
              var chart = AmCharts.makeChart( "chartdiv1", {
                "type": "pie",
                "theme": "light",
                "titles": [ {
                  "text": "",
                  "size": 16
                } ],
                "dataProvider": data,
                "valueField": "count",
                "titleField": "audit_freq",
                "outlineAlpha": 0.4,
                "depth3D": 15,
                "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                "angle": 30,
                "export": {
                  "enabled": true
                }
              } );
            }

            function statuspie(data){
     
              var chart = AmCharts.makeChart( "chartdiv2", {
                
               "type": "pie",
                "theme": "light",
                "titles": [ {
                  "text": "",
                  "size": 16
                } ],
                "dataProvider": data,
                "valueField": "count",
                "titleField": "status",
                "outlineAlpha": 0.4,
                "depth3D": 15,
                 "balloon":{
                 "fixedPosition":true
                },
                "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                "angle": 30,
                "export": {
                  "enabled": true
                }
               
              } );
            }
            function compliancepie(data){
              var chart = AmCharts.makeChart( "chartdiv3", {
                "type": "pie",
                "theme": "light",
                "titles": [ {
                  "text": "",
                  "size": 16
                } ],
                "dataProvider": data,
                "valueField": "count",
                "titleField": "name",
                "startEffect": "elastic",
                "startDuration": 2,
                "labelRadius": 15,
                "innerRadius": "50%",
                "depth3D": 10,
                "balloonText": "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>",
                "angle": 15,
                "export": {
                  "enabled": true
                }
              } );
            }
            function auditstatus3(data){
              var chart = AmCharts.makeChart("chart_4", {
                  "theme": "light",
                  "type": "serial",
                  "titles": [ {
                  "text": "",
                  "size": 16
                } ],
                  "dataProvider":data,
                  "valueAxes": [{
                      "stackType": "3d",
                      "unit": "%",
                      "position": "left",
                      "title": "",
                  }],
                  "startDuration": 1,
                  "graphs": [{
                      "balloonText": " [[category]]: <b>[[value]]</b>",
                      "fillAlphas": 0.9,
                      "lineAlpha": 0.2,
                      "title": "2004",
                      "type": "column",
                      "valueField": "count"
                  
                  }],
                  "plotAreaFillAlphas": 0.1,
                  "depth3D": 20,
                  "angle": 30,
                  "categoryField": "status",
                  "categoryAxis": {
                      "gridPosition": "start"
                  },
                
                  });
                  jQuery('.chart-input').off().on('input change',function() {
                    var property  = jQuery(this).data('property');
                    var target    = chart;
                    chart.startDuration = 0;
                    if ( property == 'topRadius') {
                      target = chart.graphs[0];
                          if ( this.value == 0 ) {
                            this.value = undefined;
                          }
                    }
                    target[property] = this.value;
                    chart.validateNow();
                  });
                }
        </script>    
      </body>
    </body>
  </body>
</html>

//changing process
<input type="text" id="start_date" class="form-control datepickerClass  notranslate" placeholder="Start" name="from" class="">
                        <span class="input-group-addon"> - </span>
                        <input type="text" id="end_date" class="form-control datepickerClass  notranslate" style="margin-left: 28%"; placeholder="End" name="to">
                
                                        
       
//bcpm_ui

<?php 
require_once __DIR__.'/../header.php';
require_once __DIR__.'/../../php/company/companyManager.php';
$manager=new CompanyManager();
$id=$manager->getCompanyIdForUser($_SESSION['user_id']);

$companyId=$id[0]['id'];
?>
<!DOCTYPE html>
<html>

<head lang="en">
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fresh GRC Admin</title>
  <base href="/freshgrc/">


    <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css" />
    <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css"/>
    <link href="metronic/theme/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    
    <script src="metronic/theme/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/global/plugins/bootstrap-select/js/bootstrap-select.min.js" type="text/javascript"></script>     
    <script src="assets/multiselectDropdown/bootstrap-multiselect.js" type="text/javascript"></script>  
    <link rel="stylesheet" type="text/css" href="assets/multiselectDropdown/bootstrap-multiselect.css">
    <script src="metronic/theme/assets/global/scripts/app.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/pages/scripts/components-select2.min.js" type="text/javascript"></script>
    <script src="metronic/theme/assets/layouts/layout4/scripts/layout.min.js" type="text/javascript"></script>
    <link href="assets/toggleButton/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="assets/toggleButton/bootstrap-toggle.min.js"></script>
       
    <script src="js/bcpm/bcpmAdmin.js"></script>
    <link href="assets/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="assets/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="assets/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="assets/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="assets/img/favicon.png" rel="icon" type="image/png">
    <link href="assets/img/favicon.ico" rel="shortcut icon">
     <link rel="stylesheet" href="assets/css/lib/font-awesome/font-awesome.min.css">
    <link href="metronic/theme/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="metronic/theme/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="metronic/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="metronic/theme/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="metronic/theme/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="metronic/theme/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />
</head>
<body  style="background-color: #f0f5f5">

    <?php 
        include '../siteHeader.php';
        $currentMenu = 'auditorAdmin';
        include '../common/leftMenu.php';
    ?>
  <body>
    <div class="page-content-wrapper" >
      <!-- BEGIN CONTENT BODY -->
      <div class="page-content" >
        <div class="portlet box green">
          <div class="portlet-title"><div class="caption">BCPM Planner</div></div>
           <div class="portlet-body">


               <div class="row">

                	<div class="col-xl-3">
                    <div class="form-group" style="margin-left: 80% !important;">
                      <label for="auditTitle">Date:</label>
                 		   <span  id="dateDefault"></span>             
                    </div>          
                  </div>
                   </div>
                    
	 			<div class="col-xs-12 col-md-12 col-lg-12 form-group" style="margin-top: 0px;">
             		<div class="panel-body">
                <div class="row">
						 <div class="col-md-4">
                   			 <div class="form-group">
                    		  <label for="auditTitle">BCPM Plan Name:</label>
                    			  <input  type="text" class="form-control" id="bcpm_plan_name" required>
                    		</div>          
                 		 </div>
					 <div class="col-md-4" >
                   	 <div class="form-group " >
                    	 <?php include '../common/regulationDropDown.php';?>
                    </div>          
                  	</div>
                    	<div class="col-md-4" >
                    	<div class="form-group " id="controlDrop">
                              <?php include '../common/controlsDropDown.php';?>
                    	</div>          
                 	 	</div>
                    </div>
                    <div class="row">
						<div class="col-md-4" style="margin-top: 10px;">
                     		 <div class="form-group">
                      
                    			<?php include 'bcpmAssetClassDropdown.php';?> 
                      
                    		 </div>
                   		 </div>
						<div class="col-md-4" style="margin-top: 10px;">
                      		<div class="form-group" id="bcpmSubAsset" >
                      			<?php include 'bcpmSubAssetClass.php';?> 
                     		</div>
                    	</div>

						<div class="col-md-4" style="margin-top: 10px;">
                      	<div class="form-group">
                        	<label class="control-label" >Function/Process:</label>
                        		<input type="text" id="function_process" class="form-control">
                    	 </div>
                    	</div>
                      </div>
             <div class="row">         
					 	<div class="col-md-4" style="margin-top: 10px;">
                      			<?php include '../common/locationDropdown.php';?> 
                    </div>
					<div class="col-md-4" style="margin-top: 10px;">
                      <div class="form-group">
                      
                          <?php include '../common/userDropdown.php';?> 

                     </div>
                    </div>
					 <div class="col-md-4" style="margin-top: 10px;">
                      <div class="form-group">
                     
                          <?php include '../common/userDropdown.php';?> 
                     </div>
                    </div>
				 </div>
               </div>
              </div>
            
              <div class="modal-footer" style="border-top: 1px solid #eef1f5;">
                <button type="button" id="manageButton" onclick="manageModal()" data-dismiss="modal" class="btn btn-primary" style="background-color:#4285f4;margin-right: 10px;">plan</button>
              
              </div> 
           </div>
          </div>
        </div>
      </div>

 
   
                
                
    </body>
   

</html>

<style type="text/css">
  .ui-datepicker-title {
    border: 1px solid #1c94c4;
    background: #ffffff !important url(images/ui-bg_gloss-wave_35_f6a828_500x100.png) 50% 50% repeat-x;
     color: black !important; 
    font-weight: bold;
};
    .ui-datepicker-header  {
    border: 1px solid #e78f08;
    background: #ffffff !important url(images/ui-bg_gloss-wave_35_f6a828_500x100.png) 50% 50% repeat-x;
    font-weight: bold;
}
.ui-datepicker .ui-datepicker-header {
    position: relative;
    padding: .2em 0;
    background: #1c94c4;
}
</style>

      
//auditPlanCreate.php(auditor1 modules)

<?php 
require_once __DIR__.'/../header.php';
require_once __DIR__.'/../../php/audit/auditClauseManager.php';
require_once __DIR__.'/../../php/compliance/complianceManager.php';
require_once __DIR__.'/../../php/audit/auditManager.php';
$companyId=$_SESSION['company'];
?>
<!DOCTYPE html>
<html>

<head lang="en">
  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Fresh GRC Admin</title>
  <base href="/freshgrc/">


    <link rel="stylesheet" type="text/css" href="assets/DataTables/datatables.min.css" />
    <script type="text/javascript" src="assets/DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="assets/jquery-ui-1.11.4/jquery-ui.js"></script>  
   
    <link rel="stylesheet" type="text/css" href="assets/jquery-ui-1.11.4/jquery-ui.css"/>
            <script src="metronic/theme/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>

        <script src="assets/multiselectDropdown/bootstrap-multiselect.js" type="text/javascript"></script>  
    <link rel="stylesheet" type="text/css" href="assets/multiselectDropdown/bootstrap-multiselect.css">

    <link href="metronic/theme/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" />
   <!--  <link href="metronic/theme/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" /> -->
     
    <link href="metronic/theme/assets/global/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    
<!--     <script src="metronic/theme/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
 -->   
    <link href="assets/toggleButton/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="assets/toggleButton/bootstrap-toggle.min.js"></script>
       
    <script src="js/audit/auditPlanManagement.js"></script>
    <link href="metronic/theme/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
<!--       <script src="metronic/theme/assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
 -->       <script src="//fast.appcues.com/31746.js">// NOTE: These values should be specific to the current user.
  Appcues.identify("<?php echo $user->id; ?>", { // Replace with unique identifier for current user
    name: "Gokul Kandasamy",   // Current user's name
    email: "gokulk@fixnix.co"

, // Current user's email
    created_at: <?php echo $user->created_at; ?>,    // Unix timestamp of user signup date

    // Additional user properties.
    // is_trial: "<?php echo $user->is_trial; ?>",
    // plan: "<?php echo $user->plan; ?>"

  });
 </script>
    
    <!-- Bootstrap core CSS -->
    <!-- <link href="assets/DataTables/Bootstrap-3.3.6/css/bootstrap.css" rel="stylesheet"> -->
    <link href="assets/img/favicon.144x144.png" rel="apple-touch-icon" type="image/png" sizes="144x144">
    <link href="assets/img/favicon.114x114.png" rel="apple-touch-icon" type="image/png" sizes="114x114">
    <link href="assets/img/favicon.72x72.png" rel="apple-touch-icon" type="image/png" sizes="72x72">
    <link href="assets/img/favicon.57x57.png" rel="apple-touch-icon" type="image/png">
    <link href="assets/img/favicon.png" rel="icon" type="image/png">
    <link href="assets/img/favicon.ico" rel="shortcut icon">
     <link rel="stylesheet" href="assets/css/lib/font-awesome/font-awesome.min.css">

   <!--  <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/custom.css"> -->
     <link href="metronic/theme/assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="metronic/theme/assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="metronic/theme/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
    <link href="metronic/theme/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
     <link href="metronic/theme/assets/layouts/layout4/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="metronic/theme/assets/layouts/layout4/css/themes/default.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="metronic/theme/assets/layouts/layout4/css/custom.min.css" rel="stylesheet" type="text/css" />

        <!-- script link  multi select-->
     <!-- <script src="metronic/theme/assets/global/plugins/jquery.min.js" type="text/javascript"></script> -->
    
         <style type="text/css">
           .ui-datepicker-month{
            color:"black";
           }
           .ui-datepicker-year{
            color:"black";
           }

         </style>
         <!-- end -->


</head>
<body  style="background-color: #f0f5f5">

    <?php 
        include '../siteHeader.php';
        $currentMenu = 'auditorAdmin';
        include '../common/leftMenu.php';
    ?>

    <body>
      <div class="page-content-wrapper">                
        <div class="page-content">                  
          <div class="row">
            <div class="col-md-12">
              <div class="portlet box green">
                <div class="portlet-title">
                  <div class="caption">Create Audit</div>                              
                </div>  
                <div class="portlet-body ">
                   <div id="form1" style="margin-left:8%;margin-bottom: 72px;">
                <div class="form-group">
                    <input type="hidden" class="form-control" id="loggedInUser" value="<?php echo $_SESSION['user_id'] ?>">
                    <input type="hidden" class="form-control" id="auditId">
                    <input type="hidden" class="form-control" id="action" value="create">
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <input type="hidden" value="<?php echo $companyId?>" id="company">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12" >
                    <div class="form-group " >
                      <label for="auditTitle" >Title</label>
                      <input  type="text" class="form-control" id="auditTitle" required>
                    </div>          
                  </div>
                </div>  
                <div class="row">
                  <div class="col-md-12">
                    <div class="form-group" >
                      <label for="auditDesc">Description</label>
                      <textarea class="form-control" maxlength="5000" rows="3" id="auditDesc" required style="overflow: hidden;"></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6" style="margin-left: -17px;">
                       <div class="form-group "  style="margin-top:0% ">
                       <?php include '../common/auditlocationDropdown.php';?> 
                    </div>
                    </div>
                    <div class="col-md-3"  >
                      <div class="form-group " style="margin-left:-20px;margin-right: -30px;" >
                        <span class="select2-selection__arrow" role="presentation"></span>
                        <?php include '../compliance/complianceDropDown.php';?>
                      </div>
                    </div>
                </div>  
                  <div class="row">  
                    <div class="col-md-6" style="margin-left: -17px;width: 47%;margin-left: 1px;" >
                      <div class="form-group" id="departmentDrop">
                        <?php include '../common/departmentDropDown.php';?>
                    </div>
                    </div>
                    <div class="col-md-3" >
                      <div class="form-group" >
                        <label class="control-label" style="margin-left: 7px;" >Date</label>
                        <div class="input-group input-large date-picker input-daterange" data-date="10/11/2012" data-date-format="yyyy/mm/dd" style="width: 250px!important; margin-left: 6px;">
                        <input type="text" id="start_date" class="form-control datepickerClass  notranslate" placeholder="Start" name="from" class="">
                        <span class="input-group-addon"> - </span>
                        <input type="text" id="end_date" class="form-control datepickerClass  notranslate" placeholder="End" name="to"> </div>
                      </div>
                </div>
                 <div class="col-md-3">
                      <div>
                        <?php include '../common/auditTypeDropdown.php';?>
                      </div>
                    </div>
                </div>  
                   <div class="row">  
                     <div class="col-md-6"  style="margin-left: -17px;">
                      <div class="form-group " >
                        <?php include '../common/auditorDropDown.php';?>
                      </div>
                    </div>

                    <div class="col-md-3"  >

                      <div class="form-group" style="margin-left: -20px;width: 108%;">

                        <?php include '../common/auditeeDropdown.php';?>
                      </div>
                    </div>
                  
                  </div>
                  
                    <div class="form-group">
                      <?php include '../common/auditFreqDropDown.php';?>
                  </div>
                    
               </div>
               <div class="modal-footer" style="border-top: 1px solid #eef1f5;">

                <div class="col-md-12">
                  
                </div>
                <button type="button" id="manageButton" onclick="manageModal()" data-dismiss="modal" class="btn btn-primary" style="background-color:#4285f4;">Plan</button>
                
              </div>       
                </div>
              </div>         
            </div>             
          </div>
        </div>       
      </div> 
      <a class="btn btn-primary btn-sm" href="javascript:Appcues.show('-LDaOP_Ap6RthIiOn5Oh')">Show hints &#x27a4;</a>
    </body>  
    <input type="hidden" class="form-control" id="auditCapaCheck" value="<?php echo $GLOBALS['capa'] ?>">
    <input type="hidden" class="form-control" id="parentAudit" value=0>

  </html>
  <script type="text/javascript">
     $(function() {
        $(".datepickerClass").datepicker();
        $('.ui-datepicker').addClass('notranslate');
    });
  </script>

//auditTypeDropdown.php

<?php
    require_once __DIR__.'/../../php/common/appConfig.php';
    $allAuditTypes = AppConfig::getAllConfigValues('audit_type');
    ?>
   
 <label style="margin-left:-5px">Audit Type</label>
 <div class="form group">
<div class="col-md-12" style="margin-left:-20px"; >
<input id="auditTypeToggle" type="checkbox" data-toggle="toggle" data-on="Internal" data-off="External" data-onstyle="success" data-offstyle="danger" onchange="auditType()" >
<input type="hidden" id="auditTyp">
</div>
</div>



