<?php

// TODO: find a way to "merge" generate_post func with generate_post_home func
function generate_post_home(string $title, string $desc, string $block, string $author): void {

echo <<<END

<div class="post-header-container">

	<h2 class="post-header">
		<a href="student-post.php?ptitle={$title}&pblock={$block}&pdesc={$desc}">

			<span class="title">{$title}</span>
			<span class="author">({$author})<span>

		</a>

	</h2>

</div>

<div class="post-desc">

	<p class="post-text">{$desc}</p>

</div>

END;

}

function generate_post_header(string $title, string $block, string $desc): void {
echo <<<END

<h2 class="post-header">

	<a href="student-post.php?ptitle={$title}&pblock={$block}&pdesc={$desc}">

		{$title}

	</a>

</h2>

END;
}


function generate_post_profile(string $title, string $desc, string $block): void {
echo "
<div class=\"post-header-container\">
	".generate_post_header($title, $desc, $block)."
</div>
<div class=\"post-desc\">

	<p class=\"post-text\">".$desc."</p>

</div>";

}

?>
