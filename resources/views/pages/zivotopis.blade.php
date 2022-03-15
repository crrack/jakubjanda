<div>
    <x-title>
        Životopis
    </x-title>
    <section class="px-6 pb-6 text-justify text-primary md:px-0">
        <div class="ml-2 lg:ml-auto content timeline-vertical">
            @foreach(collect($zivotopis)->sortBy('published_at') as $record)
                <div class="w-full pl-6 pt-4 mb-16">
                    <div class="md:flex items-center {{ ($loop->iteration % 2 == 0) ? '' : 'md:flex-row-reverse' }}">
                        <div class="px-4 md:w-2/3 mb-4">
                            <p class="text-xl font-bold mb-2 text-left">{{ $record['title'] }}</p>
                            {!! $record['body'] ?? null !!}
                        </div>
                        <img src="{{ $record['media']['image']['md']['url'] ?? null }}" alt="" class="mx-4 mb-4 md:w-1/3 md:h-full">
                    </div>
                </div>
            @endforeach
        </div>
      </section>
<div>
