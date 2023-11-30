<template>
    <div class="form-box">
        <div class="center">
            <h1>Đăng ký</h1>
            <form method="post">
                <div class="txt_field">
                    <input type="text" required>
                    <span></span>
                    <label>Họ Tên</label>
                </div>
                <div class="txt_field">
                    <input type="text" required>
                    <span></span>
                    <label>Tài Khoản</label>
                </div>
                <div class="txt_field">
                    <input type="password" required>
                    <span></span>
                    <label>Mật Khẩu</label>
                </div>
                <div class="txt_field">
                    <input type="password" required>
                    <span></span>
                    <label>Nhập lại Mật Khẩu</label>
                </div>
                <div class="wrapper">
                    <input type="radio" name="select" id="option-1" checked>
                    <input type="radio" name="select" id="option-2">
                    <label for="option-1" class="option option-1">
                        <div class="dot"></div>
                        <span>Khách</span>
                    </label>
                    <label for="option-2" class="option option-2">
                        <div class="dot"></div>
                        <span>Chủ xe</span>
                    </label>
                </div>
                <div class="btnregister" style="padding-bottom: 10%;">
                    <input type="submit" value="Đăng ký">
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
}

.wrapper{
  display: inline-flex;
  /* background: #fff; */
  height: 90px;
  width: 100%;
  align-items: center;
  justify-content: space-evenly;
  border-radius: 5px;
  padding: 20px 15px;

}
.wrapper .option{
  /* background: #fff; */
  height: 100%;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-evenly;
  margin: 0 10px;
  border-radius: 5px;
  cursor: pointer;
  padding: 0 10px;
  border: 2px solid lightgrey;
  transition: all 0.3s ease;
}
.wrapper .option .dot{
  height: 20px;
  width: 20px;
  background: #d9d9d9;
  border-radius: 50%;
  position: relative;
}
.wrapper .option .dot::before{
  position: absolute;
  content: "";
  top: 4px;
  left: 4px;
  width: 12px;
  height: 12px;
  background: #ffffff;
  border-radius: 50%;
  opacity: 0;
  transform: scale(1.5);
  transition: all 0.3s ease;
}
input[type="radio"]{
  display: none;
}
#option-1:checked:checked ~ .option-1,
#option-2:checked:checked ~ .option-2{
  background: #F83F3F;
}
#option-1:checked:checked ~ .option-1 .dot,
#option-2:checked:checked ~ .option-2 .dot{
  background: #fff;
}
#option-1:checked:checked ~ .option-1 .dot::before,
#option-2:checked:checked ~ .option-2 .dot::before{
  opacity: 1;
  transform: scale(1);
}
.wrapper .option span{
  font-size: 20px;
  color: #808080;
}
#option-1:checked:checked ~ .option-1 span,
#option-2:checked:checked ~ .option-2 span{
  color: #fff;
}
</style>