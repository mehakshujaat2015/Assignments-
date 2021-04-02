<?php
	$_STUDENT_RECORD =array(
		array(
			'name' => 'Alex',
			'email' =>'alex@gmail.com',
			'grade' => 'A'
		),
		array(
			'name' => 'John',
			'email' =>'John@gmail.com',
			'grade' => 'B'
		),
		array(
			'name' => 'Sam',
			'email' =>'Sam@gmail.com',
			'grade' => 'A+'
		),
		array(
			'name' => 'Alice',
			'email' =>'Aloce@gmail.com',
			'grade' => 'B+'
		))
?>

<html>
	<head>
	</head>
	<body>
		<h1> Students record table</h1>
		   <table border="1">
                <tr>						
                    <td>Name</td>
                    <td>Email</td>
                    <td>Grade</td>
                 </tr>
					<?php
					
						foreach($_STUDENT_RECORD as $val)
                        {
						 ?>
                            <tr>						
						        <td> <?php echo $val['name']; ?> </td>
                                <td> <?php echo $val['email']; ?> </td>
                                <td> <?php echo $val['grade']; ?> </td>
                            </tr>
                          <?php							
						}				
					?>					
		</table>
	</body>
</html>