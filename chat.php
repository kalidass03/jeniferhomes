<div class="row col-xs-12 col-md-4" id="chat_window_1" style="margin-left:10px; position:fixed; right:0px; bottom:0px;z-index: 31000;">
              <div class="col-xs-12 col-md-12">
            <div class="panel panel-default">
                  <div class="panel-heading top-bar">
                  <div class="col-md-8 col-xs-8">
                  
                     
					 
					 
                      <h3 class="panel-title"><span class="glyphicon glyphicon-comment"></span> Chat - <span id="chat_name"></span></h3>
                    </div>
                  <div class="col-md-4 col-xs-4" style="text-align: right;"> <a href="#"><span id="minim_chat_window" class="glyphicon glyphicon-minus icon_minim"></span></a> <a href="#"><span class="glyphicon glyphicon-remove icon_close" data-id="chat_window_1"></span></a> </div>
              </div>
               <div id="chat-box" class="panel-body msg_container_base" style="min-height:50px !important;">
        
             
              
              </div>
                  <div class="panel-footer">
                <div class="input-group"> 
                      <!--  <input class="form-control" placeholder="Type message..." name="chat_input" id="chat_input"/>-->
                      <input name="chat_input" id="chat_input" type="text" class="form-control input-sm chat_input" placeholder="Write your message here..." />
                      <span class="input-group-btn"> 
                  <!-- <button class="btn btn-success" name="chat_input_submit" id="chat_input_submit"><i class="fa fa-plus"></i></button>-->
                  <button class="btn btn-primary btn-sm" name="chat_input_submit" id="chat_input_submit">Send</button>
                  </span> </div>
               <?php   if(isset($_SESSION['SESS_USER_ID']) && (trim($_SESSION['SESS_USER_ID']) != '') &&  (trim($_SESSION['SESS_USER_STATUS']) == '1')  &&  (trim($_SESSION['SESS_USER_ROLE']) == 'seller') ) {?>
                <div class="input-group"> <span class="input-group-btn"> <a>
                  <button type="button" id="share_address1" class="btn btn-default small">Share Address</button>
                  </a> </span> <span class="input-group-btn"> <a>
                  <button type="button" id="share_contact1" class="btn btn-default small">Share Contact</button>
                  </a> </span> <span class="input-group-btn"> <a>
                  <button type="button" id="share_award" class="btn btn-default small">Award listing</button>
                  </a> </span> </div>
                  <?php }?>
              </div>
                </div>
          </div>
            </div>