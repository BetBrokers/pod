{config_load file="$views/layout/configs/layout.conf" section="setup"}

<div class="content">
    <div style="height:1000px; width:90%;">
        <center>
            Address to draw 2019-09-04
            <p>
                {$addressForBuyTicket}
            </p>
            <center>
                Informations
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
						<td class="col-lg-6 col-md-6 col-sm-6 col-xs-12">{$reward}</td>
					</tr>

                </table>
            </p>
            <p>
                <div style="float: left; border: 1px solid #000;">
			        <img height="500" width="500" src="{$aux}">
		        </div>
                
            </p>
           
            <table width="100%" border="1px">
					  <tr>
					    <td height="20%"><strong>Currently Bets</strong></td>
					  </tr>
					  
                </table>
            
            <p>
                <table width="100%" border="1px">
					  <tr>
					    <td class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%" height="20%">Nickname</td>
					    <td class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%">Value</td>
					    <td class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%">Ticket</td>
					    <td class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="70%">Hash Tx</td>
					  </tr>
					  {$latestBets}
                </table>
            </p>
        </center>
    </div>
</div>


</div>
