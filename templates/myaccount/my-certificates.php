<?php
if ( ! defined( 'ABSPATH' ) ) { exit; }

$meta_key = '_certificate_earned';

$user = new LLMS_Person;
$certificates = $user->get_user_postmetas_by_key( get_current_user_id(), $meta_key );
LLMS_log(get_current_user_id());
LLMS_log($certificates);


?>

<div class="llms-my-certificates">
	<?php echo  '<h3>' .__( 'My Certificates', 'lifterlms' ) . '</h3>'; ?>

	<ul class="listing-certificates">
	<?php foreach ( $certificates as $key => $value ) : ?>
	
		<li class="certificate-item">

			<div>
				<h4><?php echo get_the_title( $key ); ?></h4>
			</div>

			<div>
				<p><?php echo date('M d, Y', strtotime($value->updated_date)); ?></p>
			</div>
				
			<div>
				<span><a href="<?php echo get_permalink($value->meta_value); ?>" target="_blank">View Certificate</a></span>
			</div>

		</li>

	<?php endforeach; ?>

	</ul>

</div>

