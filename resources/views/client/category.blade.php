<x-app-layout>

    <x-slot name="title">
        {{ $category->name }}
    </x-slot>

    <div class="container" style="padding: 20px">

        <h1 style="margin-bottom: 20px;">
            {{ $category->name }}
        </h1>

        <div
            style="
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 20px;
        ">

            @foreach ($products as $product)
                <a href="#"
                    style="
                    border: 1px solid #eee;
                    border-radius: 12px;
                    overflow: hidden;
                    box-shadow: 0 4px 10px rgba(0,0,0,0.05);
                    transition: 0.3s;
                    color: #333;
                    background: #fff;
                "
                    onmouseover="this.style.transform='translateY(-5px)'"
                    onmouseout="this.style.transform='translateY(0)'">

                    {{-- IMAGE --}}
                    <div style="height: 180px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $product->img) }}" alt="{{ $product->name }}"
                            style="
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                            ">
                    </div>

                    {{-- CONTENT --}}
                    <div style="padding: 15px">

                        <h3
                            style="
                            font-size: 16px;
                            margin-bottom: 8px;
                        ">
                            {{ $product->name }}
                        </h3>

                        <p
                            style="
                            font-size: 14px;
                            color: #666;
                            height: 40px;
                            overflow: hidden;
                        ">
                            {{ $product->desc }}
                        </p>

                        <div
                            style="
                            margin-top: 10px;
                            font-weight: bold;
                            color: #ff5266;
                        ">
                            Rp {{ number_format($product->price, 0, ',', '.') }}
                        </div>

                    </div>
                </a>
            @endforeach

        </div>
    </div>
</x-app-layout>
