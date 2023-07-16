<?php

class Props
{
	const PUBLIC_PATH = './';
	const SCRIPT_PATH = 'js/';

	public static function pass($props)
	{
		$hash = base64_encode(
			hash_file(
				'sha256',
				self::PUBLIC_PATH . self::SCRIPT_PATH . 'props.js',
				true
			)
		);

		?>
			<script src="<?= self::SCRIPT_PATH ?>props.js"
					integrity="sha256-<?= $hash ?>"
					data-props="<?= htmlentities(json_encode($props)) ?>"></script>
		<?php
	}
}
