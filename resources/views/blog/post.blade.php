@extends('layouts.master')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <h2>Post</h2>
@endsection

@section('content')
	<h3><?=$post->title?></h3>

	<p><?=$post->description?></p>

	<div class="comment-section">
		<?php 
		foreach ($comments as $comment) {
		?>
			<p><?=$comment->text.'by'?></p>
		<?php
		}
		?>
	</div>
@endsection
<style>
	.mar_10{
		margin: 10px;
	}
</style>