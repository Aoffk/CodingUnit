<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	*{ margin:0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'poppins' sans-serif;
	}
	body{ display: flex;
		justify-content: center;
		align-items: center;
		min-height: 100vh;
		background: #1f293a;
	}
	.login-box{position:absolute;
		width: 400px;
		/*background: red;*/
	}
	.login-box form{width: 100%;
		padding: 0 50px;
	}
	h2{font-size: 2em;
		color: #0ef;
		text-align: center;
	}
	.input-box {position: relative;
		margin: 25px 0;
	}
	.input-box input{width: 100%;
		height:50px ;
		background: transparent;
		border: 2px solid #2c4766;
		outline: none;
		border-radius: 40px;
		transition: .5s ease;
		color: white;
		font-size: 1em;
		transition: .5s ease;
		padding: 0 20px;
	}

.input-box input:focus,
.inputS-box input:valid{border-color: #0ef;
}

	.input-box label{position: absolute;
		top: 50%;
		left: 20px;
		transform: translateY(-50%);
		font-size: 1em;
		color: #fff;
		pointer-events: none;
		transition: .5s ease;
	}
	.forgot-pass{margin: -15px 0 10px;
		text-align: center;
	}
	.forgot-pass a{font-size: -85em;
		color: white;
		text-decoration: none;
	}
	.forgot-pass a:hover{text-decoration:underline;
	}
	.btn{width:100%;
		height:45px ;
		background: #0ef;
		border: none;
		border-radius: 40px;
		cursor: pointer;
		font-size: 1em;
		color:#1f293a;
		font-weight: 600;
	}
.signup-link{margin: 20px 0 10px;
	text-align: center;
}
.signup-link a{font-size: 1em;
	color: #0ef;
	text-decoration: none;
	font-weight: 600;
}
.signup-link a:hover{text-decoration: underline;
}
.input-box input:focus~label,
.input-box input:valid~label{top:1px;
	font-size:-8em;
	background:#1f293a;
	padding: 0 6px;
	color: #0ef;
}
.container{position: relative;
	width: 256px;
	height: 256px;
	display: flex;
	justify-content: center;
	align-items: center;
}
.container span{position:absolute;
	left: 0;
	width: 32px;
	height: 6px;
	background: #2c4766;
	border-radius: 8px;
	transform: scale(2.2) rotate(calc(var(--i)*(360deg/50)));
	transform-origin: 128px;
	animation: animateBlink 3s linear infinite;
	animation-delay:calc(var(--i)*(3s/50)) ;
}
@keyframes animateBlink{
	0%{background:#0ef;}
 25%{background:#0ef;}

}

</style>
<body>
	<div class="container">
<div class="login-box">
	<h2>CodingUnit</h2>
	<!-- form edited to handle login.php-->
<form action="php/login_handler.php" method="POST">
  <div class="input-box">
  <input type="email" name="email" required><br>
  <label>Email</label>
	</div>
  <div class="input-box">
		<input type="password" name="password" required>
		<label>Password</label>
		</div>
		<div class="forgot-pass">
		<a href="#">Forgot Your Password</a>
		</div>
		<button type="submit" class="btn">Login</button>
		<div class="signup-link">
		<a href="signup.php">Signup</a>
		</div>
	</form>
</div>
<span style="--i:0;"></span>
<span style="--i:1;"></span>
<span style="--i:2;"></span>
<span style="--i:3;"></span>
<span style="--i:4;"></span>
<span style="--i:5;"></span>
<span style="--i:6;"></span>
<span style="--i:7;"></span>
<span style="--i:8;"></span>
<span style="--i:9;"></span>
<span style="--i:10;"></span>
<span style="--i:11;"></span>
<span style="--i:12;"></span>
<span style="--i:13;"></span>
<span style="--i:14;"></span>
<span style="--i:15;"></span>
<span style="--i:16;"></span>
<span style="--i:17;"></span>
<span style="--i:18;"></span>
<span style="--i:19;"></span>
<span style="--i:20;"></span>
<span style="--i:21;"></span>
<span style="--i:22;"></span>
<span style="--i:23;"></span>
<span style="--i:24;"></span>
<span style="--i:25;"></span>
<span style="--i:26;"></span>
<span style="--i:27;"></span>
<span style="--i:28;"></span>
<span style="--i:29;"></span>
<span style="--i:30;"></span>
<span style="--i:31;"></span>
<span style="--i:32;"></span>
<span style="--i:33;"></span>
<span style="--i:34;"></span>
<span style="--i:35;"></span>
<span style="--i:36;"></span>
<span style="--i:37;"></span>
<span style="--i:38;"></span>
<span style="--i:39;"></span>
<span style="--i:40;"></span>
<span style="--i:41;"></span>
<span style="--i:42;"></span>
<span style="--i:43;"></span>
<span style="--i:44;"></span>
<span style="--i:45;"></span>
<span style="--i:46;"></span>
<span style="--i:47;"></span>
<span style="--i:48;"></span>
<span style="--i:49;"></span>
</div>
</body>
</html>
