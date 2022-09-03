<?php 
$block_id = 'block_' . $block['id'];
$lead_deployment_id = get_field('lead_deployment_id');
$lead_box_title = get_field('lead_box_title');
$lead_success_message = get_field('lead_success_message');

?>



<!-- Form 1 Below -->
<aside id="html_gsheet_box_<?php echo $block_id; ?>" class="lw-leads-simple">
        <section>
            <h5 class="headline"><?php echo $lead_box_title; ?></h5>
            <form id="html_gsheet_form_<?php echo $block_id; ?>" name="html_gsheet_form_<?php echo $block_id; ?>">
                <input type="hidden" id="interest" name="interest" class="form-control" placeholder="interest"
                    value="ayahuasca">
                <input type="email" id="email" name="email" class="form-control lw-input"
                    placeholder="Enter your email address" required>
                <div class="buttons">
                    <button class="button" type="submit">I&#8217;m interested</button>
                </div>

                <input type="hidden" name="permalink" value="<?php echo get_permalink(); ?>">

            </form>
        </section>

        <section class="html_gsheet_response html_gsheet_submitted">
            <div class="form_submit_loader">
                <!-- <img src="https://i0.wp.com/www.ladsholidayguide.com/wp-content/uploads/g-logo.png?h=80" loading="eager"> -->
                <div class="spinners">
                    <div class="square1"></div>
                    <div class="square2"></div>
                    <div class="square3"></div>
                </div>
            </div>
        </section>

        <section class="html_gsheet_response html_gsheet_success">
            <div>
            <?php echo $lead_success_message; ?>
            </div>
        </section>

        <section class="html_gsheet_response html_gsheet_fail">
            <h5>Ooops. Refresh page and start again.</h5>
        </section>

    </aside>

    <script>
        const html_gsheet_box_<?php echo $block_id; ?> = document.querySelector('#html_gsheet_box_<?php echo $block_id; ?>');
        // const html_gsheet_form = document.querySelector('#html_gsheet_form_<?php echo $block_id; ?>');
        // const html_gsheet_form = document.forms['html_gsheet_form_<?php echo $block_id; ?>']
        const html_gsheet_url_<?php echo $block_id; ?> =
            'https://script.google.com/macros/s/<?php echo $lead_deployment_id; ?>/exec'
        const html_gsheet_form_<?php echo $block_id; ?> = document.forms['html_gsheet_form_<?php echo $block_id; ?>']

        html_gsheet_form_<?php echo $block_id; ?>.addEventListener('submit', e => {
            // Add a temporary loading overlay until form succeeds or fails
            html_gsheet_box_<?php echo $block_id; ?>.classList.add('form-submitted')
            e.preventDefault()
            fetch(html_gsheet_url_<?php echo $block_id; ?>, {
                    method: 'POST',
                    body: new FormData(html_gsheet_form_<?php echo $block_id; ?>)
                })
                .then(response =>
                html_gsheet_box_<?php echo $block_id; ?>.classList.add('form-submitted-success')
                )
                .catch(error => html_gsheet_box_<?php echo $block_id; ?>.classList.add('form-submitted-fail'))
        })
    </script>
<!-- Form 1 Above -->