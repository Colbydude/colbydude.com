@extends('layouts.default')

@section('meta')
	<title>Colby Terry | Web Developer | Musician | Game Developer</title>
	<meta name="description" content="Hey, I'm Colby. I program websites and games. I also play guitar. I may or may not also go by Punk Programmer.">
	<meta name="keywords" content="Colby Terry, Colbydude, VoidTeam, Punk Programmer, developer, website, web, games, music, portfolio">
	<link href="{{ $paths['url'].$paths['base'] }}" rel="canonical">
@stop

@section('content')
	<h1>Hey, I'm Colby</h1>
	<h2>I program websites and games.<br>I also play guitar.</h2>
	<div class="buttons">
		<a href="/web" data-toggle="tooltip" data-placement="bottom" title="Websites"><span class="icon-globe"></span></a>
		<a href="/games" data-toggle="tooltip" data-placement="bottom" title="Games"><span class="icon-gamepad"></span></a>
		<a href="/music" data-toggle="tooltip" data-placement="bottom" title="Music"><span class="icon-guitar"></span></a>
	</div>
	<div class="buttons">
		<a class="twitter" href="https://twitter.com/Colbydude" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Twitter"><span class="icon-twitter"></span></a>
		<a class="skype" href="skype:colbydude001?chat" data-toggle="tooltip" data-placement="bottom" title="Skype"><span class="icon-skype"></span></a>
		<a class="github" href="https://github.com/Colbydude" target="_blank" data-toggle="tooltip" data-placement="bottom" title="GitHub"><span class="icon-github"></span></a>
		<a class="youtube" href="http://www.youtube.com/user/Colbydude" target="_blank" data-toggle="tooltip" data-placement="bottom" title="YouTube"><span class="icon-youtube"></span></a>
	</div>
	<div class="buttons">
		<a href="#" id="contact-button" data-target="#contact-modal" data-toggle="tooltip modal" data-placement="bottom" title="Contact"><span class="icon-envelope"></span></a>
		<a class="paypal" href="http://goo.gl/zCfbmn" data-toggle="tooltip" data-placement="bottom" title="Donations and Payment"><span class="icon-paypal"></span></a>
	</div>
	@if (isset($_POST['submit']))
		<div class="row" style="margin-top: 20px;">
			<div class="col-sm-offset-3 col-sm-6">
				<div class="alert alert-danger alert-dismissible" role="alert">
					<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
					<strong>Error:</strong> This form is under construction at the moment. Please feel free to email me directly at <a href="mailto:colbydude@voidteam.net">colbydude@voidteam.net</a>.
				</div>
			</div>
		</div>
	@endif
	<div class="modal fade" id="contact-modal">
    	<div class="modal-dialog">
    		<div class="modal-content">
    			<div class="modal-header">
    				<button type="button" class="close" data-dismiss="modal">
    					<span aria-hidden="true">&times;</span>
    					<span class="sr-only">Close</span>
    				</button>
    				<h4 class="modal-title">Drop me a line</h4>
    			</div>
    			<form id="contact-form" method="POST">
    				<div class="modal-body">
    					<div class="row">
    						<div class="col-md-6">
    							<div class="form-group">
    								<label for="name">Name</label>
    								<input type="text" class="form-control" id="name" name="name" placeholder="John Doe" required="required">
    							</div>
    							<div class="form-group">
    								<label for="email">Email Address</label>
    								<input type="email" class="form-control" id="email" name="email" placeholder="john@example.com" required="required">
    							</div>
    							<div class="form-group">
    								<label for="subject">Subject</label>
    								<select id="subject" name="subject" class="form-control" required="required">
    									<option value="na" selected>Choose One:</option>
    									<option value="General">General</option>
    									<option value="Support">Support</option>
    									<option value="HTML5 Licensing">HTML5 Licensing</option>
    								</select>
    							</div>
    						</div>
    						<div class="col-md-6">
    							<div class="form-group">
    								<label for="name">Message</label>
    								<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message..."></textarea>
    							</div>
    						</div>
    					</div>
    				</div>
    				<div class="modal-footer">
    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    					<button type="submit" id="sumbit" name="submit" class="btn btn-primary">Send Message</button>
    				</div>
    			</form>
    		</div>
    	</div>
    </div>
@stop