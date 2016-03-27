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
  <span style=" text-align: center"><b>COMMERCIAL INVOICE</b><hr></span>  
</div>
<div class="content row-fluid">
    <div class="widget">
        <div class="span6 " style=" width: 82%; float: left; margin-left: 10%;">
            <div class="widget tTable">
                 <table class="table-condensed-s">
                    <tr>
                        <td style="text-align: left;">
                            <b> &nbsp;Invoice NO: </b><br>
                            <b> Date:</b>
                        </td>
                        <td rowspan="2">
                            <b><u>Account & Notify Party:</u></b>
                        </td>
                    </tr>                    
                    <tr>
                        <td style="text-align: left;">
                            <b>&nbsp;Shipped By Truck</b> <br>
                            &nbsp;Remarks 90 Days Sight
                        </td>
                    </tr> 
                    <tr>
                        <td style="text-align: left;">
                            &nbsp;<b>L/C No. :</b> <br>
                            <b> Date:</b>
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td style="text-align: left;">
                            <b><u>&nbsp;L/C Issuing Bank:</u></b> <br>                            
                        </td>
                        <td></td>
                    </tr>                   
                         
                </table>
            </div>
        </div>
    </div>
</div>
<br>
<div class="content row-fluid">
    <div class="widget">
        <div class="span6 " style=" width: 82%; float: left; margin-left: 10%;">
        
            <div class="widget tTable">
                 <table class="table-condensed-s" >
                    <tr>
                        <th width="7%">Item No.</th>
                        <th >Description of Goods</th>
                        <th width="12%">Quantity in <br> Pcs./Yrds.</th>
                        <th width="12%">Price US $ <br> Dz./Yrds.</th>
                        <th width="13%">Amount US $</th>
                    </tr>
                    <?php $i = 1; $qty = 0?>                    
                    <?php //foreach ($result as $row) { ?>
                        <tr>
                            <td><?php //echo $i; ?></td>
                            <td style="text-align: left;">&nbsp;<?php //echo $row->DESCB; ?></td>
                            <td><?php //echo $row->QTY." Pcs"; ?></td>
                            <td><?php //echo $row->PRICE; ?></td>
                            <td><?php //echo $row->NOOFBUNDLE; ?></td>
                        </tr>
                    <?php// } ?>
                    <tr>
                        <td colspan="4">Total Amount in US Dollar</td>
                        <td> 1,16666</td>
                    </tr>
                    <tr>
                        <th colspan="5">Amount (in word) Total US Dollar: </th>
                    </tr>
                </table>
            </div>
            <p> <b>MADE IN BANGLADESH </b></p>
            <p>Contract No. <?php //echo ($Info->EXPORT_LC_NO == '')? '' : $Info->EXPORT_LC_NO; ?></p>
            <p>Accessories for 100% Export Oriented Readymade Garments Industry as per your order No. <?php //echo ($Info->PI == '')? '' : $Info->PI; ?> Dated <?php //echo $Info->PI_DT; ?></p>
        </div>
        
        <br>
        <br>
    </div>
    <div class="span8 " class="content">
        <table class="table" style="  width: 90%;  float: left; margin-left: 10%;">
            <tr>
                <td style=" font-weight: bold;text-align: left;" width="37%">For harnest Label Industries Ltd.</td>
                <td style=" font-weight: bold; text-align: right;">
                   
                </td>
            </tr>                 
        </table>
    </div> 
    <br>
    <br>
    <div class="span9 " style=" width: 90%;  float: left; margin-left: 10%;">
        <div class="widget">
             <table class="table" style=" float: left;">
                <tr><td  style="text-align: left;">&nbsp;&nbsp;-----------------------------------</td></tr>
                <tr>
                    <td style=" font-weight: bold; text-align: left;">&nbsp;&nbsp;&nbsp;Authorized Signature</td>
                </tr>
            </table>
        </div>
    </div>
</div>
