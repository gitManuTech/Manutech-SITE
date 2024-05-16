<?php

// TODO: find a way to "merge" generate_post func with generate_post_home func
function generate_post_home(string $title, string $desc, string $block, string $author): void {

echo <<<END

<div class="post-header-container">

	<h2 class="post-header">
		<a href="student-post.php?
			ptitle={$title}
			&pblock={$block}
			&pdesc={$desc}"> {$title} <span class="author">({$author})<span></a>
	</h2>

</div>

<div class="post-desc">

	<p class="post-text">{$desc}</p>

</div>

END;

}

function generate_post_profile(string $title, string $desc, string $block): void {
echo <<<END

<div class="post-header-container">

	<h2 class="post-header">
		<a href="student-post.php?
			ptitle={$title}
			&pblock={$block}
			&pdesc={$desc}">
				{$title}
			</a>
	</h2>

</div>

<div class="post-desc">

	<p class="post-text">{$desc}</p>

</div>

END;

}

?>
