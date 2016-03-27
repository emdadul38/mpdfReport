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
    .sss table {
        border: 0px;
    }
</style>

<div style=" text-align: center;">
     <img  src = "<?php echo base_url('resources/img/hreport.png');?>"/>
     <h5> Plot#12,Blok#A,Squibb Road,Charag Ali,Tongi I/E,Gazipur-1711.<br>
      Phone#081523,081400,0817835,Fax#+8802-0817836.</h5>
  <span style=" text-align: center"><b>TRUCK CHALLAN</b><hr></span>  
</div>
<div class="content row-fluid">
    <div class="span5 " style=" width: 40%;  float: left; margin-left: 10%;">
        <div class="widget">
            <table class="table" style="">
                <tr>
                    <td style=" font-weight: bold;  text-align: left;" width="42%;">Ref</td>
                    <td style=" font-weight: bold; text-align: left;"><?php //echo $Info->NO; ?></td>
                </tr>
                <tr>
                    <td style=" font-weight: bold;text-align: left;" >TRUCK NO.:</td>
                    <td style="text-align: left;">
                        <p><?php //echo ($Info->ADDRESS == '')? $Info->ADDRESS : ''; ?></p>
                    </td>
                </tr>               
                               
            </table>
        </div>
    </div>    
    <div class="span6 " style=" width: 15%;  float: right; margin-left: 10%;">
        <div class="widget">
             <table class="table" style=" float: right;">
                <tr>
                    <td width="4%;"> Date</td>
                    <td style=" font-weight: bold; text-align: right;">:&nbsp;&nbsp;&nbsp;<?php //echo $Info->LC_DATE; ?></td>
                </tr>
            </table>
        </div>
    </div>
    
</div>
<br>
<div class="content row-fluid">
    <div class="widget">
        <div class="span6 " style=" width: 82%; float: left; margin-left: 10%;">
        
            <div class="widget tTable">
                 <table class="table" >
                    <tr>
                        <th><u>Account &Notify Party:</u></th>
                        <th> B) <u>Description of Goods</u></th>
                    </tr>                    
                </table>
            </div>
        </div>
    </div>
</div>
<div class="content row-fluid">
    <div class="widget">
        <div class="span6 " style=" width: 82%; float: left; margin-left: 10%;">
        
            <div class="widget tTable">
                 <table class="table-condensed-s" >
                    <tr>
                        <th width="30%">SHIPPING MARK.</th>
                        <th width="10%">PACKETS</th>
                        <th width="25%">QUANTITY</th>
                        <th width="16%">TRUCK FARE</th>
                    </tr>
                    <?php $i = 1; $qty = 0?>                    
                    <?php //foreach ($result as $row) { ?>
                        <tr>
                            <td><?php //echo $i; ?></td>
                            <td style="text-align: left;">&nbsp;<?php //echo $row->DESCB; ?></td>
                            <td><?php //echo $row->QTY." Pcs"; ?></td>
                            <td><?php //echo $row->PRICE; ?></td>
                        </tr>
                    <?php// } ?>
                    
                </table>
            </div><br>
            <div class="sss">
                <table class="table">
                    <tr>
                        <td style="text-align: left;"> <b>DESCRIPTION OF GOODS </b></td>
                        <td style="text-align: right;">FREIGHT PREPAID</td>
                    </tr>
                </table>
            </div>
            <p>Buyer L/C No. <?php //echo ($Info->EXPORT_LC_NO == '')? '' : $Info->EXPORT_LC_NO; ?> Dated:</p>
            <p>Contract No. <?php //echo ($Info->PI == '')? '' : $Info->PI; ?> Dated <?php //echo $Info->PI_DT; ?></p>
        </div>
        
        <br>
        <br>
    </div>
    <div class="span8 " style=" width: 90%;  float: left; margin-left: 10%;">
        <p>As per performs invoice No.</p>
        <p>For & on Behalf of.</p>
        <p>M/s Rahim Paribahan & anghsta.</p>
    </div> 
    <br>
    <div class="span9 " style=" width: 90%;  float: left; margin-left: 10%;">
        <div class="widget">
             <table class="table" style=" float: left;">
                <tr><td  style="text-align: left;">&nbsp;&nbsp;------------------</td></tr>
                <tr>
                    <td style=" font-weight: bold; text-align: left;">&nbsp;&nbsp;&nbsp;Proprictor</td>
                </tr>
            </table>
        </div>
    </div>
</div>
