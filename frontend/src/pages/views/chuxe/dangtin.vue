<template>
  <div class="centent">
    <!-- <a-form :label-col="labelCol" :wrapper-col="wrapperCol" layout="horizontal"
      style="max-width: 640px; margin-bottom: 20px; margin-top: 20px;">
      <a-form-item label="Tiêu đề">
        <a-input />
      </a-form-item>
      <a-form-item label="Tên Xe">
        <a-input />
      </a-form-item>

      <a-form-item label="Số ghế">
        <a-input-number />
      </a-form-item>

      <a-form-item label="Địa chỉ">
        <a-input />
      </a-form-item>
      <a-form-item label="Xã Phường">
        <a-select>
          <a-select-option value="demo">Demo</a-select-option>
          <a-select-option value="demo">Demo</a-select-option>
          <a-select-option value="demo">Demo</a-select-option>
          <a-select-option value="demo">Demo</a-select-option>
        </a-select>
      </a-form-item>
      <a-form-item label="Quận huyện">
        <a-select>
          <a-select-option value="demo">Demo</a-select-option>
        </a-select>
      </a-form-item>

      <a-form-item label="Mô tả">
        <a-textarea :rows="4" />
      </a-form-item>
      <a-form-item label="Hình ảnh">
        <a-upload action="/upload.do" list-type="picture-card">
          <div>
            <PlusOutlined />
            <div style="margin-top: 8px">Upload</div>
          </div>
        </a-upload>
      </a-form-item>
      <a-form-item>
        <a-button>Đăng tin</a-button>
      </a-form-item>
    </a-form> -->

    <a-table :dataSource="tin" :columns="columns" />
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
      tin,
      columns
    }
  }
});
</script>


<style>
.centent {
  position: absolute;
  top: 65%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 50%;
  background: white;
  border-radius: 10px;
  box-shadow: 0 0 10px #000;
  margin-bottom: 20px;
}
</style>