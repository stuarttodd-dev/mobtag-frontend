<section class="section">
    <div class="container">
        <div class="shadow rounded overflow-hidden">
            <div class="row g-0">
                <div class="col-lg-6 p-4 p-xl-8">
                    <div class="section-heading">
                        <h3 class="h1">Get in Touch</h3>
                        <div class="lead">We’d love to hear from you! Whether you’re looking to start a new project, need support, or just have a question, we’re here to help. Let’s build something amazing together.</div>
                    </div>
                    <form method="post" action="{{ route('contact-us-submission') }}">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input id="contact-name" type="text" name="name" placeholder="Rachel Roth"
                                           class="form-control form-control-has-validation"><span
                                            class="invalid-feedback"></span>
                                    <label class="form-label rd-input-label" for="contact-name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input id="contact-email" type="email" name="email"
                                           placeholder="name@example.com"
                                           class="form-control form-control-has-validation"><span
                                            class="invalid-feedback"></span>
                                    <label class="form-label rd-input-label" for="contact-email">Email
                                        Address</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input type="text" name="subject" class="form-control" placeholder="What's on your mind?">
                                    <label class="form-label rd-input-label" for="contact-company">Subject</label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-floating mb-4">
                                    <input type="text" name="phone" class="form-control"
                                           placeholder="+44 888 888 6666" id="contact-phone">
                                    <label class="form-label rd-input-label" for="contact-phone">Phone</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating mb-4">
                                        <textarea class="form-control" id="contact-message"
                                                  name="message" rows="3" placeholder="Hi there, I would like to ..."
                                                  style="height: 150px"></textarea><span
                                            class="invalid-feedback"></span>
                                    <label class="form-label rd-input-label" for="contact-message">Message</label>
                                </div>
                            </div>
                            <div class="col-12 pt-3">
                                <button class="btn btn-success" type="submit" name="send">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 d-none d-lg-block bg-center bg-cover bg-no-repeat"
                     style="background-image: url({{ asset('static/img/contact.png') }});"></div>
            </div>
        </div>
    </div>
</section>
