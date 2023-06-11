import { defineStore } from "pinia";
import axios from "axios";

export const useMainStore = defineStore("main", {
  state: () => ({
    /* User */
    userName: null,
    userEmail: null,
    userAvatar: null,
    apiUrl: 'http://localhost:8000/api/',
    isFieldFocusRegistered: false,

    threadCategory: '',
    slideList: [],
    sexes: [],
    clients: [],
    history: [],
    threadList: [],
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
          await axios.get(`${this.apiUrl}slideList`)
              .then((response) => {
                  this.slideList = response.data;
              })
              .catch((error) => {
                  alert(error.message);
              });
      },

      async fetchThreadList(category, subcategory) {

          let url = `${this.apiUrl}threadList/`;

          if (!isNaN(category)) {
              url += category;
              if (!isNaN(subcategory)) {
                  url += `/${subcategory}`;
              }
          }

          try {
              const response = await axios.get(url);
              this.threadList = response.data['data'];
              this.threadCategory = response.data['category'];
          } catch (error) {
              console.error(error);

          }
      },

      async fetchSexes() {
          await axios.get(`${this.apiUrl}sexes`)
              .then((response) => {
                  this.sexes = response.data;
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
