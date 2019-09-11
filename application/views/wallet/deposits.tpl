{config_load file="$views/layout/configs/layout.conf" section="setup"}

<div class="content">
    <div style="height:1000px; width:90%;">
        <center>
            Address to draw 2019-09-04
            <p>
                {$addressForDeposits}
            </p>
            <center>
                Your Deposits
            </center>
                <table border="1">
					<tr>
						<th class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%">Price</th>
						<th class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%">Awards</th>
						<th class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%">Reward</th>
					</tr>
					<tr>
						<td class="col-lg-6 col-md-6 col-sm-6 col-xs-12">0.0035465</td>
						<td class="col-lg-6 col-md-6 col-sm-6 col-xs-12">1</td>
						<td class="col-lg-6 col-md-6 col-sm-6 col-xs-12">,mn</td>
					</tr>

                </table>
            
            <p>
                <div style="float: center; border: 1px solid #000;">
			        <img height="500" width="500" src="{$aux}">
		        </div>
                
            </p>
           <p>
               <form method="post" action="#">
				  <div class="form-group">
				    <label for="formSignTransactionInput">Your Bitcoin Hash Tx</label>
				    <input type="text" name="hash-tx" class="form-control" id="formSignTransactionInput" placeholder="Hash tx input">
				    <button type="submit" class="btn btn-primary">Sign Transaction to Deposit</button>
				    {$addBalance}
				  </div>
				  
				</form>
           </p>
            
        </center>
    </div>
</div>


</div>
