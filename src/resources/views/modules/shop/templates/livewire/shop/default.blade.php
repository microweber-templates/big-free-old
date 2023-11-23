<div>
    <h1>Shop</h1>

    <div class="row">
        <div class="col-md-3">
            <div style="background:#f1f1f1;border-radius:5px;padding:15px;">

                @if(!empty($availableCategories) && !$filterSettings['disable_categories_filtering'])
                    @include('microweber-module-shop::livewire.shop.filters.categories.index')
                @endif

                @if(!empty($availableTags) && !$filterSettings['disable_tags_filtering'])
                    @include('microweber-module-shop::livewire.shop.filters.tags.index')
                @endif

                @if(!empty($availableCustomFields) && !$filterSettings['disable_custom_fields_filtering'])
                    @include('microweber-module-shop::livewire.shop.filters.custom_fields.index')
                @endif

            </div>
        </div>
        <div class="col-md-9">

            @include('microweber-module-shop::livewire.shop.filters.top.index')

            <div class="row mt-4">
                @foreach($products as $product)
                    <div class="col-xl-6 col-lg-6 col-sm-12 mb-5">
                        @include('microweber-module-shop::livewire.shop.product-card')
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mb-3">
                {{ $products->links("livewire-tables::specific.bootstrap-4.pagination") }}
            </div>

        </div>
    </div>

</div>
