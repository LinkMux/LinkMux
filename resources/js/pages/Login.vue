<template>
    <div class="vertical-center h-100">
        <div class="form-login text-center">
            <h1>Link MUX</h1>
            <p>Welcome back</p>
            <form>
                <div class="form-group">
                    <label for="inputEmail" class="sr-only">{{ $t("text.email") }}</label>
                    <input type="email" id="inputEmail" class="form-control" v-bind:placeholder="$t('text.email')" required autofocus></input>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="sr-only">{{ $t("text.password") }}</label>
                    <input type="password" id="inputPassword" class="form-control" v-bind:placeholder="$t('text.password')" required></input>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-primary">{{ $t("text.login") }}</button>
                </div>
                <a href="#">{{ $t("text.createAccount") }}</a>
            </form> 
        </div>
    </div>
    
</template>

<script>
    export default {
        metaInfo() {
            return {
                title: this.$i18n.t('title.login'),
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
    .form-login {
        max-width: 350px;
        margin: auto;
    }
    .vertical-center {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        justify-content: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
</style>