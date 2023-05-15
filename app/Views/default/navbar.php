<style>
  /* CSS */
.button-1 {
  background-color: #ffffff;
  border-radius: 40px;
  border-style: #007690 solid 1px;
  box-sizing: border-box;
  color: #065468;
  cursor: pointer;
  display: inline-block;
  font-family: "Haas Grot Text R Web", "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-weight: 500;
  height: 40px;
  line-height: 20px;
  list-style: none;
  margin: 0;
  outline: none;
  padding: 10px 16px;
  position: relative;
  text-align: center;
  text-decoration: none;
  transition: color 100ms;
  vertical-align: baseline;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
}

.button-1:hover,
.button-1:focus {
  background-color: #067895;
  color: #ffffff;
  border: #ffffff solid 2px;
}
  </style>

<!-- header -->
<header>
    <!-- header inner -->
    <div class="header-top">
      <div class="header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-xl-2 col-lg-4 col-md-4 col-sm-3 col logo_section">
              <div class="full">
                <div class="center-desk">
                  <div class="logo">
                    <a href="<?php echo base_url();?>"><img src="<?php echo base_url(); ?>/public/assets/images/headerLogo1.png" alt="#" /></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-10 col-lg-8 col-md-8 col-sm-9">
              <div class="header_information">
               <div class="menu-area">
                <div class="limit-box">
                  <nav class="main-menu ">
                    <ul class="menu-area-main">
                      <li class="<?php if($page == 'index') {echo 'active';}?>"> <a href="<?php echo base_url(); ?>">Home</a> </li>
                      <li class="<?php if($page == 'about') {echo 'active';}?>">  <a href="<?php echo base_url("about");?>">About</a> </li>
                      <li class="<?php if($page == 'courses') {echo 'active';}?>"> <a href="<?php echo base_url("courses");?>">Courses</a> </li>
                      <li class="<?php if($page == 'downloadCourses'){echo 'active';}?>"> <a href="<?php echo base_url("downloadCourses");?>">Download Courses</a> </li>
                      <li class="<?php if($page == 'contactUs'){echo 'active';}?>"> <a href="<?php echo base_url("contactUs");?>">Contact</a> </li>
                      <a class="button-1" href="#" role="button">Login</a>
                      <a class="button-1" href="#" role="button">Register</a>
                    </ul>
                     
                   </nav>
                 </div>
               </div> 
               <!-- <div class="mean-last">
                       <a href="#"><img src="<?//php echo base_url(); ?>/public/assets/images/search_icon.png" alt="#" /></a> <a href="#">login/sing up</a></div>               -->
                       
              </div>
           </div>
         </div>
       </div>
     </div>
     <!-- end header inner -->