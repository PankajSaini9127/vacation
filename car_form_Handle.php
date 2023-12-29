<?php include('smtp/PHPMailerAutoload.php');if($_SERVER["REQUEST_METHOD"]==="POST"){$data=json_decode(file_get_contents("php://input"),true);$TO_EMAIL='italianshiv@gmail.com';$hReferer=isset($_SERVER['HTTP_REFERER'])?$_SERVER['HTTP_REFERER']:"";if(!empty($_REQUEST['hReferer'])){$hReferer=$_REQUEST['hReferer'];}$subject='Tour Enquiry through alltimevacations.it (LP)';$subject1='All Time Vacations Tour Enquiry';$verification=true;$tour=isset($_REQUEST['tour'])?$_REQUEST['tour']:'';$duration=isset($_REQUEST['duration'])?$_REQUEST['duration']:'';$hotel=isset($_REQUEST['hotel'])?$_REQUEST['hotel']:'';$date=isset($_REQUEST['date'])?$_REQUEST['date']:'';$name=isset($_REQUEST['name'])?$_REQUEST['name']:'';$email=isset($_REQUEST['email'])?$_REQUEST['email']:'';$members=isset($_REQUEST['members'])?$_REQUEST['members']:'';$phone=isset($_REQUEST['phone'])?$_REQUEST['phone']:'';$message=isset($_REQUEST['message'])?$_REQUEST['message']:'not provided';$previousurl=$_SERVER['HTTP_REFERER'];$to1=$email;$body1="<html><head><meta name='viewport' content='width=device-width' /><meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /></head><body><table bgcolor='#fafafa' style=' width: 100%!important; height: 100%; background-color: #fafafa; padding: 10px; font-size: 100%; line-height: 1.6;'><tr><td></td><td bgcolor='#FFFFFF' style='border: 1px solid #eeeeee; background-color: #ffffff; border-radius:5px; display:block!important; max-width:600px!important; margin:0 auto!important; clear:both!important;'><div style='padding:10px; max-width:600px; margin:0 auto; display:block;'><table style='width: 100%;'><tr><td rowspan='2'><h2 style='font-weight: 200; font-size: 16px; margin: 5px 0; color: #333333;'>Grazie per averci inviato la Sua richiesta, La contatteremo al piů presto. Noi di All Time Vacations siamo specialisti nell’ organizzare in modo efficiente, ospitale ed indimenticabile i Vostri viaggi. I nostri itinerari innovativi, la nostra estesa rete di agenzie ed i suggerimenti dei clienti che hanno in precedenza viaggiato con noi, ci hanno fatto crescere. Il nostro servizio clienti č attivo 24 su 24, 7 giorni su 7 +39 351 8664836, siamo in grado di supportarvi in ogni momento con tutte le informazioni e l'assistenza di cui necessitate</h2></td></tr></table></td></tr><tr><td colspan='2'><p style='text-align: center; display: block; padding-top:20px; font-weight: 700; margin-top:40px; color: #666666; border-top:1px solid #dddddd;font-size:22px;'>All Time Vacation</p></td></tr></table></body></html>";$body="<html>
<head>
<meta name='viewport' content='width=device-width' />
<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
</head>
<body>
<table bgcolor='#fafafa' style=' width: 100%!important; height: 100%; background-color: #fafafa; padding: 20px; font-size: 100%; line-height: 1.6;'>
<tr>
<td></td>
<td bgcolor='#FFFFFF' style='border: 1px solid #eeeeee; background-color: #ffffff; border-radius:5px; display:block!important; max-width:600px!important; margin:0 auto!important; clear:both!important;'><div style='padding:20px; max-width:600px; margin:0 auto; display:block;'>
<table style='width: 100%;'>
<tr><td colspan='2' style='text-align:center;'><h2 style='font-weight: 800; font-size: 24px; margin: 5px 0; color: #333333;'>Dettagli Del Contatto</h2></td></tr>
<tr>
<td><h2 style='font-weight: 200; font-size: 16px; margin: 5px 0; color: #333333;'>E-mail: <strong>$user_email</strong> </h2></td>
<td><h2 style='font-weight: 200; font-size: 16px; margin: 5px 0; color: #333333;'>Arrival: <strong>$date</strong></h2></td>
</tr>
<tr>
<td><h2 style='font-weight: 200; font-size: 16px; margin: 5px 0; color: #333333;'>Name:<strong>$name</strong> </td>
<td><h2 style='font-weight: 200; font-size: 16px; margin: 5px 0; color: #333333;'>Mobile Number: <strong>$phone</strong></h2></td>
</tr>
<tr>
<td colspan='2'><h2 style='font-weight: 200; font-size: 16px; margin: 5px 0; color: #333333;'>Requirements:<strong>$message</strong></h2></td>
</tr>
<tr><td colspan='2'><p style='text-align: center; display: block; padding-top:20px; font-weight: 700; margin-top:40px; color: #666666; border-top:1px solid #dddddd;font-size:22px;'>All Time Vacation</p></td></tr>

</table>
</div></td>
</tr>
</table>
</body>
</html>";if($verification){$mail=new PHPMailer();$mail->IsSMTP();$mail->Host='alltimevacations.it';$mail->Port=25;$mail->SMTPAuth=false;$mail->SMTPSecure=false;$mail->Username="italy@alltimevacations.it";$mail->Password="Italy@123";$mail->SetFrom("italy@alltimevacations.it");$mail->IsHTML(true);$mail->CharSet='UTF-8';$mail->FromName='All time vacations';$mail->Subject=$subject;$mail->Body=$body;$mail->AddAddress($TO_EMAIL);$mail->addCC('johnsonn.thomas@googlemail.com');$mail->SMTPOptions=array('ssl'=>array('verify_peer'=>false,'verify_peer_name'=>false,'allow_self_signed'=>false));$mail->addCC('johnsonn.thomas@googlemail.com');if(!$mail->Send()){echo $mail->ErrorInfo;}else{$mail->ClearAllRecipients();$mail->addAddress($to1);$mail->Subject=$subject1;$mail->Body=$body1;if($mail->send()){return true;};}}else{header("location:{$previousurl}");}} ?>