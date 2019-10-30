<?php
//ikiganteng
include 'class_ig.php';

			$data_login = array(
		'username' => 'auliaahmad16',
		'csrftoken'	=> 'O6RNF6s65tpUsrNpZiIdntsVavZl35rr',
		'sessionid'	=> '4774411065%3AUxjfDXFFsPJo2B%3A27'
	);
				while(true){
		     	        $profile = getHome($data_login);
				$data_array = json_decode($profile);
			        $result = $data_array->user->edge_web_feed_timeline;
			        foreach ($result->edges as $items) {
				$id = $items->node->id;
				$username = $items->node->owner->username;
				$like = like($id, $data_login);
				if ($like['status'] == 'error') {
				echo '[+] Username: '.$username.' | Error Like' . PHP_EOL;
				}else{
				echo '[+] Username: '.$username.' |  Like Success'. PHP_EOL;;
				}
				}
				echo '[+] Akan bekerja 1 menit 30 detik lagi... [+]'. PHP_EOL;;
				sleep(90);
                }
