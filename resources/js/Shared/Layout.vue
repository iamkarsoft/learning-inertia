<template>
  <main>
    <header class="w-full bg-gray-700 text-white py-5 px-4">
      <inertia-link href="/">Home</inertia-link>
      <inertia-link href="/about">About</inertia-link>
      <inertia-link href="/contact">Contact</inertia-link>
      <inertia-link href="/users">Users</inertia-link>
    </header>
    <article class="mt-10 px-4">
    <div v-if="$page.props.flash.success" class="bg-green-300 text-white">
        {{ $page.props.flash.success }}
      </div>
      <div v-if="$page.props.flash.error" class="bg-danger-300 text-white">
        {{ $page.props.flash.error }}
      </div>



      <slot />
    </article>
  </main>
</template>

<script>

</script>
