<?
/*
------- *** ����� ���������: ������� ������ *** ---------
����� (dubkidubki@list.ru) ������.
������ ���������� - ����� 2004 ����.
������ ���������������� ���������� � Readme!
��������� ���������� �������! ��������� ����� �������� �������!
*/
$read = file("tpl/messages.txt");
$sizes=count($read);
if (!IsSet($is) or $is<0) $is=0;
if (!IsSet($dsh)) $dsh=$sizes;
if(phpversion()<4.1) exit("<font face='verdana' size='1' color='#de0000'><b>������ PHP �������������� ������ ���� 4.1.0 ��� ����, �� ����� �� ���� (���� ������ ��������������: ".phpversion().")</b></font>");
else {
include ("inc.php");
include ("tpl/head.html");
zentr_view(@$imena,$width, $smile_c);
if (is_file($file)) file_ok($is, $dsh, $width, $adminc);
else file_not();
include ("tpl/end.html");
copyr($title, $copyr,$width);
}
?>
