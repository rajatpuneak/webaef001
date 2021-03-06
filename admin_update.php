<?php
//   include('session.php');   
?>

    <!DOCTYPE html>

    <html lang="en">

    <head>
        <!-- Basic Page Needs
                  ================================================== -->
        <meta charset="utf-8">
        <title>ANJUMAN-E-FATEMI</title>
        <meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
        <meta name="author" content="www.zerotheme.com">
        <!-- Mobile Specific Metas
                  ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">


        <!-- CSS
        ================================================== -->
        <!--------inner form css------------>
        <link rel="stylesheet" href="./css/responsive.min.css">
        <link rel="stylesheet" href="./css/docs.css">
        <link rel="stylesheet" href="./css/prism.min.css">
        <link rel="stylesheet" href="./css/font-awesome.min.css">
        <!--------inner form cssend------------>

        <link rel="stylesheet" href="css/zerogrid.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/menu.css">
        <!--<link rel="stylesheet" href="css/responsiveslides.css">-->
        <script src="js/jquery183.min.js"></script>
        <script type="text/javascript" src="js/app.js"></script> 
            
        
        <!---------css for table-------->
        <style type="text/css">
            .tg {
                border-collapse: collapse;
                border-spacing: 0;
                border-color: #ccc;
                margin: 0px auto;
            }
            
            .tg td {
                font-family: Arial, sans-serif;
                font-size: 14px;
                padding: 9px 9px;
                border-style: solid;
                border-width: 1px;
                overflow: hidden;
                word-break: normal;
                border-color: #ccc;
                color: #333;
                background-color: #fff;
            }
            
            .tg th {
                font-family: Arial, sans-serif;
                font-size: 14px;
                font-weight: normal;
                padding: 9px 9px;
                border-style: solid;
                border-width: 1px;
                overflow: hidden;
                word-break: normal;
                border-color: #ccc;
                color: #333;
                background-color: #f0f0f0;
            }
            
            .tg .tg-e3zv {
                font-weight: bold
            }
            
            .tg .tg-hgcj {
                font-weight: bold;
                text-align: center
            }
            
            .tg .tg-4eph {
                background-color: #f9f9f9
            }
            
            @media screen and (max-width: 767px) {
                .tg {
                    width: auto !important;
                }
                .tg col {
                    width: auto !important;
                }
                .tg-wrap {
                    overflow-x: auto;
                    -webkit-overflow-scrolling: touch;
                    margin: auto 0px;
                }
            }
            
            .col-s-6 .row {
                padding-bottom: 10px;
            }
            
            .col-s-6 .row label {
                font-weight: bold;
            }
            
            .col-s-6 .row p {
                margin: 0px;
            }
        </style>
        <script>
            $(function () {
                $("#pgHeader").load("header.html");
            });
        </script>
        <!------------>
    </head>

    <body>
        <div class="wrap-body">
            <!--////////////////////////////////////Header-->
            <div id="pgHeader">
            </div>
                   
            
            <section id="container">
                 <div class="wrap-container" id="detailFormContainer">
                    <div class="zerogrid">
                        <div class="row" style="padding-left: 20px;">
                            <div class="col-1-1">
                                <div class="wrap-col">
                                    <section id="horizontal">
                                        <h1>Search</h1>
                                        <form id="ff">
                                            <fieldset>
                                                <div class="row">
                                                   
                                                    <div class="col-s-6">
                                                        <div class="row">
                                                            <div class="col-s-6">
                                                                <label for="hofits">HOF ITS No : </label>
                                                            </div>
                                                            <div class="col-s-6">
                                                                <input type="text" id="itsno"  value="">
                                                    
                                                            </div>
                                                            </div>
                                                            </div>
                                                              <div class="col-s-6">
                                                              <div class="row">
                                                  
                                                            <div class="col-2-1" >
                                                                <input class="sendButton" type="button" id="search" value="Search" onclick="showForm('formdata')" style="padding: 0px;" />
                                                            </div>
                                                                                                                    
                                                        </div>
                                                        
                                                        </div>
                                                          </fieldset>        

                                            </form>
                                    </section>
                                  
                                    <!-------------------------->
                                    <section id="formdata" style="display:none">
                                        <h1>Enter HOF Details</h1>
                                        <form id="ff">
                                            <fieldset>
                                                <div class="row" >
                                                    <div class="col-s-6">
                                                        <div class="row">
                                                            <div class="col-s-3">
                                                                <label for="hofits">HOF ITS No : </label>
                                                            </div>
                                                            <div class="col-s-6">
                                                                <input type="text" id="itsno"  value="">
                                                    
                                                            </div>
                                                        </div>
                                                         <div class="row">
                                                            <div class="col-s-3">
                                                                <label for="sector">Sabil No. :</label>
                                                            </div>
                                                            <div class="col-s-6">
                                                                
                                                                <b><input type="text" id="sailno" value=""></b>
                                                                <!--<p>*Un-Editable Text</p>-->
                                                            </div>
                                                        </div>
                                                        
                                                         <div class="row">
                                                            <div class="col-s-3">
                                                                <label for="sector">Sector :</label>
                                                            </div>
                                                            <div class="col-s-6">
                                                                <b><input type="text" id="sector" value=""></b>
                                                                <!--<p>*Un-Editable Text</p>-->
                                                            </div>
                                                        </div>
                                                         <div class="row">
                                                            <div class="col-s-3">
                                                                <label for="sector">Sub Sector :</label>
                                                            </div>
                                                            <div class="col-s-6">
                                                                <b><input type="text" id="sector" value=""></b>
                                                                <!--<p>*Un-Editable Text</p>-->
                                                            </div>
                                                        </div>
                                                          <div class="row">
                                                            <div class="col-s-6">
                                                                <label for="fmbThaliSelect">Do you Recieve FMB Thali</label>
                                                            </div>
                                                            <div class="col-s-6">
                                                                <select id="fmbThaliSelect">
                                    <option>Select</option>
                                    <option>YES</option>
                                    <option>NO</option>
                                    <!--<option>4</option>
                                    <option>5</option>-->
                                </select>
                                                            </div>
                                                        </div>
                                                      
                                                      <div class="row">
                                                            <div class="col-s-6">
                                                                <label for="QarzanHasanaSelect">Registered For Qarzan Hasana Scheme :</label>
                                                            </div>
                                                            <div class="col-s-6" style="align-self: bottom">
                                                                <select id="QarzanHasanaSelect">
                                    <option>Select</option>
                                    <option>YES</option>
                                    <option>NO</option>
                                    <!--<option>4</option>
                                    <option>5</option>-->
                                </select>
                                                            </div>
                                                        </div>
                                                       <div class="row">
                                                            <div class="col-s-6">
                                                                <label for="SabilClearance">Sabil Clearance :</label>
                                                            </div>
                                                            <div class="col-s-6" style="align-self: bottom">
                                                                <select id="SabilClearanceaSelect">
                                    <option>Select</option>
                                    <option>YES</option>
                                    <option>NO</option>
                                    <!--<option>4</option>
                                    <option>5</option>-->
                                </select>
                                                            </div>
                                                        </div>
 <div class="row">
                                                            <div class="col-s-6">
                                                                <label for="MasjidtakweemClr">Masjeed Takhweem Clearance :</label>
                                                            </div>
                                                            <div class="col-s-6" style="align-self: bottom">
                                                                <select id="MasjidtakweemClr">
                                    <option>Select</option>
                                    <option>YES</option>
                                    <option>NO</option>
                                    <!--<option>4</option>
                                    <option>5</option>-->
                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
  <div class="col-s-6">
                                                                <label for="FMBClr">FMB Thali Clearance :</label>
                                                            </div>
                                                            <div class="col-s-6" style="align-self: bottom">
                                                                <select id="FMBThaliClr">
                                    <option>Select</option>
                                    <option>YES</option>
                                    <option>NO</option>
                                    <!--<option>4</option>
                                    <option>5</option>-->
                                </select>
                                                            </div>
                                                        </div>
</div>

                                                        
                                                    <div class="col-s-6">
                                                        <div class="row">
                                                            <div class="col-s-4">
                                                                <label for="HOF name">HOF Name :</label>
                                                            </div>
                                                            <div class="col-s-8">
                                                                <input type="text" id="hofname" value="" >
                                                                </div>
                                                        </div>
                                                                                                   <div class="row">
                                                            <div class="col-s-4">
                                                                <label for="Address">Addesss :</label>
                                                            </div>
                                                            <div class="col-s-8">
                                                               <textarea rows="3" cols="10">Enter Address Here</textarea>
                                                            </div>
                                                        </div>

                                                                                                               <div class="row">
                                                            <div class="col-s-4">
                                                                <label for="Mobile">Mobile :</label>
                                                            </div>
                                                            <div class="col-s-8">
                                                                <input type="text" id="hofcontact" value="">
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="row">
                                                            <div class="col-s-4">
                                                                <label for="emailId">Email Id :</label>
                                                            </div>
                                                            <div class="col-s-8">
                                                                <b><input type="text" id="emailid" value=""></b>
                                                            </div>
                                                        </div>
                                                        
                                                    
                                                        
                                                    </div>
                                                </div>
                                            </fieldset>
                                            </section>
                                            <section id="formdata" class="content-box box-1" style="display:none">
                                            <div class="tg-wrap">
                                                <h1>Enter Family Details</h1>
                                         <input type="button" id="delROWbutton" value="Delete" onClick="deleteRow('familydata')" />
                                         <input type="button" id="addmoreROWbutton" value="Add" onClick="addRow('familydata')"/>
                                         <p> </p>
                                                <table class="tg" id="familydata">
                                                    <tr>
                                                        <th class="tg-e3zv">&nbsp;</th>
                                                        <th class="tg-hgcj">ITS No.</th>
                                                        <th class="tg-e3zv">Name</th>
                                                        <th class="tg-e3zv">Contact</th>
                                                        
                                                       
                                                    </tr>
                                                    <tr>
                                                        <td><input type="checkbox" required="required" name="chk[]" checked="checked" /></td>
                                                        <td class="tg-hgcj"><input type="text" id="itsno"></td>
                                                        <td class="tg-e3zv"><input type="text" id="name"></td>
                                                        <td class="tg-e3zv"><input type="text" id="contact"></td>
                                                        
                                                    </tr>

                                                 </table>
                                            </div>
                                            <div class="form-actions">
                                           
                                                <button type="submit">Add Data</button>
                                                <button type="button">Cancel</button>
                                            </div>
                                        </form>
                                    </section>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="zerogrid">
                    <div class="wrap-footer">
                        <div class="row">
                            <div class="wrap-col">
                                <div class="copy-right">
                                    <center>
                                        <p class="footermargin">Anjuman-E-Fatemi is a non-profit organization administering and managing the affairs
                                            of the Dawoodi Bohra Community in Fatimanagar,Poona</p>
                                        <p class="footermargin" style="font-size: 60%;">Copyright 2015 - <a href="http://www.zerotheme.com" target="_blank" rel="nofollow">Free Html5 Templates</a>                                            designed by ZEROTHEME</p>
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <script type="text/javascript">
                $(function () {
           //         if (navigator.userAgent.match(/msie [6]/i)){
               if (navigator.userAgent.match(/msie [6]/i)){
                        $('li').has('ul').mouseover(function () {
                            $(this).children('ul').css('visibility', 'visible');
                        }).mouseout(function () {
                            $(this).children('ul').css('visibility', 'hidden');
                        })
                    }

                    /* Mobile */
                    $("#menu-trigger").on("click", function () {
                        $("#menu").slideToggle();
                    });

                    // iPad
                    var isiPad = navigator.userAgent.match(/iPad/i) != null;
                    if (isiPad) $('#menu ul').addClass('no-transition');
                });
            </script>
        </div>
        <script src="./css/jquery-2.1.3.min.js.download"></script>
        <script src="./css/js.cookie.js.download"></script>
        <script src="./css/prism.js.download"></script>
        <script src="./css/responsive.min.js.download"></script>
        <script src="./css/docs.min.js.download"></script>
    </body>

    </html>