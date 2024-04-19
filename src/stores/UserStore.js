import { defineStore } from "pinia";
export const useUserStore = defineStore({
  id: "user",
  state() {
    return {
      user: {
        name: "John Doe",
        email: "",
      },
    };
  },
  actions: {
    setUser(user) {
      this.user = user;
    },
  },
});
