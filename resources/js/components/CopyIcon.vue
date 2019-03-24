<template>
    <font-awesome-icon icon="copy" class="pointer text-secondary ml-1" :id="`copyIcon-${id}`" data-toggle="tooltip" data-placement="top" @click="copy"/>
</template>

<script>
    import copy from 'copy-to-clipboard';
    import {getStrRandom} from '../helper';

    export default {
        props: ['value'],

        data() {
            return {
                id: "",
            }
        },
        methods: {
            copy() {
                copy(this.value);
                $(`#copyIcon-${this.id}`).attr('title', this.$i18n.t('text.copied'))
                    .tooltip('_fixTitle')
                    .tooltip('show');
            }
        },
        computed: {

        },
        watch: {

        },
        components: {

        },
        created() {
            this.id = getStrRandom();
        },
        mounted() {
            let self = this;
            $(`#copyIcon-${this.id}`).attr('title', this.$i18n.t('text.clickToCopy'));
            $(`#copyIcon-${this.id}`).tooltip();
            $(`#copyIcon-${this.id}`).on('hidden.bs.tooltip', function () {
                $(`#copyIcon-${self.id}`).attr('title', self.$i18n.t('text.clickToCopy'))
                    .tooltip('_fixTitle')
            });
        }
    }
</script>

<style scoped lang="scss">

</style>