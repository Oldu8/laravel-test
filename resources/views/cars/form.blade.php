
<div class='mb-2'>
    <x-form-select name='brand_id' label="Auto brand " :options="$brands" placeholder="Choose brand"/>
</div>
<div class='mb-2'>
    <x-form-input name='model' label="Auto model "/>
</div>
<div class='mb-2 '>
    <x-form-select name='transmission' label="Transmission " :options="$transmissions" placeholder="Choose transmission"/>
</div>
<div class='mb-2'>
    <x-form-input name='vin' label="VIN code "/>
</div>
<div class='mb-2 '>
    <x-form-select name='tags[]' label="Tags" :options="$tags" multiple :size="$tags->count()" many-relation/>
</div>