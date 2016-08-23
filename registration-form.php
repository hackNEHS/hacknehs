<?php
$field_first_name = $_POST['first_name'];
$field_last_name = $_POST['last_name'];
$field_email = $_POST['email'];
$field_school = $_POST['school'];
$field_allergies = $_POST['allergies'];
$field_team_name = $_POST['team_name'];
$field_teammates = $_POST['teammates'];

$mail_to = 'info@hacknehs.com';
$subject = 'hackNEHS Registration Form for '.$field_first_name." ".$field_last_name;

$body_message = 'From: '.$field_first_name." ".$field_last_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'School: '.$field_school."\n";
$body_message .= 'Allergies: '.$field_allergies."\n";
$body_message .= 'Team Name: '.$field_team_name."\n";
$body_message .= 'Teammates: '.$field_teammates;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Thank you for the hackNEHS participant registration! We will contact you in October near the time of the event. Hope to see you there!');
        window.location = 'index.html';
    </script>
    <?php
}
else { ?>
        <script language="javascript" type="text/javascript">
            alert('Whoops! Something went wrong. Please send an email to info@hacknehs.com for troubleshooting. Sorry for the inconvenience!');
            window.location = 'index.html';
        </script>
        <?php
}
?>