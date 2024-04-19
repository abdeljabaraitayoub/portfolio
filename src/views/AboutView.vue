<template>
  <div class="text-center">
    <h2
      class="text-center text-xl sm:text-2xl font-bold uppercase dark:text-white"
    >
      Hi! I'm {{ Userstore.user.name }}
    </h2>
    <p
      class="sm:text-center text-justify my-4 sm:w-4/12 mx-auto dark:text-gray-300"
    >
      {{ Userstore.user.bio }}
    </p>
    <p class="text-center text-blue-600">#DotNetCore #WebApplication</p>
  </div>
</template>

<script>
import { useUserStore } from "../stores/UserStore";
export default {
  setup() {
    const Userstore = useUserStore();
    return { Userstore };
  },
};
</script>
