import axios from "axios";
import Vue from "vue/dist/vue.js";

new Vue({
    el: "#app",
    data: {
        username: "",
        password: "",
        errors: [],
    },
    methods: {
        submit: function () {
            this.resetErrors();

            axios
                .post("/api/login", {
                    username: this.username,
                    password: this.password,
                })
                .then((res) => {
                    localStorage.setItem("token", res.data.token);
                    location.href = "/";
                })
                .catch((err) => {
                    if (err.response.data.errors.verified != undefined) {
                        alert(err.response.data.errors.message);
                        location.href = "/email/verify";
                        return;
                    }

                    this.errors = err.response.data.errors;

                    console.error(err);
                });
        },
        resetErrors: function () {
            this.errors = [];
        },
    },
});
