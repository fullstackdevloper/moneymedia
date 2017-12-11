<?php 
$base_url = Yii::app()->getBaseUrl(true);
?>
<div class="page-content">
         <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <div id="portlet-config" class="modal hide">
            <div class="modal-header">
               <button data-dismiss="modal" class="close" type="button"></button>
               <h3>portlet Settings</h3>
            </div>
            <div class="modal-body">
               <p>Here will be a configuration form</p>
            </div>
         </div>
		 
         <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
         <!-- BEGIN PAGE CONTAINER-->
		 
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                  <!-- BEGIN STYLE CUSTOMIZER -->
<!--                   <div class="color-panel hidden-phone">
                     <div class="color-mode-icons icon-color"></div>
                     <div class="color-mode-icons icon-color-close"></div>
                     <div class="color-mode">
                        <p>THEME COLOR</p>
                        <ul class="inline">
                           <li class="color-black current color-default" data-style="default"></li>
                           <li class="color-blue" data-style="blue"></li>
                           <li class="color-brown" data-style="brown"></li>
                           <li class="color-purple" data-style="purple"></li>
                           <li class="color-white color-light" data-style="light"></li>
                        </ul>
                        <label class="hidden-phone">
                        <input type="checkbox" class="header" checked value="" />
                        <span class="color-mode-label">Fixed Header</span>
                        </label>                   
                     </div>
                  </div>	 -->
				  
				<h3 class="page-title">
						Edit User			
				</h3>
				
				<ul class="breadcrumb">
					<li>
						<i class="icon-home"></i>
							<a href="<?php echo $base_url;?>/Admin/dashboard">Home</a> 
											
								<i class="icon-angle-right"></i>
						</li>
						<li>
							<a href="#">Edit User</a>
						</li>		
				</ul>
               </div>
			 </div>
			 
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid profile">
			
               <div class="span12">
                  <!--BEGIN TABS-->
                  <div class="tabbable tabbable-custom tabbable-full-width">
                     
					 
                     <div class="tab-content">
                        <div>
							<!-- BEGIN EXAMPLE TABLE PORTLET-->
                  <div class="portlet box blue">
                     <div class="portlet-title">
                        <div class="caption"><a href="#">Edit Profile</a></div>
                     </div>
					 
                     <div class="portlet-body">
                        					
                        
						<div class="portlet-body">
              <div class="row-fluid">
                <div class="span12">
                 	<form class="form-horizontal" id="addpageformId" action="<?php echo $base_url;?>/User/updatemyprofile/<?php echo($mydata['id']); ?>" enctype="multipart/form-data" method="post">			  
                  <input class="span9" id="id" name="id" type="hidden" value=""/>
				  
					<div class="form-row row-fluid">
						<div class="span12">
							<div class="row-fluid">
								<span id="errormsgpage"></span>
							</div>
						</div>
					</div> 
                    <div class="span6">
					
                        <div class="control-group">
                          <label class="control-label">First Name <span>*</span></label>
                          <div class="controls">
                            <input type="text" name="f_name" placeholder="First Name" class="m-wrap span12"  required value="<?php echo($mydata['UserMeta']['firstname']); ?>" />
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label">Last Name <span>*</span></label>
                          <div class="controls">
                            <input type="text" name="l_name" placeholder="Last Name" class="m-wrap span12" value="<?php echo($mydata['UserMeta']['lastname']); ?>" required  />
                          </div>
                        </div>
                        <div class="control-group">
                          <label class="control-label">Email <span>*</span></label>
                          <div class="controls">
                            <input type="email" name="email" placeholder="Email" class="m-wrap span12" value="<?php echo $mydata['login_email'];?>" required  />
                          </div>
                        </div>
                        
                       
                        <div class="control-group">
                          <label class="control-label">Zip Code</label>
                          <div class="controls">
							<div id="editor1_div"></div>
							<input type="text" name="z_code" placeholder="Zip Code" class="m-wrap span12" value="<?php echo($mydata['UserMeta']['zip']); ?>" required />
                          </div>
                        </div>
                      </div>
					  
					  <div class="span3">
						  <?php if(empty($mydata['UserMeta']['user_image'])){ ?>
							  <img src="http://www.lcfc.com/images/common/bg_player_profile_default_big.png">
						 <?php } else{ ?>
							 <img src="<?php echo $mydata['UserMeta']['user_image'] ?>">
						  <?php } ?>
					  </div>
					  
                      <!--span6--></div>
					  
						<div class="span6">
                      <div class="ad-usr-secnd">
						  
						  	<div class="control-group">
								<div class="controls">
									<button class="btn green" type="submit" name="update">Submit</button>
									<button class="btn" type="reset" name="cancel">Cancel</button>
								</div>
							</div>
                          
                        </div>
                      </div>
					</form>	
                      <!--ad-usr-secnd--></div>
				
                </div>
              </div>
						
						
						
                     </div>
				
                  </div>
                  <!-- END EXAMPLE TABLE PORTLET-->
  
                        </div>
                        <!--end tab-pane-->
                     </div>
                  </div>
                  <!--END TABS-->
               </div>
            </div>
            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER--> 
      </div>
      <!-- END PAGE -->