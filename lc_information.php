<style>
    body{ font: 11px verdana;}
    table{ border-collapse: collapse; width: 95%;}

    .table td, .table th {
        border: none;
    }
    table.table-condensed {
        border: 1px solid black;
    }

    .tTable .table-condensed-s, td, th {
        border: 1px solid black;
        text-align: center;
    }
    th {
        height: 25px;
    }
</style>

<div style=" text-align: center;">
     <img  src = "<?php echo base_url('resources/img/hreport.png');?>"/>
     <h5> Plot#12,Blok#A,Squibb Road,Charag Ali,Tongi I/E,Gazipur-1711.<br>
      Phone#081523,081400,0817835,Fax#+8802-0817836.</h5>
  <span style=" text-align: center"><b>L.C. INFORMATION</b><hr></span>  
</div>
<div class="content row-fluid">
    <div class="span5 " style=" width: 40%;  float: left; margin-left: 10%;">
        <div class="widget">
            <table class="table" style="" >
                <tr>
                    <td style=" font-weight: bold;  text-align: left;" width="42%;"> Gmts. Name :</td>
                    <td style=" text-align: left; font-weight: bold;"><?php echo $lcInfo->GNAME; ?></td>
                </tr>
                <tr>
                    <td style=" font-weight: bold;  text-align: left;" width="42%;"> Gmts. Address :</td>
                    <td style=" text-align: left;"><?php echo $lcInfo->GADDRESS; ?></td>
                </tr>
                <tr>
                    <td style=" font-weight: bold;  text-align: left;" width="42%;"> L.C NO :</td>
                    <td style=" text-align: left;"><?php echo $lcInfo->LC_NO; ?></td>
                </tr>                
                 <tr>
                    <td style=" font-weight: bold;  text-align: left;" width="42%;"> Date :</td>
                    <td style=" text-align: left;"><?php echo $lcInfo->LC_OPENING_DATE; ?></td>
                </tr>                
            </table>
            <br>
        </div>
    </div>    
</div>
<div class="content row-fluid">
    <div class="widget">
        <div class="span6 " style=" width: 82%; float: left; margin-left: 10%;">
            <div class="widget tTable">
                 <table class="" border="1">
                    <tr>
                        <th>L.C. Issuing Bank</th>
                        <th>Advising Bank</th>
                    </tr>
                    <tr>
                        <td>
                            <p><?php echo $lcInfo->BBNAME; ?></p>
                            <p><?php echo $lcInfo->BBADDRESS; ?></p>
                        </td>
                        <td>
                            <p><?php echo $lcInfo->FBNAME; ?></p>
                            <p><?php echo $lcInfo->FBADDRESS; ?></p>
                        </td>
                    </tr>                          
                </table>
                <br>
            </div>
        </div>
    </div>
</div>
<div class="content row-fluid">
    <div class="span7 " style=" width: 40%;  float: left; margin-left: 10%;">
        <div class="widget">
            <table class="table" style="">
                <tr>
                    <td style=" font-weight: bold;  text-align: left;" width="42%;"> L.C. Expr. Date :</td>
                    <td style=" text-align: left;"><?php echo $lcInfo->EXP_DATE; ?></td>
                </tr>
                <tr>
                    <td style=" font-weight: bold;  text-align: left;" width="42%;"> L.C. Shiped Date :</td>
                    <td style=" text-align: left;"><?php echo $lcInfo->SHIPMENT_DATE; ?></td>
                </tr>
                <tr>
                    <td style=" font-weight: bold;  text-align: left;" width="42%;"> AT Sight :</td>
                    <td style=" text-align: left;"><?php //echo $lcInfo->NO; ?></td>
                </tr>                
                 <tr>
                    <td style=" font-weight: bold;  text-align: left;" width="30%;"> Amendment NO :</td>
                    <td style=" text-align: left;"><?php //echo $lcInfo->AMEND_DATE; ?></td>
                    <td style=" font-weight: bold;  text-align: left;"> Date :</td>
                    <td style=" text-align: left;"><?php echo $lcInfo->AMEND_DATE; ?></td>
                </tr>                
            </table>
            <br>
        </div>
    </div>    
</div>
<div class="content row-fluid">
    <div class="widget">
        <div class="span8 " style=" width: 82%; float: left; margin-left: 10%;">
            <div class="widget tTable">
                 <table class="" border="1">
                    <tr>
                        <th>Performa Invoice NO</th>
                        <th>Amount Unit</th>
                    </tr>
                    <tr>
                        <td><?php echo $piInfo->PI_NO; ?></td>
                        <td><?php echo $piInfo->PI_DATE; ?></td>
                    </tr>
                          
                </table>
                <br>
            </div>
        </div>
    </div>
</div>
<div class="content row-fluid">
    <div class="span9 " style=" width: 40%;  float: left; margin-left: 10%;">
        <div class="widget">
            <table class="table" style="">
                <tr>
                    <td style=" font-weight: bold;  text-align: left;" width="42%;"> L.C. Is Cancel :</td>
                    <td style=" text-align: left;"><?php echo $lcInfo->LC_CANCEL; ?></td>
                </tr>
                <tr>
                    <td style=" font-weight: bold;  text-align: left;" width="50%;"> L.C. Purchased Date :</td>
                    <td style=" text-align: left;"><?php //echo $lcInfo->NO; ?></td>
                </tr>
                <tr>
                    <td style=" font-weight: bold;  text-align: left;" width="42%;"> L.C. Maturity Date :</td>
                    <td style=" text-align: left;"><?php echo $lcInfo->LC_MATURITY_DATE; ?></td>
                </tr>                
                 <tr>
                    <td style=" font-weight: bold;  text-align: left;"> Remarks :</td>
                    <td style=" text-align: left;"><?php echo $lcInfo->REMARKS; ?></td>
                </tr>                
            </table>
        </div>
    </div>    
</div>
