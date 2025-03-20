<?php
/**
 * @since 1.0.0
 * @package test-theme
 */

?>

<!DOCTYPE html>
<html lang="ja">
	<head>
		<?php wp_head(); ?>
	</head>

	<body>
		<main>
			<?php
			get_header(); // NOTE: ここの有無でloading属性が付与されたり・されなかったりする
			the_content();
			?>
		</main>
		<?php wp_footer(); ?>
	</body>
</html>
