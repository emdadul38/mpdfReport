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
  <span style=" text-align: center"><b>FORWARDING LETTER</b><hr></span>  
</div>
<div class="content row-fluid">
    <div class="span5 " style=" width: 40%;  float: left; margin-left: 10%;">
        <div class="widget">
            <table class="table" style="" >
                <tr>
                    <td style=" font-weight: bold;  text-align: left;" width="42%;"> Date :</td>
                    <td style=" text-align: left; font-weight: bold;"><?php echo $fLetter->FR_DATE; ?></td>
                </tr>
                <tr>
                    <td style=" font-weight: bold;  text-align: left;" width="42%;"> Reference No.</td>
                    <td style=" text-align: left;"><?php echo $fLetter->FR_REFERRENCE_NO; ?></td>
                </tr>
            </table><br>
        </div>
    </div>
    <div class="span5 " style=" width: 80%;  float: left; margin-left: 10%;">
        <div class="widget">
            <table class="table" style="" >
                <tr>
                    <td style=" font-weight: bold;  text-align: left;" width="50%;">To</td>
                </tr><tr>
                    <td style="text-align: left;" width="50%;">
                        <p style="font-weight: bold;"> The Executive vice president</p>
                        <p><?php echo $fLetter->BANK_NAME; ?></p>
                        <p><?php echo $fLetter->BANK_BRANCH_NAME; ?></p>
                        <p><?php echo $fLetter->ADDRESS; ?></p>
                    </td>
                </tr>                
            </table><br>
        </div>
    </div>
    <div class="span5 " style=" width: 83%;  float: left; margin-left: 10%;">
        <div class="widget">
            <table class="table" style="" >
                <tr>
                    <td style=" font-weight: bold;  text-align: left;" width="15%;"> Subject :</td>
                    <td style=" font-weight: bold; text-align: left;">Application for the following negatiation documents for US $<?php echo $fLetter->FR_USAMT; ?>. Against L/c No. <?php echo $fLetter->PI_NO; ?> Dated: <?php echo $fLetter->PI_DATE; ?></td>
                </tr>  
            </table>              
            <br>
        </div>
    </div>
    <div class="span5 " style=" width: 83%;  float: left; margin-left: 10%;">
        <div class="widget">
            <p style=" font-weight: bold;">Dear Sir,</p>           
            <p style="text-align: justify;">
                We hereby submit the following documents for negotiation of US $<?php echo $fLetter->FR_USAMT; ?>  only. Delivery of garments accessories as per proforma invoice on: <?php echo $fLetter->PI_NO; ?> Date <?php echo $fLetter->PI_DATE; ?>.
            </p>
            <br>
            <table class="table" style="" >
                <tr>
                    <td style="text-align: left;" width="5%;"> 01.</td>
                    <td style="text-align: left;" width="30%;"> Bill Of Exchange </td>
                    <td style="text-align: left;" width="5%;"> - </td>
                    <td style=" text-align: left;"> <?php echo $fLetter->BILL_EX; ?> Copies</td>
                </tr>
                <tr>
                    <td style="text-align: left;" width="5%;"> 02.</td>
                    <td style="text-align: left;" width="30%;"> Commercial Invoice </td>
                    <td style="text-align: left;" width="5%;"> - </td>
                    <td style=" text-align: left;"> <?php echo $fLetter->COM_INV; ?> Copies</td>
                </tr>
                <tr>
                    <td style="text-align: left;" width="5%;"> 03.</td>
                    <td style="text-align: left;" width="30%;"> Delivery Challan </td>
                    <td style="text-align: left;" width="5%;"> - </td>
                    <td style=" text-align: left;"> <?php echo $fLetter->DELIVERY_CHALLAN; ?> Copies</td>
                </tr>
                <tr>
                    <td style="text-align: left;" width="5%;"> 04.</td>
                    <td style="text-align: left;" width="30%;"> Packing List </td>
                    <td style="text-align: left;" width="5%;"> - </td>
                    <td style=" text-align: left;"> <?php echo $fLetter->PACKING_LIST; ?> Copies</td>
                </tr>
                <tr>
                    <td style="text-align: left;" width="5%;"> 05.</td>
                    <td style="text-align: left;" width="30%;"> Certificate Of Orgin </td>
                    <td style="text-align: left;" width="5%;"> - </td>
                    <td style=" text-align: left;"> <?php echo $fLetter->CERTIFICATE_OF_ORGIN; ?> Copies</td>
                </tr>
                <tr>
                    <td style="text-align: left;" width="5%;"> 06.</td>
                    <td style="text-align: left;" width="30%;"> Truck Challan </td>
                    <td style="text-align: left;" width="5%;"> - </td>
                    <td style=" text-align: left;"> <?php echo $fLetter->NO_OF_TRACKCHALLAN; ?> Copies</td>
                </tr>
                <tr>
                    <td style="text-align: left;" width="5%;"> 07.</td>
                    <td style="text-align: left;" width="30%;"> Letter Of Credit (Original) </td>
                    <td style="text-align: left;" width="5%;"> - </td>
                    <td style=" text-align: left;"> <?php echo $fLetter->LC_ORGINAL; ?> Copies</td>
                </tr>
                <tr>
                    <td style="text-align: left;" width="5%;"> 08.</td>
                    <td style="text-align: left;" width="30%;"> Others </td>
                    <td style="text-align: left;" width="5%;"> - </td>
                    <td style=" text-align: left;"> <?php //echo $fLetter->GNAME; ?> Copies</td>
                </tr>
            </table><br>
            <p>So we requiest you to negotiate the above stated matter as early as possible.</p>
            <p>Thanking You<br>Sincerely Yours,</p>
            <p style="font-weight: bold;">For Harnest Label Industries Ltd.</p>
        </div>
    </div>    
</div>
