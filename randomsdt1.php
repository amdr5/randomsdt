<?php
error_reporting(0);
@system('clear');
$res="\033[0m";
$red="\033[0;31m";
$green="\033[1;32m";
$yellow="\033[0;33m";
$white= "\033[1;37m";
$purple="\033[1;35m";
$blue="\033[1;34m";
$cyan="\033[1;36m";
if ($rr == '0') {
banner($yellow, $red, $white, $blue, $cyan, $purple);}
echo "Nhập Đầu Số : ";
$dauso=trim(fgets(STDIN));
echo "Nhập Số Lần Cần Lấy: ";
$solan=trim(fgets(STDIN));
echo "Nhập Số Delay: ";
$delay1=trim(fgets(STDIN));
$save  = fopen("dauso_$dauso.txt", "w");
//code time
@system('clear');
$stt=0;
		$delay=$solan;
for ($i=0; $i < $delay+1; $i++){
    $stt=$stt+1;
   $sdt = mt_rand(0000000, 9999999);
   $allsdt = $dauso.$sdt;
	echo $corlors."[".$stt."] ".$dauso.$sdt."\r";
	$savesdt = $dauso.$sdt."\n";
fwrite($save, $savesdt);
	$corlors = "\033[1;".mt_rand(30, 36)."m";
	sleep($delay1);
}
fclose($save);
function banner($yellow, $red, $white, $blue, $cyan, $purple) {
    echo $yellow."┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓\n";

echo $red."┃ ___ __   ____________ _   _ ™                       ┃\n";

echo $white."┃|  _ \ \ / /__  / ____| \ | |                        ┃\n";
echo $blue."┃| |_) \ V /  / /|  _| |  \| |                        ┃\n";
echo $cyan."┃|  _ < | |  / /_| |___| |\  |                        ┃\n";
echo $yellow."┃|_| \_\|_| /____|_____|_| \_|".$blue."RD NUMBERS PHONE        ┃\n";
echo $red."┃Forever Love L".$green."i".$purple."n".$yellow."h";
echo " ";
echo $blue  ."L".$cyan."e".$white."e".$red." <3                             ┃\n";
echo $purple."┃      07-12-2019                                     ┃\n";
echo $white."┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛\n";
}

?>