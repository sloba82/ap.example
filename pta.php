<?php
require_once('PHPMailer/PHPMailerAutoload.php');
require_once('TemplateBilder.php');
require_once('Template.php');


foreach ($_POST as $key => $value) {
    if (strlen($value) > 3000) { 
        header('Location: https://abramexpedited.autotribali.com/');
        die();
    }
}


/*na frontendu u html inputim namesti maksimalan broj karaktera maxlength="10"  */

getallemploers($_POST, $_FILES);

function getallemploers($post, $files)
{

    $temp = new TemplateBilder();
    $fileName = $temp->employerTemplate(sortDataByName('employer_', $post, 15), $post);
    array_push($fileName, $temp->futureEmployeeTemplate(
                sortDataByName('previous_', $post, 5),
                sortDataByName('accident_', $post, 5),
                sortDataByName('convicti_', $post, 4),
                sortDataByName('employer_', $post, 15),
                $post
            )
        );

    $userapp = $post['first_name'] ." ". $post['last_name'] ." - Aplication for employment";   
    $bodyText = $post['first_name'] ." ". $post['last_name'] ." - applied for job";

    $firstname = $temp->clean($post['first_name']);
    $lastname = $temp->clean( $post['last_name']);

    $name1 = 'Cdl_'.$firstname."_".$lastname."_".time();
    $img1 = '';
    $img1 = $files['img_1'];

    $name2 = 'Med_'.$firstname."_".$lastname."_".time();
    $img2 = '';
    $img2 = $files['img_2'];

    if ( $img1['name'] != '') { array_push($fileName,  imgupload($img1, $name1)); }

    if ( $img2['name'] != '') { array_push($fileName, imgupload($img2, $name2)); }

    header('Location: redirect.html');

$success = sendMail('dizajnistampa@gmail.com', $fileName, $userapp, $bodyText);


    

        if ($success){
            $max = sizeof($fileName);
            for($i = 0; $i < $max; $i++) {
                deletefile($fileName[$i]);
            }

            sendMail($post['mail'], '', 'You applied for job at Abram Expedited Llc', '');
        }




}



function imgupload($img, $name){


if ($img['size'] < 10928375) {

    $imginfo = $img['name'];
    $info = pathinfo($imginfo);
    $ext = $info['extension'];
    $newname = $name .".". $ext;
    $target = 'pdf/' . $newname;
    move_uploaded_file($img['tmp_name'], $target);

    return $target;

    }
    else {
        header('Location: http://ap.example/');
    }

}




/* sortDataByName( $dataByname, $post, $numberOfinput)
 * $dataByname int number of input fealt for category.
 * $post is global $_POST from temlate
 * $numberOfinput number of input fealds for section 9 characters
*/
function sortDataByName($dataByname, $post, $numberOfinput)
{

    foreach ($post as $key => $val) {
        if (substr($key, 0, 9) == $dataByname) {
            $ArrayOfEmployer[$key] = $val;
        }
    }

    $max = sizeof($ArrayOfEmployer) / $numberOfinput;
    for ($i = 0; $i < $max; $i++) 
    {
        $employerData = array();
        foreach ($ArrayOfEmployer as $key => $val) {
            if (substr($key, -1) == $i) {
                $employerData[] = $val;
            }
        }
        $allEmployerData[$i] = $employerData;
    }

    return $allEmployerData;

}


function deletefile($fileName)
{
    if (file_exists($fileName) && is_readable($fileName)) {
        unlink($fileName);
    }
}


function sendMail($sendTo, $fileName, $userapp, $bodyText)
{


/* safety.abramexpedited@gmail.com */
    $temp = new Template();

    include 'pass.php';
    $mail = new PHPMailer();

    $mail->isSMTP();

    $mail->SMTPDebug = 0; //Enable SMTP debugging, 0 = off (for production use), 1 = client messages, 2 = client and server messages
    $mail->Debugoutput = 'html';
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->Username = $email;
    $mail->Password = $pass;
    $mail->setFrom('dizajnistampa@gmail.com', 'From');
    $mail->addAddress($sendTo, 'SendTo');
    $mail->Subject = $userapp;
    $mail->Body = $bodyText;

    if ($fileName == '' && $bodyText =='' ) {
        $mail->Body = '';
        $mail->msgHTML($temp->mailSendToEmpleyee());   
    }

    if ($fileName) {     
        $max = sizeof($fileName);
        for ($i = 0; $i < $max; $i++) {
            $mail->addAttachment($fileName[$i]);
        }
    }   

    $mail->send();
    unset($mail);

    return 1;
}




