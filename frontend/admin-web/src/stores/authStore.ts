import { defineStore } from 'pinia';

export const useAuthStore = defineStore('auth', {
  state: () => ({
    isAuthenticated: false,
    roles: [] as string[],
  }),
  actions: {
    async tryRestoreSession() {
      this.isAuthenticated = Boolean(sessionStorage.getItem('access_token'));
    },
  },
});
