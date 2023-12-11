<template>
  <form @submit.prevent="createUsers()">
    <div class="centent">
      <div class="left">

        <div class="row mb-3">
          <div class="inputbox">
            <label>
              <span>Tiêu đề</span>
            </label>

            <a-input v-model:value="TieuDe"   placeholder="Tên Tài khoản" allow-clear style="width:98%;height: 45px;" />
          </div>

          <div class="inputbox">
            <label>
              <span>số ghế</span>
            </label>
            <a-input-number  v-model:value="SoGhe"  style="width: 98%;height: 45px;" />
          </div>

          <div class="inputbox">
            <label>
              <span>Hãng xe</span>
            </label>
            <a-select
                style="width: 98%;height: 45px;"
                show-search
                placeholder="Chọn hãng xe"
                :options="hangxe"
                :filter-option="filterOption"
                allow-clear
                v-model:value="fk_MaHangXe"
            >
              <!-- <a-select-option value="demo">Demo</a-select-option> -->
            </a-select>
          </div>

          <div class="inputbox">
            <label>
              <span>Địa chỉ</span>
            </label>

            <a-input v-model:value="DiaChiNhanXe" placeholder="Tên Tài khoản" allow-clear style="width:98%;height: 45px;" />
          </div>

          <div class="inputbox">
            <label>
              <span>Tình trạng</span>
            </label>

            <a-input v-model:value="TinhTrang" placeholder="Tình trạng" allow-clear style="width:98%;height: 45px;" />
          </div>

          <div class="inputbox">
            <label>
              <span>Mô tả</span>
            </label>

            <a-textarea v-model:value="MoTa" :rows="4" style="width:98%;" />
          </div>



        

        </div>

      </div>
      <div class="right">
        <div class="row mb-3">
          <div class="inputbox">
            <label>
              <span>Tên Xe</span>
            </label>

            <a-input v-model:value="TenXe" placeholder="Tên Tài khoản" allow-clear style="width:95%;height: 45px;" />
          </div>

          <div class="inputbox">
            <label>
              <span>Năm Sản Xuất</span>
            </label>

            <a-date-picker v-model:value="NamSx" style="width:95%;height: 45px;" />
          </div>

          <div class="inputbox">
            <label>
              <span>Nhiên Liệu</span>
            </label>
            <a-select
                style="width: 95%;height: 45px;"
                show-search
                placeholder="Chọn nhiên liệu"
                :options="nhienlieu"
                :filter-option="filterOption"
                allow-clear
                v-model:value="fk_MaNhienLieu"
            >
            </a-select>
          </div>

          <div class="inputbox" style="display: flex;">
            <div style="width: 50%;">
              <label>
                <span>Xã/Phường</span>
              </label>
              <a-select
                style="width: 94%;height: 45px;"
                show-search
                placeholder="Xã Phường"
                :options="xaphuong"
                :filter-option="filterOption"
                allow-clear
                v-model:value="fk_MaQuanHuyen"
            >
              </a-select>
            </div>

            <div style="width: 50%;">
              <label>
                <span>Quận/Huyện</span>
              </label>
              <a-select
                style="width: 89%;height: 45px;"
                show-search
                placeholder="Quận Huyện"
                :options="quanhuyen"
                :filter-option="filterOption"
                allow-clear
                v-model:value="fk_MaXaPhuong"
            >
              </a-select>
            </div>
          </div>

          <div class="inputbox">
            <label>
              <span>Giá thuê</span>
            </label>

            <a-input v-model:value="GiaThue" placeholder="Tên Tài khoản" allow-clear style="width:95%;height: 45px;" />
          </div>

          <div class="inputbox">

              <label>
                <span>Thêm Ảnh</span>
              </label>
              <a-upload action="/upload.do" list-type="picture-card" >
                <div>
                  
                  <div style="margin-top: 8px">Upload</div>
                </div>
              </a-upload>
          </div>

          

          <div class="inputbox" style="display: flex; justify-content: end;">
            <a-button html-type="submit" style="width: 30%;height: 50px; background-color: #F83F3F; color: white;margin-right: 33px;">Đămg tin</a-button>
          </div>

        </div>
      </div>
    </div>
</form>
</template>





<script>
import { defineComponent, ref, reactive, toRefs } from "vue";

export default defineComponent({
  setup() {

    const xe = ref([]);
    const hangxe = ref([]);
    const nhienlieu = ref([]);
    const xaphuong = ref([]);
    const quanhuyen = ref([]);
    const hinhanh = ref([]);

    const newxe = reactive({
      TenXe: "",
      SoGhe: "",
      NamSx: "",
      TinhTrang: "",
      fk_MaHangXe: [],
      fk_MaNhienLieu: [],
      fk_MaHinhAnh:2
    });

    const newtin = reactive({
      TieuDe: "",
      MoTa: "",
      GiaThue: "",
      DiaChiNhanXe: "",
      fk_MaXaPhuong: [],
      fk_MaQuanHuyen:[],
      
    });


    const getDangtin = () => {
      axios.get("http://127.0.0.1:8000/api/tin/create")
      .then((response) => {
        xe.value = response.data.xe;
        hangxe.value = response.data.hangxe;
        nhienlieu.value = response.data.nhienlieu;
        xaphuong.value = response.data.xaphuong;
        quanhuyen.value = response.data.quanhuyen;

      })
      .catch((error) => {
        console.log(error);
      });

    };

    const filterOption = (input, option) => {
      return option.label.toLowerCase().indexOf(input.toLowerCase()) >= 0;
    };

    const createUsers = () => {
      axios.post("http://127.0.0.1:8000/api/tin", newxe)
      .then((response) => {
        console.log(response)
      })
      .catch((error) => {
        console.log(error)
      });
    }

    getDangtin();

    return{
      xe,
      hangxe,
      nhienlieu,
      xaphuong,
      quanhuyen,
      filterOption,
      createUsers,
      ...toRefs(newxe),
      ...toRefs(newtin)
    }
  }
});
</script>


<style>
.centent {
  position: absolute;
  top: 80%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80%;
  background: white;
  border-radius: 10px;
  box-shadow: 0 0 10px #000;
  margin-bottom: 20px;
  height: 780px;
}

.centent .left,
.right {
  float: left;
  width: 50%;
}

.centent .left {
  /* background-color: aqua; */
  height: 200px;
}

.centent .right {
  /* background-color: rgb(102, 255, 0); */
  height: 200px;
}

.inputbox {
  margin-top: 20px;
  margin-left: 10px;
}

:where(.css-dev-only-do-not-override-185kyl0).ant-select-single:not(.ant-select-customize-input) .ant-select-selector {
  width: 100%;
  height: 45px;
  padding: 0 11px;
}

:where(.css-dev-only-do-not-override-185kyl0).ant-upload-wrapper.ant-upload-picture-card-wrapper .ant-upload.ant-upload-select {
  width: 95%;
  height: 98px;
}
</style>