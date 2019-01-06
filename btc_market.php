<?php
$c = $_GET["coin"];
$coin = $c."BTC";
if($c == "BTC"){
  $coin=$c."USD";
  echo "<script>window.location='usd_market.php?coin=BTC';</script>";
}
if($coin=="ADABTC"||$coin==
"ADAETH"||$coin==
"ARKBTC"||$coin==
"ARKETH"||$coin==
"BCHBTC"||$coin==
"BCHETH"||$coin==
"BCHUSDT"||$coin==
"BCNBTC"||$coin==
"BCNXMR"||$coin==
"BTCDBTC"||$coin==
"BTCDXMR"||$coin==
"BTCUSDT"||$coin==
"BTGBTC"||$coin==
"BTGETH"||$coin==
"BTGUSDT"||$coin==
"BTSBTC"||$coin==
"BTSETH"||$coin==
"DASHBTC"||$coin==
"DASHETH"||$coin==
"DASHUSDT"||$coin==
"DASHXMR"||$coin==
"DCRBTC"||$coin==
"DGBBTC"||$coin==
"DGBETH"||$coin==
"DOGEBTC"||$coin==
"ETCBTC"||$coin==
"ETCETH"||$coin==
"ETCUSDT"||$coin==
"ETHBTC"||$coin==
"ETHUSDT"||$coin==
"FCTBTC"||$coin==
"FCTETH"||$coin==
"HSRBTC"||$coin==
"HSRETH"||$coin==
"IOTABTC"||$coin==
"IOTAETH"||$coin==
"KMDBTC"||$coin==
"KMDETH"||$coin==
"LSKBTC"||$coin==
"LSKETH"||$coin==
"LTCBTC"||$coin==
"LTCETH"||$coin==
"LTCUSDT"||$coin==
"LTCXMR"||$coin==
"MONABTC"||$coin==
"NANOBTC"||$coin==
"NANOETH"||$coin==
"NEBLBTC"||$coin==
"NEBLETH"||$coin==
"NEOBTC"||$coin==
"NEOETH"||$coin==
"NEOUSDT"||$coin==
"NXSBTC"||$coin==
"NXTBTC"||$coin==
"NXTUSDT"||$coin==
"NXTXMR"||$coin==
"PIVXBTC"||$coin==
"QTUMBTC"||$coin==
"QTUMETH"||$coin==
"RDDBTC"||$coin==
"SCBTC"||$coin==
"SCETH"||$coin==
"STEEMBTC"||$coin==
"STEEMETH"||$coin==
"STRATBTC"||$coin==
"STRATETH"||$coin==
"SYSBTC"||$coin==
"VENBTC"||$coin==
"VENETH"||$coin==
"WAVESBTC"||$coin==
"WAVESETH"||$coin==
"XDNBTC"||$coin==
"XEMBTC"||$coin==
"XEMETH"||$coin==
"XLMBTC"||$coin==
"XLMETH"||$coin==
"XMRBTC"||$coin==
"XMRETH"||$coin==
"XMRUSDT"||$coin==
"XRPBTC"||$coin==
"XRPETH"||$coin==
"XRPUSDT"||$coin==
"XVCBTC"||$coin==
"XVGBTC"||$coin==
"XVGETH"||$coin==
"ZCLBTC"||$coin==
"ZECBTC"||$coin==
"ZECETH"||$coin==
"ZECUSDT"||$coin==
"ZECXMR"
){
  $martype="crypto";
}
else if($coin=="BCHEUR"||$coin==
"BCHUSD"||$coin==
"BTCAUD"||$coin==
"BTCBRL"||$coin==
"BTCCAD"||$coin==
"BTCCZK"||$coin==
"BTCEUR"||$coin==
"BTCGBP"||$coin==
"BTCIDR"||$coin==
"BTCILS"||$coin==
"BTCMXN"||$coin==
"BTCMYR"||$coin==
"BTCNZD"||$coin==
"BTCPLN"||$coin==
"BTCRUB"||$coin==
"BTCSEK"||$coin==
"BTCSGD"||$coin==
"BTCTRY"||$coin==
"BTCUSD"||$coin==
"BTGUSD"||$coin==
"DASHPLN"||$coin==
"DASHUSD"||$coin==
"ETCUSD"||$coin==
"ETHEUR"||$coin==
"ETHMXN"||$coin==
"ETHPLN"||$coin==
"ETHUSD"||$coin==
"IOTAEUR"||$coin==
"IOTAUSD"||$coin==
"LTCBRL"||$coin==
"LTCEUR"||$coin==
"LTCUSD"||$coin==
"NEOUSD"||$coin==
"QTUMUSD"||$coin==
"VERIUSD"||$coin==
"XMRUSD"||$coin==
"XRPEUR"||$coin==
"XRPMXN"||$coin==
"XRPUSD"||$coin==
"ZECEUR"||$coin==
"ZECUSD"
){
  $martype="local";
}
else if($coin=="AIONBTC"||$coin==
"AIONETH"||$coin==
"ARDRBTC"||$coin==
"BATBTC"||$coin==
"BATETH"||$coin==
"BNBBTC"||$coin==
"BNBETH"||$coin==
"BNBUSDT"||$coin==
"BNTBTC"||$coin==
"BNTETH"||$coin==
"BQXBTC"||$coin==
"BQXETH"||$coin==
"BRDBTC"||$coin==
"BRDETH"||$coin==
"BTM*BTC"||$coin==
"BTMBTC"||$coin==
"CVCBTC"||$coin==
"CVCETH"||$coin==
"CVCUSDT"||$coin==
"DGDBTC"||$coin==
"DGDETH"||$coin==
"ELFBTC"||$coin==
"ELFETH"||$coin==
"ENGBTC"||$coin==
"ENGETH"||$coin==
"EOSBTC"||$coin==
"EOSETH"||$coin==
"EOSUSD"||$coin==
"FUNBTC"||$coin==
"FUNETH"||$coin==
"GAMEBTC"||$coin==
"GASBTC"||$coin==
"GASETH"||$coin==
"GNOBTC"||$coin==
"GNOETH"||$coin==
"GNTBTC"||$coin==
"GNTETH"||$coin==
"GNTUSD"||$coin==
"ICNBTC"||$coin==
"ICNETH"||$coin==
"ICXBTC"||$coin==
"ICXETH"||$coin==
"KNCBTC"||$coin==
"KNCETH"||$coin==
"LINKBTC"||$coin==
"LINKETH"||$coin==
"MAIDBTC"||$coin==
"MAIDXMR"||$coin==
"MANABTC"||$coin==
"MANAETH"||$coin==
"NMRBTC"||$coin==
"NMRETH"||$coin==
"OMGBTC"||$coin==
"OMGETH"||$coin==
"OMGUSD"||$coin==
"OMGUSDT"||$coin==
"PAYBTC"||$coin==
"PAYETH"||$coin==
"POWRBTC"||$coin==
"POWRETH"||$coin==
"PPTBTC"||$coin==
"PPTETH"||$coin==
"QASHBTC"||$coin==
"QASHUSD"||$coin==
"QRLBTC"||$coin==
"QRLETH"||$coin==
"QSPBTC"||$coin==
"QSPETH"||$coin==
"RDNBTC"||$coin==
"RDNETH"||$coin==
"REPBTC"||$coin==
"REPETH"||$coin==
"REPUSDT"||$coin==
"REQBTC"||$coin==
"REQETH"||$coin==
"SALTBTC"||$coin==
"SALTETH"||$coin==
"SANBTC"||$coin==
"SANUSD"||$coin==
"SNTBTC"||$coin==
"SNTETH"||$coin==
"SNTUSD"||$coin==
"SUBBTC"||$coin==
"SUBETH"||$coin==
"TNBBTC"||$coin==
"TNBETH"||$coin==
"TRXBTC"||$coin==
"TRXETH"||$coin==
"VERIBTC"||$coin==
"VERIETH"||$coin==
"WTCBTC"||$coin==
"WTCETH"||$coin==
"ZRXBTC"||$coin==
"ZRXETH"
){
  $martype="tokens";
}
?>

<!DOCTYPE HTML>
<html>
<head>
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<!-- <link rel="stylesheet" href="http://cdn.datatables.net/1.10.2/css/jquery.dataTables.min.css"></style> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- <script type="text/javascript" src="http://cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script> -->
<script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="./css/w3css.css">
  <link rel="stylesheet" type="text/css" href="./css/custom.css">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'> 

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/animate.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
 
<style type="text/css">
tr:nth-child(even) {background-color: #f2f2f2;} 
tr:hover {background-color: #ddd;}
table {
    border: 1px solid #bbb;
}
</style>
<script>
sel="";
val="";
function gtype(vall){
// function change_myselect(sel) {

if(sel != "daily" && sel!="monthly" && sel!="alltime"){
  sel = "alltime";
}
val=vall;
var dataPoints = [];

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  zoomEnabled: true,
  theme: "light2",
  title: {
    text: ""
  },
  axisX: {
    title: "Date-time",
    titleFontSize: 15
  },
  axisY: {
    title: "Bitcoin",
    titleFontSize: 24
  },
  data: [{
    type: val,
    xValueFormatString: "YYYY-MM-DD DDD HH:mm:ss TT",
    yValueFormatString: "#.### Bitcoin",
    dataPoints: dataPoints
  }]
});

function addData(data) {
  for (var i = 0; i < data.length; i++) {
    dataPoints.push({
      x: new Date(data[i].time),
      y: data[i].average
    });
  }
  chart.render();

}
url="https://apiv2.bitcoinaverage.com/indices/<?php echo "$martype" ?>/history/<?php echo "$coin"; ?>?period="+sel+"&?format=json";
$.getJSON(url, addData);

// }
}
window.onload = function(){
  gtype("line");
  // change_myselect("alltime");
}

function change_myselect(sell) {

if(val != "area" && val!="column" && val!="line"){
  val = "line";
}
sel=sell;
var dataPoints = [];

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  zoomEnabled: true,
  theme: "light2",
  title: {
    text: ""
  },
  axisX: {
    title: "Date-time",
    titleFontSize: 15
  },
  axisY: {
    title: "Bitcoin",
    titleFontSize: 24
  },
  data: [{
    type: val,
    xValueFormatString: "YYYY-MM-DD DDD HH:mm:ss TT",
    yValueFormatString: "#.### Bitcoin",
    dataPoints: dataPoints
  }]
});

function addData(data) {
  for (var i = 0; i < data.length; i++) {
    dataPoints.push({
      x: new Date(data[i].time),
      y: data[i].average
    });
  }
  chart.render();

}
url="https://apiv2.bitcoinaverage.com/indices/<?php echo "$martype" ?>/history/<?php echo "$coin"; ?>?period="+sel+"&?format=json";
$.getJSON(url, addData);

// }
}
</script>
</head>
<body style="background-color: #ffffff;">

  <header id="header">
    <nav class="navbar navbar-inverse" role="banner" style="position: relative; top: 0; width:100%;">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./"><font color="red"><b>Crypto</b></font>Berg</a>
        </div>

        <div class="collapse navbar-collapse navbar-right">
          <ul class="nav navbar-nav">
            <li class="active"><a href="./">HOME</a></li>
            <li><a href="allMarkets.html">All Markets</a></li>
            <!-- <li><a data-toggle="modal" data-target="#myModal">REGISTER</a></li> -->
            <li><a href="bitcoin.html">Bitcoin Markets</a></li>
            <li><a href="ethereum.html">Ethereum Mrakets</a></li>
             <li><a href="./#content">FAQ</a></li>
            <li><a href="./#conatcat-info">CONTACT</a></li>
          </ul>
        </div>
      </div> 
    </nav> 
  </header>  

<div class="col-md-7"><br><br><div id="chartContainer" style="height: 400px; margin: 10px;"></div></div>



<div class="col-md-1"></div>

<div class="col-md-4" style="margin: 10px;margin-left: 40px;" >
<center><span style="background-color: #ee0000; color: white;">Drag on the graph to zoom</span> 
  <select id="myselect" onchange="change_myselect(this.value)" class="form-control" style="width: 200px; margin-bottom: 5px;">
<option value="alltime">Alltime</option>
<option value="monthly">Monthly</option>
<option value="daily">Daily</option>
</select><select id="myselect" onchange="gtype(this.value)" class="form-control" style="width: 200px; margin-top: 5px;">
<option value="line">Line</option>
<option value="column">Column</option>
<option value="area">Area</option>
</select></center>
  <h2 style="text-align: center;"><?php echo "$coin"; ?></h2>
<table id="abc" class="table" style="font-size: 22px; border: 1px;">
  
</table></div>

<div class="col-md-2" style="margin-top: 30px;"></div>
<div class="col-md-8">
  <table id="lol" class="table" style="font-size: 22px; margin-top: 30px;">
  
</table></div>
<div class="col-md-2" style="margin-top: 30px;"></div>
<!-- <div class="col-md-4"></div> -->

<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<script>
  var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  var txt="";
  var lol="";
    if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);
        // document.getElementById("abc").innerHTML = myObj.length;
        
        
                          if(myObj.changes.percent.day>=0)
                          {
                            change = "<font color='green'>"+myObj.changes.percent.day+"%</font>";
                          }
                          else if(myObj.changes.percent.day<0)
                          {
                            change = "<font color='red'>"+myObj.changes.percent.day+"%</font>";
                          }

                           txt += "<tbody><tr><td>Last</td><td style='text-align: right; font-size: 20px;'> <i class='fa fa-btc' aria-hidden='true'></i> "+myObj.last+"</td></tr><tr><td>High</td><td style='text-align: right;font-size: 20px;'> <i class='fa fa-btc' aria-hidden='true'></i> "+myObj.high+"</td><tr><td>Low</td><td style='text-align: right;font-size: 20px;'><i class='fa fa-btc' aria-hidden='true'></i> "+myObj.low+"</td><tr><td>%change</td><td style='text-align: right;font-size: 20px;'>"+change+"</td></tr><td>$Volume</td><td style='text-align:right;font-size: 20px;'><i class='fa fa-btc' aria-hidden='true'></i> "+myObj.volume+"</td></tr></td></tr><td>Volume %</td><td style='text-align:right;font-size: 20px;'>"+myObj.volume_percent+"%</td></tr><td>Timestamp</td><td style='text-align:right;font-size: 16px;'>"+myObj.display_timestamp+"</td></tr></tbody>" ;
                     
                          lol += "<thead style='font-weight: bold'><td></td><td style='text-align: right; font-size: 20px;'>Price</td><td style='text-align: right; font-size: 20px;'>Price-change</td><td style='text-align: right; font-size: 20px;'>%Change</td></thead><tbody><tr style='text-align: right; font-size: 20px;'><td style='text-align: left; font-weight:600;'>Hour</td><td><i class='fa fa-btc' aria-hidden='true'></i> "+myObj.open.hour+"</td><td><i class='fa fa-btc' aria-hidden='true'></i> "+myObj.changes.price.hour+"</td><td>"+myObj.changes.percent.hour+"%</td></tr>"
                          +"<tr style='text-align: right; font-size: 20px;'><td style='text-align: left; font-weight:600;'>Day</td><td><i class='fa fa-btc' aria-hidden='true'></i> "+myObj.open.day+"</td><td><i class='fa fa-btc' aria-hidden='true'></i> "+myObj.changes.price.day+"</td><td>"+myObj.changes.percent.day+"%</td></tr>"
                          +"<tr style='text-align: right; font-size: 20px;'><td style='text-align: left; font-weight:600;'>Week</td><td><i class='fa fa-btc' aria-hidden='true'></i> "+myObj.open.week+"</td><td><i class='fa fa-btc' aria-hidden='true'></i> "+myObj.changes.price.week+"</td><td>"+myObj.changes.percent.week+"%</td></tr>"
                          +"<tr style='text-align: right; font-size: 20px;'><td style='text-align: left; font-weight:600;'>Month</td><td><i class='fa fa-btc' aria-hidden='true'></i> "+myObj.open.month+"</td><td><i class='fa fa-btc' aria-hidden='true'></i> "+myObj.changes.price.month+"</td><td>%"+myObj.changes.percent.month+"</td></tr>"
                          +"<tr style='text-align: right; font-size: 20px;'><td style='text-align: left; font-weight:600;'>Quarter</td><td><i class='fa fa-btc' aria-hidden='true'></i> "+myObj.open.month_3+"</td><td><i class='fa fa-btc' aria-hidden='true'></i> "+myObj.changes.price.month_3+"</td><td>"+myObj.changes.percent.month_3+"%</td></tr>"
                          +"<tr style='text-align: right; font-size: 20px;'><td style='text-align: left; font-weight:600;'>Half</td><td><i class='fa fa-btc' aria-hidden='true'></i> "+myObj.open.month_6+"</td><td><i class='fa fa-btc' aria-hidden='true'></i> "+myObj.changes.price.month_6+"</td><td>"+myObj.changes.percent.month_6+"%</td></tr>"
                          +"<tr style='text-align: right; font-size: 20px;'><td style='text-align: left; font-weight:600;'>Year</td><td><i class='fa fa-btc' aria-hidden='true'></i> "+myObj.open.year+"</td><td><i class='fa fa-btc' aria-hidden='true'></i> "+myObj.changes.price.year+"</td><td>"+myObj.changes.percent.year+"%</td></tr></tbody>"
                          ;
         
        for (var i = 0; i < myObj.length; i++) {
                data.addRow([myObj[i].time, myObj[i].average]);
            }
        // txt+=" ]";
    }
    document.getElementById("abc").innerHTML = txt;
    document.getElementById("lol").innerHTML = lol;

};
url = "https://apiv2.bitcoinaverage.com/indices/<?php echo "$martype" ?>/ticker/<?php echo "$coin" ?>";
xmlhttp.open("GET", url, true);
xmlhttp.send();
</script>
</body>
</html>