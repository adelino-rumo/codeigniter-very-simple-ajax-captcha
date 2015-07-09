# codeigniter-very-simple-ajax-captcha
This simple library is used to show a captcha (operation: +, - or *) in the view adapted to AJAX request

HOW TO USE
----------
1. place Captcha.php in 'application / libraries'
2. insert the input HTML (please see form.php) and jQuery in your view page (please, be aware this is not the complete form)
3. in your Controller (please note that ContactUs is an example ) use the code AFTER a successful form validation!! Then just add a new method 'captcha' 
   because you need a route (AJAX call URL)  
4. in config/routes add:  $route['captcha'] = 'THE-CONTROLLER-NAME/captcha';
5. DONE!
   
