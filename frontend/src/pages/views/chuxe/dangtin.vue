<template>
  <div class="centent">
    <div class="left">

      <div class="row mb-3">
        <div class="inputbox">
          <label>
            <span>Tiêu đề</span>
          </label>

          <a-input placeholder="Tên Tài khoản" allow-clear style="width:98%;height: 45px;" />
        </div>

        <div class="inputbox">
          <label>
            <span>số ghế</span>
          </label>
          <a-input-number style="width: 98%;height: 45px;" />
        </div>

        <div class="inputbox">
          <label>
            <span>Hãng xe</span>
          </label>
          <a-select style="width: 98%;height: 45px;">
            <a-select-option value="demo">Demo</a-select-option>
          </a-select>
        </div>

        <div class="inputbox">
          <label>
            <span>Địa chỉ</span>
          </label>

          <a-input placeholder="Tên Tài khoản" allow-clear style="width:98%;height: 45px;" />
        </div>

        <div class="inputbox">
          <label>
            <span>Mô tả</span>
          </label>

          <a-textarea :rows="4" style="width:98%;" />
        </div>

      </div>

    </div>


    <div class="right">
      <div class="row mb-3">
        <div class="inputbox">
          <label>
            <span>Tên Xe</span>
          </label>

          <a-input placeholder="Tên Tài khoản" allow-clear style="width:100%;height: 45px;" />
        </div>

        <div class="inputbox">
          <label>
            <span>Năm Sản Xuất</span>
          </label>

          <a-date-picker style="width:100%;height: 45px;" />
        </div>

        <div class="inputbox">
          <label>
            <span>Nhiên Liệu</span>
          </label>
          <a-select style="width: 100%;height: 45px;">
            <a-select-option value="demo">Demo</a-select-option>
          </a-select>
        </div>

        <div class="inputbox" style="display: flex;">
          <div style="width: 50%;">
            <label>
              <span>Xã/Phường</span>
            </label>
            <a-select style="width: 98%;height: 45px;">
              <a-select-option value="demo">Demo</a-select-option>
            </a-select>
          </div>

          <div style="width: 50%;">
            <label>
              <span>Quận/Huyện</span>
            </label>
            <a-select style="width: 100%;height: 45px;">
              <a-select-option value="demo">Demo</a-select-option>
            </a-select>
          </div>
        </div>

        <div class="inputbox">

            <label>
              <span>Thêm Ảnh</span>
            </label>
            <a-upload action="/upload.do" list-type="picture-card" >
              <div>
                <PlusOutlined style="width: 100%;"/>
                <div style="margin-top: 8px">Upload</div>
              </div>
            </a-upload>
        </div>

        <div class="inputbox" style="display: flex; justify-content: end;">
          <a-button style="width: 30%;height: 50px; background-color: #F83F3F; color: white;">Đămg tin</a-button>
        </div>

      </div>
    </div>
  </div>
</template>





<script>
import { defineComponent, ref } from 'vue';
const componentDisabled = ref(true);
const labelCol = {
  style: {
    width: '150px',
  },
};
const wrapperCol = {
  span: 14,
};

export default defineComponent({



  setup() {

    const tin = ref([]);
    const columns = [
      {
        title: 'Tiêu đề',
        dataIndex: 'TieuDe',
        key: 'tieude',
      },
    ];

    const getDangtin = () => {
      axios.get('http://127.0.0.1:8000/api/tin')
        .then(function (response) {
          tin.value = response.data;
        })
        .catch(function (error) {
          console.log(error);
        })

    };
    getDangtin();
    return {
      tin
    }
  }
});
</script>


<style>
.centent {
  position: absolute;
  top: 43%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 80%;
  background: white;
  border-radius: 10px;
  box-shadow: 0 0 10px #000;
  margin-bottom: 20px;
  height: 600px;
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
}

:where(.css-dev-only-do-not-override-185kyl0).ant-select-single:not(.ant-select-customize-input) .ant-select-selector {
  width: 100%;
  height: 45px;
  padding: 0 11px;
}

:where(.css-dev-only-do-not-override-185kyl0).ant-upload-wrapper.ant-upload-picture-card-wrapper .ant-upload.ant-upload-select {
  width: 100%;
}
</style>