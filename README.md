# codeigniter-very-simple-ajax-captcha
This simple library is used to show a captcha (operation: +, - or *) in the view adapted to AJAX request

HOW TO USE
----------
1. place Catcha.php to 'application / libraries'
2. insert the input HTML and jQuery in your view page (please, check this is not the complete form)
3. in your Controller (f.i. Contact) use the code AFTER a successful form validation!! just add a new method 'captcha' 
   because you need a route (from AJAX call URL)  
4. in config/routes add:  $route['captcha'] = 'THE-CONTROLLER-NAME/captcha';
5. DONE!
   
