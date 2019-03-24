<template>
    <div class="h-100">
        <Navbar/>
        <Sidebar/>
        <router-view></router-view>
    </div>
</template>

<script>
    import Navbar from "./include/Navbar";
    import Sidebar from "./include/Sidebar";

    export default {
        metaInfo() {
            return {
                titleTemplate: `%s - ${this.$i18n.t('title.base')}`,
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
            Navbar,
            Sidebar
        },
        mounted() {

        }
    }
</script>

<style scoped lang="scss">

</style>