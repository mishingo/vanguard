<?php

/**
 * Do not edit anything in this file unless you know what you're doing
 */

use Roots\Sage\Config;
use Roots\Sage\Container;

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();   
}
/**
 * Helper function for prettying up errors
 * @param string $message
 * @param string $subtitle
 * @param string $title
 */
$sage_error = function ($message, $subtitle = '', $title = '') {
    $title = $title ?: __('Sage &rsaquo; Error', 'sage');
    $footer = '<a href="https://roots.io/sage/docs/">roots.io/sage/docs/</a>';
    $message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
    wp_die($message, $title);
};

/**
 * Ensure compatible version of PHP is used
 */
if (version_compare('5', phpversion(), '>=')) {
    $sage_error(__('You must be using PHP 7 or greater.', 'sage'), __('Invalid PHP version', 'sage'));
}

/**
 * Ensure compatible version of WordPress is used
 */
if (version_compare('4.7.0', get_bloginfo('version'), '>=')) {
    $sage_error(__('You must be using WordPress 4.7.0 or greater.', 'sage'), __('Invalid WordPress version', 'sage'));
}

/**
 * Ensure dependencies are loaded
 */
if (!class_exists('Roots\\Sage\\Container')) {
    if (!file_exists($composer = __DIR__.'/../vendor/autoload.php')) {
        $sage_error(
            __('You must run <code>composer install</code> from the Sage directory.', 'sage'),
            __('Autoloader not found.', 'sage')
        );
    }
    require_once $composer;
}

/**
 * Sage required files
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map(function ($file) use ($sage_error) {
    $file = "../app/{$file}.php";
    if (!locate_template($file, true, true)) {
        $sage_error(sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file), 'File not found');
    }
}, ['helpers', 'setup', 'filters', 'admin','rest','wp-materialize-navwalker']);

/**
 * Here's what's happening with these hooks:
 * 1. WordPress initially detects theme in themes/sage/resources
 * 2. Upon activation, we tell WordPress that the theme is actually in themes/sage/resources/views
 * 3. When we call get_template_directory() or get_template_directory_uri(), we point it back to themes/sage/resources
 *
 * We do this so that the Template Hierarchy will look in themes/sage/resources/views for core WordPress themes
 * But functions.php, style.css, and index.php are all still located in themes/sage/resources
 *
 * This is not compatible with the WordPress Customizer theme preview prior to theme activation
 *
 * get_template_directory()   -> /srv/www/example.com/current/web/app/themes/sage/resources
 * get_stylesheet_directory() -> /srv/www/example.com/current/web/app/themes/sage/resources
 * locate_template()
 * ├── STYLESHEETPATH         -> /srv/www/example.com/current/web/app/themes/sage/resources/views
 * └── TEMPLATEPATH           -> /srv/www/example.com/current/web/app/themes/sage/resources
 */
array_map(
    'add_filter',
    ['theme_file_path', 'theme_file_uri', 'parent_theme_file_path', 'parent_theme_file_uri'],
    array_fill(0, 4, 'dirname')
);
Container::getInstance()
    ->bindIf('config', function () {
        return new Config([
            'assets' => require dirname(__DIR__).'/config/assets.php',
            'theme' => require dirname(__DIR__).'/config/theme.php',
            'view' => require dirname(__DIR__).'/config/view.php',
        ]);
    }, true);


/**
* getRandomWeightedElement()
* Utility function for getting random values with weighting.
* Pass in an associative array, such as array('A'=>5, 'B'=>45, 'C'=>50)
* An array like this means that "A" has a 5% chance of being selected, "B" 45%, and "C" 50%.
* The return value is the array key, A, B, or C in this case.  Note that the values assigned
* do not have to be percentages.  The values are simply relative to each other.  If one value
* weight was 2, and the other weight of 1, the value with the weight of 2 has about a 66%
* chance of being selected.  Also note that weights should be integers.
* 
* @param array $weightedValues
*/
  function getRandomWeightedElement(array $weightedValues) {
    $rand = mt_rand(1, (int) array_sum($weightedValues));

    foreach ($weightedValues as $key => $value) {
      $rand -= $value;
      if ($rand <= 0) {
        return $key;
      }
    }
  }




  function getRWF($field){
    $sumWeight = 0;
    foreach ($field as $item) {
        $weight = (int)$item['weight'];
        $sumWeight += $weight;
    }
    $rand = mt_rand(1, (int) $sumWeight);
    foreach ($field as $key => $value) {
        $weight = (int)$value['weight'];
        $rand -= $weight;
        if ($rand <= 0) {
            setcookie('variant_key',$key,time() + (86400*30),'/');
            return $key;
        }
    }
  }



function redirectOffer(){
    $thephrase = get_field('passphrase', 'option');
    if($_POST['passphrase'] == $thephrase){
        $cookie_name = "user";
        $cookie_value = "active";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
        header('Location: /parents');
        exit();
    } else {
        header('Location: /parents?l=t');
        exit();
    }
    
    //if($_POST["passphrase"] == $thephrase){
    //}
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'passphrase', '/code', [
        'methods' => 'POST',
        'callback' => 'redirectOffer'
    ] );
});







add_action( 'phpmailer_init', 'configure_smtp' );


function configure_smtp( PHPMailer $phpmailer ){
    date_default_timezone_set('Etc/UTC');
    //$phpmailer->SMTPDebug = 2;   
    //$phpmailer->Debugoutput = 'html';
    $phpmailer->isSMTP(); //switch to smtp
    $phpmailer->Host = 'smtp.gmail.com';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 587;
    $phpmailer->Username = 'mr@mishingo.com';
    $phpmailer->Password = 'bazooka1990!';
    $phpmailer->SMTPSecure = 'tls';
    //$phpmailer->From = 'mr@mishingo.com';
    //$phpmailer->addReplyTo('mr@mishingo.com', 'Miguel Ramos');
    $phpmailer->FromName='Vanguard Childrens Academy';
}
function hashit($length) {
  $alphabets = range('A','Z');
  $numbers = range('0','9');
  $additional_characters = array('_');
  $final_array = array_merge($alphabets,$numbers,$additional_characters);
  $hash = '';
  while($length--) {
    $key = array_rand($final_array);
    $hash .= $final_array[$key];
  }
  return $hash;
}
function send_mail(){
      $message_text = '';
  

          $message_text .=  "<h1>New Message!</h1> <br />";
  

      foreach($_POST as $key => $value){
         
         switch ($key) {
             case "contact_name":
                 $message_text .=  "<strong>Full Name</strong> : ". $value. " <br />";
                 break;
             case "contact_email":
                 $message_text .=  "<strong>E-mail</strong> : ". $value. " <br />";
                 break;
             case "contact_body":
                 $message_text .=  "<strong>Body</strong> : ". $value. " <br />";
                 break;
             default:
                 $message_text .=  "<strong>BREH</strong>  <br />";
         }
      }
    
    $to = 'mr@mishingo.com';
    $subject = "New Lead: #".hashit(5);
    $message =  $message_text;
    $headers = 'Content-Type: text/html'."\r\n".
    'Cc: mr@mishingo.com'."\r\n";

    wp_mail($to, $subject, $message, $headers);
}



add_action( 'rest_api_init', function () {
    register_rest_route( 'collection', '/message', [
        'methods' => 'POST',
        'callback' => 'send_mail'
    ] );
} );




