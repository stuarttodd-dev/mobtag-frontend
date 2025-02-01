@if($articles !== null)
<section class="articles">
    <div class="container mx-auto p-4">
        <div class="text-center mb-8 ml-5 mr-5">
            <h2 class="text-2xl font-bold mb-3 tracking-custom3 font-gabarito text-white pt-5">LATEST ARTICLES</h2>
            <p class="mb-4 opacity-75 text-sm pb-3 text-white opacity-75">As a dynamic development studio, we take pride in our relentless pursuit of excellence and our commitment to redefining industry standards.</p>
        </div>
        <div class="flex flex-wrap">
            @foreach($articles as $article)
                <a href="{{ route('article', ['id' => $article->id, 'slug' => $article->slug]) }}">
                <div class="w-full md:w-1/4 px-2 mb-4">
                    <img src="{{ asset('assets/images/' . $article->image) }}" alt="Article" class="w-full h-auto w-full mb-2" style="height:150px">
                    <h3 class="text-sm mb-2 text-white font-gabarito">| <a href="{{ route('article', ['id' => $article->id, 'slug' => $article->slug]) }}" class="ml-2 tracking-custom1">{{ $article->title }}</a></h3>
                    <div style="min-height: 70px;">
                        <p class="mb-2 opacity-75 text-xs pb-1 text-white opacity-75">{{ $article->sub_title }}</p>
                    </div>
                </div>
                </a>
            @endforeach
        </div>
    </div>
</section>
@endif