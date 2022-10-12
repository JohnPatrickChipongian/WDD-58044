<html>

	<body>
		
		<?php
		$score = "65";
		
		if($score >= "70")
		{
			echo "You passed.";
			
		}elseif($score <= "69" && $score>= "60"){
		
			echo "You will take remedials";
			
		}else{
		
			echo "You failed";
			
		}
		
		?>
		
	</body>
	
	
</html>