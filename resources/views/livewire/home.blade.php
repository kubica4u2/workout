<div class="grid gap-y-4">
    <div x-data="{ active: 0 }" class="mx-auto max-w-3xl w-full  space-y-4">
        @foreach($exercises as $exercise)
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
                        <span>{{ $exercise->title }}</span>
                        <span x-show="expanded" aria-hidden="true" class="ml-4">&minus;</span>
                        <span x-show="!expanded" aria-hidden="true" class="ml-4">&plus;</span>
                    </button>
                </h2>

                <div x-show="expanded" x-collapse>
                    <div class="overflow-x-auto px-6">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="font-bold text-black">Set</th>
                                    <th class="font-bold text-black">lbs</th>
                                    <th class="font-bold text-black">Reps</th>
                                    <th class="font-bold text-black"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>1</th>
                                    <td>245 lb</td>
                                    <td>5</td>
                                    <td>
                                        <input type="checkbox" checked="checked" class="checkbox" />
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="px-6 pb-4 grid gap-y-2">
                        <button class="btn btn-outline btn-info w-full">Add Set</button>
                        <button class="btn btn-outline btn-success w-full">Finish</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>


