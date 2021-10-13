<div class="modal fade" id="contact-modal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title">Drop me a line</h4>
            </div>
            {!! Form::open(['url' => 'contact']) !!}
                @honeypot

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
                                {!! Form::textarea('comments', null, ['class' => 'form-control', 'style' => 'height: 182px;', 'placeholder' => 'Message...', 'required' => 'required']) !!}
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
</div>
