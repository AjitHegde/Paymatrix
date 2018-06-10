<?php
echo '
<html>
<head>
<link rel="stylesheet" type="text/css" href="format.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<title>Benefits</title>
</head>

<body>
<div id="navbar">
  <img src="sticky.png">
</div>
<header>
   <img src="pamatlogo.jpg" width="200" style="padding-left:20px;">
   <div class="tabcontent">
      <div class="tab">
   		<h3>Login</h3>
   </div>
      <div class="tab">
   		<h3>SignUp</h3>
   </div>
   <div class="tab">
   		<h3>Admin Login</h3>
   </div>
   <div class="tab">
   		<h3>Services</h3>		
   </div>
   <div class="tab">
   		<h3>Benefits</h3>
   </div>
   </div>

   <p>Benefits</p>
</header>
<table align="center">
<tr>
<td width="170"><img class="center" src="tenants.jpg" width="80" height="80">
<div class="sub"><p>TENANT</p></div></td>
<td width="170"><img class="center" src="landlord.jpg" width="80" height="80">
<div class="sub"><p>LANDLORD</p></div></td>
</tr>
</table>
<h2 class="sub1">Calculate Your Savings on our platform</h2>
<p class="sub2">
Paymatrix enables you to pay monthly property rent and rent advances the smarter way! As a tenant, you can now pay rent on credit, generate rent receipts and rent agreements online and avail several related services, all at a single place.
</p>
<p class="sub2">This means better management of cash flows and now you can postpone your rent payment for a while to spend on something even worthwhile.</p>
<div class="calcbox">
	<h3 class="calc">Calculate</h3>
</div>
<div class="calcbox">Monthly Rent Amount <input type="range" id="rangeInput" min=1000 max=100000 value=5000 class="slider" oninput="amount.value=rangeInput.value;updaterew(this.value);updateofr(this.value);updatesav(this.value);" >
<div class="rupee"><input type="number" id="amount" min="0" max="9999999" value=5000 maxlength="7" class="tb1" oninput="rangeInput.value=amount.value;updaterew(this.value);if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);updateofr(this.value);updatesav(this.value);"></div>
</div>
<br/>
<div class="calcbox">Mode of Payment 
<label class="radio inline"> 
      <input type="radio" name="mp" value="Credit card" checked>
      <span> Credit Card </span> 
   </label>
  <label class="radio inline"> 
      <input type="radio" name="mp" value="Debit Card">
      <span>Debit Card </span> 
  </label>
  <label class="radio inline"> 
      <input type="radio" name="mp" value="Net Banking">
      <span>Net Banking </span> 
  </label>
</div>
<div class="calcbox2"><br/><br/>
<label class="lbl">Credit free period: </label> <label style="border-bottom: 1px solid #ccc;text-align: center;color:#0872b9;display:inline-block;width:300px;">45 days</label><br/><br/>
<label class="lbl">Card Rewards: </label><label id="rew" style="border-bottom: 1px solid #ccc;text-align: center;color:#0872b9;display:inline-block;width:300px;">50</label><br/><br/>
<label class="lbl">Offers & Discounts: </label><label id="ofr" style="border-bottom: 1px solid #ccc;text-align: center;color:#0872b9;display:inline-block;width:300px;">150</label><br/>
</div><br/><br/>

<div class="calcbox">Referrals per month <input type="range" id="referrng" min=0 max=10 value=0 class="slider1" oninput="refer.value=referrng.value;updateref(this.value);" >
<div class="ref"><input type="text" id="refer" value=0 class="tb1" oninput="referrng.value=refer.value;updateref(this.value);" disabled="disabled"></div>
</div>
<div class="sav">
<label class="lbl2">SAVINGS</label>
<label class="saving"></label>
<span id="savings3" class="saving2">249</span>
</div>
<script type="text/javascript">
var sav=document.getElementById("savings3").innerHTML;

function updaterew(a)
{
  document.getElementById("rew").innerHTML=Math.trunc(a/100);
}
function updateofr(b)
{
  document.getElementById("ofr").innerHTML=Math.trunc((b/100)+100); 
}
function updatesav(c)
{
  ref=document.getElementById("refer").value;
  document.getElementById("savings3").innerHTML=Math.round(((c/100)+100)+(c/100)+(parseInt(ref)*100));  
  sav=document.getElementById("savings3").innerHTML;
}
function updateref(x)
{
    document.getElementById("savings3").innerHTML=(parseInt(sav)+(parseInt(x)*100));
} 
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
}
</script>
<div class="anim">
<img class="imganim" src="https://paymatrix.in//application/static/images/offer-sticker2.png" class="animated pulse" style="width: 200px;" alt="offers">
</div>
<div class="calcbox">
  <h3 class="calc">Benefits</h3>
  <table align="center" cellspacing="25">
    <tr>
    <th></th>
      <th style="font-size:20px;" width="300">Conventional way</th>
      <th style="font-size:20px;color:#2675f2">Paymatrix</th>
    </tr>
    <tr>
      <th style="text-align:right;">Payment Mode</th>  
      <th>Cash/Net Banking</th> 
      <th style="text-align:center;color:#23acd3" >Net Banking/Credit card</th>
    </tr>
    <tr>
      <td style="text-align:right;">Credit Option</td> 
      <td width="300" style="text-align:center">NO</td>
      <td style="text-align:center;color:#23acd3">YES</td>
    </tr>
    <tr>
      <td style="text-align:right;">Rent Receipts (For Tax exemption)</td> 
      <td width="300" style="text-align:center">NO</td>
      <td style="text-align:center;color:#23acd3">YES</td>
    </tr>
    <tr>
      <td style="text-align:right;">Discounts and Rewards</td> 
      <td width="300" style="text-align:center">NO</td>
      <td style="text-align:center;color:#23acd3">YES</td>
    </tr>
    <tr>
      <td style="text-align:right;">Rent Agreements</td> 
      <td width="300" style="text-align:center">YES</td>
      <td style="text-align:center;color:#23acd3">YES</td>
    </tr>
    <tr>
      <td style="text-align:right;">Consolidation of Expenditure</td> 
      <td width="300" style="text-align:center">NO</td>
      <td style="text-align:center;color:#23acd3">YES</td>
    </tr>
    <tr>
      <td style="text-align:right;">Rent Advance Management</td> 
      <td width="300" style="text-align:center">NO</td>
      <td style="text-align:center;color:#23acd3">YES</td>
    </tr>
    <tr>
      <td style="text-align:right;">Build Credit history</td> 
      <td width="300" style="text-align:center">NO</td>
      <td style="text-align:center;color:#23acd3">YES</td>
    </tr>
  </table>
</div>
<br/><br/>
<footer>
<div class="ctle">
        EXPLORE YOUR CREDIT CARD BENEFITS
</div>
<div class="main">
  <div class="blk1">
    <h3 class="subblk">Know how to get <br>more out of your credit card !</h3>
    <table align="center" class="tbl2">
    <tr>
    <th class="rows" width="300"><img src="reward.jpg" width="20px" height="20px">Reward points</th>
    <th class="rows" width="300"><img src="aeroplane.jpg" width="20px" height="20px">Airmiles</th>
    </tr>
    <tr>
    <th class="rows" width="300"><img src="bundle.jpg" width="20px" height="20px">Cashbacks</th>
    <th class="rows" width="300"><img src="fuel.jpg" width="20px" height="20px">Fuel cards</th>
    </tr>
    <tr>
    <th class="rows" width="300"><img src="gift.jpg" width="20px" height="20px">Gift vouchers</th>
    </tr>
    </table>
  </div>
  <div class="blk2">
  <label class="bk">Select Bank</label><br/>
  <select class="bk2">
  <option selected disabled hidden>Select Bank Name</option>
  <option value="American Express">American Express</option>
  <option value="IndusInd">IndusInd</option>
  <option value="HDFC">HDFC</option>
  <option value="State Bank Of India">State Bank Of India</option>
  <option value="AXIS">AXIS</option>
  <option value="CITI">CITI</option>
  <option value="RBL">RBL</option>
  <option value="Standard Charted">Standard Charted</option>
  <option value="ICICI">ICICI</option>
  <option value="HSBC">HSBC</option>
</select>
<br/>
<br/>
<label class="bk">Select Credit card</label><br/>
  <select class="bk2">
  <option selected disabled hidden>Select Card Name</option>
  <option value="VISA">VISA</option>
  <option value="RUPAY card">RUPAY card</option>
  <option value="Platinum Card">Platinum Card</option>
  <option value="Platinum Travel Card">Platinum Travel Card</option>
</select>
<button type="button" class="btn">View benefits</button>
  </div>
</div>
<div class="desc">
<p>
            Disclaimer: <br>
            *The above explanation is only for illustration purposes only and Paymatrix cannot be held responsible if the credit card provider updates or stops the promotion. Paymatrix may just advertise promotions of banks and other companies but in no way does it endorse any promotion or marketing material hosted by the partners. User discretion and diligence is hereby recommended to check the updated content with the partner directly for any further information or query on any promotion or dispute. Paymatrix can’t be held responsible for any disputes arising in this context. Further, by registering and availing the services on Paymatrix, users hereby acknowledge to have read all the terms of use and related disclaimers. 
</p>
<div>
</footer>
<img src="end.png">
</body>
</html>';
?>