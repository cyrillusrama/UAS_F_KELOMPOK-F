import axios from "axios";
import Vue from "vue/dist/vue.js";

new Vue({
    el: "#app",
    data: {
        isAuthenticated: false,
        username: "",
        name: "",
        email: "",
        address: "",
        phone: "",
        password: "",
        errors: [],
    },

    beforeMount() {
        if (localStorage.token) {
            this.isAuthenticated = true;
        }

        if (!this.isAuthenticated) {
            alert("Anda belum melakukan login");
            location.href = "/login";
        }
    },
    mounted() {
        this.fetchUserData();
    },
    methods: {
        signOut: function () {
            localStorage.clear();
            location.href = "/";
        },

        submit: function () {
            this.resetErrors();

            const id = window.location.pathname.substr(7);
            const token = localStorage.token;

            axios
                .put(
                    "/api/users/" + id,
                    {
                        username: this.username,
                        name: this.name,
                        email: this.email,
                        address: this.address,
                        phone: this.phone,
                    },
                    {
                        headers: { Authorization: `Bearer ${token}` },
                    }
                )
                .then((res) => {
                    alert(res.data.success.message);
                    location.href = "/account";
                })
                .catch((err) => console.error(err));
        },

        fetchUserData: function () {
            const id = window.location.pathname.substr(7);

            const token = localStorage.token;

            axios
                .get("/api/users/" + id, {
                    headers: { Authorization: `Bearer ${token}` },
                })
                .then((res) => {
                    const { data } = res.data;

                    this.username = data.username;
                    this.name = data.name;
                    this.email = data.email;
                    this.address = data.address;
                    this.phone = data.phone;
                })
                .catch((err) => {
                    if (err.response.status == 401) {
                        alert("Unuthorized access");
                        location.href = "/account";
                    }

                    console.error(err);
                });
        },

        resetErrors: function () {
            this.errors = [];
        },
    },
});
