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

    clients: [],
    history: [],
    cheatsheets: [],
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
      async deleteCheatSheet( delItemId) {
          this.loading = true
          try {
              const response = await axios.delete(this.apiUrl + 'cheatsheets/' + delItemId.value)
              this.cheatsheets = this.cheatsheets.filter((item) => item.id !== delItemId.value)
          } catch (error) {
              console.error(error)
          }
          this.loading = false

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
      async fetchCheatSheets() {
          await axios.get(`${this.apiUrl}cheatsheets`)
              .then((response) => {
                  this.cheatsheets = response.data;
              })
              .catch((error) => {
                  alert(error.message);
              });
      },
  },
  mutations: {

  },
});
