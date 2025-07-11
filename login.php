<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>System Admin Login</title>
        <link rel="stylesheet" href="../access/login/css/style.css" type="text/css" />
        
    </head>
    <body class="login admin">
    
<div class="wrapper">
	<div class="container">
		<h1>SYSTEM ADMIN LOGIN</h1>
        <h1 style="display: none;" id="waiting">Please wait...</h1>
		<?php
                $messages = $this->messages->get();
                if (is_array($messages)):
                    foreach ($messages as $type => $msgs):
                        if (count($msgs > 0)):
                            foreach ($msgs as $message):
                                echo ('<div id="messages"><div class="' . $type . '">' . $message . '</div></div> ');
                            endforeach;
                        endif;
                    endforeach;
                endif;
                ?>
		<form class="form" id="login" method="post">
			<input type="text" placeholder="Username" name="username" required>
			<input type="password" name="password" placeholder="Password" required>
			<button type="submit" id="login-button">Login</button>
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
    
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="../access/login/js/index.js"></script>
</body>
</html>