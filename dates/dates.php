<?php
	include_once "../../header.php"
?>
	<body>
		<h1>
			<?php
                echo "Today<br>";				
				echo date("Y-m-d H:i:s").'<br>';
                echo "Yesterday<br>";
                echo date("Y-m-d H:i:s", time()-3600*24).'<br>';
                echo "Other format<br>";
                echo date("F j Y, H:i:s").'<br>';
                echo "Timestamp<br>";
                echo time().'<br>';
                echo "Parse date<br>";
                $parsedDate = date_parse('2021-08-21 14:00:44');
                echo '<pre>';
                var_dump($parsedDate);
                echo '</pre>';
                echo "Parse date from format<br>";
                $dateString = 'February 4 2020 12:45:49';
                $parsedDate = date_parse_from_format('F j Y H:i:s',$dateString);
                echo '<pre>';
                var_dump($parsedDate);
                echo '</pre>';
							
			?>
		</h1>
	</body>
<html/>

