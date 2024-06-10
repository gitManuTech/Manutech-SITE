<?php

require_once "../Links/gen-links.php";

function generate_post_home(string $title, string $desc, string $block, string $author): void {
echo "
<div class=\"post\">
	<div class=\"post-header\">
		<h2 class=\"post-title\" >
			<a href=\"".gen_post_link($title, $block, $desc)."\" class=\"no-link\">
				<span class=\"title\">
					{$title}
				</span>
				<span class=\"author\">
					({$author})
				<span>
			</a>
		</h2>
	</div>
	<div class=\"post-desc\">
		<p class=\"post-text\">{$desc}</p>
	</div>
</div>";
}

function generate_post_profile(string $title, string $desc, string $block): void {
echo "
<div class=\"post\">
	<div class=\"post-header-container\">
		<div class=\"post-header\">
			<h2 class=\"post-title\">
				<a href=\"".gen_post_link($title, $block, $desc)."\" class=\"no-link\">
					{$title}
				</a>
			</h2>
		</div>
	</div>
	<div class=\"post-desc\">
		<p class=\"post-text\">{$desc}</p>
	</div>

</div>";
}

?>
