<template>
  <p class="text-center mb-3 dark:text-blue-300">formations</p>
  <div class="max-h-[50vh] overflow-auto sm:w-4/12 mx-auto">
    <Loader v-if="loading" />
    <div v-if="error" class="text-red-500 text-center">{{ error }}</div>
    <div v-for="(project, index) in projects" :key="project.id">
      <a target="_bl">
        <div class="bg-blue-300 mb-4 p-2 rounded-md shadow-md">
          <h2 class="font-bold text-xl">{{ ++index }} {{ project.name }}</h2>
          <p>{{ project.description }}</p>
        </div>
      </a>
    </div>
  </div>
</template>
<script>
import Loader from "../components/Loader.vue";
import api from "../services/api";
export default {
  name: "ProjectView",
  data() {
    return {
      projects: [],
      loading: false,
      error: null,
    };
  },
  components: {
    Loader,
  },
  methods: {
    fetchProjects() {
      this.loading = true;
      api
        .get("formations")
        .then((res) => {
          this.projects = res.data;
          this.loading = false;
        })
        .catch((ex) => {
          this.error = ex;
          this.loading = false;
        });
    },
  },
  mounted() {
    this.fetchProjects();
  },
};
</script>
