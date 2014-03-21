<html>
<script>
		var quotes = ['" your crew is absolutely awesome "',
		 '" landscape is lovely, architectural, and downright gorgeous "',
		 '" my neighbors could not say enough about how hard they worked "',
		'" cannot wait to show it off to all of my neighbors and friends "'];
		setInterval(function(){
		document.getElementById("quote_num").innerHTML=quotes[Math.floor((Math.random()*4))];
		},3000);
</script>
<link rel="stylesheet" type="text/css" href="style.css">
<?php include 'content.php'; ?>	
	<body>
		<div id="title">
			<table style="margin: 0px auto;">
				<tr>
				  <td>
			        	<img class="logo1" src="images/logo.jpg">
				  </td>
				  <td>
					<ul class="nav">
						<li class="navElement">Home</li>
						<li class="navElement">About</li>
						<li class="navElement">Services</li>
						<li class="navElement">Gallery</li>
						<li class="navElement">Testimonials</li>
						<li class="navElement">Contact</li>
					</ul>
				  </td>
				</tr>
			</table>
		</div>
		<div id="frontImage">
			&nbsp;
			<div id="quote">
				<b><p id="quote_num"> " 200% pleased with your work and your professionalism " </p></b>
			</div>
		</div>
		<div id="frontContent">
			<table style="margin: 0px auto; padding-top:20px;">
				<tr>
					<td class="mainContent">
						<?php print_home_content(); ?>
					</td>
					<td class="contactBox">
					<table>
						<tr>
							<td>
			<img class="icon" src="images/icon1.png">
							</td>
							<td>
			<p>425.293.4166</p>
							</td>
						</tr>
						<tr>
							<td>
			<img class="icon" src="images/icon2.png">
							</td>
							<td>
			<p>snocohome@ymail.com</p> 
							</td>
						</tr>
						<tr>
							<td>
			<img class="icon" src="images/icon3.png">
							</td>
							<td>
			<p>Follow Us!</p>
							</td>
						</tr>
					</table>
					</td>
				</tr>
			</table>
		</div>
	</body>
</html>
