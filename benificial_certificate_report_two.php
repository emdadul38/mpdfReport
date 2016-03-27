<style>
    body{ font: 11px verdana;}
    table{ border-collapse: collapse; width: 95%;}

    .table td, .table th {
        border: none;
    }
    table.table-condensed {
        border: 1px solid black;
    }
    h1 {
        text-decoration: underline;
    }
</style>
<div style=" text-align: center;">
     <img  src = "<?php echo base_url('resources/img/hreport.png');?>"/>
     <h5> Plot#12,Blok#A,Squibb Road,Charag Ali,Tongi I/E,Gazipur-1711.<br>
      Phone#081523,081400,0817835,Fax#+8802-0817836.</h5>
  <span style=" text-align: center"><b>BENEFICIARY'S CERTIFICATE</b><hr></span>  
</div>
<div class="content row-fluid">
    <div class="span5 " style=" width: 60%;  float: left; margin-left: 10%;">
        <div class="widget">
            <?php //print_r($bill_factory); exit(); ?>
            <table class="table" style="">
                <tr>
                    <td style=" text-align: left;" width="45%;"> Bayer Name:</td>
                    <td style="text-align: left;">
                        <p style="font-weight: bold; "><?php echo $BUYER_INFO->GARMENT_NAME; ?></p>
                        <p><?php echo $BUYER_INFO->ADDRESS; ?></p>
                    </td>
                </tr>
                <tr>
                    <td style=" text-align: left;" >Beneficiary Name</td>
                    <td style=" font-weight: bold; text-align: left;"><?php echo $COMPANY_INFO->COMPANY_NAME; ?></td>
                    
                </tr>                   
                <tr>
                    <td style=" text-align: left;" width="45%;">Irrevocable Documentary Credit NO:</td>
                    <td style=" font-weight: bold; text-align: left;"><?php echo $LC_INFO; ?></td>
                </tr>
                <tr>
                    <td style="  text-align: left;" width="45%;">Description of Goods:</td>
                    <td style=" font-weight: bold; text-align: left;"><?php echo $bill_factory->GOODS; ?></td>
                </tr>
                <tr>
                    <td style=" text-align: left;" width="45%;">Quantity:</td>
                    <td style=" font-weight: bold; text-align: left;"><?php echo $bill_factory->QTY ." ".$bill_factory->UNIT; ?></td>
                </tr>
                               
            </table>
        </div>
    </div>    
    <div class="span6 " style=" width: 15%;  float: right; margin-left: 10%;">
        <div class="widget">
             <table class="table" style=" float: right;">
                <tr>
                    <td width="4%;"> Date</td>
                    <td style=" font-weight: bold; text-align: right;">:&nbsp;&nbsp;&nbsp;<?php echo date("m/d/Y"); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<div class="content row-fluid">
    <div class="span5 " style=" width: 80%;  float: left; margin-left: 10%;">
        <div class="widget">           
            <p>The price, Quantity, Quantity & others specification of the goods are supplied without any defect & in according with<br>
                the beneficiaries proforma invoice no.<?php echo " ".$bill_factory->PI_NO;   ?> Dated <?php echo $bill_factory->PI_DATE; ?></p><br>
            <p>Any Short and defective goods to be replaced by Harnest Label Industries Ltd. On free of cost.</p> <br></br>
            <span  style="font-weight: bold;" width="60%;">For & on Behalf of<br>
                Harnest Label Industries Ltd.
            </span>
        </div>                        
    </div>
</div>
<div>
    
</div>