import axios from 'axios'
import App from '../app'

const Api = axios.create({
  baseURL: '/api',
  headers: { 'Content-Type': 'application/json', 'X-Requested-With': 'XMLHttpRequest' }
})

Api.interceptors.request.use(config => {
  App.$Progress.start(); // for every request start the progress
  config.headers.Authorization = 'Bearer ' + localStorage.getItem('token') || null;
  return config;
});

Api.interceptors.response.use(response => {
  App.$Progress.finish(); // finish when a response is received
  return response;
});

export default Api