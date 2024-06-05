<?php

require_once "../Links/gen-links.php";

function generate_post_header_profile(string $title, string $block, string $desc): void {
echo "
<h2 class=\"post-header\">
	<a href=\"".gen_post_link($title, $block, $desc)."\">
		{$title}
	</a>
</h2>";
}

function generate_post_header_home(string $title, string $block, string $desc, string $author): void {
echo "
<h2 class=\"post-header\">
	<a href=\"".gen_post_link($title, $block, $desc)."\">
		<span class=\"title\">
			{$title}
		</span>
		<span class=\"author\">
			({$author})
		<span>
	</a>
</h2>
";
}

function generate_post_home(string $title, string $desc, string $block, string $author): void {
echo "
<div class=\"post-header-container\">
".generate_post_header_home($title, $block, $desc, $author)."
</div>

<div class=\"post-desc\">
	<p class=\"post-text\">{$desc}</p>
</div>";
}

function generate_post_profile(string $title, string $desc, string $block): void {
echo "
<div class=\"post\">
	<div class=\"post-header-container\">"
		.generate_post_header_profile($title, $block, $desc).
	"</div>
	<div class=\"post-desc\">
		<p class=\"post-text\">{$desc}</p>
	</div>

</div>";
}

?>
