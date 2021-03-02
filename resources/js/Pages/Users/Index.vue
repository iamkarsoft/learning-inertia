<template>
    <layout>
        <div class="container">

            <div class="my-5">
                 <inertia-link class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg" href="/users/create">Create User </inertia-link>

            </div>
            <table class="table-auto">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Views</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <tr v-for="user in users" :key="user.id">
                        <td>{{user.id}}</td>
                        <td>{{user.name}}</td>
                        <td>{{user.email}}</td>
                        <td>
                            <inertia-link :href="`/users/${user.id}/edit`" class="">Edit</inertia-link>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </layout>
</template>
<script>
import Layout from '@/Shared/Layout';

export default {
    props: ['users','success'],
    components: {
        Layout,
    }
}

</script>
