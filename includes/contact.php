<section id="contacto" class="contact-section">
    <div class="container">
        <div class="contact-wrapper">
            <div class="contact-form-col">
                <h2 class="section-title"><?php echo __('contact_title'); ?></h2>
                <p class="section-subtitle"><?php echo __('contact_subtitle'); ?></p>
                
                <form action="#" method="POST" class="bior-form">
                    <div class="form-group">
                        <label for="name"><?php echo __('form_name'); ?></label>
                        <input type="text" id="name" name="name" placeholder="<?php echo __('form_name_ph'); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><?php echo __('form_email'); ?></label>
                        <input type="email" id="email" name="email" placeholder="<?php echo __('form_email_ph'); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="message"><?php echo __('form_message'); ?></label>
                        <textarea id="message" name="message" rows="4" placeholder="<?php echo __('form_message_ph'); ?>" required></textarea>
                    </div>
                    <button type="submit" class="btn-primary form-submit">
                        <?php echo __('btn_send_message'); ?> <i class="fas fa-paper-plane"></i>
                    </button>
                </form>
            </div>

            <div class="contact-info-col">
                <div class="info-card">
                    <h3><?php echo __('contact_direct_title'); ?></h3>
                    <p><?php echo __('contact_direct_desc'); ?></p>
                    
                    <ul class="info-list">
                        <li>
                            <i class="fab fa-whatsapp"></i>
                            <div>
                                <span>WhatsApp 1:</span>
                                <a href="https://wa.me/52<?php echo PHONE_1; ?>">+52 <?php echo PHONE_1; ?></a>
                            </div>
                        </li>
                        <li>
                            <i class="fab fa-whatsapp"></i>
                            <div>
                                <span>WhatsApp 2:</span>
                                <a href="https://wa.me/52<?php echo PHONE_2; ?>">+52 <?php echo PHONE_2; ?></a>
                            </div>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <span><?php echo __('contact_location'); ?>:</span>
                                <p>Santa Ana Chiautempan, Tlaxcala, México</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>