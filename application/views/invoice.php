<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/invoice/");?>style.css" media="all" />
  </head>
  <?php if($invoice->num_rows()>0){
      foreach($invoice->result() as $res){
      ?>
      
      <body>
    <header class="clearfix">
      <div id="logo">
        <img src="<?php echo base_url("assets/site/img/");?>Asset3.png">
      </div>
      <div id="company">
        <h2 class="name">SYSOREX INNOVATOR EDGE</h2>
        <div>Chhattisgarh, India</div>
        <div>+91-7880112100</div>
        <div><a href="mailto:info@sysorexedge.com">info@sysorexedge.com</a></div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
          <div class="to">INVOICE TO:</div>
          <h2 class="name"><?php echo $res->order_name;?></h2>
          <!--<div class="address">796 Silver Harbour, TX 79273, US</div>-->
          <div class="email"><a href="mailto:<?php echo $res->order_email;?>"><?php echo $res->order_email;?></a></div>
        </div>
        <div id="invoice">
          <h1>RefNo. <?php echo $res->order_uniqueid ;?> </h1>
          <div class="date">Date of Invoice: <?php echo $res->order_txndate ;?></div>
       
        </div>
      </div>
      <table border="0" cellspacing="0" style="width:100%;" cellpadding="0">
        <thead>
          <tr>
            <th class="no">#</th>
            <th class="desc">DESCRIPTION</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="no">01</td>
            <td class="desc"><h3><?php echo $res->course_subtitle;?></h3><?php echo $res->course_description;?></td>
            <td class="total">INR <?php echo $res->course_price;?></td>
          </tr>
        </tbody>
        <tfoot>
            <tr>
            <td colspan="2"></td>
            <td></td>
          </tr>
          <tr>
            <td colspan="2">GRAND TOTAL</td>
            <td>INR <?php echo $res->course_price;?></td>
          </tr>
        </tfoot>
      </table>
      <div id="thanks">Thank you!</div>
      <!--<div id="notices">-->
      <!--  <div>NOTICE:</div>-->
      <!--  <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>-->
      <!--</div>-->
    </main>
    <footer>
      Invoice was created on a computer and is valid without the signature and seal.
    </footer>
    <style>
    @media print{
        #print-btn {
            display: none;      
        }
    }
    </style>
    <button id="print-btn" onclick="window.print()">print</button>
  </body>
        
      <?php
    } 
  }?>
  
</html>