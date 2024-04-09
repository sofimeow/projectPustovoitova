	<div id="footer">
		<div>
			<ul>
				<li class="first">
					<h2>Delivery Hotline</h2>
					<h3>Call 0-123-456-789</h3>
					<ul>
						<li>
							<a href="http://www.freewebsitetemplates.com/go/facebook" class="facebook"></a>
						</li>
						<li>
							<a href="http://www.freewebsitetemplates.com/go/twitter" class="twitter"></a>
						</li>
						<li>
							<a href="http://www.freewebsitetemplates.com/go/googleplus" class="googleplus"></a>
						</li>
					</ul>
				</li>
				<li>
					<a href="index.php"><img class="logo" src="../images/logo-footer.png" alt=""></a>
					<ul class="navigation">
					<?php
           			$pages = array('Domov'=>'home.php',
           			'About Us'=>'about.php',
           			'Menu'=>'burger.php',
           			'Contact'=>'contact.php'  
           			);
           			echo(generate_menu($pages));
        ?>
					</ul>
					<span>&copy; 2023 RetroDiner.com. All Rights Reserved</span>
				</li>
				<li class="last">
					<h2>Follow Us By Email</h2>
					<form action="index.php">
						<input type="text" name="subscribe" value="Enter Your Email Here...">
						<input type="submit" value="">
					</form>
				</li>
			</ul>
		</div>
	</div>
</body>
</html>