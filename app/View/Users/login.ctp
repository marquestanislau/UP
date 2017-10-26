<!DOCTYPE html>
<html>
<head>
	<title>SIGERH-Autenticar utilizador</title>
	<style type="text/css">

		.login-page {
		  width: 360px;
		  padding: 8% 0 0;
		  margin: auto;
		}
		.form {
		  position: relative;
		  z-index: 1;
		  background: #FFFFFF;
		  max-width: 360px;
		  margin: 0 auto 100px;
		  padding: 45px;
		  text-align: center;
		  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}
		.form input {
		  font-family: "Roboto", sans-serif;
		  outline: 0;
		  background: #f2f2f2;
		  width: 100%;
		  border: 0;
		  margin: 0 0 15px;
		  padding: 15px;
		  box-sizing: border-box;
		  font-size: 14px;
		}
		.form button {
		  font-family: "Roboto", sans-serif;
		  text-transform: uppercase;
		  outline: 0;
		  background: #4CAF50;
		  width: 100%;
		  border: 0;
		  padding: 15px;
		  color: #FFFFFF;
		  font-size: 14px;
		  -webkit-transition: all 0.3 ease;
		  transition: all 0.3 ease;
		  cursor: pointer;
		}
		.form button:hover,.form button:active,.form button:focus {
		  background: #43A047;
		}
		.form .message {
		  margin: 15px 0 0;
		  color: #b3b3b3;
		  font-size: 12px;
		}
		.form .message a {
		  color: #4CAF50;
		  text-decoration: none;
		}
		.form .register-form {
		  display: none;
		}
		.container {
		  position: relative;
		  z-index: 1;
		  max-width: 300px;
		  margin: 0 auto;
		}
		.container:before, .container:after {
		  content: "";
		  display: block;
		  clear: both;
		}
		.container .info {
		  margin: 50px auto;
		  text-align: center;
		}
		.container .info h1 {
		  margin: 0 0 15px;
		  padding: 0;
		  font-size: 36px;
		  font-weight: 300;
		  color: #1a1a1a;
		}
		.container .info span {
		  color: #4d4d4d;
		  font-size: 12px;
		}
		.container .info span a {
		  color: #000000;
		  text-decoration: none;
		}
		.container .info span .fa {
		  color: #EF3B3A;
		}
		body {
		/*  background: #76b852;  fallback for old browsers 
		  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
		  background: -moz-linear-gradient(right, #76b852, #8DC26F);
		  background: -o-linear-gradient(right, #76b852, #8DC26F);
		  background: linear-gradient(to left, #76b852, #8DC26F);*/
		  font-family: "Roboto", sans-serif;
		  -webkit-font-smoothing: antialiased;
		  -moz-osx-font-smoothing: grayscale;      
		}
		.message {
			color: red;
		}
	</style>
</head>
<body class="w3-blue">	
	<div class="login-page">
	  <div class="form w3-round">
		<center><?php echo $this->Html->image('icon.png', array('alt' => 'login icon', 'class' => 'w3-margin-bottom'));?></center>
	  	<span style="color: red;"><?php echo $this->Session->flash(); ?></span>
	    <form class="register-form">
	      <input type="text" placeholder="name"/>
	      <input type="password" placeholder="password"/>
	      <input type="text" placeholder="email address"/>
	      <button>create</button>
	      <p class="message">Already registered? <a href="#">Sign In</a></p>
	    </form>
	    <?php 

	    	echo $this->Form->create('User', array('class' => 'login-form', 'url' => array('action' => 'login', 'controller' => 'users')));
	    	echo $this->Form->input('User.username', array('type' => 'text', 'placeholder' => 'Nome do utilizador'));
	    	echo $this->Form->input('User.password', array('type' => 'password', 'placeholder' => 'Palavra passe'));
	    ?>
	      <button class="w3-blue"><i class="fa fa-unlock-alt"></i> Autenticar</button>
	      <p class="message"><a href="<?php echo $this->Html->url(array('action' => 'recuperar', 'controller' => 'users'));?>">N&atilde;o consegue autenticar?</a></p>
	    <?php 
	    	echo $this->Form->end();
	     ?>
	    <!-- <form class="login-form">
	      <input type="text" placeholder="Nome do utilizador"/>
	      <input type="password" placeholder="Palavra passe"/>
	    </form> -->
	  </div>
	</div>
</body>
</html>