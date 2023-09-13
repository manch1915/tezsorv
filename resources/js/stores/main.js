import { defineStore } from "pinia";
import axios from "axios";

export const useMainStore = defineStore("main", {
    state: () => ({
        threadCategory: '',
        slideList: [],
        sexes: [],
        clients: [],
        notifications: [],
        threadList: [],
        member: null,
    }),
    actions: {
        async fetchSlideList() {
            try {
                const response = await axios.get(route('slideList'));
                this.slideList = response.data;
            } catch (error) {
                console.error(error);
            }
        },
        async isSlideListFetched() {
            return this.slideList && this.slideList.length > 0;
        },
        async fetchNotificationCount() {
            try {
                const response = await axios.get(route('notifications'));
                this.notifications = response.data.count;
            } catch (error) {
                console.error(error);
            }
        },

        async fetchThreadList(category, subcategory) {
            let url = route('threadList');

            if (!isNaN(category)) {
                url = route('threadList', category);
                if (!isNaN(subcategory)) {
                    url = route('threadList', category, subcategory);
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
            try {
                const response = await axios.get(route('sexes'));
                this.sexes = response.data;
            } catch (error) {
                console.error(error);
            }
        },

        async fetchMember(username) {
            this.loading = true;
            try {
                const response = await axios.get(route('member.username', username));
                this.loading = false;
                this.member = response.data;
            } catch (error) {
                console.error(error);
            }
        },
    },
});
