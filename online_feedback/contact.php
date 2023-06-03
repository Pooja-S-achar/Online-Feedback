<?php 
include('dbconfig.php');
extract($_POST);
if(isset($save))
{

mysqli_query($conn,"insert into contact values('','$n','$e','$m','$msg',now())");
	
$err="<font color='green'>Admin Will Contact you soon</font>";	

}

?>

        <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                
                <ol class="breadcrumb">
                    
                    </li>
                   
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
       <div class="row">
            <div class="col-md-8"><br><br><br>
     <caption><h2 align="center">Contact Us</h2></caption>
                <form name="sentMessage" method="post" id="contactForm" novalidate>
                  <?php echo @$err; ?>
				    <div class="control-group form-group">
                        
						
						<div class="controls">
                            <label>Name:</label>
                            <input type="text" class="form-control" name="n" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="e" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mobile Number:</label>
                            <input type="mobile" class="form-control" name="m" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" name="msg" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <button type="submit" name="save" class="btn btn-primary">Send Message</button>
					<br><br><br><br>
                </form>
            </div><br><br><br><br><br><br>
			<div class="col-md-4" style="margin-top:30px">
                <h3>Contact Details</h3>
                <p>
                    North Street, Udangudi<br>Thoothukudi(Dt),TamilNadu-628702<br>
                </p>
                <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Phone</abbr>: 8940379384</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">Email</abbr>: <a href="mailto:jjvetri2@gmail.com">jjvetri2@gmail.com</a>
                </p>
               
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.youtube.com/c/vetripandi"><i class="fa fa-youtube-square fa-2x"></i></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/vetripandi2"><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                </ul>
            </div>
        </div>

        </div>
        
            <!-- Contact Details Column -->
            
        <!-- /.row -->

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <!-- /.row -->

    <br/><br/>
    
    </div>
    <!-- /.container -->
