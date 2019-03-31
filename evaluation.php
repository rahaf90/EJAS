
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Evaluation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <script>
     var ct = 1;
           function new_link()
           {
	       ct++;
	       var div1 = document.createElement('div');
	       div1.id = ct;
	       // link to delete extended form elements
	      var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt('+ ct +')">Del</a></div>';
	      div1.innerHTML = document.getElementById('agedivnew').innerHTML + delLink;
	      document.getElementById('agediv').appendChild(div1);
          }
          // function to delete the newly added set of elements
          function delIt(eleId)
          {
	      d = document;
	      var ele = d.getElementById(eleId);
	      var parentEle = d.getElementById('agediv');
	      parentEle.removeChild(ele);
          }
        
        var ct_edu = 1;
           function new_link_education()
           {
	       ct_edu++;
	       var div1 = document.createElement('div');
	       div1.id = ct_edu;
	       // link to delete extended form elements
	      var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt('+ ct_edu +')">Del</a></div>';
	      div1.innerHTML = document.getElementById('educationnew').innerHTML + delLink;
	      document.getElementById('education').appendChild(div1);
          }
          // function to delete the newly added set of elements
          function delIt(eleId)
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
	      var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt('+ ct_experience +')">Del</a></div>';
	      div1.innerHTML = document.getElementById('experiencenew').innerHTML + delLink;
	      document.getElementById('experience').appendChild(div1);
          }
          // function to delete the newly added set of elements
          function delIt(eleId)
          {
	      d = document;
	      var ele = d.getElementById(eleId);
	      var parentEle = d.getElementById('experience');
	      parentEle.removeChild(ele);
          } 
        
           var ct_cert= 1;
           function new_link_cert()
           {
	       ct_cert++;
	       var div1 = document.createElement('div');
	       div1.id = ct_cert;
	       // link to delete extended form elements
	      var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt('+ ct_cert +')">Del</a></div>';
	      div1.innerHTML = document.getElementById('certnew').innerHTML + delLink;
	      document.getElementById('cert').appendChild(div1);
          }
          // function to delete the newly added set of elements
          function delIt(eleId)
          {
	      d = document;
	      var ele = d.getElementById(eleId);
	      var parentEle = d.getElementById('cert');
	      parentEle.removeChild(ele);
          } 
        
           var ct_skills= 1;
           function new_link_skills()
           {
	       ct_skills++;
	       var div1 = document.createElement('div');
	       div1.id = ct_skills;
	       // link to delete extended form elements
	      var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt('+ ct_skills +')">Del</a></div>';
	      div1.innerHTML = document.getElementById('skillsnew').innerHTML + delLink;
	      document.getElementById('skills').appendChild(div1);
          }
          // function to delete the newly added set of elements
          function delIt(eleId)
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
	      var delLink = '<div style="text-align:right;margin-right:65px"><a href="javascript:delIt('+ ct_lang +')">Del</a></div>';
	      div1.innerHTML = document.getElementById('languagesnew').innerHTML + delLink;
	      document.getElementById('languages').appendChild(div1);
          }
          // function to delete the newly added set of elements
          function delIt(eleId)
          {
	      d = document;
	      var ele = d.getElementById(eleId);
	      var parentEle = d.getElementById('languages');
	      parentEle.removeChild(ele);
          } 
            
      </script>
  </head>
  <body>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <?php include("includes/header.php"); ?>

    <div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Post a Job</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep">></span> <span>Post a Job</span></p>
      </div>
    </div>
    <div class="site-section bg-light">
      <div class="container">
           
            <form action="#" class="p-5 bg-white">
             <p>each scetion has a total of 10 points, evaluate each section and mind the values to not go over 10</p>
              <style>fieldset{ border: 1px solid black;}</style>
              <fieldset> 
               <legend style="width:auto; margin-bottom: 0px; font-size: 18px; color:grey;">General information</legend>   
                  
                  <div class="form-group" id="agediv">
                  <label>The age of your employee: </label>
                  <label> From:</label>
                     <input type="number" min="0" max="70" class="col-md-1">
                 <label> to :</label>
                  <input min="0" max="70" class="col-md-1" type="number" />
                    <label> Value :</label>
                     <input type="number" min="1" max="10"/><br/>
                  </div>
                    <p id="addnew"> <a href="javascript:new_link()">add more values</a></p>
                  <div class="col-md-5 row">
                   <div class="form-group" id="degree-level">
                   <p>Gender</p>
                    <select  class="form-control form-control-sm" name="degree-level" >
                    <option selected id="female" >Female</option>
                    <option id="male">Male</option>
                    <option id="both">Both</option>
                    </select>                    
                    </div> 
                  </div>
                </fieldset> 
                
               <fieldset> 
               <legend style="width:auto; margin-bottom: 0px; font-size: 18px; color:grey;">Education</legend>
                <div class="form-group row" id="education">
                
                <div  id="degree-level2" class="form-group col-md-2">
                                           <select  class="form-control" name="degree-level[]">
                                           <option id="highschool" selected>High school</option>
                                            <option id="associate" >Associate degree </option>
                                            <option id="bachelors">Bachelor's degree</option>
                                            <option id="master">Master's degree</option>
                                            <option id="doctoral">Doctoral Degree</option>
                                           </select>
                                           </div>
                        
                                            <div class="form-group col-md-3">
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
                                           
                                          <div class="form-group input-group  col-md-3">
                                             <div class="input-group-prepend">
                                             <button class="btn btn-outline-secondary" type="button" >4</button>
                                             <button class="btn btn-outline-secondary" type="button">5</button>
                                             <button class="btn btn-outline-secondary" type="button" >100%</button>
                                             </div>
                                             <input type="text" class="form-control" placeholder="GPA" aria-label="" aria-describedby="basic-addon1" name="gpa[]">
                                             </div>
                                             
                                             <div class="form-group col-md-2" id="graduation-year">
                                           <input type="text" class="form-control" placeholder="graduation year" min="10" maxlength="10" name="graduationyear[]">
                                         </div> 
                                         
                                        <div class="form-group row">
                                          <label style="padding:6px;">Value: </label>
                                          <input type="number" min="1" max="10"/></div>
                                           <p id="addnew" style="margin:5px;margin-left:16px;"> <a href="javascript:new_link_education()">add</a></p>
                                            </div> 
                                                                                      
               </fieldset> 
                               
            <fieldset> 
               <legend style="width:auto; margin-bottom: 0px; font-size: 18px; color:grey;">Experience</legend>
                <div class="form-group row" id="experience">
                 <div class="form-group col-md-4">
                                             <select name="experiencename[]" id="" class="form-control">
                                             <option value="">experience</option>
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
                                            
                                            <div class="form-group col-md-3" id="duration">
                                           <input type="text" class="form-control" placeholder="experience duration in years" min="10" maxlength="10" name="duration[]">
                                         </div> 
                                          <div class="form-group row">
                                          <label style="padding:6px;">Value: </label>
                                          <input type="number" min="1" max="10"/></div>
                                
                                           <p id="addnew" style="margin:5px;margin-left:16px;"> <a href="javascript:new_link_experience()">add</a></p>     
                                                                
                                                                                                                                                          
                </div>
                
                </fieldset>
                
                <fieldset> 
               <legend style="width:auto; margin-bottom: 0px; font-size: 18px; color:grey;">Certifications</legend>
                <div class="form-group row" id="cert">
                   
                    <div class="form-group col-md-4">
                                             <select name="certificationname[]" id="" class="form-control">
                                             <option value="">certifications</option>
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
                                            
                                            <div class="form-group">
                                          <label>Value: </label>
                                          <input type="number" min="1" max="10"/></div>
                                            <p id="addnew" style="margin:5px;margin-left:16px;"> <a href="javascript:new_link_cert()">add</a></p>   
                   
                   
                    </div>
                </fieldset>
                
                <fieldset> 
               <legend style="width:auto; margin-bottom: 0px; font-size: 18px; color:grey;">Skills</legend>
                <div class="form-group row" id="skills">
                                      <div>
                                       <div class="form-group col-md-10">
                                             <select name="skillname[]" id="" class="form-control">
                                             <option value="">skills</option>
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
                   
                                          <div class="form-group">
                                          <label>Value: </label>
                                          <input type="number" min="1" max="10"/></div>
                                           <p id="addnew" style="margin:5px;margin-left:16px;"> <a href="javascript:new_link_skills()">add</a></p>  
                                           
                                           
                                           
                                            </div>
                                            </fieldset>
                                            <fieldset>
                                        <legend style="width:auto; margin-bottom: 0px; font-size: 18px; color:grey;" >Languages</legend>
                                        <div id="languages" class="form-group row">
                                            
                                           <div class="form-group col-md-2">
                                             <select name="languagename[]" id="" class="form-control">
                                             <option value="">languages</option>
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
                                              <div class="form-group col-md-2" id="language-level2">
                                           <select  class="form-control" name="languagelevel[]">
                                           
                                            <option id="beginner" selected>Beginner</option>
                                            <option id="intermediate">intermediate</option>
                                            <option id="Advanced">Advanced</option>
                                            <option id="fluent">Fluent</option>
                                           </select>
                                           
                                           </div>
                                           <div class="form-group">
                                          <label>Value: </label>
                                          <input type="number" min="1" max="10"/></div> 
                                        </div>
                                  <p id="addnew_language"> <a href="javascript:new_link_languages()">add</a></p>
                                    
                                     </fieldset> 
            
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Post" class="btn btn-primary  py-2 px-5">
                </div>
              </div>
            </form>
          </div>
        
      </div>
    </div>
    
    
    
    
    
    
    
    
    
    
    
     <div class="form-group" id="agedivnew" style="display:none;">
                  <label>The age of your employee: </label>
                  <label> From:</label>
                     <input type="number" min="0" max="70" class="col-md-1">
                 <label> to :</label>
                  <input min="0" max="70" class="col-md-1" type="number" />
                    <label> Value :</label>
                     <input type="number" min="1" max="10"/><br/>
                  </div>

   <?php include("includes/footer.php"); ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  

  <script src="js/main.js"></script>
    
  </body>
</html>
<div class="form-group" id="agediv1" style="display:none">
                  <label>The age of your employee: </label>
                  <label> From:</label>
                     <input type="number" min="0" max="70" class="col-md-1">
                 <label> to :</label>
                  <input min="0" max="70" class="col-md-1" type="number" />
                    <label> Value :</label>
                     <input type="number" min="1" max="10"/><br/>
                  </div>
                  
                   <div class="form-group row" id="educationnew" style="display:none;">
                
                <div  id="degree-level2" class="form-group col-md-5">
                                           <select  class="form-control" name="degree-level[]">
                                           <option id="highschool" selected>High school</option>
                                            <option id="associate" >Associate degree </option>
                                            <option id="bachelors">Bachelor's degree</option>
                                            <option id="master">Master's degree</option>
                                            <option id="doctoral">Doctoral Degree</option>
                                           </select>
                                           </div>
                        
                                            <div class="form-group col-md-5">
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
                                           
                                          <div class="form-group input-group  col-md-5">
                                             <div class="input-group-prepend">
                                             <button class="btn btn-outline-secondary" type="button" >4</button>
                                             <button class="btn btn-outline-secondary" type="button">5</button>
                                             <button class="btn btn-outline-secondary" type="button" >100%</button>
                                             </div>
                                             <input type="text" class="form-control" placeholder="GPA" aria-label="" aria-describedby="basic-addon1" name="gpa[]">
                                             </div>
                                             
                                             <div class="form-group col-md-5" id="graduation-year">
                                           <input type="text" class="form-control" placeholder="graduation year" min="10" maxlength="10" name="graduationyear[]">
                                         </div> 
                                         
                                        <div class="form-group">
                                          <label style="padding:15px;">Value: </label>
                                          <input type="number" min="1" max="10"/></div>
                                          
                                            </div> 
                                            
                                           <div class="form-group row" id="experiencenew" style="display:none;">
                                           <div class="form-group col-md-9">
                                             <select name="experiencename[]" id="" class="form-control">
                                             <option value="">experience</option>
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
                                            
                                            <div class="form-group col-md-9" id="duration">
                                           <input type="text" class="form-control" placeholder="experience duration in years" min="10" maxlength="10" name="duration[]">
                                         </div> 
                                          
                                          <label style="padding:15px;">Value: </label>
                                          <input type="number" min="1" max="10"/>
                                
                                      
                                          </div>
                                          
                                           <div class="form-group  col-md-3" id="certnew" style="display:none;" >
                   
                                         <div style="padding-left:16px;">
                                             <select name="certificationname[]" id="" class="form-control">
                                             <option value="">certifications</option>
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
                                          
                                           <div>
                                          <label style="padding-left:16px;" class="form-group">Value: </label>
                                          <input type="number" min="1" max="10"/>
                                          </div>
                                          </div>
                                          
                                      <div class="form-group row" id="skillsnew" style="display:none;">
                                      <div>
                                       <div class="form-group col-md-10">
                                             <select name="skillname[]" id="" class="form-control">
                                             <option value="">skills</option>
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
                   
                                          <div class="form-group">
                                          <label style="padding-left:16px;">Value: </label>
                                          <input type="number" min="1" max="10"/></div>
                                           <p id="addnew" style="margin:5px;margin-left:16px;"> <a href="javascript:new_link_skills()">add</a></p>  
                                           
                                            </div>
                                            
                                            <div id="languagesnew" class="form-group row" style="display:none;">
                                            
                                           <div class="form-group col-md-10">
                                             <select name="languagename[]" id="" class="form-control">
                                             <option value="">languages</option>
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
                                              <div class="form-group col-md-12" id="language-level2">
                                           <select  class="form-control" name="languagelevel[]">
                                           
                                            <option id="beginner" selected>Beginner</option>
                                            <option id="intermediate">intermediate</option>
                                            <option id="Advanced">Advanced</option>
                                            <option id="fluent">Fluent</option>
                                           </select>
                                           
                                           </div>
                                           <div class="form-group">
                                          <label style="padding-left:16px;">Value: </label>
                                          <input type="number" min="1" max="10"/></div> 
                                        </div>
                    
                
                                          
                                         