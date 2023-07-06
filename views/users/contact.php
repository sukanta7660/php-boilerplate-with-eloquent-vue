<?= includePage('shared/user/header') ?>

<!-- contact section -->

<section class="contact_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="heading_container ">
                    <h2 class="">
                        Contact Us
                    </h2>
                </div>
                <form action="<?= URI('/store-messages') ?>" method="post">
                    <div>
                        <input type="text" placeholder="Name" name="name" required/>
                    </div>
                    <div>
                        <input type="email" placeholder="Email" name="email" required/>
                    </div>
                    <div>
                        <input type="text" placeholder="subject" name="subject" required/>
                    </div>
                    <div>
                        <input type="text" class="message-box" placeholder="Message" name="messages" required/>
                    </div>
                    <div class="btn-box">
                        <button type="submit">
                            SEND
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="img-box">
                    <img src="<?= publicPath('user/images/contact-img.png') ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- end contact section -->


<?= includePage('shared/user/footer') ?>
