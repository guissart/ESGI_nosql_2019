<?php
try{
	function generategenerateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
	
	$undeterminated = rand(1,10);
		
	$users = array (
		1 => 'Robert',
		2 => 'Michel',
		3 => 'Jocelyne',
		4 => 'rand',
		5 => 'Clement',
		6 => 'Monique',
		7 => 'Albertine',
		8 => 'Jean-Leon',
		9 => 'Leon',
		10 => 'rand'
	);
	
	$choosen_user=$users[$undeterminated];
	
	if ($choosen_user == 'rand'){
		$choosen_user = str_shuffle($users[rand(1,10)]);
	}
	
	$preferences = array (
		1 => array(
				'keywords'=> generategenerateRandomString(rand(1,100)),	
				'limit'=> rand(1,30)
				),
		2 => array(
				'keywords'=> generategenerateRandomString(rand(1,100)),	
				'options'=> generategenerateRandomString(rand(1,100)),	
				'limit'=> rand(1,30)
				),
		3 => array(
				'keywords'=> generategenerateRandomString(rand(1,100)),	
				'options'=> generategenerateRandomString(rand(1,100)),	
				'limit'=> rand(1,30)
				),
		4 => array(
				'keywords'=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				'limit'=> rand(1,30)
				),
		5 => array(
				'keywords'=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				'limit'=> rand(1,30)
				),
		6 => array(
				'keywords'=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				'limit'=> rand(1,30)
				),
		7 => array(
				'keywords'=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				'limit'=> rand(1,30)
				),
		8 => array(
				'keywords'=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				'limit'=> rand(1,30)
				),
		9 => array(
				'keywords'=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				generategenerateRandomString(rand(1,20))=> generategenerateRandomString(rand(1,100)),	
				'limit'=> rand(1,30)
				),
		10 => array(
				
				)
	);
	
	$ar_return = array (
					'user'=>$choosen_user,
					'content'=>$preferences[rand(1,10)]
				);
				
	echo json_encode($ar_return);
	
}catch (Exception $e) {
	echo  $e;
}
?>