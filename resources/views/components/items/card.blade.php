<a {{$attributes->merge(['class' => 'text-white card w-96 bg-fuchsia-900']) }} >
    <div class="card-body">
        <h2 class="card-title">
            {{$slot}}
        </h2>
    </div>
</a>
