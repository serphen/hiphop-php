<?php

$i = 0;
 print ++$i;
 print "\t";
 print ('0'<true) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <true) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = true;
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < true	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<false) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <false) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = false;
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < false	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<1) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <1) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 1;
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < 1	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<0) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <0) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 0;
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < 0	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<-1) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <-1) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = -1;
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < -1	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<'1') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <'1') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '1';
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < '1'	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<'0') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <'0') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '0';
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < '0'	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<'-1') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <'-1') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '-1';
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < '-1'	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<nullptr) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <nullptr) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = nullptr;
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < nullptr	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<array()) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <array()) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array();
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < array()	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<array(1)) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <array(1)) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array(1);
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < array(1)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<array(2)) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <array(2)) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array(2);
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < array(2)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<array('1')) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <array('1')) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('1');
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < array('1')	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<array('0' => '1')) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <array('0' => '1')) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('0' => '1');
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < array('0' => '1')	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<array('a')) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <array('a')) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('a');
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < array('a')	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<array('a' => 1)) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <array('a' => 1)) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('a' => 1);
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < array('a' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<array('b' => 1)) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <array('b' => 1)) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('b' => 1);
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < array('b' => 1)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<array('a' => 1, 'b' => 2)) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <array('a' => 1, 'b' => 2)) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array('a' => 1, 'b' => 2);
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < array('a' => 1, 'b' => 2)	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<array(array('a' => 1))) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <array(array('a' => 1))) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array(array('a' => 1));
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < array(array('a' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<array(array('b' => 1))) ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <array(array('b' => 1))) ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = array(array('b' => 1));
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < array(array('b' => 1))	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<'php') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <'php') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = 'php';
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < 'php'	";
 print "\n";
 print ++$i;
 print "\t";
 print ('0'<'') ? 'Y' : 'N';
 $a = 1;
 $a = 't';
 $a = '0';
 print ($a <'') ? 'Y' : 'N';
 $b = 1;
 $b = 't';
 $b = '';
 print ('0'<$b) ? 'Y' : 'N';
 print ($a <$b) ? 'Y' : 'N';
 print "\t";
 print "'0' < ''	";
 print "\n";
