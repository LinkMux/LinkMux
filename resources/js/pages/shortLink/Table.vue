<template>
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">短網址</th>
                        <th scope="col">原網址</th>
                        <th scope="col">建立時間</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="item in shorts.data">
                        <td class="text-nowrap text-monospace">
                            <a :href="item.full_short_url" target="_blank">
                                {{ item.full_short_url.replace(/^http[s]?:\/\//, '') }}
                            </a>
                            <CopyIcon :value="item.full_short_url"/>
                        </td>
                        <td class="text-overflow text-monospace" style="max-width: 30vw">
                            <a :href="item.original_url" target="_blank">
                                {{ item.original_url }}
                            </a>
                        </td>
                        <td class="text-nowrap">{{ item.created_at }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-12 col-sm-6">
            <Pagination :pageInfo="shorts" @onChangePage="getList"/>
        </div>
    </div>

</template>

<script>
    import {mapActions, mapState} from "vuex";

    export default {
        data() {
            return {}
        },
        methods: {
            ...mapActions('shortLink', [
                'getList'
            ]),
        },
        computed: {
            ...mapState('shortLink', {
                shorts: 'list',
            })
        },
        watch: {},
        components: {},
        mounted() {
            this.getList(1);
        }
    }
</script>

<style scoped lang="scss">

</style>