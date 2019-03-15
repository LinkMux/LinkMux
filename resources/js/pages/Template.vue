<template>
    <div class="container">
        <h1>{{ $t("title.hashGenerator") }}</h1>
        <p class="lead">
            {{ $t("description.hashGenerator") }}
        </p>

    </div>
</template>

<script>
    export default {
        metaInfo() {
            return {
                title: this.$i18n.t('title.hashGenerator'),
                // title: this.$i18n.t('title.hashGenerator') + " | " + this.$i18n.t('summary.qrCode'),
                meta: []
            }
        },
        data() {
            return {

            }
        },
        methods: {

        },
        computed: {

        },
        watch: {

        },
        components: {

        },
        mounted() {

        }
    }
</script>

<style scoped lang="scss">

</style>