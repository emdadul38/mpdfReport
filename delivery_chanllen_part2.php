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
    .tTable .table-condensed-s tr:first-child:last-child td{
        background: #ffffff !important;
        border-bottom: none;
    }
</style>

<div style=" text-align: center;">
     <img  src = "<?php echo base_url('resources/img/hreport.png');?>"/>
     <h5> Plot#12,Blok#A,Squibb Road,Charag Ali,Tongi I/E,Gazipur-1711.<br>
      Phone#081523,081400,0817835,Fax#+8802-0817836.</h5>
  <span style=" text-align: center"><b>Delivery Challan</b><hr></span>  
</div>
<div class="content row-fluid">
    <div class="span5 " style=" width: 40%;  float: left; margin-left: 10%;">
        <div class="widget">
            <table class="table" style="">
                <tr>
                    <td style=" font-weight: bold;  text-align: left;" width="42%;"> No</td>
                    <td style=" font-weight: bold; text-align: left;"><?php echo $Info->NO; ?></td>
                </tr>
                <tr>
                    <td style=" font-weight: bold;text-align: left;" >To <br> M/S</td>
                    <td style="text-align: left;">
                        <span style="padding: 0%">
                            <p style="font-weight: bold;"><?php echo $Info->G_TO ?></p>                            
                            <p><?php echo ($Info->ADDRESS == '')? $Info->ADDRESS : ''; ?></p>                              
                        </span>
                    </td>
                </tr>    
                <tr>
                    <td style=" font-weight: bold;text-align: left;" >L/s Issuing Bank</td>
                    <td style="text-align: left;">&nbsp;&nbsp;&nbsp;
                        <span>
                            <p><?php echo $Info->BANK_NAME; ?></p>
                            <p><?php echo $Info->BRANCH_NAME; ?></p>                       
                            <p><?php echo $Info->B_ADDRESS; ?></p>                       
                        </span>
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
                    <td style=" font-weight: bold; text-align: right;">:&nbsp;&nbsp;&nbsp;<?php echo $Info->LC_DATE; ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="content row-fluid">
    <div class="widget">
        <div class="span6 " style=" width: 82%; float: left; margin-left: 10%;">
            <p>Please take delivery of ther under mentioned atricles which are made as per your order No. <?php echo ($Info->AMDMT_NO == '')? '': $Info->AMDMT_NO; ?> Dated <?php echo ($Info->AMDMT_DATE == '')? '' : $Info->AMDMT_DATE; ?></p><br>
            <p>The articles are in good condition is not returnable</p>
            <div class="widget tTable">
                 <table class="table-condensed-s" >
                    <tr>
                        <th width="7%">Item No.</th>
                        <th >Description of Goods</th>
                        <th width="12%">Quantity in <br> Pcs./Yrds.</th>
                        <th width="12%">Quantity in <br> Dz./Yrds.</th>
                        <th width="12%">Total No of <br> Bundle</th>
                    </tr>
                    <?php $i = 1; $qty = 0?>                    
                    <?php foreach ($result as $row) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td style="text-align: left;">&nbsp;<?php echo $row->DESCB; ?></td>
                            <td><?php echo $row->QTY." Pcs"; ?></td>
                            <td><?php echo $row->PRICE; ?></td>
                            <td><?php echo $row->NOOFBUNDLE; ?></td>
                        </tr>
                            <?php $qty += $row->QTY; ?>
                    <?php } ?>
                        <tr>
                            <td colspan="2" style="text-align: center">Total Qty.</td>
                            <td><?php echo $qty. " Pcs"; ?></td>
                            <td colspan="2"></td>
                        </tr>
                </table>
            </div>
            <p>Export L/C No. <?php echo ($Info->EXPORT_LC_NO == '')? '' : $Info->EXPORT_LC_NO; ?></p>
            <p>Please take delivery of ther under mentioned atricles which are made as per your order No. <?php echo ($Info->PI == '')? '' : $Info->PI ?> Dated <?php echo $Info->PI_DT; ?></p>
        </div>
        <div class="span7" style=" width: 90%;  float: right; padding-top: 5px;">
            <div class="widget">
                <table class="table" style=" float: right;  width: 90%;">
                    <tr>
                        <td style=" font-weight: bold; text-align: right;">Goods received in good condition </td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="span8 " class="content">
                <table class="table" style=" float: left;">
                    <tr>
                        <td style=" font-weight: bold;text-align: right;" width="37%">For harnest Label Industries Ltd.</td>
                        <td style=" font-weight: bold; text-align: right;">
                            <table>
                                <tr>
                                    <td  style="text-align: left;">&nbsp;&nbsp;---------------------------------------------------------</td>
                                </tr>
                                <tr>
                                    <td style=" font-weight: bold;">Authorized Signature of ther Buyer</td>                            
                                </tr>
                            </table>
                        </td>
                    </tr>                 
                </table>
        </div>    
        <br>
        <br>
        <br>
    </div>
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