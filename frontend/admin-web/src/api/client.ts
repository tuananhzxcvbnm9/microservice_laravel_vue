import axios from 'axios';

export const apiClient = axios.create({
  baseURL: import.meta.env.VITE_API_GATEWAY_URL,
  withCredentials: true,
  timeout: 10000,
});

apiClient.interceptors.request.use((config) => {
  const token = sessionStorage.getItem('access_token');
  if (token) {
    config.headers.Authorization = `Bearer ${token}`;
  }
  return config;
});

apiClient.interceptors.response.use(
  (response) => response,
  async (error) => {
    if (error.response?.status === 401) {
      // keep this lean; app-level auth store will coordinate refresh flow
    }
    return Promise.reject(error);
  },
);
