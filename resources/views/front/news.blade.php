@extends('layouts.front.main')

@section('content')
<!-- OFFER -->

<section class="offer">
	<div class="offer-bg">
		<img src="img/newsBg.jpg" alt="News">
	</div>
	<div class="container">
		<h1 class="offer__title">
			{{__('asd.Новости')}}
		</h1>
	</div>
</section>


<!-- NEWS  -->

<section class="news-page">
	<div class="container">
		@livewire('news')
	</div>
</section>
@endsection

@section('scripts')
    @livewireScripts
@endsection