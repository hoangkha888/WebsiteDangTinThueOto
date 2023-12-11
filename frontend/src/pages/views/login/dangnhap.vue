<template>
    <div class="form-box">
        <div class="center">
            <h1>Đăng nhập</h1>
            <form @submit.prevent="postuser()">
                <div class="txt_field">
                    <input type="text" v-model="username" required>
                    <span></span>
                    <label>Tài Khoản</label>
                </div>
                <div class="txt_field">
                    <input type="password" v-model="password" required>
                    <span></span>
                    <label>Mật Khẩu</label>
                </div>
                <div class="pass">Quên Mật Khẩu?</div>
                <input type="submit" value="Đăng nhập">
                <div class="signup_link">
                    Bạn chưa có tài khoản? <a v-on:click="register">Đăng ký</a>
                </div>
            </form>
        </div>
    </div>
</template>

<style>
.form-box:before {
    background-image: url("../../../assets/img/BackGround.jpeg");
    width: 100%;
    height: 100%;
    background-size: cover;
    content: "";
    position: fixed;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    z-index: -1;
}

.center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 400px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 0 10px #000;
}

.center h1 {
    text-align: center;
    padding: 20px 0;
    border-bottom: 1px solid silver;
}

.center form {
    padding: 0 40px;
    box-sizing: border-box;
}

form .txt_field {
    position: relative;
    border-bottom: 2px solid #adadad;
    margin: 30px 0;
}

.txt_field input {
    width: 100%;
    padding: 0 5px;
    height: 40px;
    font-size: 16px;
    border: none;
    background: none;
    outline: none;
}

.txt_field label {
    position: absolute;
    top: 50%;
    left: 5px;
    color: #adadad;
    transform: translateY(-50%);
    font-size: 16px;
    pointer-events: none;
    transition: .5s;
}

.txt_field span::before {
    content: '';
    position: absolute;
    top: 40px;
    left: 0;
    width: 0%;
    height: 2px;
    background: linear-gradient(to bottom, #FF4121 0%, #F83F3F  50%);
    transition: .5s;
}

.txt_field input:focus~label,
.txt_field input:valid~label {
    top: -5px;
    color: #F83F3F;
}

.txt_field input:focus~span::before,
.txt_field input:valid~span::before {
    width: 100%;
}

.pass {
    margin: -5px 0 20px 5px;
    color: #a6a6a6;
    cursor: pointer;
}

.pass:hover {
    text-decoration: underline;
}

input[type="submit"] {
    width: 100%;
    height: 50px;
    border: 1px solid;
    background: linear-gradient(to bottom, #FF4121 0%, #F83F3F  50%);
    border-radius: 25px;
    font-size: 18px;
    color: #e9f4fb;
    font-weight: 700;
    cursor: pointer;
    outline: none;
}

input[type="submit"]:hover {
    border-color: #F83F3F;
    transition: .5s;
}

.signup_link {
    margin: 30px 0;
    text-align: center;
    font-size: 16px;
    color: #666666;
}

.signup_link a {
    color: #F83F3F;
    text-decoration: none;
}

.signup_link a:hover {
    text-decoration: underline;
}</style>


<script>
import { defineComponent, ref, reactive, toRefs } from "vue";

export default defineComponent({   
    methods: {
        register(){
            this.$router.push({ name: "view-dangky" });
        }
    },
    setup(){

        const user = reactive({
            username: "",
            password: ""
        });

        const postuser = () => {
            axios.post("http://127.0.0.1:8000/api/dangnhap", user)
            .then((response) => {
                console.log(response)
            })
            .catch((error) => {
                console.log(error)
            });
        }


        return{
        ...toRefs(user),
        postuser
        }
    }


});
</script>



,
    async login() {
      // Validate username and password
      if (!this.username || !this.password) {
        alert("Vui lòng nhập đầy đủ thông tin!");
        return;
      }

      // Use axios or other libraries to send POST request to API
      const response = await axios.post("http://127.0.0.1:8000/api/dangnhap", {
        username: this.username,
        password: this.password,
      });

      // Check response status
      if (response.status === 200) {
        // Login successful, store user data and redirect to dashboard
        // ...
      } else {
        alert("Sai tài khoản hoặc mật khẩu!");
      }
    },


  },

