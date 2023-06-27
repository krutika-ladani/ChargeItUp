<?php
		session_start();
?>
	
<html>
	<head>
		<style type="text/css">
				body{
					margin:0;
					color:#6a6f8c;
					background:#c8c8c8;
					font:600 16px/18px 'Open Sans',sans-serif;
				}
				*,:after,:before{box-sizing:border-box}
				.clearfix:after,.clearfix:before{content:'';display:table}
				.clearfix:after{clear:both;display:block}
				a{color:inherit;text-decoration:none}

				.login-wrap{
					width:100%;
					margin:auto;
					max-width:525px;
					min-height:670px;
					position:relative;
					background:url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
					box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
				}
				.login-html{
					width:100%;
					height:100%;
					position:absolute;
					padding:90px 70px 50px 70px;
					background:rgba(40,57,101,.9);
				}
				.login-html .sign-in-htm,
				.login-html .sign-up-htm{
					top:0;
					left:0;
					right:0;
					bottom:0;
					position:absolute;
					transform:rotateY(180deg);
					backface-visibility:hidden;
					transition:all .4s linear;
				}
				.login-html .sign-in,
				.login-html .sign-up,
				.login-form .group .check{
					display:none;
				}
				.login-html .tab,
				.login-form .group .label,
				.login-form .group .button{
					text-transform:uppercase;
				}
				.login-html .tab{
					font-size:22px;
					margin-right:15px;
					padding-bottom:5px;
					margin:0 15px 10px 0;
					display:inline-block;
					border-bottom:2px solid transparent;
				}
				.login-html .sign-in:checked + .tab,
				.login-html .sign-up:checked + .tab{
					color:#fff;
					border-color:#1161ee;
				}
				.login-form{
					min-height:345px;
					position:relative;
					perspective:1000px;
					transform-style:preserve-3d;
				}
				.login-form .group{
					margin-bottom:15px;
				}
				.login-form .group .label,
				.login-form .group .input,
				.login-form .group .button{
					width:100%;
					color:#fff;
					display:block;
				}
				.login-form .group .input,
				.login-form .group .button{
					border:none;
					padding:15px 20px;
					border-radius:25px;
					background:rgba(255,255,255,.1);
				}
				.login-form .group input[data-type="password"]{
					text-security:circle;
					-webkit-text-security:circle;
				}
				.login-form .group .label{
					color:#aaa;
					font-size:12px;
				}
				.login-form .group .button{
					background:#1161ee;
				}
				.login-form .group label .icon{
					width:15px;
					height:15px;
					border-radius:2px;
					position:relative;
					display:inline-block;
					background:rgba(255,255,255,.1);
				}
				.login-form .group label .icon:before,
				.login-form .group label .icon:after{
					content:'';
					width:10px;
					height:2px;
					background:#fff;
					position:absolute;
					transition:all .2s ease-in-out 0s;
				}
				.login-form .group label .icon:before{
					left:3px;
					width:5px;
					bottom:6px;
					transform:scale(0) rotate(0);
				}
				.login-form .group label .icon:after{
					top:6px;
					right:0;
					transform:scale(0) rotate(0);
				}
				.login-form .group .check:checked + label{
					color:#fff;
				}
				.login-form .group .check:checked + label .icon{
					background:#1161ee;
				}
				.login-form .group .check:checked + label .icon:before{
					transform:scale(1) rotate(45deg);
				}
				.login-form .group .check:checked + label .icon:after{
					transform:scale(1) rotate(-45deg);
				}
				.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
					transform:rotate(0);
				}
				.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
					transform:rotate(0);
				}

				.hr{
					height:2px;
					margin:60px 0 50px 0;
					background:rgba(255,255,255,.2);
				}
				.foot-lnk{
					text-align:center;
				}
				.warning
				{
					color: red;
					position: absolute;
					top: 20px;
				}
		</style>
		
	</head>
	<body>
		<div class="login-wrap">
			<div class="login-html">
				<p class="warning"></p>
				<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
				<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
				<div class="login-form">
					<div class="sign-in-htm">
					<form method="post" action="login-form.php" id="login-form">
						<div class="group">
							<label for="eadd1" class="label">Email Address</label>
							<input id="eadd1" type="email" class="input" name="emaill">
						</div>
						<div class="group">
							<label for="pass1" class="label">Password</label>
							<input id="pass1" type="password" class="input" data-type="password" name="pswdl">
						</div>
						<br></br>
						<br></br>
						<div class="group">
							<button onclick="signinvalidate()" type="button" class="button"  value="Sign In">Sign In</button>
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
							<a href="#forgot">Forgot Password?</a>
						</div>
					</form>
					</div>
					<div class="sign-up-htm">
					<form method="post" action="login-form.php" id="signup-form">
						<div class="group">
							<label for="user0" class="label">Name</label>
							<input id="user0" type="text" class="input" name="names">
						</div>
						<div class="group">
							<label for="pass2" class="label">Password</label>
							<input id="pass2" type="password" class="input" data-type="password" name="pswds">
						</div>
						<div class="group">
							<label for="pass3" class="label">Repeat Password</label>
							<input id="pass3" type="password" class="input" data-type="password" name="cpswds">
						</div>
						<div class="group">
							<label for="eadd" class="label">Email Address</label>
							<input id="eadd" type="email" class="input" name="emails">
						</div>
						<div class="group">
							<button onclick="signupvalidate()" type="button" class="button"  value="Sign Up">Sign Up</button>
						</div>
			</form>
						<div class="hr"></div>
						<div class="foot-lnk">
							<label for="tab-1">Already Member?</label>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script>
				/*function signin(){
						var p=document.getElementById("user1").value;
						var q=document.getElementById("pass1").value;
						str="Ayushi";
						str1="Angel";
						str2="Krutika";
						pss="1234ay";
						pss1="2203an";
						pss2="0212kr";
						if((p==str && q==pss)||(p==str1 && q==pss1)||(p==str2 && q==pss2)){ window.location.href="navigate.html"; }
						else{ alert("Invalid Usernmae or Password! \nPlease Verify it."); }
				}
				function signup(){
						var t=document.getElementById("pass2").value;
						var r=document.getElementById("pass3").value;
						var a=document.getElementById("user0").value;
						var b=document.getElementById("eadd").value;
						if(a=="" || b=="" || t=="" || r=="" || t!==r ){ alert("Please enter valid data in all the fields");}
						else{window.location.href="navigate.html";}*/

				function signupvalidate()
				{
					var war=document.getElementsByClassName("warning")[0];
					var uname=document.getElementsByName("names")[0].value;
					var email=document.getElementsByName("emails")[0].value;
					var pswd=document.getElementsByName("pswds")[0].value;
					var cpswd=document.getElementsByName("cpswds")[0].value;

					if(uname.length==0 | email.length==0 | pswd.length==0 | cpswd.length==0)
					{
						war.innerHTML="Fields cannot be empty! Enter all the credentials.";
					}
					else
					{
						var p= /^[a-zA-Z ]{2,30}$/;
						if(!p.test(uname))
						{
							war.innerHTML="Name can only contain lowercase letters, uppercase letters and space.";
						}
						else
						{
							if(pswd.length<6 | pswd.length>8)
							{
								war.innerHTML="Password length must be betwwen 6 to 8 characters.";
							}
							else
							{
								if(pswd!=cpswd)
								{
									war.innerHTML="Passwords must match!";
								}
								else
								{
									document.getElementById("signup-form").submit();
								}
							}
						}

					}
				}

				function signinvalidate()
				{
					var war=document.getElementsByClassName("warning")[0];
					var email=document.getElementsByName("emaill")[0].value;
					var pswd=document.getElementsByName("pswdl")[0].value;

					if(email.length==0 | pswd.length==0)
					{
						war.innerHTML="Enter all the credentials!";
					}
					else
					{
					
						if(pswd.length<6 | pswd.length>8)
						{
							war.innerHTML="Password length must be betwwen 6 to 8 characters.";
						}
						else
						{
							document.getElementById("login-form").submit();
						}
						
					}
				}					
		</script>
		<?php
		if(isset($_POST["names"]) && isset($_POST["emails"])&& isset($_POST["pswds"])&& isset($_POST["cpswds"]))
        {
            $name = $_POST["names"];
            $email = $_POST["emails"];
            $pswd = $_POST["pswds"];
            $cpswd = $_POST["cpswds"];

            try
            {    
                $conn = mysqli_connect("127.0.0.1:4306", "root", "", "chargeitup");
                if(!$conn)
                {
                    die("<script> 
                            var war=document.getElementsByClassName('warning')[0];
                            war.innerHTML='There is some problem from our side. Please try again after some time.';
                        </script>");
                }
                else
                {
                    $sql = "INSERT INTO login_credentials(uname,email,pswd) VALUES ('$name', '$email', '$pswd')";
                    $result = mysqli_query($conn, $sql);
                    if($result)
                    {
                        $_SESSION["email"] = $email;
                        mysqli_close($conn);
						echo "
							<script>
							 	location.replace('http://localhost/chargeitup/navigate.php');
							</script>";
                    }
                    else
                    {
                        echo "<script> 
                            var war=document.getElementsByClassName('warning')[0];
                            war.innerHTML='There is some problem from our side. Please try again after some time.';
                        </script>";
                    }
                    
                }
            } 
            catch (mysqli_sql_exception $e) 
            {
                if (mysqli_errno($conn) == 1062) 
                {
                    echo "<script> 
                            var war=document.getElementsByClassName('warning')[0];
                            war.innerHTML='Email already registered!';
                        </script>";
                }
                else
                {
                    throw $e;   
                }
            }
            catch (Exception $e) 
            {
                // not a MySQL exception
                echo "$e->getMessage()";
            }
           
        }
		if(isset($_POST["emaill"])&& isset($_POST["pswdl"]))
        {
            $email = $_POST["emaill"];
            $pswd = $_POST["pswdl"];
            try
            {    
                $conn = mysqli_connect("127.0.0.1:4306", "root", "", "chargeitup");
                if(!$conn)
                {
                    die("<script> 
                            var war=document.getElementsByClassName('warning')[0];
                            war.innerHTML='There is some problem from our side. Please try again after some time.';
                        </script>");
                }
                else
                {
                    $sql = "select email,pswd from login_credentials where email='$email'";
                    $result = mysqli_query($conn, $sql);
                    if($row = mysqli_fetch_assoc($result))
                    {
                        if($row['pswd']==$pswd)
                        {
                            $_SESSION["email"] = $email;
                            mysqli_close($conn);
                            echo "
								<script>
									location.replace('http://localhost/chargeitup/navigate.php');
								</script>"; 
                        }
                        else
                        {
                            echo "<script> 
                                    var war=document.getElementsByClassName('warning')[0];
                                    war.innerHTML='Password is incorrect!';
                                </script>";

                        }
                    } 
                    else
                    {
                        echo "<script> 
                                var war=document.getElementsByClassName('warning')[0];
                                war.innerHTML='No such user exists!';
                            </script>";
                    }                  
                }
            } 
            catch (mysqli_sql_exception $e) 
            {
                throw $e;   
            }
            catch (Exception $e) 
            {
                // not a MySQL exception
                echo "$e->getMessage()";
            }
           
        }
		?>
	</body>
</html>