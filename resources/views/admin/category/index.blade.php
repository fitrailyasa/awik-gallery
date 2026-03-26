<x-admin-table>

    <x-slot name="title">
        Category
    </x-slot>

    <!-- Table -->
    <div class="my-3">
        @include('admin.category.create')
    </div>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>{{ __('No') }}</th>
                <th>{{ __('Name') }}</th>
                <th class="d-none d-lg-table-cell">{{ __('Description') }}</th>
                <th>{{ __('Action') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name ?? '-' }}</td>
                    <td class="d-none d-lg-table-cell">{{ $category->desc ?? '-' }}</td>
                    <td class="manage-row">
                        @include('admin.category.edit')
                        @include('admin.category.delete')
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</x-admin-table>
