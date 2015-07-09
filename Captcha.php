<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

	////////////////////////////////////////////////////////////////////////
	///////      this must be place in: application / libraries      ///////
	////////////////////////////////////////////////////////////////////////


	class Captcha {

		public function captcha()
		{
			$CI =& get_instance();
			$data = array();
			// 	--------------------------------------------------------
			//	perform the equation for CAPTCHA
			$operator_1 = rand(1, 9);
			$operator_2 = rand(1, 9);
			$type_operation = rand(1, 3);

			switch ($type_operation) {
				case '1':	//	plus operations
					$data['captcha_operation'] = $operator_1 . ' + ' . $operator_2;
					$data['captcha_result'] = $operator_1 + $operator_2;
					break;
				case '2':	//	minus operations
					if($operator_1 >= $operator_2)
					{
						$data['captcha_operation'] = $operator_1 . ' - ' . $operator_2;
						$data['captcha_result'] = $operator_1 - $operator_2;						
					}
					else
					{
						$data['captcha_operation'] = $operator_2 . ' - ' . $operator_1;
						$data['captcha_result'] = $operator_2 - $operator_1;												
					}	
					break;
				case '3':	//	product operations
					$data['captcha_operation'] = $operator_1 . ' x ' . $operator_2;
					$data['captcha_result'] = $operator_1 * $operator_2;					
					break;
				//	NOT DIVISION BECAUSE THE PROBLEM OF NON-INTEGERS	
				// case '4':	//	division operations 
				// 	$data['captcha_operation'] = $operator_1 . ' &divide;  ' . $operator_2;
				// 	$data['captcha_result'] = $operator_1 / $operator_2;					
				// 	break;
			}
			//	-------------------------------------------------------------------
			//	put in session
			$catcha_info = array('captcha_result' => $data['captcha_result'] );
			$CI->session->set_userdata($catcha_info);

			//	-------------------------------------------------------------------
			//	return data to the view
			echo $data['captcha_operation'];
		}

	}

/* End of file Captcha.php */