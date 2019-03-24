<template>
    <div class="container">
        <h1>{{ $t("title.shortLink") }}</h1>
        <Table/>
    </div>
</template>

<script>
    import Table from "./Table";

    export default {
        metaInfo() {
            return {
                title: this.$i18n.t('title.shortLink'),
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
            Table
        },
        mounted() {

        }
    }
</script>

<style scoped lang="scss">

</style>