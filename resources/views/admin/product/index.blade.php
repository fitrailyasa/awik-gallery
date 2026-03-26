<x-admin-table>

    <x-slot name="title">
        Product
    </x-slot>

    <!-- Table -->
    <div class="my-3">
        @include('admin.product.create')
    </div>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>{{ __('No') }}</th>
                <th>{{ __('Name') }}</th>
                <th class="d-none d-lg-table-cell">{{ __('Description') }}</th>
                <th>{{ __('Image') }}</th>
                {{-- <th>{{ __('Price') }}</th> --}}
                <th class="d-none d-lg-table-cell">{{ __('Category') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $product->name ?? '-' }}</td>
                    <td class="d-none d-lg-table-cell">{{ $product->desc ?? '-' }}</td>
                    <td>
                        <img class="img img-fluid" src="{{ asset('storage/' . $package->img) }}" alt="">
                    </td>
                    {{-- <td>RM {{ $package->price ?? '-' }}</td> --}}
                    <td class="d-none d-lg-table-cell">{{ $package->category->name ?? '-' }}</td>
                    <td class="manage-row">
                        @include('admin.product.edit')
                        @include('admin.product.delete')
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-admin-table>
