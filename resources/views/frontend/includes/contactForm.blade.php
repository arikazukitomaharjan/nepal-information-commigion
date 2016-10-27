<div class="col-sm-9" id="page-main-content">
	<div class="col-sm-5">
	 <div class="contact-address">
	       <div class="contact-content"><h4 style="color:#800000;padding-bottom:1px;">National Information Commission</h4><br>
               Phone:
		+977-1-4602747 ; 4602920 <br>Fax: +977-1-4601212 <br>Email: info@nic.gov.np <br>
		Address: Paris Danda, Koteshwor, Kathmandu <br>
		</div>
</div>
	</div>
	<div class="col-sm-5">

		<div class="form-area" >
                      
                       {!! Form::open(['route' => 'contact_request','class'=>'form-horizontal']) !!}
                        
		
				<br style="clear: both">
				<h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
				<div class="form-group">
					<input type="text" class="form-control" id="name" name="name"
						placeholder="Name" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="email" name="email"
						placeholder="Email" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="mobile" name="mobile"
						placeholder="Mobile Number" required>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" id="subject" name="subject"
						placeholder="Subject" required>
				</div>
				<div class="form-group">
					<textarea class="form-control" type="textarea" id="message" name="message"
						placeholder="Message" maxlength="140" rows="7"></textarea>
					<span class="help-block"></span>
				</div>
                                <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">                             
				<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">                           
                                 </div>
                        </div>
			 {!! Form::close() !!}

		</div>
	</div>


</div>
