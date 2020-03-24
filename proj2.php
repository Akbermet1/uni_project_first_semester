<!DOCTYPE html>
<head>
	<title> Second project </title>
	<link rel="stylesheet" type="text/css" href="style2_project2.css">
</head>
<body>

<div> 

	<?php
				$weekday = date("l");
				$date = date(", m.d.Y");
				/*echo "Today is " . $weekday;
				echo date(", m.d.Y"); */
			if($weekday == "Sunday" || $weekday == "Saturday"){
			$STYLE = 'color: #846A46;';
			$TEXT = "Today is " . $weekday;
			}else
				{ $STYLE = '';
				$TEXT = "Today is " . $weekday;
				//echo date(", m.d.Y");
}
			?>

		<header style="<?php echo $STYLE ?>"> 
		<?php echo $TEXT, $date ?>
		</header>

		<nav> 
			<ul>
				<li class="nav"> <a href="?link=1"> Basic information about me </a> </li>
				<li class="nav"> <a href="?link=2"> List of cources of 1st semester </a> </li>
				<li class="nav"> <a href="?link=3"> My favourite artists </a> </li>
			</ul>

		</nav>

		<article> <?php 
			if(isset($_GET['link']))
		{
			$link = $_GET['link'];
			if($link == 1){
			include 'link1';
			}
			elseif($link == 2){
			include 'link2';
			}
			elseif($link == 3){
			include 'link3';
			}
			else {echo 'Empty!';}
		}
			?>
		</article>

		<?php
			
			if($weekday == "Sunday"){
			$CHANGE = 'color: #846A46;';
			} else {$CHANGE = ''; }
		
		?>
		<footer style ="<?php echo $CHANGE ?>">
			<?php 
		if(isset($_GET['link']))
		{
			$link = $_GET['link'];
			if($link == 1){
			$SENTENCE = 'Smile, today is  great day!';
			echo $SENTENCE;
			}
			else {echo 'Akbermet Zhumabaeva';}
		} else {echo 'Akbermet Zhumabaeva';}
			
		?>
		
		
		</footer>

	</div>

</body>
</html>
