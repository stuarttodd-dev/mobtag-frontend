@if(!empty($data))
<section class="article-item" style="background-image: url('{{ asset('assets/svg/background-grid.svg') }}'); background-size: cover;">
    <div class="container mx-auto p-4 font-gabarito text-white">
        <div class="flex flex-wrap items-center ml-5 mr-5">
            <div class="w-full mb-4 md:mb-0">
                <p class="text-center p-2 text-1xl font-bold mb-3 tracking-custom3 font-gabarito uppercase">{{ $data->sub_title }}</p>
                <hr class="text-turtle"/>
            </div>
            <div class="w-full mb-4 md:mb-0 article-content p-5 opacity-75">
                {!! $data->content !!}
            </div>
        </div>
    </div>
</section>

@endif