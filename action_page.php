<?php

require_once( __DIR__."/../config.php");

global $CFG;

if(!empty($_POST['g-recaptcha-response']))
  {
        $secret = $CFG->recaptchaprivatekey;
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
            $success = true;
        else
        $success = false;
   }else{
    $success = false;

   }

   if($success){

$fdata = array();
$fdata['name'] = required_param('name',PARAM_TEXT);
$fdata['clgname'] = required_param('college',PARAM_TEXT);
$fdata['graduation'] = required_param('graduation',PARAM_TEXT);
$fdata['email'] = required_param('email',PARAM_EMAIL);
$fdata['phone'] = required_param('phnumber',PARAM_INT);
$fdata['track'] = required_param('skill',PARAM_TEXT);
$fdata['availability'] = required_param('Availability',PARAM_TEXT);
$fdata['timecreated'] = time();


$DB->insert_record('blocks_event_register',$fdata);


?>

<form name="fr" action="index.php" method="POST">

<input type='hidden' name='success' value='success'>

</form>

<script>
document.fr.submit();
</script>
<?php
   }else{
?>
<form name="fr" action="index.php" method="POST">

<input type='hidden' name='success' value='captchafalse'>

</form>

<script>
document.fr.submit();
</script>

<?php
   }
?>