<!DOCTYPE html>

<?php

   include('session.php');   

echo $hofdata["itsno"];
   if($_SERVER["REQUEST_METHOD"] == "POST") {
// Fetching variables of the form which travels in URL
//if($name !=''&& $email !=''&& $contact !=''&& $address !='')
//{
//  To redirect form on a particular page
echo "test";
header("location: step2.php");
}
//else{
?>

<html>
    

<head>
    <title>ANJUMAN-E-FATEMI:HOF</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <!--<link rel="stylesheet" href="./css/docs.css">-->
    <!--<link rel="stylesheet" href="./css/prism.min.css">-->
    <link rel="stylesheet" href="css/zerogrid.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <link rel="stylesheet" href="css/responsiveslides.css">
    <script src="js/jquery183.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function() { 
		 
			alert('Please enter silafitra details.');
			$("#mardo").focus();
		
		$("#btnPrint").colorbox({width:"50%", inline:true, href:"#confirm_box"});

		$("#okButton").click(function(){
			var url = 'hof_print_form.php?silafitra=';
			url = url+  $("#mardo").val()+"|";
			url = url+  $("#bairo").val()+"|";
			url = url+  $("#gairbalig").val()+"|";
			url = url+  $("#hamal").val()+"|";
			url = url+  $("#marhoom").val()+"|";
			url = url+  $("#total").val()+"|";
			url = url+  $("#token_time_id").val();

			$("#btnPrint").attr('disabled','disabled');
			
		
			 newwindow = window.open(url, 'print_window', 'height=500,width=600,resizable=yes,toolbars=no,location=no');
			    if (window.focus) { newwindow.focus(); }
			    
				$.fn.colorbox.close();
		});

		$("#cancelButton").click(function(){
				$.fn.colorbox.close();
		});
	});
</script>

    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 
            $("#slider").responsiveSlides({
                auto: true,
                pager: false,
                nav: false,
                speed: 500,
                namespace: "rslides",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });
        });
</script>
<script>
         function canCel() {
          document.getElementById("silaFitraForm").reset();
}
    </script>
    <!--<script src="./hofFiles/jquery.min.js.download"></script>-->
    <script type="text/javascript" src="./hofFiles/jquery.colorbox-min.js.download"></script>
    <script type="text/javascript" src="./hofFiles/livevalidation.js.download"></script>
    <style type="text/css">
        /*@import url(http://fonts.googleapis.com/css?family=Open+Sans);*/
        
        body {
            font-family: 'Open Sans', sans-serif;
            color: #666;
        }
        /* STRUCTURE */
        
        #pagewrap {
            padding: 5px;
            width: 1080px;
            margin: 20px auto;
        }
        
        header {
            height: 100px;
            padding: 0 15px;
        }
        
        #content {
            width: 315px;
            float: left;
            padding: 5px 15px;
            height: 325px;
            position: relative;
        }
        
        #middle {
            width: 340px;
            /* Account for margins + border values */
            float: left;
            padding: 5px 15px;
            margin: 0px 5px 5px 5px;
            height: 325px;
            position: relative;
        }
        
        #midContent {
            width: 315px;
            float: left;
            padding: 5px 15px;
            /*height: 325px;*/
            position: relative;
            width: 47%;
        }
        
        #midMiddle {
            width: 340px;
            /* Account for margins + border values */
            float: left;
            padding: 10px 15px;
            margin: 0px 5px 5px 5px;
            /*height: 325px;*/
            position: relative;
            width: 46%;
        }
        
        #sidebar {
            width: 315px;
            padding: 5px 15px;
            float: left;
            height: 325px;
            position: relative;
        }
        
        footer {
            clear: both;
            padding: 0 15px;
        }
        /************************************************************************************
            MEDIA QUERIES
        *************************************************************************************/
        /* for 980px or less */
        
        @media screen and (max-width: 980px) {
            #pagewrap {
                width: 94%;
            }
            #content {
                width: 41%;
                padding: 1% 4%;
            }
            #middle {
                width: 41%;
                padding: 1% 4%;
                margin: 0px 0px 5px 5px;
                float: right;
            }
            #midContent {
                width: 41%;
                padding: 1% 4%;
            }
            #midMiddle {
                width: 41%;
                padding: 1% 4%;
                margin: 0px 0px 5px 5px;
                float: right;
            }
            #sidebar {
                clear: both;
                padding: 1% 4%;
                width: auto;
                float: none;
            }
            header,
            footer {
                padding: 1% 4%;
            }
        }
        /* for 700px or less */
        
        @media screen and (max-width: 600px) {
            #content {
                width: auto;
                float: none;
            }
            #middle {
                width: auto;
                float: none;
                margin-left: 0px;
            }
            #midContent {
                width: auto;
                float: none;
            }
            #midMiddle {
                width: auto;
                float: none;
                margin-left: 0px;
            }
            #sidebar {
                width: auto;
                float: none;
            }
        }
        /* for 480px or less */
        
        @media screen and (max-width: 480px) {
            header {
                height: auto;
            }
            h1 {
                font-size: 2em;
            }
            #sidebar {
                /*display: none;*/
                /*height: auto;*/
            }
        }
        
        #content {
            background: #f8f8f8;
        }
        
        #sidebar {
            background: #f0efef;
        }
        
        header,
        #content,
        #middle,
        #midContent,
        #midMiddle,
        #sidebar {
            margin-bottom: 5px;
        }
        
        #pagewrap,
        header,
        #content,
        #middle,
        #midContent,
        #midMiddle,
        #sidebar,
        footer {
            border: solid 1px #ccc;
        }
        
        .line-separator {
            height: 5px;
            background: #FF6633;
            border-bottom: 1px solid #FF6633;
            border-radius: 5px;
        }
        
        div.box {
            text-align: center;
            /*background-color: lightgrey;*/
            border: 10px solid white;
            /* padding: 0px; */
            /* margin: 25px; */
        }
        
        table.tbl td {
            text-align: left;
            padding-left: 5px;
            border: #000 1px dashed;
        }
    </style>
    <script id="SilaFitraCalc" type="text/javascript">
       
        function changeValue(val, amount, type) {
            var typer = type + "r";
            var typep = type + "p";
            var tamount = (val * amount) + "";
            if (tamount == 0) {
                document.getElementById(typer).innerHTML = 0;
                document.getElementById(typep).innerHTML = 0;

            } else {
                famount = tamount.split(".");
                document.getElementById(typer).innerHTML = famount[0];
                if (typeof famount[1] != 'undefined') {
                    document.getElementById(typep).innerHTML = famount[1].substr(0, 2);
                } else {
                    document.getElementById(typep).innerHTML = 0;
                }
            }
        }

        function total() {
            var mardo = 0;
            var bairo = 0;
            var gair = 0;
            var hamal = 0;
            var marhoom = 0;
            if (document.getElementById('mardor').innerHTML != "" && document.getElementById('mardop').innerHTML != "")
                mardo = (document.getElementById('mardor').innerHTML + "." + document.getElementById('mardop').innerHTML) * 1;
            if (document.getElementById('bairor').innerHTML != "" && document.getElementById('bairop').innerHTML != "")
                bairo = (document.getElementById('bairor').innerHTML + "." + document.getElementById('bairop').innerHTML) * 1;
            if (document.getElementById('gairbaligr').innerHTML != "" && document.getElementById('gairbaligp').innerHTML != "")
                gair = (document.getElementById('gairbaligr').innerHTML + "." + document.getElementById('gairbaligp').innerHTML) * 1;
            if (document.getElementById('hamalr').innerHTML != "" && document.getElementById('hamalp').innerHTML != "")
                hamal = (document.getElementById('hamalr').innerHTML + "." + document.getElementById('hamalp').innerHTML) * 1;
            if (document.getElementById('marhoomr').innerHTML != "" && document.getElementById('marhoomp').innerHTML != "")
                marhoom = (document.getElementById('marhoomr').innerHTML + "." + document.getElementById('marhoomp').innerHTML) * 1;

            var total = mardo + bairo + gair + hamal + marhoom;

            document.getElementById('total').value = Math.round(total * 100) / 100;
            document.getElementById('stotal').innerHTML = Math.round(total * 100) / 100;
        }
    </script>
    <script>
        $(function () {
            $("#pgHeader").load("header.html");
        });
    </script>
</head>

<body>
    <div id="pgHeader">
    </div>

    <div id="pagewrap">

        <header>
            <h1>Anjuan-E-Fatemi &nbsp;<span class="style1">-----------------------------------------------------------</span>1438/2017</h1>
            <!--<h1>3 Column Responsive Layout</h1>-->
        </header>

        <section id="content">
            <!--h2>Top Row 1</h2-->
            <p>Serial Number: <strong>109</strong></p>
            <p>Sabil Code: <strong><?php echo  $hofdata["itsno"] ?></strong></p>
            <p>Ejamaat ID: <strong><?php echo  $logindata["sabilno"] ?></strong></p>
            <p>Name: <strong><?php echo  $hofdata["name"] ?></strong></p>
            <!--div style="position: absolute; bottom:0; "-->
                <p>Address: <strong><?php echo  $hofdata["address"] ?></strong></p>
                <p>Phone :<strong><?php echo  $hofdata["mobile_no"] ?></strong></p>
            <!--/div-->
        </section>

        <section id="middle">
            <!--h2>Top Row 2</h2-->
            <div class="box">
                <img src="./images/center_logo.jpg" alt="centerlogo" name="centerlogo" width="321" height="200" id="centerlogo">
            </div>

            <!--<div class="line-separator" style="margin-left: 14px; margin-right: 5px;"></div>-->
            <div style="position: absolute; bottom:0; ">
                <p>Mohallah: <strong><?php echo  $hofdata["mohalla"] ?> </strong></p>
                <p>Sector: <strong><?php echo  $hofdata["sector"] ?></strong></p>
                <p>Mobile: <?php echo  $hofdata["mobile_no"] ?></p>
                <!--<p>Middle2</p>-->
            </div>
        </section>

        <aside id="sidebar">
            <!--h2>Top Row 3</h2-->
            <div style="text-align: center; ">
                <img class="box" style="border: 2px solid white" alt=<?php echo  $hofdata["itsno"] ?> src="http://www.barcodesinc.com/generator/image.php?code=<?php echo  $hofdata["itsno"] ?>&amp;style=197&amp;width=200&amp;height=80&amp;xres=1&amp;font=10&amp;type=C39" name="barcode" align="middle" height="95"
                    id="barcode">
            </div>
            <div style="position: absolute; bottom:0; ">
                <p>Last Year Vajebat : <strong>353000</strong></p>
                <p>SubSector: <strong><?php echo  $hofdata["sub_sector"] ?></strong></p>
                <p>Email: <?php echo  $hofdata["emailid"] ?></p>
            </div>
            <!--<p>Right2</p>-->
            <!--<p>Right3</p>-->
        </aside>
        <div class="line"></div>
        <!--<div>-->
        <section id="midContent">
            <h2>Sila Fitra</h2>
            <!--p>ABC Left1</p-->
            <form id="silaFitraForm">
            <table width="100%" id="silaFitraTable" border="1" class="tbl">
                <tbody>
                    <tr>
                        <th scope="col" align="left"><strong>Type</strong></th>
                        <th scope="col" width="30px" align="left">No of Persons</th>
                        <th scope="col" align="left">Per Head</th>
                        <th scope="col" align="left">Rupees</th>
                        <th scope="col" align="left">Paise</th>
                    </tr>
                    <tr>
                        <th scope="row" align="left">Mardo</th>
                        <td align="left"><input name="mardo" class="textbox" id="mardo" tabindex="1" value="" onkeyup="changeValue(this.value,216.04,&#39;mardo&#39;);total();"></td>
                        <td>216.04</td>
                        <td id="mardor"></td>
                        <td id="mardop"></td>
                    </tr>
                    <tr>
                        <th scope="row" align="left">Bairo</th>
                        <td align="left"><input name="bairo" class="textbox" id="bairo" tabindex="1" value="" onkeyup="changeValue(this.value,216.04,&#39;bairo&#39;);total();"></td>
                        <td>216.04</td>
                        <td id="bairor"></td>
                        <td id="bairop"></td>
                    </tr>
                    <tr>
                        <th scope="row" align="left">Gair Balig</th>
                        <td align="left"><input name="gairbalig" class="textbox" id="gairbalig" tabindex="1" value="" onkeyup="changeValue(this.value,108.02,&#39;gairbalig&#39;);total();"></td>
                        <td>108.02</td>
                        <td id="gairbaligr"></td>
                        <td id="gairbaligp"></td>
                    </tr>
                    <tr>
                        <th scope="row" align="left">Hamal</th>
                        <td align="left"><input name="hamal" class="textbox" id="hamal" tabindex="1" value="" onkeyup="changeValue(this.value,108.02,&#39;hamal&#39;);total();"></td>
                        <td>108.02</td>
                        <td id="hamalr"></td>
                        <td id="hamalp"></td>
                    </tr>
                    <tr>
                        <th scope="row" align="left">Marhoom</th>
                        <td align="left"><input name="marhoom" class="textbox" id="marhoom" tabindex="1" value="" onkeyup="changeValue(this.value,108.02,&#39;marhoom&#39;);total();"></td>
                        <td>108.02</td>
                        <td id="marhoomr"></td>
                        <td id="marhoomp"></td>
                    </tr>
                </tbody>
            </table>
            </form>
        </section>

        <section id="midMiddle">
            <h2>Vajebaat</h2>
            <table id="vajebaatTable" width="100%" border="1" class="tbl">
                <tbody>
                    <tr>
                        <th scope="col" align="left">Vajebaat</th>
                        <th scope="col" align="left">Amount</th>
                    </tr>
                    <tr>
                        <th scope="row" align="left">Zakat ul Maal</th>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th scope="row" align="left">Nazrul Makaam (A.S)</th>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th scope="row" align="left">Khumoos</th>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th scope="row" align="left">Kaffarat Uz Zunoob</th>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th scope="row" align="left">Niyaz Minnat</th>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th scope="row" align="left">Najwa Syedna (TUS)</th>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
            <!--<p>Middle2</p>-->
        </section>

        <section id="midContent">
            <h2>Totals</h2>
            <table width="100%" border="1" class="tbl">
                <tbody>
                    <tr>
                        <th scope="col" align="left">Total</th>
                        <th scope="col" align="left">Amount</th>
                    </tr>
                    <tr>
                        <th scope="row" align="left"><input type="hidden" id="total">Sila Fitra Total</th>
                        <td id="stotal">&nbsp;</td>
                    </tr>
                    <tr>
                        <th scope="row" align="left">Vajebaat Total</th>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th scope="row">&nbsp;</th>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <th scope="row" align="left">Others Total</th>
                        <td>&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </section>

        <section id="midMiddle">
            <!--<h2>Vajebaat</h2>-->
            <table id="vajebaatTable" width="100%" border="1" class="tbl">
                <tbody>
                    <tr>
                        <td colspan="2" align="right"><span class="style2">Vajebaat Total</span></td>
                    </tr>
                    <tr>
                        <th scope="row">&nbsp;</th>
                    </tr>
                    <tr>
                        <td align="right" colspan="2"><b>GRAND TOTAL :     </b></td>
                    </tr>
                    <tr>
                        <th scope="row">&nbsp;</th>
                    </tr>
                    <tr>
                        <td style="padding-bottom: 14px;" align="right" colspan="2">Abde Syedna (TUS) <br> Sign _______________________________<br> Al Amil ul Hazir</td>
                    </tr>
                </tbody>
            </table>
            <!--<p>Middle2</p>-->
        </section>

        <!--section id="midContent">
            <table width="100%" border="1" class="tbl">
                <tbody>
                    <tr>
                        <td align="left" style=" background: green; color: #fff; ">
                            <b>SELECT Bethak Date : </b>
                            <select name="token_no" id="token_no">
                                <option>Select</option>
                                <option value="11">Wednesday 29-Jun-16</option>
                                <option value="12">Thursday 30-Jun-16</option>
                                <option value="13">Sunday 03-Jul-16</option>
                            </select>
                            
                        </td>
                    </tr>
                </tbody>
            </table>
        </section-->

        	      <div style="align: left; ">
                     <button name="print" type="button"  id="btnPrint" onclick="total();">Print</button>
                        <button type="button" onclick="canCel()">Cancel</button>
			      
            </div>    	

      
		
        <div style="display:none">
			<div id="confirm_box" style="padding:10px; background:#ddd;">
			<p><strong>Please Check That You have 2 pages in the printer and the printer is properly connected</strong></p>
			<p>You will be allowed only one print<br>
			</p>			
			<button type="button" id="okButton" class="btnactive">Print</button>
			
			<button type="button" id="cancelButton" class="btnactive" >Cancel</button>
			</div>
		</div>


        <footer style="padding: 5px 15px">
            <h4>Instructions:</h4>
            <p>* Denotes Mandatory Fields</p>
            <p>Please select proper value for Markaz Field.</p>
        </footer>
        <!--</div>-->
    </div>
    </div>
</body>

</html>