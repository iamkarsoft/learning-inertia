<template>
    <layout>
        <div class="container">
            <div v-for="error in errors">
                <div class="bg-red-300 text-white">
                    {{ error }}
                </div>
            </div>
            <div>
                <form action="/users" method="POST" class="my-5" @submit.prevent="createUser">
                    <section class="my-10">
                        <label for="" class="block">Name</label>
                        <input type="text" name="name" id="name" class="border-2 border-gray-50 bg-gray-100" v-model="form.name">
                        <div v-if="errors.name">{{ errors.name }}</div>
                    </section>
                    <section class="my-10">
                        <label for="" class="block">Email</label>
                        <input type="email" class="" id="email" class="border-2 border-gray-50 bg-gray-100" placeholder="email@yourdomain.com" v-model="form.email">
                        <div v-if="errors.email">{{ errors.email }}</div>
                    </section>
                    <section class="my-10">
                        <label for="" class="block">Password</label>
                        <input type="password" class="" id="password" class="border-2 border-gray-50 bg-gray-100" placeholder="******" v-model="form.password">
                        <div v-if="errors.password">{{ errors.password }}</div>
                    </section>
                    <section class="my-10">
                        <button type="submit">Create User</button>
                    </section>
                </form>
            </div>
        </div>
    </layout>
</template>
<script>
import Layout from '@/Shared/Layout'

export default {
    props: ['errors'],
    components: {
        Layout,
    },
    data() {
        return {
            form: {
                name: '',
                email: '',
                password: '',
            }
        }
    },
    methods: {
        createUser() {
            this.$inertia.post('/users', this.form)
                .then(() => {

                })
        }
    }
}

</script>
