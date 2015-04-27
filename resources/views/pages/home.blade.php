@extends('layouts.default')

@section('content')
	<div class="container default">
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
		<div class="row flash-message">
			<div class="col-sm-offset-3 col-sm-6">
            	@include('flash::message')
            	@include('layouts.partials.errors')
        	</div>
		</div>
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
	    			{!! Form::open(['route' => 'contact']) !!}
	    				<div class="modal-body">
	    					<div class="row">
	    						<div class="col-md-6">
	    							<div class="form-group">
	    								{!! Form::label('name', 'Name') !!}
										{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'John Doe', 'required' => 'required']) !!}
	    							</div>
	    							<div class="form-group">
										{!! Form::label('email', 'Email Address') !!}
										{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'john@example.com', 'required' => 'required']) !!}
	    							</div>
	    							<div class="form-group">
										{!! Form::label('subject', 'Subject') !!}
										{!! Form::select('subject', [
											'' => 'Choose One:',
											'General' => 'General',
											'Support' => 'Support',
											'HTML5 Licensing' => 'HTML5 Licensing'
										], null, ['class' => 'form-control', 'required' => 'required']) !!}
	    							</div>
	    						</div>
	    						<div class="col-md-6">
	    							<div class="form-group">
										{!! Form::label('comments', 'Message') !!}
										{!! Form::textarea('comments', null, ['class' => 'form-control', 'rows' => '9', 'placeholder' => 'Message...', 'required' => 'required']) !!}
	    							</div>
	    						</div>
	    					</div>
	    				</div>
	    				<div class="modal-footer">
	    					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	    					<button type="submit" id="sumbit" name="submit" class="btn btn-primary">Send Message</button>
	    				</div>
	    			{!! Form::close() !!}
	    		</div>
	    	</div>
	    </div>
	</div>
@stop
