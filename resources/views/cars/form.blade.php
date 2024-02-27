
                <div class='mb-2'>
                    <x-form-input name='brand' label="Auto brand "/>
                </div>
                <div class='mb-2'>
                    <x-form-input name='model' label="Auto model "/>
                </div>
                <div class='mb-2 '>
                    <x-form-select name='transmission' label="Transmission " :options="$transmissions" placeholder="Choose transmission"/>
                </div>