<?php
global $attachment;

/**
 * @TODO: Remove global
 */

if ( $attachment->description ): ?>
	<figcaption class="PP_Gallery__caption"><?= wp_kses_post( $attachment->description ); ?></figcaption>
<?php endif; ?>