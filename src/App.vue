<template>
  <div :class="isDarkMode ? 'dark' : ''">
    <div
      class="bg-blue-100 min-h-screen sm:p-10 p-5 flex flex-col justify-center dark:bg-[#0F172A] duration-500 transition-all ease-in-out"
    >
      <button @click="toggleDarkMode" class="animate-pulse">
        <ModeToggler
          :class="isDarkMode ? 'fa-solid fa-sun' : 'fa-solid fa-moon'"
        />
      </button>
      <CardHeader />
      <RouterView />
      <CardFooter />
    </div>
  </div>
</template>
<script>
import ModeToggler from "./components/ModeToggler.vue";
import CardHeader from "./components/CardHeader.vue";
import CardFooter from "./components/CardFooter.vue";
import { useUserStore } from "./stores/UserStore";
import api from "./services/api";

export default {
  setup() {
    const Userstore = useUserStore();
    return { Userstore };
  },
  components: {
    ModeToggler,
    CardHeader,
    CardFooter,
  },
  data() {
    return {
      isDarkMode: false,
    };
  },
  methods: {
    toggleDarkMode() {
      if (this.isDarkMode) {
        localStorage.theme = "light";
        this.isDarkMode = false;
      } else {
        localStorage.theme = "dark";
        this.isDarkMode = true;
      }
    },
    fetchData() {
      api
        .get("/users/1")
        .then((res) => {
          this.Userstore.setUser(res.data);
        })
        .catch((err) => {
          console.log(err);
        });
    },
  },
  mounted() {
    if (
      localStorage.theme === "dark" ||
      (!("theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
    ) {
      this.isDarkMode = true;
    } else {
      this.isDarkMode = false;
    }
    this.fetchData();
  },
};
</script>
