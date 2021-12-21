import axios from "axios";
import Vue from "vue/dist/vue.js";

new Vue({
    el: "#app",
    data: {
        destinations: [],
        isAuthenticated: false,
        currentDestination: {
            image: "",
            name: "",
            address: "",
            description: "",
        },
    },
    beforeMount() {
        if (localStorage.token) {
            this.isAuthenticated = true;
        }

        if (!this.isAuthenticated) {
            alert("Anda belum melakukan login");
            location.href = "/login";
        }

        this.fetchDestination();
    },
    methods: {
        signOut: function () {
            localStorage.clear();
            location.href = "/";
        },
        loadDestination: function (id) {
            this.currentDestination = this.destinations[id];
        },
        fetchDestination: function () {
            axios
                .get("/api/destination")
                .then((res) => {
                    this.destinations = res.data.data;
                    console.info("data berhasil diload");
                })
                .catch((err) => console.error(err));
        },
    },
});
