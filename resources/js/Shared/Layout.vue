<template>
  <main>
    <header class="w-full bg-gray-700 text-white py-5 px-4">
      <inertia-link href="/">Home</inertia-link>
      <inertia-link href="/about">About</inertia-link>
      <inertia-link href="/contact">Contact</inertia-link>
    </header>
    <article class="mt-10 px-4">
      <slot />
    </article>
  </main>
</template>
