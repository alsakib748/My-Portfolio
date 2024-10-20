<section class="contact-area section-padding" id="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">{{ $contactTitle->title ?? 'Default Title' }}</h3>
                    <div class="desc">
                        <p>{{ $contactTitle->sub_title ?? 'Default Sub-Title' }}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <!-- Contact-Form -->
                <form class="contact-form" id="contact-form">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="name" id="form-name" class="input-box" placeholder="Name">
                                <label for="form-name" class="icon lb-name"><i class="fal fa-user"></i></label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="email" id="form-email" class="input-box" placeholder="Email">
                                <label for="form-email" class="icon lb-email"><i class="fal fa-envelope"></i></label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-box">
                                <input type="text" name="subject" id="form-subject" class="input-box" placeholder="Subject">
                                <label for="form-subject" class="icon lb-subject"><i class="fal fa-edit"></i></label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-box">
                                <textarea name="message" id="form-message" class="input-box" placeholder="Message"></textarea>
                                <label for="form-message" class="icon lb-message"><i class="fal fa-comments"></i></label>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="button-primary">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
