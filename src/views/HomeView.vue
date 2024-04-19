<template>
  <div>
    <img
      src="https://intranet.youcode.ma/storage/users/profile/905-1697015493.jpg"
      class="w-[180px] h-[180px] sm:w-[200px] sm:h-[200px] mx-auto rounded-full shadow-md"
    />
    <h1
      class="mt-8 mb-4 text-center text-3xl sm:text-4xl uppercase font-bold dark:text-white"
    >
      {{ Userstore.user.name }}
    </h1>
    <hr class="border-1 my-4 border-gray-400 w-14 mx-auto" />
    <p class="text-center text-xl sm:text-2xl text-gray-700 dark:text-gray-300">
      {{ Userstore.user.email }}
    </p>
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
