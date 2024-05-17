<div class="grid gap-y-4">
    <div x-data="{ active: 0 }" class="mx-auto max-w-3xl w-full  space-y-4">
        @foreach($workouts as $workout)
            <div x-data="{
                id: {{ $loop->index }},
                get expanded() {
                    return this.active === this.id
                },
                set expanded(value) {
                    this.active = value ? this.id : null
                },
            }" x-cloak role="region" class="rounded-lg bg-white shadow">
                <h2>
                    <button
                        x-on:click="expanded = !expanded"
                        :aria-expanded="expanded"
                        class="flex w-full items-center justify-between px-6 py-4 text-xl font-bold"
                    >
                        <span>{{ $workout['title'] }}</span>
                        <span x-show="expanded" aria-hidden="true" class="ml-4">&minus;</span>
                        <span x-show="!expanded" aria-hidden="true" class="ml-4">&plus;</span>
                    </button>
                </h2>

                <div x-show="expanded" x-collapse>
                    <div class="px-6 pb-4">
                        <div class="pt-4 grid grid-cols-5">
                            @for($i = 0; $i < $workout['sets']; $i++)
                                <div class="indicator">
                                    <span class="indicator-item badge badge-accent w-6 h-6">1</span>
                                    <button class="btn btn-lg btn-circle btn-outline border-gray-700">
                                        {{ $workout['weight'] }}
                                    </button>
                                </div>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


