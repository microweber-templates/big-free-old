<div wire:ignore>
    <div class="my-4">
        <div class="mb-2">
            Price range
        </div>
        <div class="form-range mt-1" id="js-shop-price-range"></div>
       <div class="d-flex gap-4 mt-4">

           <div>
               <label>From</label>
               <div class="input-group">
                   <span class="input-group-text">$</span>
                   <input type="text" class="form-control"  wire:model="priceFrom" id="js-shop-price-range-from" aria-label="Amount (to the nearest dollar)">
               </div>
           </div>
           <div>
               <label>To</label>
               <div class="input-group">
                   <span class="input-group-text">$</span>
                   <input type="text" class="form-control" wire:model="priceTo" id="js-shop-price-range-to" aria-label="Amount (to the nearest dollar)">
               </div>
           </div>
       </div>
    </div>

    <script>
        mw.lib.require('noUIiSliderStyled', true);
        $(document).ready(function() {
            let priceRangeElement = document.getElementById('js-shop-price-range');
            let shopPriceRange = noUiSlider.create(priceRangeElement, {
                start: [{{$priceFrom}},{{$priceTo}}],
                step: 1,
                connect: true,
                range: {
                    'min': {{ $minPrice }},
                    'max': {{ $maxPrice }}
                }
            });


            let shopPriceRangeFrom = document.getElementById('js-shop-price-range-from');
            let shopPriceRangeTo = document.getElementById('js-shop-price-range-to');

            shopPriceRangeFrom.addEventListener('input', function () {
                shopPriceRange.set([shopPriceRangeFrom.value, shopPriceRangeTo.value]);
            });

            shopPriceRangeTo.addEventListener('input', function () {
                shopPriceRange.set([shopPriceRangeFrom.value, shopPriceRangeTo.value]);
            });

            shopPriceRange.on('update', function (values) {

                //shopPriceRangeFrom.value = values[0];
                //shopPriceRangeTo.value = values[1];

                // shopPriceRangeFrom.dispatchEvent(new Event('input'));
                // shopPriceRangeTo.dispatchEvent(new Event('input'));

            });

        });
    </script>
</div>
