<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class ContactUs extends CI_controller {

		public function __construct()
		{
			parent::__construct();
			// ...
		}

		public function contact()
		{
				//	...
				///////////////////////////////////////////////////////////////////////////////////
				////////////////// 	AFTER SUCCESSFUL VALIDATION	OF THE FORM   	 //////////////////
				///////////////////////////////////////////////////////////////////////////////////
				// --------------------------------------------------------
				//	retrieves de CAPTCHA from $_SESSION and compares with
				//	the one submited in the form
				$captcha_form = $this->input->post('captcha');
				$captcha_session = $this->session->userdata('captcha_result');
				if($captcha_form == $captcha_session)
				{

					///////////////////////////////////////////////////////////////////////////////////
					/////////////////////// 	PERFORM OPERATIONS		///////////////////////
					///////////////////////////////////////////////////////////////////////////////////
					// 	----------  clean session  ----------
					$this->session->unset_userdata('captcha_result');	    
					//	----------  flash message to teh view  ----------
				}
  				else
  				{
  					//	---------------------------------------------------------
  					//	wrong CAPTCHA
  					$data['erroR_captcha'] = 'captcha ir wrong!';
  				}

		}	


		public function captcha()
		{
			// 	--------------------------------------------------------
			//	for CAPTCHA library because AJAX needs to set an URL
			$this->load->library('captcha');
		}


	}