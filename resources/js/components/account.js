import axios from "axios";
import Vue from "vue/dist/vue.js";

new Vue({
    el: "#app",
    data: {
        isAuthenticated: false,
        users: [],
    },
    beforeMount() {
        if (localStorage.token) {
            this.isAuthenticated = true;
        }

        if (!this.isAuthenticated) {
            alert("Anda belum melakukan login");
            location.href = "/login";
        }

        this.fetchUsers();
    },
    methods: {
        signOut: function () {
            localStorage.clear();
            location.href = "/";
        },
        fetchUsers: function () {
            const token = localStorage.token;
            axios
                .get("/api/users", {
                    headers: { Authorization: `Bearer ${token}` },
                })
                .then((res) => {
                    this.users = res.data.data;
                })
                .catch((err) => console.log(err));
        },
        deleteUser: function (id) {
            let confirmation = confirm("Yakin?");

            if (confirmation) {
                axios
                    .delete("/api/users/" + id)
                    .then((res) => {
                        alert(res.data.message);
                        this.fetchUsers();
                    })
                    .catch((err) => {
                        console.error(err.response.data.message);
                    });
            }
        },
    },
});
