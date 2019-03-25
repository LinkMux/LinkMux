<template>
    <div>
        <div class="input-group">
            <input type="text" class="form-control" aria-label="Text input with segmented dropdown button" v-model="originalUrl">
            <div class="input-group-append">
                <button type="button" class="btn btn-outline-primary" @click="storeShortLink">產生短網址</button>
                <button type="button" class="btn btn-outline-primary" @click="openDetail = !openDetail">
                    <font-awesome-icon v-if="openDetail" icon="angle-up"/>
                    <font-awesome-icon v-if="!openDetail" icon="angle-down"/>
                </button>
            </div>
        </div>
        <div v-if="openDetail">
            <div class="display-3 text-center">
                敬請期待
            </div>
        </div>
    </div>
</template>

<script>
    import {mapActions} from "vuex";

    export default {
        data() {
            return {
                openDetail: false,
                originalUrl: ""
            }
        },
        methods: {
            ...mapActions('shortLink', [
                'store'
            ]),
            storeShortLink() {
                if (this.originalUrl.trim() !== "") {
                    this.store(this.originalUrl.trim());
                    this.originalUrl = "";
                }
            }
        },
        computed: {},
        watch: {},
        components: {},
        mounted() {

        }
    }
</script>

<style scoped lang="scss">

</style>