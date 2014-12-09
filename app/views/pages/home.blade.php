@extends('layouts.default')

@section('meta')
	<title>Colby Terry | Web Developer | Musician | Game Developer</title>
	<meta name="description" content="Hey, I'm Colby. I program websites and games. I also play guitar. I may or may not also go by Punk Programmer.">
	<meta name="keywords" content="Colby Terry, Colbydude, VoidTeam, Punk Programmer, developer, website, web, games, music, portfolio">
	<link href="http://colbydude.com" rel="canonical">
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
	<?php
		if (isset($_POST['submit']))
		{
			$mail = new PHPMailer(true);
			$mail->isSMTP();

			try
			{
				$mail->Host = getenv('MAIL_HOST');
				$mail->Port = getenv('MAIL_PORT'); // smtp server
				$mail->SMTPAuth = true;
				$mail->Username = getenv('MAIL_USERNAME'); // smtp username
				$mail->Password = getenv('MAIL_PASSWORD'); // smtp pass
				$mail->SMTPSecure = 'tls';

				$mail->AddReplyTo($_POST['email'], $_POST['name']);
				$mail->SetFrom($_POST['email'], $_POST['email']);

				$mail->AddAddress('colbydude@voidteam.net', 'Colby Terry');
				$mail->Subject = $_POST['subject']." Message from ".$_POST['name'];
				$mail->MsgHTML(htmlentities(stripslashes($_POST['message'])));

				$mail->Send();

				echo'
					<div class="row" style="margin-top: 20px;">
						<div class="col-sm-offset-3 col-sm-6">
							<div class="alert alert-success alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								<strong>Success:</strong> Your message was sent. I\'ll get back to you as soon as possible.
							</div>
						</div>
					</div>
				';
			}
			catch (phpmailerException $e)
			{
				echo'
					<div class="row" style="margin-top: 20px;">
						<div class="col-sm-offset-3 col-sm-6">
							<div class="alert alert-danger alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								<strong>Mailing Error:</strong> '.$e->getMessage().'
							</div>
						</div>
					</div>
				';
			}
			catch (Exception $e)
			{
				echo'
					<div class="row" style="margin-top: 20px;">
						<div class="col-sm-offset-3 col-sm-6">
							<div class="alert alert-danger alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
								<strong>Error:</strong> '.$e->getMessage().'
							</div>
						</div>
					</div>
				';
			}
		}
	?>
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