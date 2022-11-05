<html>


	<body>
		
		<?php
		
		
		// NUMBER 1
		
		$salary_rate = "600";
		$salary = $salary_rate*15;
		$taxable_amount = 0.3* $salary;
		$net_pay = $salary - $taxable_amount;
		
		
		echo "<b>PROBLEM 1</b>";
		echo "<br>";
		echo "<br>";
		echo "Salary rate: ".$salary_rate."/day";
		echo "<br>";
		echo "Salary: ".$salary;
		echo "<br>";
		echo "Taxable amount: ".$taxable_amount;
		echo "<br>";
		echo "Net pay: ".$net_pay;
		
		echo "<br>";
		echo "<br>";
		echo "<br>";
		
		
		// Number 2
		
		$sum = 0;
		for ($x = 0; $x <=50; $x++)
		{
			$sum+=$x;
			
		}
		
		echo "<b>PROBLEM 2</b>";
		echo "<br>";
		echo "<br>";
		echo "SUM = ".$sum
		
		

		?>
		
	</body>
	
	
</html>