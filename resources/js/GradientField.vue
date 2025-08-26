<template>
    <div class="flex items-center">
        <div class="input-group w-auto">
            <popover name="gradients" class="gradient-field" placement="bottom-start">
                <template #trigger>
                    <div
                        class="input-group-prepend px-px"
                        v-tooltip="__('Pick Gradient')"
                    >
                        <div class="relative flex items-center outline-none">
                            <div class="inline-block cursor-pointer rounded m-0 p-[2px]" >
                                <div
                                    class="rounded-sm overflow-hidden w-8 h-8"
                                    :class="{ 'border dark:border-dark-900': !value, 'cursor-not-allowed': isReadOnly }"
                                    :style="{ 'background-image': 'url(\'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAMElEQVQ4T2N89uzZfwY8QFJSEp80A+OoAcMiDP7//483HTx//hx/Ohg1gIFx6IcBALl+VXknOCvFAAAAAElFTkSuQmCC\')' }"
                                >
                                    <div
                                        class="w-8 h-8"
                                        :style="{ 'background': value }"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </template>

                <template #default="{ close: closePopover }">
                    <div class="gradient-field-popover">
                        <div class="p-2">
                            <vue-gpickr v-model="gradient" @input="gradientSelected" />
                        </div>

                        <div class="p-4">
                            <text-input :value="value" @input="customGradientEntered" />
                        </div>
                    </div>
                </template>
            </popover>
        </div>
    </div>
</template>

<script>
import { VueGpickr, LinearGradient } from 'vue-gpickr';

let gradient = new LinearGradient({
    angle: 0,
    stops: [
        ['#00ff00', 0],
        ['#ff0000', 1]
    ]
});

export default {

    mixins: [Fieldtype],

    components: {
        VueGpickr
    },

    data() {
        return {
            gradient
        };
    },

    computed: {
        orderedStops() {
            return this.gradient.stops.slice().sort((a, b) => a[1] - b[1]);
        }
    },

    methods: {
        customGradientEntered(value) {            
            const regex = /\(([^)]*)\)/;
            const match = regex.exec(value);

            if (match && match.length > 1) {
                let parts = match[1].split(',').map(value => value.trim());
                let angle = parts[0];
                let stops = parts.slice(1);
                let stopsArray = [];

                stops.forEach((stop) => {
                    let parts = stop.split(' ')
                    stopsArray.push([parts[0], parts[1].replace('%','') / 100])
                })

                this.gradient = new LinearGradient({
                    angle: angle.replace('deg',''),
                    stops: stopsArray
                });
            }
        },

        gradientSelected() {
            const stops = this.orderedStops.map(stop => `${stop[0].toString()} ${Math.round(stop[1] * 100)}%`).join(', ');
            this.value = `linear-gradient(${this.gradient.angle}deg, ${stops})`;
        }
    },
};
</script>