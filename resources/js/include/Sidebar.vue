<template>
    <div id="sidebar" class="sidebar">
        <div class="sidebar-menu">
            <ul>
                <li @click="changeSidebarExtend">
                    <font-awesome-icon class="icon" icon="bars"/>
                    <span class="sidebar-menu-text"> Menu </span>
                </li>
                <li>
                    <font-awesome-icon class="icon" icon="bell"/>
                    <span class="sidebar-menu-text"> Bell </span>
                </li>
                <li>
                    <font-awesome-icon class="icon" icon="bomb"/>
                    <span class="sidebar-menu-text"> Bomb!! </span>
                </li>
                <li>
                    <font-awesome-icon class="icon" icon="bolt"/>
                    <span class="sidebar-menu-text"> Bolt </span>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                sidebarExtend: false
            }
        },
        methods: {
            changeSidebarExtend() {
                let self = this;
                if (self.sidebarExtend) {
                    // 移除展開 Menu
                    self.sidebarExtend = false;
                    $("#sidebar").removeClass("sidebar-extend");
                } else {
                    // 展開 Menu
                    self.sidebarExtend = true;
                    $("#sidebar").addClass("sidebar-extend");
                }
            }
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
        width: $sidebar-width;
        height: $sidebar-height;
        background: black;
        font-size: 18px;
        line-height: 18px;
        position: absolute;

        .sidebar-menu {
            width: 100%;
            ul, li {
                border: 0;
                margin: 0;
                padding: 0;
                text-decoration: none;
                color: #999999;
            }
            li {
                padding: 15px 0px;

                .icon {
                    width: $sidebar-width;
                    text-align: center;
                }

                .sidebar-menu-text {
                    text-align: left;
                    display: none;
                }
                
                &:hover {
                    width: $sidebar-extend-width;
                    background: #666666;
                    color: #FFFFFF;
                    cursor: pointer;

                    @extend %sidebar-hover;
                }
            }
        }
    }

    .sidebar-extend {
        width: $sidebar-extend-width;

        .sidebar-menu li {
            @extend %sidebar-hover;
        }
    }

    %sidebar-hover {
        .icon {
            width: $sidebar-width;
        }

        .sidebar-menu-text {
            width: calc(#{$sidebar-extend-width} - #{$sidebar-width});
            display: inline !important;
        }
    }
</style>