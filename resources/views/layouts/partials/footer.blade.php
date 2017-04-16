<footer class="container">
    <div class="footer-content">
        <div class="row">
            <div class="col-sm-5 col-sm-push-7">
                <ul class="social-list">
                    <li><a class="link-primary" href="#" data-target="#contact-modal" data-toggle="modal" title="Contact"><span class="fa fa-envelope"></span></a></li>
                    <li><a class="link-github" href="https://github.com/Colbydude" target="_blank" title="GitHub"><span class="fa fa-github"></span></a></li>
                    <li><a class="link-twitch" href="http://twitch.tv/Colbydude" target="_blank" title="Twitch"><span class="fa fa-twitch"></span></a></li>
                    <li><a class="link-twitter" href="https://twitter.com/Colbydude" target="_blank" title="Twitter"><span class="fa fa-twitter"></span></a></li>
                    <li><a class="link-youtube" href="https://www.youtube.com/channel/UCW0IHL6zJWMVjv1ufZS1sCw" target="_blank" title="YouTube"><span class="fa fa-youtube-play"></span></a></li>
                </ul>
            </div>
            <div class="col-sm-7 col-sm-pull-5">
                <p><strong>Copyright &copy; {{ date('Y') }} Colby Terry.</strong></p>
                <p>Proudly built with <a href="http://laravel.com" target="_blank">Laravel</a> and <a href="http://getbootstrap.com" target="_blank">Bootstrap</a>.
            </div>
        </div>
    </div>
</footer>
{{--<div class="modal fade" id="contact-modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Drop me a line</h4>
            </div>
            {!! Form::open(['url' => 'contact']) !!}
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
                    <button type="submit" id="submit" name="submit" class="btn btn-primary-outline">Send Message</button>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>--}}
