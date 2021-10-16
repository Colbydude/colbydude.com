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
            <form method="POST" action="{{ url('/contact') }}" accept-charset="UTF-8">
                @csrf
                @honeypot

                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" placeholder="John Doe" required="required" name="name" type="text" id="name" max="255">
                            </div>
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input class="form-control" placeholder="john@example.com" required="required" name="email" type="email" id="email" max="255">
                            </div>
                            <div class="form-group">
                                <label for="subject">Subject</label>
                                <select class="form-control" required="required" id="subject" name="subject">
                                    <option value="" selected="selected">Choose One:</option>
                                    <option value="General">General</option>
                                    <option value="Support">Support</option>
                                    <option value="HTML5 Licensing">HTML5 Licensing</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="comments">Message</label>
                                <textarea class="form-control" style="height: 182px;" placeholder="Message..." required="required" name="comments" cols="50" rows="10" id="comments"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" id="submit" name="submit" class="btn btn-primary-outline">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>
