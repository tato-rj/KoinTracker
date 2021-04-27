@extends('layouts.app')

@push('head')
<style type="text/css">

</style>
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/mark.js/8.11.1/mark.min.js"></script>
@endpush

@section('content')
<div class="container">
	@title(['title' => 'New to cryptocurrencies?', 'description' => 'Here are some new words and terms that might become a part of your vocabulary.'])
	<div class="row mb-4">
		@include('glossary.components.search')
	</div>
	<div class="row">
		<div class="col-12 position-relative">
			<div class="d-flex">
				<div id="terms" class="">
					@foreach($glossary as $letter => $terms)
					<div class="glossary-letter">
						<h2 style="height: 58px; width: 58px; padding-bottom: 2px" class="bg-primary text-white rounded-circle mb-4 d-flex flex-center" id="goto-{{$letter}}">{{$letter}}</h2>
					</div>
						@each('glossary.components.term', $terms, 'term')
					@endforeach
				</div>
				{{-- @include('glossary.components.menu') --}}
			</div>
		</div>
	</div>
</div>
@endsection

@push('js')
<script type="text/javascript">
$('input[name="search-glossary"]').keyup(function() {
	let query = $(this).val().toLowerCase();

	if (query.length > 2) {
		$('.glossary-letter, #menu-container').hide();
		
		$('.glossary-term h5').each(function() {
			if ($(this).text().toLowerCase().includes(query)) {
				$(this).parent().show();
			} else {
				$(this).parent().hide();
			}
		});
	} else {
		$('.glossary-term, .glossary-letter, #menu-container').show();
	}
});

</script>
<script type="text/javascript">
var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 500,
	speedAsDuration: true
});

var $menu = $('#glossary-menu');
var $clone = $('#glossary-menu-fixed');
var menuOffsetTop = $menu.offset().top;

$(window).scroll(function() {
    let scrollTop = $(this).scrollTop();
    
    if (scrollTop >= menuOffsetTop && ! $('footer').isInViewport()) {
        $clone.css({top: $menu.position().top, right: $menu.position().right}).show();
        $menu.addClass('invisible');
    } else {
    	$clone.hide();
    	$menu.removeClass('invisible');
    }
});
</script>
@endpush