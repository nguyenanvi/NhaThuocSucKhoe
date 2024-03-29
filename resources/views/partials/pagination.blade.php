<nav id="pagination" class="uk-margin-small-top">
	@if ($paginator->hasPages())
	<ul class="uk-pagination uk-flex-left">
		{{-- Previous Page Link --}}
		@if ($paginator->onFirstPage())
			<li class="uk-disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
				<span aria-hidden="true">&lsaquo;</span>
			</li>
		@else
			<li>
				<a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&lsaquo;</a>
			</li>
		@endif

		{{-- Pagination Elements --}}
		@foreach ($elements as $element)
			{{-- "Three Dots" Separator --}}
			@if (is_string($element))
				<li class="uk-disabled" aria-disabled="true"><span>{{ $element }}</span></li>
			@endif

			{{-- Array Of Links --}}
			@if (is_array($element))
				@foreach ($element as $page => $url)
					@if ($page == $paginator->currentPage())
						<li class="uk-active uk-text-bold uk-foreground-primary uk-border-rounded-10" aria-current="page"><span class=" uk-text-background-primary">{{ $page }}</span></li>
					@else
						<li><a href="{{ $url }}">{{ $page }}</a></li>
					@endif
				@endforeach
			@endif
		@endforeach

		{{-- Next Page Link --}}
		@if ($paginator->hasMorePages())
			<li>
				<a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">&rsaquo;</a>
			</li>
		@else
			<li class="uk-disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
				<span aria-hidden="true">&rsaquo;</span>
			</li>
		@endif
	</ul>
	@endif
</nav>