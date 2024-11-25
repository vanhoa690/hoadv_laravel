import { createRouter, createWebHistory } from "vue-router";
import ClientLayout from "../layouts/ClientLayout.vue";
// import Register from "../pages/Register.vue";
// import Login from "../pages/Login.vue";
import Homepage from "../pages/Homepage.vue";
import AdminLayout from "../layouts/AdminLayout.vue";
import AdminPostList from "../pages/post/AdminPostList.vue";

const routes = [
    {
        path: "/",
        component: ClientLayout,
        children: [
            { path: "/", name: "Home", component: Homepage },
            // { path: "/register", name: "Register", component: Register },
            // { path: "/login", name: "Login", component: Login },
        ],
    },
    {
        path: "/admin",
        component: AdminLayout,
        children: [
            {
                path: "post/list",
                name: "AdminPostList",
                component: AdminPostList,
            },
        ],
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
