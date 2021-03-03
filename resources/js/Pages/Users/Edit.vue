<template>
    <layout>
        <div class="container">
            <div v-for="error in errors">
                <div class="bg-red-300 text-white">
                    {{ error }}
                </div>
            </div>
            <div>
                <form action="#" method="PACTH" class="my-5" @submit.prevent="updateUser">
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
                        <input type="password" class="" id="password" class="border-2 border-gray-50 bg-gray-100" placeholder="******" disabled>
                    </section>
                    <section class="my-10">
                        <button type="submit">Update User</button>
                    </section>
                </form>
            </div>
        </div>
    </layout>
</template>
<script>
import Layout from '@/Shared/Layout'

export default {
    components: {
        Layout,
    },
    props: ['user','errors','success'],
    data() {
        return {
            form: {
                name: this.user.name,
                email: this.user.email
            }
        }
    },
    methods: {
        updateUser() {
            this.loading = true,
            this.$inertia.patch(`/users/${this.user.id}`, this.form)
                .then(() => {
                    this.loading = false;
                })
        }
    }
}

</script>
