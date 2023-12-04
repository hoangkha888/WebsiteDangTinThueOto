const paths= [
    {
        path:"/admin",
        component: () => import("../layouts/admin.vue"),
        children:[
            {
                path: "nguoidung",
                name: "admin-nguoidung",
                component: () => import("../pages/admin/nguoidung/index.vue")
            },
            {
                path: "dangtin",
                name: "admin-dangtin",
                component: () => import("../pages/admin/dangtin/index.vue")
            },
            {
                path: "pheduyet",
                name: "admin-pheduyet",
                component: () => import("../pages/admin/pheduyet/index.vue")
            },
            {
                path: "thongke",
                name: "admin-thongke",
                component: () => import("../pages/admin/thongke/index.vue")
            },
           
        ]
    },
    {
        path:"/views",
        component: () => import("../layouts/view.vue"),
        children:[
            {
                path: "dangnhap",
                name: "view-dangnhap",
                component: () => import("../pages/views/login/dangnhap.vue")
            },
            {
                path: "dangky",
                name: "view-dangky",
                component: () => import("../pages/views/register/dangky.vue")
            },
            {
                path: "trangchu",
                name: "view-trangchu",
                component: () => import("../pages/views/trangchu/trangchu.vue")
            },
            {
                path: "xe",
                name: "view-xe",
                component: () => import("../pages/views/xemchitiet/chitiet.vue")
            },

        ]
    }
];

export default paths;