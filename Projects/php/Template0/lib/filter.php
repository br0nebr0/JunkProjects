
<?php
$MinPrice=$_POST['MinPrice'];
$MaxPrice=$_POST['MaxPrice'];
$brand=$_POST['brand'];
$ant=$_POST['ant'];
$scan=$_POST['scan'];
$LAN=$_POST['LAN'];
$speed=$_POST['speed'];
$where="WHERE";
if($MinPrice!=null){
  $where="$where  `price` > $MinPrice";}
if($MaxPrice!=null){
  if($where!="WHERE"){$where="$where and";}
  $where="$where  `price` < $MaxPrice";}
if($brand!=null){ if($where!="WHERE"){$where="$where and";}
    if($brand=="tplink"){ $where= "$where  `mod`='tplink'";    }
    elseif ($brand=="dlink") {$where="$where  `mod`= 'dlink' ";    }
    elseif ($brand=="asus") {$where="$where  `mod`= 'asus' ";    }
    elseif ($brand=="tenda") {$where=" $where `mod`= 'tenda' ";    }  }
  $brand=null;
if($ant!=null){  if($where!="WHERE"){$where="$where and";}
    if($ant==1){ $where= "$where  `ant`=1";    }
    elseif ($ant==2) {$where="$where  `ant`=2"; }
  elseif ($ant==3) {$where="$where  `ant`=3"; }
elseif ($ant==4) {$where="$where  `ant`=4"; }  }
  $ant=null;
    if($scan!=null){ if($where!="WHERE"){$where="$where and";}
    if($scan==1){ $where= "$where  `MAC`=1";    }
    elseif ($scan==0) {$where="$where  `MAC`=0"; }    }
$scan=null;
if($speed!=null){  if($where!="WHERE"){$where="$where and";}
    if($speed==200){ $where= "$where  `speed`=200";    }
    elseif ($speed==300) {$where="$where  `speed`=300"; }
    elseif ($speed==400) {$where="$where  `speed`=400"; }  }
  $speed=null;
  if($LAN!=null){
  if($where!="WHERE"){$where="$where and";}
    if($LAN==3){ $where= "$where  `LAN`=3";    }
    elseif ($LAN==2){ $where= "$where  `LAN`=2";    }
    elseif ($LAN==4){ $where= "$where  `LAN`=4";    }
    elseif ($LAN==5){ $where= "$where  `LAN`=5";    }
    elseif ($LAN==6){ $where= "$where  `LAN`=6";    }
    elseif ($LAN==7){ $where= "$where  `LAN`=7";    }
    elseif ($LAN==8){ $where= "$where  `LAN`=8";    }  }
  $LAN=null;
if($where=="WHERE"){$where='';} ?>
