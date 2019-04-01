<?php 

include("../includes/init.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Applicant CV</title>
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script type="text/javascript">
        
           var ct = 1;
           function new_link()
           {
	       ct++;
	       var div1 = document.createElement('div');
	       div1.id = ct;
	       // link to delete extended form elements
	      var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt_education('+ ct +')">Del</a></div>';
	      div1.innerHTML = document.getElementById('educationnew').innerHTML + delLink;
	      document.getElementById('education').appendChild(div1);
          }
          // function to delete the newly added set of elements
          function delIt_education(eleId)
          {
	      d = document;
	      var ele = d.getElementById(eleId);
	      var parentEle = d.getElementById('education');
	      parentEle.removeChild(ele);
          }
            
            
            var ct_experience= 1;
           function new_link_experience()
           {
	       ct_experience++;
	       var div1 = document.createElement('div');
	       div1.id = ct_experience;
	       // link to delete extended form elements
	      var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt_experience('+ ct_experience +')">Del</a></div>';
	      div1.innerHTML = document.getElementById('experiencenew').innerHTML + delLink;
	      document.getElementById('experience').appendChild(div1);
          }
          // function to delete the newly added set of elements
          function delIt_experience(eleId)
          {
	      d = document;
	      var ele = d.getElementById(eleId);
	      var parentEle = d.getElementById('experience');
	      parentEle.removeChild(ele);
          } 
            var ct_cert= 1;
           function new_link_certification()
           {
	       ct_cert++;
	       var div1 = document.createElement('div');
	       div1.id = ct_cert;
	       // link to delete extended form elements
	      var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt_cert('+ ct_cert +')">Del</a></div>';
	      div1.innerHTML = document.getElementById('certificationnew').innerHTML + delLink;
	      document.getElementById('certification').appendChild(div1);
          }
          // function to delete the newly added set of elements
          function delIt_cert(eleId)
          {
	      d = document;
	      var ele = d.getElementById(eleId);
	      var parentEle = d.getElementById('certification');
	      parentEle.removeChild(ele);
          } 
            var ct_skills= 1;
           function new_link_skills()
           {
	       ct_skills++;
	       var div1 = document.createElement('div');
	       div1.id = ct_skills;
	       // link to delete extended form elements
	      var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt_skills('+ ct_skills +')">Del</a></div>';
	      div1.innerHTML = document.getElementById('skillsnew').innerHTML + delLink;
	      document.getElementById('skills').appendChild(div1);
          }
          // function to delete the newly added set of elements
          function delIt_skills(eleId)
          {
	      d = document;
	      var ele = d.getElementById(eleId);
	      var parentEle = d.getElementById('skills');
	      parentEle.removeChild(ele);
          }
           var ct_lang= 1;
           function new_link_languages()
           {
	       ct_lang++;
	       var div1 = document.createElement('div');
	       div1.id = ct_lang;
	       // link to delete extended form elements
	      var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt_lang('+ ct_lang +')">Del</a></div>';
	      div1.innerHTML = document.getElementById('languagesnew').innerHTML + delLink;
	      document.getElementById('languages').appendChild(div1);
          }
          // function to delete the newly added set of elements
          function delIt_lang(eleId)
          {
	      d = document;
	      var ele = d.getElementById(eleId);
	      var parentEle = d.getElementById('languages');
	      parentEle.removeChild(ele);
          }  
            </script>
            </head>
    <body id="page-top">
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Sidebar -->
            <ul class="navbar-nav bg-info sidebar sidebar-dark accordion" id="accordionSidebar">
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                    <div class="sidebar-brand-icon rotate-n-15">
</div>
                    <div class="sidebar-brand-text mx-3">EJAS
                        <sup>  
                    </div>
                </a>
                <!-- Divider -->
                <hr class="sidebar-divider my-0">
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="index-for-applicant.php"> <i class="fas fa-fw fa-tachometer-alt"></i> <span>applicant-profile</span></a>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider">
                <!-- Heading -->
                <div class="sidebar-heading">
                    organization information
</div>
                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item" active>
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">Applicant information</a>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Details:</h6>
                            <a class="collapse-item active" href="applicant-CV.php">Applicant CV</a>
                        </div>
                    </div>
                </li>
                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities"> <i class="fas fa-fw fa-wrench"></i> <span>Posts</span> </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Applicant jobs:</h6>
                            <a class="collapse-item" href="applied-jobs-for-applicant-prof.php">applied jobs</a>
                            <a class="collapse-item" href="applicant-saved-jobs.php">Saved jobs</a>
                        </div>
                    </div>
                </li>
                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">
                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                <!-- Main Content -->
                <div id="content">
                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-search fa-fw"></i> </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>
                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">3+</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                  Alerts Center </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 12, 2019</div>
                                            <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-donate text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 7, 2019</div>
                                            $290.29 has been deposited into your account!
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-warning">
                                                <i class="fas fa-exclamation-triangle text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 2, 2019</div>
                                            Spending Alert: We've noticed unusually high spending for your account.
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                </div>
                            </li>
                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">7</span>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                  Message Center </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                            <div class="small text-gray-500">Jae Chun · 1d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                                            <div class="status-indicator bg-warning"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                                </div>
                            </li>
                            <div class="topbar-divider d-none d-sm-block"></div>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                                    <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#"> <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile </a>
                                    <a class="dropdown-item" href="#"> <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings </a>
                                    <a class="dropdown-item" href="#"> <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"> <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout </a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                    <!-- End of Topbar -->
                    <!-- Begin Page Content -->
                    <div class="container-fluid">
                        <div class="row" data-aos="fade">
                            <div class="col-md-12">
                                 <form method="post">
                                      <style>fieldset{ border: 1px solid black;}</style>
                                        <fieldset>
                                         <legend style="width:auto; margin-bottom: 0px; font-size: 18px; color:grey;" >General information</legend> 
                                        <div class="row">
                                           <div class="form-group col-md-4">
                                             <input type="text" class="form-control" placeholder="First name" required>
                                           </div>
                                        <div class="form-group col-md-4">
                                         <input type="text" class="form-control" placeholder="middle name">
                                        </div>
                                        <div class="form-group col-md-4">
                                         <input type="text" class="form-control" placeholder="Last name" required>
                                        </div>
                                        </div>
                                        <div class="row">
                                          <div class="form-group col-md-4">
                                              <select id="inputCountry" class="form-control">
                                               <option selected>Country</option>
                                               <option value="AF">Afghanistan</option>
    <option value="AX">Åland Islands</option>
	<option value="AL">Albania</option>
	<option value="DZ">Algeria</option>
	<option value="AS">American Samoa</option>
	<option value="AD">Andorra</option>
	<option value="AO">Angola</option>
	<option value="AI">Anguilla</option>
	<option value="AQ">Antarctica</option>
	<option value="AG">Antigua and Barbuda</option>
	<option value="AR">Argentina</option>
	<option value="AM">Armenia</option>
	<option value="AW">Aruba</option>
	<option value="AU">Australia</option>
	<option value="AT">Austria</option>
	<option value="AZ">Azerbaijan</option>
	<option value="BS">Bahamas</option>
	<option value="BH">Bahrain</option>
	<option value="BD">Bangladesh</option>
	<option value="BB">Barbados</option>
	<option value="BY">Belarus</option>
	<option value="BE">Belgium</option>
	<option value="BZ">Belize</option>
	<option value="BJ">Benin</option>
	<option value="BM">Bermuda</option>
	<option value="BT">Bhutan</option>
	<option value="BO">Bolivia, Plurinational State of</option>
	<option value="BQ">Bonaire, Sint Eustatius and Saba</option>
	<option value="BA">Bosnia and Herzegovina</option>
	<option value="BW">Botswana</option>
	<option value="BV">Bouvet Island</option>
	<option value="BR">Brazil</option>
	<option value="IO">British Indian Ocean Territory</option>
	<option value="BN">Brunei Darussalam</option>
	<option value="BG">Bulgaria</option>
	<option value="BF">Burkina Faso</option>
	<option value="BI">Burundi</option>
	<option value="KH">Cambodia</option>
	<option value="CM">Cameroon</option>
	<option value="CA">Canada</option>
	<option value="CV">Cape Verde</option>
	<option value="KY">Cayman Islands</option>
	<option value="CF">Central African Republic</option>
	<option value="TD">Chad</option>
	<option value="CL">Chile</option>
	<option value="CN">China</option>
	<option value="CX">Christmas Island</option>
	<option value="CC">Cocos (Keeling) Islands</option>
	<option value="CO">Colombia</option>
	<option value="KM">Comoros</option>
	<option value="CG">Congo</option>
	<option value="CD">Congo, the Democratic Republic of the</option>
	<option value="CK">Cook Islands</option>
	<option value="CR">Costa Rica</option>
	<option value="CI">Côte d'Ivoire</option>
	<option value="HR">Croatia</option>
	<option value="CU">Cuba</option>
	<option value="CW">Curaçao</option>
	<option value="CY">Cyprus</option>
	<option value="CZ">Czech Republic</option>
	<option value="DK">Denmark</option>
	<option value="DJ">Djibouti</option>
	<option value="DM">Dominica</option>
	<option value="DO">Dominican Republic</option>
	<option value="EC">Ecuador</option>
	<option value="EG">Egypt</option>
	<option value="SV">El Salvador</option>
	<option value="GQ">Equatorial Guinea</option>
	<option value="ER">Eritrea</option>
	<option value="EE">Estonia</option>
	<option value="ET">Ethiopia</option>
	<option value="FK">Falkland Islands (Malvinas)</option>
	<option value="FO">Faroe Islands</option>
	<option value="FJ">Fiji</option>
	<option value="FI">Finland</option>
	<option value="FR">France</option>
	<option value="GF">French Guiana</option>
	<option value="PF">French Polynesia</option>
	<option value="TF">French Southern Territories</option>
	<option value="GA">Gabon</option>
	<option value="GM">Gambia</option>
	<option value="GE">Georgia</option>
	<option value="DE">Germany</option>
	<option value="GH">Ghana</option>
	<option value="GI">Gibraltar</option>
	<option value="GR">Greece</option>
	<option value="GL">Greenland</option>
	<option value="GD">Grenada</option>
	<option value="GP">Guadeloupe</option>
	<option value="GU">Guam</option>
	<option value="GT">Guatemala</option>
	<option value="GG">Guernsey</option>
	<option value="GN">Guinea</option>
	<option value="GW">Guinea-Bissau</option>
	<option value="GY">Guyana</option>
	<option value="HT">Haiti</option>
	<option value="HM">Heard Island and McDonald Islands</option>
	<option value="VA">Holy See (Vatican City State)</option>
	<option value="HN">Honduras</option>
	<option value="HK">Hong Kong</option>
	<option value="HU">Hungary</option>
	<option value="IS">Iceland</option>
	<option value="IN">India</option>
	<option value="ID">Indonesia</option>
	<option value="IR">Iran, Islamic Republic of</option>
	<option value="IQ">Iraq</option>
	<option value="IE">Ireland</option>
	<option value="IM">Isle of Man</option>
	<option value="IL">Israel</option>
	<option value="IT">Italy</option>
	<option value="JM">Jamaica</option>
	<option value="JP">Japan</option>
	<option value="JE">Jersey</option>
	<option value="JO">Jordan</option>
	<option value="KZ">Kazakhstan</option>
	<option value="KE">Kenya</option>
	<option value="KI">Kiribati</option>
	<option value="KP">Korea, Democratic People's Republic of</option>
	<option value="KR">Korea, Republic of</option>
	<option value="KW">Kuwait</option>
	<option value="KG">Kyrgyzstan</option>
	<option value="LA">Lao People's Democratic Republic</option>
	<option value="LV">Latvia</option>
	<option value="LB">Lebanon</option>
	<option value="LS">Lesotho</option>
	<option value="LR">Liberia</option>
	<option value="LY">Libya</option>
	<option value="LI">Liechtenstein</option>
	<option value="LT">Lithuania</option>
	<option value="LU">Luxembourg</option>
	<option value="MO">Macao</option>
	<option value="MK">Macedonia, the former Yugoslav Republic of</option>
	<option value="MG">Madagascar</option>
	<option value="MW">Malawi</option>
	<option value="MY">Malaysia</option>
	<option value="MV">Maldives</option>
	<option value="ML">Mali</option>
	<option value="MT">Malta</option>
	<option value="MH">Marshall Islands</option>
	<option value="MQ">Martinique</option>
	<option value="MR">Mauritania</option>
	<option value="MU">Mauritius</option>
	<option value="YT">Mayotte</option>
	<option value="MX">Mexico</option>
	<option value="FM">Micronesia, Federated States of</option>
	<option value="MD">Moldova, Republic of</option>
	<option value="MC">Monaco</option>
	<option value="MN">Mongolia</option>
	<option value="ME">Montenegro</option>
	<option value="MS">Montserrat</option>
	<option value="MA">Morocco</option>
	<option value="MZ">Mozambique</option>
	<option value="MM">Myanmar</option>
	<option value="NA">Namibia</option>
	<option value="NR">Nauru</option>
	<option value="NP">Nepal</option>
	<option value="NL">Netherlands</option>
	<option value="NC">New Caledonia</option>
	<option value="NZ">New Zealand</option>
	<option value="NI">Nicaragua</option>
	<option value="NE">Niger</option>
	<option value="NG">Nigeria</option>
	<option value="NU">Niue</option>
	<option value="NF">Norfolk Island</option>
	<option value="MP">Northern Mariana Islands</option>
	<option value="NO">Norway</option>
	<option value="OM">Oman</option>
	<option value="PK">Pakistan</option>
	<option value="PW">Palau</option>
	<option value="PS">Palestinian Territory, Occupied</option>
	<option value="PA">Panama</option>
	<option value="PG">Papua New Guinea</option>
	<option value="PY">Paraguay</option>
	<option value="PE">Peru</option>
	<option value="PH">Philippines</option>
	<option value="PN">Pitcairn</option>
	<option value="PL">Poland</option>
	<option value="PT">Portugal</option>
	<option value="PR">Puerto Rico</option>
	<option value="QA">Qatar</option>
	<option value="RE">Réunion</option>
	<option value="RO">Romania</option>
	<option value="RU">Russian Federation</option>
	<option value="RW">Rwanda</option>
	<option value="BL">Saint Barthélemy</option>
	<option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
	<option value="KN">Saint Kitts and Nevis</option>
	<option value="LC">Saint Lucia</option>
	<option value="MF">Saint Martin (French part)</option>
	<option value="PM">Saint Pierre and Miquelon</option>
	<option value="VC">Saint Vincent and the Grenadines</option>
	<option value="WS">Samoa</option>
	<option value="SM">San Marino</option>
	<option value="ST">Sao Tome and Principe</option>
	<option value="SA">Saudi Arabia</option>
	<option value="SN">Senegal</option>
	<option value="RS">Serbia</option>
	<option value="SC">Seychelles</option>
	<option value="SL">Sierra Leone</option>
	<option value="SG">Singapore</option>
	<option value="SX">Sint Maarten (Dutch part)</option>
	<option value="SK">Slovakia</option>
	<option value="SI">Slovenia</option>
	<option value="SB">Solomon Islands</option>
	<option value="SO">Somalia</option>
	<option value="ZA">South Africa</option>
	<option value="GS">South Georgia and the South Sandwich Islands</option>
	<option value="SS">South Sudan</option>
	<option value="ES">Spain</option>
	<option value="LK">Sri Lanka</option>
	<option value="SD">Sudan</option>
	<option value="SR">Suriname</option>
	<option value="SJ">Svalbard and Jan Mayen</option>
	<option value="SZ">Swaziland</option>
	<option value="SE">Sweden</option>
	<option value="CH">Switzerland</option>
	<option value="SY">Syrian Arab Republic</option>
	<option value="TW">Taiwan, Province of China</option>
	<option value="TJ">Tajikistan</option>
	<option value="TZ">Tanzania, United Republic of</option>
	<option value="TH">Thailand</option>
	<option value="TL">Timor-Leste</option>
	<option value="TG">Togo</option>
	<option value="TK">Tokelau</option>
	<option value="TO">Tonga</option>
	<option value="TT">Trinidad and Tobago</option>
	<option value="TN">Tunisia</option>
	<option value="TR">Turkey</option>
	<option value="TM">Turkmenistan</option>
	<option value="TC">Turks and Caicos Islands</option>
	<option value="TV">Tuvalu</option>
	<option value="UG">Uganda</option>
	<option value="UA">Ukraine</option>
	<option value="AE">United Arab Emirates</option>
	<option value="GB">United Kingdom</option>
	<option value="US">United States</option>
	<option value="UM">United States Minor Outlying Islands</option>
	<option value="UY">Uruguay</option>
	<option value="UZ">Uzbekistan</option>
	<option value="VU">Vanuatu</option>
	<option value="VE">Venezuela, Bolivarian Republic of</option>
	<option value="VN">Viet Nam</option>
	<option value="VG">Virgin Islands, British</option>
	<option value="VI">Virgin Islands, U.S.</option>
	<option value="WF">Wallis and Futuna</option>
	<option value="EH">Western Sahara</option>
	<option value="YE">Yemen</option>
	<option value="ZM">Zambia</option>
	<option value="ZW">Zimbabwe</option>
                                            </select>
                                          </div>
                                         <div class="form-group col-md-4">
                                           <input type="text" class="form-control" id="inputCity" placeholder="National id" min="10" maxlength="10">
                                         </div> 
                                           <div class="form-group col-md-4">
                                          <input type="text" class="form-control" placeholder="City"  required>
                                        </div>  
                                          </div>
                                        
                                    <div class="row">
                                                
                                        <div class="form-group col-md-4">
                                          <input type="tel" class="form-control" placeholder="Phone number" maxlength="15" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required>
                                        </div>  
                                                
                                         <div class="form-group col-md-4">
                                           <select id="inputState" class="form-control">
                                            <option selected>Female</option>
                                            <option>Male</option>
                                           </select>
                                         </div>       
                                            </div>
                                        </fieldset>
                                        <fieldset>
                             <legend style="width:auto; margin-bottom: 0px; font-size: 18px; color:grey;" >Education</legend> 
                             <div class="row" id="education">
                                           <div class="form-group col-md-4" id="degree-level">
                                           <select  class="form-control" name="degree-level[]">
                                            <option >Current degree level</option>
                                            <option id="highschool" selected>High school</option>
                                            <option id="associate">Associate degree </option>
                                            <option id="bachelors">Bachelor's degree</option>
                                            <option id="master">Master's degree</option>
                                            <option id="doctoral">Doctoral Degree</option>
                                           </select>
                                           
                                           </div>
                                             <div class="input-group col-md-4" id="gpa">
  
                                             <div class="form-group input-group">
                                             <div class="input-group-prepend">
                                             <button class="btn btn-outline-secondary" type="button" >4</button>
                                             <button class="btn btn-outline-secondary" type="button">5</button>
                                             <button class="btn btn-outline-secondary" type="button" >100%</button>
                                             </div>
                                             <input type="text" class="form-control" placeholder="Your GPA" aria-label="" aria-describedby="basic-addon1" name="gpa[]">
                                             </div>
            
                                            </div>
                                               
                                                <div class="form-group col-md-4" id="graduation-year">
                                           <input type="text" class="form-control" placeholder="graduation year" min="10" maxlength="10" name="graduationyear[]">
                                         </div> 
                                        <div class="form-group col-md-4" id="school-name">
                                           <input type="text" class="form-control" placeholder="School name" min="10" name="schoolname[]">
                                         </div> 
                                        <div class="form-group col-md-4" id="school-location">
                                           <input type="text" class="form-control" placeholder="School location" min="10" name="schoollocation[]">
                                         </div> 
                                           
                                            </div>
                                          <p id="addnew"> <a href="javascript:new_link()">add more degrees</a></p>
                                          
                                          <div style="text-align:right;margin-right:65px">
                                           
                                           
                                            </div>
                                              <div class="row" id="educationnew" style="padding:12px;display:none;">
                                           <div  id="degree-level2" style="padding:12px;">
                                           <select  class="form-control" name="degree-level[]">
                                           
                                            <option id="associate" selected>Associate degree </option>
                                            <option id="bachelors">Bachelor's degree</option>
                                            <option id="master">Master's degree</option>
                                            <option id="doctoral">Doctoral Degree</option>
                                           </select>
                                           
                                           </div>
                                             <div id="gpa" style="padding:12px;">
                                             <div class="form-group input-group">
                                             <div class="input-group-prepend">
                                             <button class="btn btn-outline-secondary" type="button" >4</button>
                                             <button class="btn btn-outline-secondary" type="button">5</button>
                                             <button class="btn btn-outline-secondary" type="button" >100%</button>
                                             </div>
                                      
                                             <input type="text" class="form-control" placeholder="Your GPA" aria-label="" aria-describedby="basic-addon1" name="gpa[]">
                                             </div>
            
                                            </div>
                                               
                                                <div id="graduation-year" style="padding:12px;">
                                           <input type="text" class="form-control" placeholder="graduation year" min="10" maxlength="10" name="graduationyear[]">
                                         </div> 
                                        <div id="school-name" style="padding:12px;">
                                           <input type="text" class="form-control" placeholder="School name" min="10" name="schoolname[]">
                                         </div> 
                                        <div  id="school-location" style="padding:12px;">
                                           <input type="text" class="form-control" placeholder="School location" min="10" name="schoollocation[]">
                                         </div> 
                                        <div style="padding:12px;">
                                             <select name="fieldofstudy[]" id="" class="form-control">
                                             <option value="">Field of study</option>
                                             <?php   
                  
                                             $query="SELECT * FROM fieldofstudy";
                                             $select_all_field_of_study_query=mysqli_query($connection,$query);
                                             while($row = mysqli_fetch_assoc($select_all_field_of_study_query) ){
                      
                                             $field_of_study_name = $row['field_name']; 
                                            //check it again the value of the option
                                            echo "<option value={$field_of_study_name}>{$field_of_study_name}</option>";
                                           }
                                           ?>
                                           </select>
                                          
                                            </div>
                                             
                        </div>
                                        </fieldset>
                                         
                                        <fieldset>
                                        <legend style="width:auto; margin-bottom: 0px; font-size: 18px; color:grey;" >Experience</legend>
                                        <div  id="experience" >
                                        <div class="form-group col-md-3">
                                             <select name="experiencename[]" id="" class="form-control">
                                             <option value="">Your experience</option>
                                             <?php   
                  
                                             $query="SELECT * FROM experience";
                                             $select_all_field_of_study_query=mysqli_query($connection,$query);
                                             while($row = mysqli_fetch_assoc($select_all_field_of_study_query) ){
                      
                                             $field_of_study_name = $row['experience_title']; 
                                            //check it again the value of the option
                                            echo "<option value={$field_of_study_name}>{$field_of_study_name}</option>";
                      
                                           }
                                           ?>
                                           </select>
                                          
                                            </div>
                                            <div class="form-group col-md-3" id="company-name">
                                           <input name="companyname[]" type="text" class="form-control" placeholder="Company" min="10">
                                         </div> 
                                         <div class="form-group col-md-3" id="company-location">
                                           <input name="companylocation[]" type="text" class="form-control" placeholder="Company location">
                                         </div> 
                                         
                                            <script>
                                            function dateDiff() { 
                                            var dtFrom = document.getElementById('txtFromDate').value;
                                            var dtTo = document.getElementById('txtToDate').value;

                                            var dt1 = new Date(dtFrom);
                                            var dt2 = new Date(dtTo);
                                            var diff = dt2.getTime() - dt1.getTime();
                                            var days = diff/(1000 * 60 * 60 * 24);
                                           // save the value of the different between from to to
                                              }
                                            function isNumeric(val) {
                                            var ret = parseInt(val);
                                              }
                                            </script>
                                            <div class="form-group col-md-4">
                                            <label for="txtFromDate">From Date : </label>
                  <input type="text" id="txtFromDate" name="txtFromDate[]" size="10" maxlength="10" value="03/25/2013"/>
                    <label for="txtToDate">To Date : </label>
                     <input type="text" id="txtToDate" name="txttoDate[]" size="10" maxlength="10" value="03/26/2013"/><br/>
                
                                         
                                     </div>
                                    
                                      </div>
                                        <p id="addnew"> <a href="javascript:new_link_experience()">add more Experiences</a></p>
                                     </fieldset> 
                                        
                                        
                                         <fieldset>
                                        <legend style="width:auto; margin-bottom: 0px; font-size: 18px; color:grey;" >Certifications</legend>
                                        <div id="certification">
                                            <div class="form-group col-md-4">
                                             <select name="certificationname[]" id="" class="form-control">
                                             <option value="">Your certifications</option>
                                             <?php   
                  
                                             $query="SELECT * FROM certifications";
                                             $select_all_field_of_study_query=mysqli_query($connection,$query);
                                             while($row = mysqli_fetch_assoc($select_all_field_of_study_query) ){
                      
                                             $field_of_study_name = $row['certification_name']; 
                                            //check it again the value of the option
                                            echo "<option value={$field_of_study_name}>{$field_of_study_name}</option>";
                      
                                           }
                                           ?>
                                           </select>
                                          
                                            </div> 
                                            
                                             <div class="form-group col-md-4" id="agency">
                                           <input  name="agency[]" type="text" class="form-control" placeholder="Agency" min="10">
                                         </div> 
                                           
                                            <div class="form-group col-md-4" id="agency_location">
                                           <input name="agencylocation[]" type="text" class="form-control" placeholder="location" min="10">
                                         </div> 
                                           
                                            <div class="form-group col-md-4" id="date-obtained">
                                            <label for="txtFromDate">Date obtained:</label>
                                            <input type="date" class="form-control" placeholder="Date obtained" name="obtained date[]">
                                         </div> 
                                      
                                        </div>
                                         <p id="addnew"> <a href="javascript:new_link_certification()">add more certifications</a></p>
                                     </fieldset>
                                       <fieldset>
                                        <legend style="width:auto; margin-bottom: 0px; font-size: 18px; color:grey;" >Skills</legend>
                                        <div id="skills">
                                       <div class="form-group col-md-6">
                                             <select name="skillname[]" id="" class="form-control">
                                             <option value="">Your skills</option>
                                             <?php   
                  
                                             $query="SELECT * FROM skills";
                                             $select_all_field_of_study_query=mysqli_query($connection,$query);
                                             while($row = mysqli_fetch_assoc($select_all_field_of_study_query) ){
                      
                                             $field_of_study_name = $row['skill_name']; 
                                            //check it again the value of the option
                                            echo "<option value={$field_of_study_name}>{$field_of_study_name}</option>";
                                           }
                                           ?>
                                           </select>
                                            </div>
                                            
                                            
                                            </div>
                                            <p id="addnew_skill"> <a href="javascript:new_link_skills()">add more skills</a></p>
                                     </fieldset>
                                     <fieldset>
                                        <legend style="width:auto; margin-bottom: 0px; font-size: 18px; color:grey;" >Languages</legend>
                                        <div id="languages">
                                            
                                           <div class="form-group col-md-4">
                                             <select name="languagename[]" id="" class="form-control">
                                             <option value="">Your languages</option>
                                             <?php   
                  
                                             $query="SELECT * FROM languages";
                                             $select_all_field_of_study_query=mysqli_query($connection,$query);
                                             while($row = mysqli_fetch_assoc($select_all_field_of_study_query) ){
                      
                                             $field_of_study_name = $row['language_name']; 
                                            //check it again the value of the option
                                            echo "<option value={$field_of_study_name}>{$field_of_study_name}</option>";
                                           }
                                           ?>
                                           </select>
                                            </div>
                                              <div class="form-group col-md-4" id="language-level2">
                                           <select  class="form-control" name="languagelevel[]">
                                           
                                            <option id="beginner" selected>Beginner</option>
                                            <option id="intermediate">intermediate</option>
                                            <option id="Advanced">Advanced</option>
                                            <option id="fluent">Fluent</option>
                                           </select>
                                           
                                           </div> 
                                        </div>
                                  <p id="addnew_language"> <a href="javascript:new_link_languages()">add more languages</a></p>
                                     </fieldset> 
                                     <div class="col-auto my-1">
                                     <input type="submit" value="Submit" class="btn btn-primary" style="padding:5px;">
                                     </div> 
                                </form>
                                    <div  id="experiencenew" style="display:none;" >
                                        <div class="form-group col-md-3">
                                             <select name="experiencename[]" id="" class="form-control">
                                             <option value="">Your experience</option>
                                             <?php   
                  
                                             $query="SELECT * FROM experience";
                                             $select_all_field_of_study_query=mysqli_query($connection,$query);
                                             while($row = mysqli_fetch_assoc($select_all_field_of_study_query) ){
                      
                                             $field_of_study_name = $row['experience_title']; 
                                            //check it again the value of the option
                                            echo "<option value={$field_of_study_name}>{$field_of_study_name}</option>";
                      
                                           }
                                           ?>
                                           </select>
                                          
                                            </div>
                                            <div class="form-group col-md-3" id="company-name">
                                           <input name="companyname[]" type="text" class="form-control" placeholder="Company" min="10">
                                         </div> 
                                         <div class="form-group col-md-3" id="company-location">
                                           <input name="companylocation[]" type="text" class="form-control" placeholder="Company location">
                                         </div> 
                                         
                                            <script>
                                            function dateDiff() { 
                                            var dtFrom = document.getElementById('txtFromDate').value;
                                            var dtTo = document.getElementById('txtToDate').value;

                                            var dt1 = new Date(dtFrom);
                                            var dt2 = new Date(dtTo);
                                            var diff = dt2.getTime() - dt1.getTime();
                                            var days = diff/(1000 * 60 * 60 * 24);
                                           // save the value of the different between from to to
                                              }
                                            function isNumeric(val) {
                                            var ret = parseInt(val);
                                              }
                                            </script>
                                            <div class="form-group col-md-4">
                                            <label for="txtFromDate">From Date : </label>
                  <input type="text" id="txtFromDate" name="txtFromDate[]" size="10" maxlength="10" value="03/25/2013"/>
                    <label for="txtToDate">To Date : </label>
                     <input type="text" id="txtToDate" name="txttoDate[]" size="10" maxlength="10" value="03/26/2013"/><br/>
                
                                         
                                     </div>
                                    
                                      </div>
                                       <div id="certificationnew" style="display:none;">
                                            <div class="form-group col-md-4">
                                             <select name="certificationname[]" id="" class="form-control">
                                             <option value="">Your certifications</option>
                                             <?php   
                  
                                             $query="SELECT * FROM certifications";
                                             $select_all_field_of_study_query=mysqli_query($connection,$query);
                                             while($row = mysqli_fetch_assoc($select_all_field_of_study_query) ){
                      
                                             $field_of_study_name = $row['certification_name']; 
                                            //check it again the value of the option
                                            echo "<option value={$field_of_study_name}>{$field_of_study_name}</option>";
                      
                                           }
                                           ?>
                                           </select>
                                          
                                            </div> 
                                            
                                             <div class="form-group col-md-4" id="agency">
                                           <input  name="agency[]" type="text" class="form-control" placeholder="Agency" min="10">
                                         </div> 
                                           
                                            <div class="form-group col-md-4" id="agency_location">
                                           <input name="agencylocation[]" type="text" class="form-control" placeholder="location" min="10">
                                         </div> 
                                           
                                            <div class="form-group col-md-4" id="date-obtained">
                                            <label for="txtFromDate">Date obtained:</label>
                                            <input type="date" class="form-control" placeholder="Date obtained" name="obtained date[]">
                                         </div> 
                                      
                                        </div>
                                        <div id="skillsnew" style="display:none">
                                       <div class="form-group col-md-6">
                                             <select name="skillname[]" id="" class="form-control">
                                             <option value="">Your skills</option>
                                             <?php   
                  
                                             $query="SELECT * FROM skills";
                                             $select_all_field_of_study_query=mysqli_query($connection,$query);
                                             while($row = mysqli_fetch_assoc($select_all_field_of_study_query) ){
                      
                                             $field_of_study_name = $row['skill_name']; 
                                            //check it again the value of the option
                                            echo "<option value={$field_of_study_name}>{$field_of_study_name}</option>";
                                           }
                                           ?>
                                           </select>
                                            </div>
                                            
                                            
                                            </div>
                                            
                                          <div id="languagesnew" style="display:none">
                                            
                                           <div class="form-group col-md-4">
                                             <select name="languagename[]" id="" class="form-control">
                                             <option value="">Your languages</option>
                                             <?php   
                  
                                             $query="SELECT * FROM languages";
                                             $select_all_field_of_study_query=mysqli_query($connection,$query);
                                             while($row = mysqli_fetch_assoc($select_all_field_of_study_query) ){
                      
                                             $field_of_study_name = $row['language_name']; 
                                            //check it again the value of the option
                                            echo "<option value={$field_of_study_name}>{$field_of_study_name}</option>";
                                           }
                                           ?>
                                           </select>
                                            </div>
                                              <div class="form-group col-md-4" id="language-level2">
                                           <select  class="form-control" name="languagelevel[]">
                                           
                                            <option id="beginner" selected>Beginner</option>
                                            <option id="intermediate">intermediate</option>
                                            <option id="Advanced">Advanced</option>
                                            <option id="fluent">Fluent</option>
                                           </select>
                                           
                                           </div> 
                                        </div>  
                                           
                             
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top"> <i class="fas fa-angle-up"></i> </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
</body>
