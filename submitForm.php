<?php

/**
 * This example shows settings to use when sending via Google's Gmail servers.
 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
 */

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require_once __DIR__ . '/PHPMailer/PHPMailerAutoload.php';
require_once __DIR__ . '/vendor/autoload.php';
/*
$urlprezent = $_POST['urlprezent'];
$urlprezent = strtok($urlprezent, '?');

if (  $_POST['name'] != '' ){

    getPostAndSendMail();
    header('Location: '.$urlprezent.'?message=susses');

}else {
    header('Location: '.$urlprezent.'?message=no_susses');
    die();
}*/
    getPostAndSendMail();
    function getPostAndSendMail(){   

        $message;
/*        foreach($_POST as $key => $value) {
            if ($value == '') {
                $value = "NODATA";
            }
            $message .= $key.": "." ".$value."<br>";
        }*/


$message = '<html><head><meta content="text/html; charset=UTF-8" http-equiv="content-type"><style type="text/css">ol{margin:0;padding:0}table td,table th{padding:0}.c3{border-right-style:solid;padding:5pt 5pt 5pt 5pt;border-bottom-color:#000000;border-top-width:1pt;border-right-width:1pt;border-left-color:#000000;vertical-align:top;border-right-color:#000000;border-left-width:1pt;border-top-style:solid;background-color:#4a86e8;border-left-style:solid;border-bottom-width:1pt;width:579.8pt;border-top-color:#000000;border-bottom-style:solid}.c1{border-right-style:solid;padding:5pt 5pt 5pt 5pt;border-bottom-color:#000000;border-top-width:1pt;border-right-width:1pt;border-left-color:#000000;vertical-align:top;border-right-color:#000000;border-left-width:1pt;border-top-style:solid;border-left-style:solid;border-bottom-width:1pt;width:177.8pt;border-top-color:#000000;border-bottom-style:solid}.c7{border-right-style:solid;padding:5pt 5pt 5pt 5pt;border-bottom-color:#000000;border-top-width:1pt;border-right-width:1pt;border-left-color:#000000;vertical-align:top;border-right-color:#000000;border-left-width:1pt;border-top-style:solid;border-left-style:solid;border-bottom-width:1pt;width:187.5pt;border-top-color:#000000;border-bottom-style:solid}.c12{border-right-style:solid;padding:5pt 5pt 5pt 5pt;border-bottom-color:#000000;border-top-width:1pt;border-right-width:1pt;border-left-color:#000000;vertical-align:top;border-right-color:#000000;border-left-width:1pt;border-top-style:solid;border-left-style:solid;border-bottom-width:1pt;width:214.5pt;border-top-color:#000000;border-bottom-style:solid}.c2{color:#000000;font-weight:400;text-decoration:none;vertical-align:baseline;font-size:11pt;font-family:"Arial";font-style:normal}.c4{color:#000000;font-weight:400;text-decoration:none;vertical-align:baseline;font-size:9pt;font-family:"Arial";font-style:normal}.c0{padding-top:0pt;padding-bottom:0pt;line-height:1.15;orphans:2;widows:2;text-align:left;height:11pt}.c11{margin-left:-55.5pt;border-spacing:0;border-collapse:collapse;margin-right:auto}.c5{padding-top:0pt;padding-bottom:0pt;line-height:1.0;text-align:left}.c10{background-color:#ffffff;max-width:468pt;padding:72pt 72pt 72pt 72pt}.c13{height:0pt}.c8{margin-left:-36pt}.c6{background-color:#4a86e8}.c14{height:11pt}.c9{height:21pt}.title{padding-top:0pt;color:#000000;font-size:26pt;padding-bottom:3pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}.subtitle{padding-top:0pt;color:#666666;font-size:15pt;padding-bottom:16pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}li{color:#000000;font-size:11pt;font-family:"Arial"}p{margin:0;color:#000000;font-size:11pt;font-family:"Arial"}h1{padding-top:20pt;color:#000000;font-size:20pt;padding-bottom:6pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h2{padding-top:18pt;color:#000000;font-size:16pt;padding-bottom:6pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h3{padding-top:16pt;color:#434343;font-size:14pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h4{padding-top:14pt;color:#666666;font-size:12pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h5{padding-top:12pt;color:#666666;font-size:11pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;orphans:2;widows:2;text-align:left}h6{padding-top:12pt;color:#666666;font-size:11pt;padding-bottom:4pt;font-family:"Arial";line-height:1.15;page-break-after:avoid;font-style:italic;orphans:2;widows:2;text-align:left}</style></head><body class="c10"><p class="c0 c8"><span class="c2"></span></p><a id="t.999c868b9c55072cbd0ae0821a44ab0a9ddb2cdc"></a><a id="t.0"></a><table class="c11"><tbody><tr class="c9"><td class="c3" colspan="3" rowspan="1"><p class="c5"><span class="c2">Application</span></p></td></tr><tr class="c13"><td class="c7" colspan="1" rowspan="1"><p class="c5"><span class="c4">Name: '.$_POST['name'].'</span></p></td><td class="c1" colspan="1" rowspan="1"><p class="c5"><span class="c4">Last name: '.$_POST['last_name'].'</span></p></td><td class="c12" colspan="1" rowspan="1"><p class="c5"><span class="c4">Email: '.$_POST['email'].'</span></p></td></tr></tbody></table><p class="c0 c8"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p><p class="c0"><span class="c2"></span></p></body></html>';



$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($message);
$mpdf->Output();




         $img = $_FILES['fileToUpload']['name'];

            // name for image
            $name = trim($_POST['name']);
            $name = str_replace(' ', '_', $name);
            $name .= time();
         
            $imgname = imgupload($img, $name);
            if (sendMail($message, $imgname)) {
                deletefile($imgname);
            }
    }        

    function imgupload($img, $name){
        $info = pathinfo($img);
        $ext = $info['extension']; // get the extension of the file
        $newname = $name .".". $ext;

        $target = '../upload/' . $newname;
        move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target);

        return $newname;
      
    }

    function deletefile($imgname){
         
        sleep(2);

        $path = '../upload/'.$imgname;
        if(file_exists($path) && is_readable($path)) {
            unlink($path);
        }
 
    }

    function sendMail($message, $imgname ){

        include 'pass.php';
        $mail = new PHPMailer;

       /* $mail->isSMTP();*/

        $mail->SMTPDebug = 2; //Enable SMTP debugging, 0 = off (for production use), 1 = client messages, 2 = client and server messages
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
        $mail->setFrom('dizajnistampa@gmail.com', 'web');
        $mail->addAddress( $_POST['email'], 'print');
        $mail->Subject = 'test poruka';
        $mail->msgHTML($message);
        $mail->Body = $message;
        $atacment = '../upload/'. $imgname;
        $mail->addAttachment($atacment);

        if (!$mail->send()) {
            return 9;
        } else {
            return 1;

        }

    }




      
