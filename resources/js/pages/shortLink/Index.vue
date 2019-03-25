<template>
    <div class="container">
        <h1>{{ $t("title.shortLink") }}</h1>
        <div class="row justify-content-center">
            <Adder class="col-12 col-sm-10 col-md-8"></Adder>
            <div class="col-12 mt-3">
                <Table/>
            </div>
        </div>
    </div>
</template>

<script>
    import Table from "./Table";
    import Adder from "./Adder";

    export default {
        metaInfo() {
            return {
                title: this.$i18n.t('title.shortLink'),
                meta: []
            }
        },
        data() {
            return {}
        },
        methods: {},
        computed: {},
        watch: {},
        components: {
            Table, Adder
        },
        mounted() {

        }
    }
</script>

<style scoped lang="scss">

</style>