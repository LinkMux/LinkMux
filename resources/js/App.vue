<template>
    <div class="h-100">
        <Navbar/>
        <Sidebar/>
        <div class="mt-1">
            <router-view></router-view>
        </div>
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
            return {}
        },
        methods: {},
        computed: {},
        watch: {},
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