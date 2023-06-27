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
					background:url("chargeitup.jpg") no-repeat center;
					box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
				}
				.login-html{
					width:100%;
					height:100%;
					position:absolute;
					padding:90px 70px 50px 70px;
					background:rgba(0,0,0,0);
				}
				.group{
					margin-bottom:15px;
				}
				.group .button{
					border:none;
					padding:15px 20px;
					border-radius:25px;
					background:rgba(255,255,255,.1);
				}
				.group .button{
					background:#1161ee;
					position:relative;
					left:110px;
				}
				
		</style>		
	</head>
	<body>
		<div class="login-wrap">
			<div class="login-html">
				<div class="group">
							<br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br><br></br>
							<button onclick="proceed()" type="submit" class="button"  value="Sign In">Click Here to Proceed</button>
				</div>
			</div>
		</div>
		<script>
			function proceed(){
						window.location.href="login-form.php";
				}
		</script>
	</body>
</html>