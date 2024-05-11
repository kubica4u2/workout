<div class="grid gap-y-4">
    @foreach($workouts as $workout)
        <div class="card card-compact bg-base-100 shadow-xl rounded-lg">
            <div class="card-body">
                <div class="border-b border-gray-200 bg-white pb-4">
                    <h3 class="text-base font-semibold leading-6 text-gray-900">{{$workout['title']}}</h3>
                </div>
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
    @endforeach
</div>


