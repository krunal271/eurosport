<template>
    <select :name="name" v-bind="$attrs" style="white-space: nowrap; width: 100%">
        <slot></slot>
    </select>
</template>

<script>
export default {
    inheritAttrs: true,
    props: ['options', 'value', 'name'],
    inject: ['$validator'],
    mounted: function () {
        var vm = this
        $(this.$el)
            // init select2
            .select2(vm.getConfigurationOptions())
            .val(this.value)
            .trigger('change')
            // emit event on change.
            .on('change', function () {
                vm.$emit('input', $(this).val());
                vm.$nextTick(() => {
                    vm.$validator.validate(vm.name);
                });
            })
    },
    watch: {
        value: function (value) {
            // update value
            $(this.$el).val(value);
            $(this.$el).trigger('change.select2');
        },
        options: function (options) {
            // update options
            $(this.$el).empty().select2({ data: options }).val(this.value).trigger('change.select2');
        }
    },
    methods: {
        getConfigurationOptions() {
            var configurationOptions;
            configurationOptions = { 
                width: '100%',
                data: this.options
            };
            if($(this.$el).data('tags') == true) {
                configurationOptions.tokenSeparators = [','];
                configurationOptions.createTag = function() {return null};
            }
            return configurationOptions;
        }
    },
    destroyed: function () {
        $(this.$el).off().select2('destroy')
    }
}
</script>
