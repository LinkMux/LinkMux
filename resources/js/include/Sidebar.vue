<template>
    <div class="sidebar">
        <p><font-awesome-icon icon="bars"/></p>
        <p><font-awesome-icon icon="bell"/></p>
        <p><font-awesome-icon icon="bomb"/></p>
        <p><font-awesome-icon icon="bolt"/></p>
    </div>
</template>

<script>
    export default {
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
    .sidebar {
        width: 60px;
        height: $sidebar-height;
        background: black;
        color: #bbbbbb;
        font-size: 24px;
        text-align: center;
        position: absolute;
        p {
            height: 35px;
            margin: 20px 0px;

            &:first-child {
                margin-top: 10px;
            }
        }
    }
</style>