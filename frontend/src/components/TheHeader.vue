<template>
    <div class="container-fuild">
        <div class="row text-white" style="padding-top: 0.3rem; border-bottom: 2px solid #ff0000;">
            <div class="col-sm-9 align-items-center justify-content-sm-start ">
                <img src="../assets/img/logo.png" alt="logo" height="53" width="240">
            </div>
            <div class="col-sm-3 d-sm-flex align-items-center justify-content-sm-end ">
                <div class="boxbtnlogin">
                    <button class="btnlogin">
                        <span style="font-size: 16px;">Đăng nhập</span>
                    </button>
                </div>
                <div class="boxbtnregister">
                    <button class="btnlogin">
                        <span style="font-size: 16px;">Đăng ký</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

</template>

<style>
    body {
        font-family: "Open Sans", sans-serif !important;
        display: block;
    }

    .col-12 {
        width: 0%;
    }

    #app {
        max-width: 100%;
        margin: 0;
        padding: 0.3rem;
        text-align: unset;
    }

    .btnlogin{
        height: 45px;
        width: 128px;
        margin-rightt: 20px;
        background-image: linear-gradient(to bottom, #FF4121 0%, #F83F3F  50%);
        margin: 10px;
        padding: 5px;
        text-align: center;
        text-transform: uppercase;
        transition: 0.5s;
        background-size: 200% auto;
        color: rgb(255, 255, 255);            
        border-radius: 10px;
        display: block;
    }    

    .btnlogin:hover {
    background-position: right center;
    color: #fff;
    text-decoration: none;
    border-color: #F8C205;
    }
         
</style>