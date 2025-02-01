@if(!empty($data))
    <section class="article-item border-turtle border mx-auto pt-5 pb-5 font-bungee text-white" style="background-image: url('{{ asset('assets/svg/background-grid.svg') }}'); background-size: cover;">
        <div class="flex flex-col items-center justify-center">
            <div class="w-full pb-5 mx-auto text-center">
                <div class="flex">
                    <div class="w-full md:w-1/4 mb-4 mr-2 md:mb-0 hidden md:flex">
                        <img src="{{ asset('assets/images/' . $data->image) }}" alt="{{ $data->title }}" class="h-auto ml-5 pt-2">
                    </div>
                    <div class="w-full md:w-3/4 px-2 ml-5 mr-5 pb-5 text-left">
                        <div class="w-full md:w-1/4 mb-4 mr-2 md:mb-0 flex md:hidden">
                            <img src="{{ asset('assets/images/' . $data->image) }}" alt="{{ $data->title }}" class="w-1/2 h-auto ml-5 pt-2">
                        </div>
                        <div class="hidden md:flex">
                            <h2 class="font-bungee font-bold my-4 text-turtle text-2xl pt-2">{{ $data->title }}</h2>
                        </div>
                        <div class="flex md:hidden">
                            <h2 class="font-bungee font-bold my-4 text-turtle text-sm pt-2">{{ $data->title }}</h2>
                        </div>
                        <p class="text-sm md:text-xs text-left font-bold mb-5 tracking-custom3 font-gabarito">{{ $data->sub_title }}</p>
                        <p class="tracking-custom3 text-sm">
                            <a href="{{ route('article', ['id' => $data->id, 'slug' => $data->slug]) }}" class="hover:bg-turtle border border-white pl-5 pr-5 pt-2 pb-2 rounded-full w-24">VIEW ARTICLE</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
