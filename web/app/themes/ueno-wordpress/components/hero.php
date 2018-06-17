<?php
if (has_post_thumbnail() ):
  $id = get_post_thumbnail_id();
  $src1 = wp_get_attachment_image_src( $id, 'full' );
  $src = $src1[0];
  $srcset = wp_get_attachment_image_srcset( $id, 'full');
  $thumb = wp_get_attachment_image_src( $id, 'blur-thumb');
  $alt = get_post_meta($id, '_wp_attachment_image_alt', true);
endif;
?>

<a class="full progressive replace" data-sizes="100vw" data-srcset="<?php echo esc_attr( $srcset ); ?>" href="<?php echo esc_attr( $src ); ?>"><img alt="eyes" class="preview" src="<?php echo esc_attr( $thumb[0] ); ?>"></a>
