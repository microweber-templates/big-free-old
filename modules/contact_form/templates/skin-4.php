<?php
/*
  type: layout
  name: Skin-4
  description: Skin-4
*/
?>


<form class="mw_form" data-form-id="<?php print $form_id ?>" name="<?php print $form_id ?>" method="post">

    <div class="mw-message-form-wrapper message-sent" id="msg<?php print $form_id ?>" style="display: none;">
        <span class="message-sent-icon"></span>
        <p class="text-success"><?php _lang("Your Email was sent successfully", 'template/big'); ?></p>
    </div>

    <module type="custom_fields" for-id="<?php print $params['id'] ?>" data-for="module"
            default-fields="First Name[type=text,field_size=6,show_placeholder=true],Last Name[type=text,field_size=6,show_placeholder=true],Phone[type=text,field_size=6,show_placeholder=true],Email[type=email,field_size=6,show_placeholder=true],Message[type=textarea,field_size=12,show_placeholder=true]" input_class="form-control"/>
    <br><br>
    <module type="btn" button_action="submit" button_style="btn-primary w-100" button_text="<?php _lang("Send", 'template/big'); ?>"/>

    <?php if ($show_newsletter_subscription == 'y' && !$newsletter_subscribed): ?>
        <div class="form-group">
            <div class="custom-control custom-checkbox my-2">
                <label class="mw-ui-check" style="padding-top:0">
                    <input type="checkbox" name="newsletter_subscribe" value="1" autocomplete="off"/> <span></span>
                    <span><?php _lang("Please email me your monthly news and special offers", 'template/big'); ?></span>
                </label>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($require_terms && $require_terms_when == 'b'): ?>
        <module type="users/terms" data-for="contact_form_default"/>
    <?php endif; ?>
</form>
