import { defineStore } from "pinia";
export const useAuthStore = defineStore({
  id: "auth",
  state() {
    return {
      token:
        "eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vMC4wLjAuMC9hcGkvcmVnaXN0ZXIiLCJpYXQiOjE3MTA3OTYxNjIsIm5iZiI6MTcxMDc5NjE2MiwianRpIjoiUnJnWEJIRlJtWHRranFsMCIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.MwntK62TfPKlYZfgrjPrfpMH8LH2hIL9ZH6RZ7InOcY",
    };
  },
  actions: {
    setToken(token) {
      this.token = token;
    },
  },
});
