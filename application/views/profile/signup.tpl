{config_load file="$views/layout/configs/layout.conf" section="setup"}

<div class="content">
    <div style="height:1000px; width:90%;">
        <center>
            
            <p>
                <table width="100%" border="1px">
					  <tr>
					    <td class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%" height="20%">Nickname</td>
					    <td class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%">Value</td>
					    <td class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="10%">Ticket</td>
					    <td class="col-lg-6 col-md-6 col-sm-6 col-xs-12" width="70%">Hash Tx</td>
					  </tr>
					  
                </table>
	            <div class="card text-white bg-success mb-3" style="max-width: 200rem;">
				    <div class="card-header">Generate Encrypted Profile</div>
				    <div class="card-body">
				        <h5 class="card-title">Success, your key to login on Lottobits</h5>
				        <p class="card-text"><textarea style="width:90%; height:200px;" readonly>{$generateProfile}</textarea></p>
				    </div>
				</div>
           
            </p>
        </center>
    </div>
   </div>
</div>
