<?php
include("header.php");
$messageControl = checkMessagePost();
?>
    <main>
        <section class="full-width">
            <div class="message-notification" style="display: <?php echo($messageControl['firstVisit']); ?>">
                <?php echo($messageControl['htmlMessage']); ?>
            </div>
            <div class="contact">
                <div class="contact-details">
                    <div class="a-detail">
                        email: <strong><a href="mailto:richard@byteflo.co.za">richard@byteflo.co.za</a></strong>
                    </div>
                    <div class="a-detail">
                        phone: <strong><a href="tel:+27799622990">079 962 2990</a></strong>
                    </div>
                    <div class="a-detail address">
                        <div class="address-label">
                            address:
                        </div>
                        <div class="address-info"><strong>
                            5b Moolman Street       <br>
                            Swellendam              <br>
                            6740</strong>
                        </div>
                    </div>
                </div>
                <form action="contact.php" class="form" method="post">
                    <div class="form__row">
                        <label for="name" class="label__name">Name:</label>
                        <input type="text" class="input__name" placeholder="YOUR NAME" name="aName" value="<?php echo($messageControl['name']); ?>">
                    </div>
                    <div class="form__row">
                        <label for="email" class="label__email">Email:</label>
                        <input type="text" class="input__email" placeholder="YOUR EMAIL" name="email" value="<?php echo($messageControl['email']); ?>">
                    </div>
                    <textarea name="message" id="" cols="30" rows="10" class="input__text-area" placeholder="YOUR MESSAGE HERE"><?php echo($messageControl['message']); ?></textarea>
                    <div class="form__row">
                        <label for="human" class="label__human" value="<?php echo($messageControl['email']); ?>">5 + 7 = </label>
                        <input type="text" class="input__human" placeholder="?" name="human">
                    </div>
                    <button class="button">
                        Send Message
                    </button>
                </form>
            </div>
        </section>
    </main>

<?php
include("aside.php");
include("footer.php");