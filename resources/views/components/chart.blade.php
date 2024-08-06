@props([
    'bars' => [],
])

<div class="container mt-2">
    <div class="row border rounded">
        <div class="col-md-8">
            <h5 class="mb-4">Biểu đồ</h5>
            @foreach ($bars as $bar)
                <div class="bar mb-2" style="background-color: {{ $bar['color'] }}; width: {{ $bar['width'] }}%;">
                    {{ $bar['width'] }}%
                </div>
            @endforeach
        </div>
        <div class="col-md-4">
            <h5 class="mb-4">Chú giải</h5>
            @foreach ($bars as $bar)
                <div class="mb-2">
                    <span class="badge d-inline-block w-auto" style="background-color: {{ $bar['color'] }};"></span> {{ $bar['label'] }} -
                    {{ $bar['width'] }}%
                </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .bar {
        height: 30px;
        margin: 5px 0;
        color: #fff;
        text-align: right;
        padding-right: 10px;
        box-sizing: border-box;
    }
</style>
