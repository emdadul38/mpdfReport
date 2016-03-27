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
  <span style=" text-align: center"><b>Certificate Of Origin</b><hr></span>  
</div>
<div class="content row-fluid">
    <div class="span6 " style=" width: 15%;  float: right; margin-left: 10%;">
        <div class="widget">
             <table class="table" style=" float: right;">
                <tr>
                    <td width="4%;"> Date</td>
                    <td style=" font-weight: bold; text-align: right;">:&nbsp;&nbsp;&nbsp;<?php echo date("d/m/Y"); ?></td>
                </tr>
            </table>
        </div>
    </div>
    <br>
    <div class="span8 " style=" width: 83%;  float: left; margin-left: 10%;">
        <div class="widget">
            <p style="text-align: justify;">
                This is to certify that the goods, which are delivered under L/C No. <?php echo $coo->LC_NO ?> Dated <?php echo $coo->LC_DATE ?> & Amendment No. <?php echo $coo->AMD_MTNO ?>, date <?php echo $coo->AMDMT_DATE ?>, as per proforma invoice on: <?php echo $coo->PI_NO ?> Dated <?php echo $coo->PI_DATE ?>, Is of Bangladesh Origin.
                </p>
                <br>
                <p>Contact No. -------------  Dated ----------</p>
        </div>
    </div>
    <div class="span8 " style=" width: 83%;  float: left; margin-left: 10%;">
        <p>For and on Behalf of.</p>
        <p style="font-weight: bold;">Harnest Label Industries Ltd.</p>
    </div> 
    <br>
    <div class="span9 " style=" width: 83%;  float: left; margin-left: 10%;">
        <div class="widget">
             <table class="table" style=" float: left;">
                <tr><td  style="text-align: left;">&nbsp;&nbsp;______________________</td></tr>
                <tr>
                    <td style="text-align: left;">&nbsp;&nbsp;&nbsp;Authorized Signature</td>
                </tr>
            </table>
        </div>
    </div>
       
</div>
