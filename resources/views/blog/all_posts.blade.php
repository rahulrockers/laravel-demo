@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <h2>Latest Posts</h2>
@endsection

@section('content')
	<?php 
	foreach ($posts as $post) {
		echo '<h4>'.$post->title.'</h4>';
		?>
			<div class="mar_10">
				<?=$post->description?>
			</div>

			<div class="comments-section">
			<?php
				foreach ($post->comments as $comments) {
					?>
						<div class="comment-box">
						<p><?=$comments->text;?></p>
						</div>
					<?php
				}
			?>
			</div>
		<?php
	}
	?>
@endsection
<style>
	.mar_10{
		margin: 10px;
	}
</style>