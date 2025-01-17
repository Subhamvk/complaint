<style>

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url("<?php echo base_url('assets/system_img/loginbg.jpg') ?>");
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
}

.container{
height: 100%;
align-content: center;
}

.card{
height: 470px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.5) !important;
}

.social_icon span{
font-size: 60px;
margin-left: 10px;
color: #FFC312;
}

.social_icon span:hover{
color: white;
cursor: pointer;
}

.card-header h3{
color: white;
}

.social_icon{
position: absolute;
right: 20px;
top: -45px;
}

.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

.input-group-prepend-captcha span{
width:100px;
background-color: rgba(0,0,0,0.5) !important;
border:0 !important;
margin-left: 0 !important;	
color: black;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>


<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				<div class="d-flex justify-content-end social_icon">
				<a href="<?php echo $LogonUrlfb ?>"><span><i class="fa fa-facebook-square"></i></span></a>
				<a href="<?php echo $LogonUrlgm ?>"><span><i class="fa fa-google-plus-square"></i></span><a>
				<a href="<?php echo $LogonUrltw ?>"><span><i class="fa fa-twitter-square"></i></span></a>
				</div>
			</div>
			<div class="card-body">
				<form method="post" action="<?php echo site_url('login/userauth') ?>" >
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-user"></i></span>
						</div>
						<input type="text" name="username" class="form-control" placeholder="username">
						
					</div>

					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fa fa-key"></i></span>
						</div>
						<input type="password" name="password" class="form-control" placeholder="password">
						<span class="text-danger"><?php echo form_error('password'); ?></span>
					</div>

					
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<div class="captcha_image">
							<?php if(isset($captchaImage)) echo $captchaImage; ?>
							</div>
							<span class="input-group-text" onclick="refreshCaptcha()" style="cursor:pointer"><i class="fa fa-refresh" ></i></span>
						</div>
					</div>
					<div class="input-group form-group">
					<input type="text" name="captcha" class="form-control" placeholder="Enter Captcha">
				<!--		<span class="text-danger"><?php echo form_error('captcha'); ?></span> -->
					</div>

					<div class="form-group">
						<div class="">							
						</div>
						<input type="submit" value="Login" class="btn float-right login_btn">
					</div>


				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="#">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
    function refreshCaptcha(){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('login/refreshCaptcha'); ?>",
            data: {},
            success: function(captcha){
                $(".captcha_image").html(captcha);
            }
        });
    }
</script>