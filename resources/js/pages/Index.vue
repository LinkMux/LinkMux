<template>
    <div class="main">
        <div class="container">
            <h1>Index</h1>
            <p class="lead">
                {{ $t("title.index") }}
                <font-awesome-icon icon="expand"/>
            </p>
        </div>
    </div>
</template>

<script>
    export default {
        metaInfo() {
            return {
                title: this.$i18n.t('title.index'),
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
    @import '../../sass/variables';
    .main {
        width: $main-width;
        padding-left: $sidebar-width;
    }
</style>