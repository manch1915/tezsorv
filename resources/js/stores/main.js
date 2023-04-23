import { defineStore } from "pinia";
import axios from "axios";

export const useMainStore = defineStore("main", {
  state: () => ({
    /* User */
    userName: null,
    userEmail: null,
    userAvatar: null,
    apiUrl: 'http://127.0.0.1:8000/api/',
    loading: false,
    isFieldFocusRegistered: false,

    slideList: [],
    clients: [],
    history: [],
    member: null,
  }),
  actions: {
      setUser(payload) {
          if (payload.name) {
              this.userName = payload.name;
          }
          if (payload.email) {
              this.userEmail = payload.email;
          }
          if (payload.avatar) {
              this.userAvatar = payload.avatar;
          }
      },

      async fetchSlideList() {
          this.loading = true
          await axios.get(`${this.apiUrl}slideList`)
              .then((response) => {
                  this.loading = false;
                  this.slideList = response.data;
              })
              .catch((error) => {
                  alert(error.message);
              });
      },

      async fetchClients() {
          await axios.get("https://jsonplaceholder.typicode.com/users")
              .then((response) => {
                  this.clients = response.data;
              })
              .catch((error) => {
                  alert(error.message);
              });
      },

      async fetchMember(id) {
          this.loading  = true;
          await axios.get(`${this.apiUrl}member/${id}`)
              .then((response) => {
                  this.loading = false;
                  this.member = response.data;
              })
              .catch((error) => {
                  alert(error.message);
              });
      },
  },
  mutations: {

  },
});
